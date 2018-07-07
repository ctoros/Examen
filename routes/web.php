<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('layouts/app');
});

////CLIENTES
////CRUD Empresa
//Route::get('/create_empresa', function () {
//    return view('isp/cliente/empresa/create');
//});
//
//Route::get('/edit_empresa', function () {
//    return view('isp/cliente/empresa/edit');
//});
//
//Route::get('/index_empresa', function () {
//    return view('isp/cliente/empresa/index');
//});
//
////CRUD Cliente
//Route::get('/create_cliente', function () {
//    return view('isp/cliente/create');
//});
//Route::get('/create', function () {
//    return view('isp/cliente/create');
//});
//
//Route::get('/edit_particular', function () {
//    return view('isp/cliente/particular/edit');
//});


//EMPLEADOS
//CRUD Receptor

////CRUD Técnico
//
//Route::resource('cliente','ClienteController');
//Route::resource('empresa','EmpresaController');
Route::resource('cliente','ClienteController');
Route::resource('receptor','AnalisisMuestraController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
