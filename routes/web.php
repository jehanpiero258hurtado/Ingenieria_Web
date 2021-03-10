<?php

use Illuminate\Support\Facades\Route;

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
Route::get('Home','Web\MenuController@index');
Route::get('Servicio','Web\ServicioController@index');
Route::get('Obra','Web\ObraController@index');
Route::get('Personal','Web\PersonalController@index');
Route::get('Deudas','Web\FormDeudasController@index');
Route::get('Pagar','Web\FormPagarController@index');
Route::get('Pago','Web\ProPagoController@index');
Route::get('Iniciar_Sesion','Web\LoginController@index');
Route::get('Estatuto','Web\EstatutoController@index');

//Adminsitrador
Route::get('Administrador','Web\Administrador\AdministradorController@index');
Route::get('Info','Web\Administrador\InfoController@index');
Route::resource('Pago','Web\Administrador\PagoController');
//Route::get('Registrar_Propiedad','Web\Administrador\RegistrarPropiedadController@index');
//Route::get('Registrar_Usuario','Web\Administrador\RegistrarUsuarioController@index');
Route::resource('Tipo_Documento','TipoDocumentoController');
//Route::get('Tipo_Pago','Web\Administrador\Tipo_PagoController@index');
Route::resource('Tipo_Propiedad','TipoPropiedadController');

//Route::get('/', function () {
  //  return view('welcome');
//});

Route::resource("Propiedad", "PropiedadController");
Route::resource("Usuario", "UsuarioController");
Route::resource("Tipo_Pago", "TipoPagoController");
Route::resource("Pago", "PagoController");