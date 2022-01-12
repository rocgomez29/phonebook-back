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


# Routes Conextion Api Service
/*Route::get('autenticar/cliente', 'AunteticacionController@verificar_cliente')->middleware('autenticado');

Route::post('save/token', 'AunteticacionController@save_token')->name('save.token.api');



Route::middleware('autenticado')->group(function () {


    Route::middleware('checkroll:vendedor')->group(function () {
	    
	    # Routes Vendors
	    Route::get('/seller', 'Vendors\SellerController@index')->name('seller.index')->middleware('checkpermissions:index');
	    Route::post('seller/store', 'Vendors\SellerController@store')->name('seller.store')->middleware('checkpermissions:store');
	    Route::get('/seller/show/{seller}', 'Vendors\SellerController@show')->name('seller.show')->middleware('checkpermissions:show');
	    Route::patch('seller/edit/{seller}', 'Vendors\SellerController@update')->name('seller.update')->middleware('checkpermissions:update');
	    Route::patch('seller/delete/{seller}', 'Vendors\SellerController@destroy')->name('seller.delete')->middleware('checkpermissions:destroy');
	    Route::patch('seller/disable/{seller}', 'Vendors\SellerController@disable')->name('seller.disable')->middleware('checkpermissions:disable');
	    Route::patch('seller/enable/{seller}', 'Vendors\SellerController@enable')->name('seller.enable')->middleware('checkpermissions:enable');

    });

    # Routes Autentication Users

	Route::group(['prefix' => 'auth'], function () {

	    Route::post('login', 'Authentication\AuthController@login');
	    Route::post('signup', 'Authentication\AuthController@signUp'); 

			Route::group(['middleware' => 'auth:api'], function() {

			    Route::get('logout', 'Authentication\AuthController@logout');

			});
	});
     
    Route::post('password/forgot-password', 'Authentication\AuthController@forgotPassword');
    Route::post('password/reset', 'Authentication\AuthController@passwordReset');
    Route::post('log/out', 'Authentication\AuthController@logout');
    Route::get('auth/users', 'Authentication\AuthController@users');

    Route::middleware('checkroll:administrador')->group(function () {
        
        # Routes Managing roles and permissions

        # Create un role
        Route::post('create/roll', 'Authentication\RolesController@create_roll');
        # Create permission
        Route::post('create/permissions', 'Authentication\RolesController@create_permissions');
        # Assign a permission to a role
        Route::post('role/has/permissions', 'Authentication\RolesController@roles_has_permissions');
        # Remove a permission to a role
        Route::post('role/has/permissions/revoke', 'Authentication\RolesController@remove_permissions_has_roles');
        # Assign a permission to a user
        Route::post('role/assign/permission/{user_id}', 'Authentication\RolesController@assign_permission');
        # Remove a permision to a user
        Route::post('role/revoke/permission/{user_id}', 'Authentication\RolesController@revoke_permission');
        # Assign a role to a user
        Route::post('role/assign/roll/{user_id}', 'Authentication\RolesController@assign_roll_user');
        # Remove a role to a user
        Route::post('role/revoke/roll/{user_id}', 'Authentication\RolesController@revoke_roll_user');
        # Show list a user permissions
        Route::post('user/permission/{user_id}', 'Authentication\RolesController@user_has_permission');
        # Show list of roles of a user
        Route::post('user/roles/{user_id}', 'Authentication\RolesController@user_has_roles');

        # Routes Categories
	    Route::get('/categories', 'Inventory\CategoryController@index')->name('category.index');
	    Route::get('/categories/{category}', 'Inventory\CategoryController@show')->name('category.show');
	    Route::post('/categories/store', 'Inventory\CategoryController@store')->name('category.store');
	    Route::patch('/categories/edit/{category}', 'Inventory\CategoryController@update')->name('category.update');
	    Route::patch('/categories/delete/{category}', 'Inventory\CategoryController@destroy')->name('category.delete');
	    Route::get('/categories-higher', 'Inventory\CategoryController@index_higher')->name('category.index_higher');
	    Route::get('/subcategories/{category}', 'Inventory\CategoryController@subcategories')->name('category.subcategories');
	    Route::post('/subcategories/{category}', 'Inventory\CategoryController@store_subcategories')->name('category.store_subcategories');

	    # Routes Clients
	    Route::get('/client', 'Client\ClientController@index')->name('cli.index'); 
	    Route::post('client/store', 'Client\ClientController@store')->name('cli.store');
	    Route::get('/client/show/{client}', 'Client\ClientController@show')->name('cli.show');
	    Route::patch('client/edit/{client}', 'Client\ClientController@update')->name('cli.update');
	    Route::patch('client/delete/{client}', 'Client\ClientController@destroy')->name('cli.delete'); 

    });

});*/




 









    


    
    





