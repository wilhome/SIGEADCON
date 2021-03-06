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

/* Rutas de solo vistas */
Route::get('/', function () {
    return view('home');
})->name('home');



/* Rutas de Usuario*/

	//Peticiones GET
Route::get ('/usuario', 'ContadorController@inicio')
	->name('usuario.inicio');

Route::get ('/usuario/mostrar/perfil', 'ContadorController@mostrarperfil')
	->name('usuario.mostrarperfil');

Route::get ('/usuario/editar/perfil', 'ContadorController@editarperfil')
	->name('usuario.editarperfil');

Route::get ('usuario/crear/cliente','ContadorController@crearcliente')
	->name('usuario.crearcliente');

Route::get ('usuario/mostrar/cliente', 'ContadorController@showcliente')
	->name('usuario.mostrarcliente');

Route::get ('/usuario/editar/cliente/{cliente}', 'ContadorController@editarcliente')
	->name('usuario.editarcliente');

Route::get ('/usuario/mostrar/cliente/{cliente}', 'ContadorController@mostrarcliente')
	->name('usuario.mostrarcliente');

	//Peticiones POST
Route::post ('/usuario/validar', 'ContadorController@validar')
	->name('usuario.validar');

Route::post ('usuario/agregar/cliente', 'ContadorController@agregarcliente')
	->name('usuario.agregarcliente');

Route::post ('usuario/buscar/cliente', 'ContadorController@buscarcliente')
	->name('usuario.buscarcliente');

Route::post ('usuario/registrar/contador', 'ContadorController@registrarcontador')
	->name('usuario.registrarcontador');

	//Peticiones PUT
Route::put ('/usuario/actualizar/cliente/{cliente}', 'ContadorController@updatecliente')
	->name('usuario.actualizarcliente');

Route::put ('/usuario/actualizar/perfil/{contador}', 'ContadorController@updatecontador')
	->name('usuario.actualizarcontador');

	//Peticiones DELETE
Route::delete ('/usuario/eliminar/cliente/{cliente}', 'ContadorController@destroycliente')
	->name('usuario.destroycliente');


/* Rutas Documentos */
Route::get ('/documento/carga/documentos/{cliente}', 'DocumentosController@cargadatosdocumentos')
	->name('documentos.cargadatosdocumentos');

Route::get ('/documentos/pdf/{id_cliente}/{id_doc}','DocumentosController@pdf')
	->name('documentos.pdf');

Route::get('/documentos/cambiar/estatus/{cliente}/{id_doc}', 'DocumentosController@cambiarestatus')
	->name('documentos.cambiarestatus');

Route::get ('/documentos/editar/{cliente}/{id_doc}', 'DocumentosController@editardocumento')
	->name('documentos.editardocumento');

Route::post ('/documento/cargar/{cliente}', 'DocumentosController@guardardatosdocumentos')
	->name('documentos.guardardatosdocumentos');

Route::put ('/documento/actualizar/{cliente}/{id_doc}', 'DocumentosController@updatedocumento')
	->name('documento.actualizardocumento');

Route::delete ('documento/eliminar/{cliente}/{id_doc}', 'DocumentosController@destroydocumento')
	->name('documentos.destroydocumento');

/* Rutas de Cliente*/
Route::post('/cliente/consulta', 'ClienteController@consulta')
	->name("cliente.consulta");

/* Rutas de Admin*/

	//Peticiones GET
Route::get ('/admin', 'AdminController@inicio')
	->name('admin.inicio');

Route::get('/admin/lista/contadores', 'AdminController@listacontadores')
	->name('admin.listacontadores');

Route::get ('/admin/mostrar/contador/{contador}', 'AdminController@mostrarcontador')
	->name('admin.mostrarcontador');

Route::get ('/admin/cambiar/estatus/{contador}/{url}', 'AdminController@cambiarestatus')
	->name('admin.cambiarestatuscontador');

Route::get ('admin/crear/admin','AdminController@crearadmin')
	->name('admin.crearadmin');

Route::get ('admin/listar/admin','AdminController@listaradmin')
	->name('admin.listaradmin');

Route::get ('admin/editar/admin','AdminController@editaradmin')
	->name('admin.editardmiin');

	//Peticiones POST
Route::post ('/admin/validar', 'AdminController@validar')
	->name('admin.validar');

Route::post ('usuario/buscar/contador', 'AdminController@buscarcontador')
	->name('admin.buscarcontador');

Route::post ('admin/guardar/admin','AdminController@guardaradmin')
	->name('admin.guardaradmin');

Route::post ('admin/editar/admin','AdminController@editaradmin')
	->name('admin.editaradmin');

	//Peticiones PUT
Route::put ('/admin/actualizar/admin', 'AdminController@updateadmin')
	->name('admin.actualizaradmin');

//Peticiones DELETE
Route::delete ('/admin/eliminar/contador/{contador}', 'AdminController@destroycontador')
	->name('admin.destroycontador');

Route::delete ('/admin/eliminar/admin/{admin}', 'AdminController@destroyadmin')
	->name('admin.destroyadmin');

