<?php

use Illuminate\Http\Request;

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

//Agregamos nuestra ruta al controller de PurchaseTypes
Route::resource('purchase_types','PurchaseTypeController'); 

//Agregamos nuestra ruta al controller de Customers
Route::resource('customers','CustomerController');

//Agregamos nuestra ruta al controller de Reciclators
Route::resource('reciclators','ReciclatorController');

//Agregamos nuestra ruta al controller de Purchases
Route::resource('purchases','PurchaseController'); 

//Agregamos nuestra ruta al controller de DocumentType
Route::resource('document_types','DocumentTypeController'); 

//Agregamos nuestra ruta al controller de Users
Route::resource('users','UserController'); 