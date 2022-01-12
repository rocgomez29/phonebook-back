<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

# Routes Contacts
Route::get('/contacts', 'ContactsController@list')->name('contact.list'); 
Route::post('contact/store', 'ContactsController@store')->name('contact.store');
Route::put('contact/edit/{contact}', 'ContactsController@update')->name('contact.update');
Route::delete('contact/delete/{contact}', 'ContactsController@destroy')->name('contact.delete'); 






 









    


    
    





