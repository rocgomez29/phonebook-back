<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validate;
use Illuminate\Support\Facades\DB;
use App\Models\Contact;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class ContactsController extends Controller
{
    public function list()
    {
    	$contacts = Contact::all()->toArray();

    	return response()->json($contacts);
    }

    public function store(Request $request)
    {

    	$rules = [
    		
    		'name' => 'required|max:255|min:5',
            'mobile_phone' => 'required|max:255|min:11|unique:contacts',
            'home_phone' => 'unique:contacts',
            'work_phone' => 'unique:contacts',
            'email' => 'unique:contacts|email',
        ];

        $request->validate($rules);        

        $contact = Contact::create($request->all());

        return response()->json([
        	'contact' => $contact,
        	'message' => 'Contacto creado exitosamente!'
        ],201);        
    }

    public function update(Request $request, $contact)
    {

    	$rules = [    		
    		'name' => [
		        'required',
		        Rule::unique('contacts')->ignore($contact),
		    ],
    		'mobile_phone' => [
		        'required',
		        Rule::unique('contacts')->ignore($contact),
		    ],
            'home_phone' => Rule::unique('contacts')->ignore($contact),
            'work_phone' => Rule::unique('contacts')->ignore($contact),
		    'email' => Rule::unique('contacts')->ignore($contact),
        ];

        $request->validate($rules);

        $contact = Contact::findOrFail($contact);

        $contact->update($request->toArray());
        
        return response()->json([
            'contact' => $contact,
            'message' => 'Contacto actualizado exitosamente!'
        ],201);
    }

    public function destroy(Contact $contact)
    {
        $contact->delete();

        return response()->json([
            'message' => 'Contacto eliminado exitosamente!'
        ],200);
    }
}
