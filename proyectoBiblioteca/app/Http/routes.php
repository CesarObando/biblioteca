<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/','Controller@index');

//Libro


Route::get('libro/buscar','LibroController@buscar');
Route::get('libro/buscarPrestamosDocente','LibroController@buscarPrestamosDocente');
Route::get('libro/buscarPrestamosEstudiante','LibroController@buscarPrestamosEstudiante');
Route::get('libro/editar','LibroController@editar');
Route::get('libro/insertar','LibroController@insertar');
Route::get('libro/listar','LibroController@listar');
Route::get('libro/listarPrestamosDocente','LibroController@listarPrestamosDocente');
Route::get('libro/listarPrestamosEstudiante','LibroController@listarPrestamosEstudiante');
Route::get('libro/prestarDocente','LibroController@prestarDocente');
Route::get('libro/prestarEstudiante','LibroController@prestarEstudiante');

Route::resource('libro','LibroController');

//Audiovisual
Route::get('audiovisual/buscar','AudiovisualController@buscar');
Route::get('audiovisual/editar','AudiovisualController@editar');
Route::get('audiovisual/insertar','AudiovisualController@insertar');
Route::get('audiovisual/listar','AudiovisualController@listar');
Route::get('audiovisual/vistaPrestar/{id}','AudiovisualController@vistaPrestar');
Route::get('audiovisual/eliminar/{id}','AudiovisualController@eliminar');

Route::resource('audiovisual','AudiovisualController');

Route::get('audiovisual/prestar','PrestamoAudiovisualController@prestar');
Route::get('audiovisual/buscarPrestamos','PrestamoAudiovisualController@buscarPrestamos');
Route::get('audiovisual/listarPrestamos','PrestamoAudiovisualController@listarPrestamos');
Route::resource('prestamoAudiovisual','PrestamoAudiovisualController');

//MaterialDidactico
Route::get('materialDidactico/buscar','MaterialDidacticoController@buscar');
Route::get('materialDidactico/buscarPrestamos','MaterialDidacticoController@buscarPrestamos');
Route::get('materialDidactico/editar','MaterialDidacticoController@editar');
Route::get('materialDidactico/insertar','MaterialDidacticoController@insertar');
Route::get('materialDidactico/listar','MaterialDidacticoController@listar');
Route::get('materialDidactico/listarPrestamos','MaterialDidacticoController@listarPrestamos');
Route::get('materialDidactico/prestar','MaterialDidacticoController@prestar');
Route::get('materialDidactico/storePrestamo/{id}', 'MaterialDidacticoController@storePrestamo');
Route::resource('materialDidactico', 'MaterialDidacticoController');

Route::resource('prestamoMaterialDidactico', 'PrestamoMaterialDidacticoController');

//SalaAudiovisuales
Route::get('salaAudiovisuales/buscarPrestamos','SalaAudiovisualesController@buscarPrestamos');
Route::get('salaAudiovisuales/listar','SalaAudiovisualesController@listar');
Route::get('salaAudiovisuales/prestar','SalaAudiovisualesController@prestar');

//ServicioInternet
Route::get('servicioInternet/buscarPrestamos','ServicioInternetController@buscarPrestamos');
Route::get('servicioInternet/listar','ServicioInternetController@listar');
Route::get('servicioInternet/prestar','ServicioInternetController@prestar');
