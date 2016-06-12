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
Route::resource('controller','Controller');

//Libro
Route::get('libro/buscar','LibroController@buscar');
Route::get('libro/editar','LibroController@editar');
Route::get('libro/insertar','LibroController@insertar');
Route::get('libro/listar','LibroController@listar');
Route::get('libro/eliminar/{id}','LibroController@eliminar');
Route::get('libro/prestarDocente','LibroController@prestarDocente');
Route::get('libro/prestarEstudiante','LibroController@prestarEstudiante');
Route::get('libro/generarReporteLibro','LibroController@generarReporte');


Route::resource('libro','LibroController',['only'=> ['create','store','edit','update','destroy']]);

Route::get('libro/prestarDocente/{id}','PrestamoLibroDocenteController@mostrar');
Route::get('libro/buscarPrestamosDocente','PrestamoLibroDocenteController@buscarPrestamos');
Route::get('libro/buscarPrestamosDocenteTerminados','PrestamoLibroDocenteController@buscarPrestamosTerminados');
Route::get('libro/listarPrestamosDocente','PrestamoLibroDocenteController@listarPrestamos');
Route::get('libro/listarPrestamosDocenteTerminados','PrestamoLibroDocenteController@listarPrestamosTerminados');
Route::get('libro/eliminarPrestamoDocente/{id}','PrestamoLibroDocenteController@eliminarPrestamo');
Route::resource('PrestamoLibroDocente','PrestamoLibroDocenteController',['only'=> ['create','edit','update','destroy','store']]);


Route::get('libro/prestarEstudiante/{id}','PrestamoLibroEstudianteController@mostrar');
Route::get('libro/buscarPrestamosEstudiante','PrestamoLibroEstudianteController@buscarPrestamos');
Route::get('libro/buscarPrestamosEstudianteTerminados','PrestamoLibroEstudianteController@buscarPrestamosTerminados');
Route::get('libro/listarPrestamosEstudiante','PrestamoLibroEstudianteController@listarPrestamos');
Route::get('libro/listarPrestamosEstudianteTerminados','PrestamoLibroEstudianteController@listarPrestamosTerminados');
Route::get('libro/eliminarPrestamoEstudiante/{id}','PrestamoLibroEstudianteController@eliminarPrestamo');
Route::resource('PrestamoLibroEstudiante','PrestamoLibroEstudianteController',['only'=> ['create','edit','update','destroy','store']]);

Route::get('libro/listarPrestamosDocenteTerminados','PrestamoLibroDocenteController@listarPrestamosTerminados');
Route::get('libro/generarReporteDocente','PrestamoLibroDocenteController@generarReporte');
Route::get('libro/generarReporteDocenteTerminados','PrestamoLibroDocenteController@generarReporteTerminados');

Route::get('libro/listarPrestamosEstudiantesTerminados','PrestamoLibroEstudianteController@listarPrestamosTerminados');
Route::get('libro/generarReporteEstudiante','PrestamoLibroEstudianteController@generarReporte');
Route::get('libro/generarReporteEstudianteTerminados','PrestamoLibroEstudianteController@generarReporteTerminados');

//Audiovisual
Route::get('audiovisual/buscar','AudiovisualController@buscar');
Route::get('audiovisual/editar','AudiovisualController@editar');
Route::get('audiovisual/insertar','AudiovisualController@insertar');
Route::get('audiovisual/listar','AudiovisualController@listar');
Route::get('audiovisual/generarReporteAudiovisuales','AudiovisualController@generarReporte');
Route::get('audiovisual/eliminar/{id}','AudiovisualController@eliminar');

Route::resource('audiovisual','AudiovisualController',['only'=> ['create','store','edit','update','destroy']]);

Route::get('audiovisual/prestar','PrestamoAudiovisualController@prestar');
Route::get('audiovisual/buscarPrestamos','PrestamoAudiovisualController@buscarPrestamos');
Route::get('audiovisual/buscarPrestamosTerminados','PrestamoAudiovisualController@buscarPrestamosTerminados');
Route::get('audiovisual/listarPrestamos','PrestamoAudiovisualController@listarPrestamos');
Route::get('audiovisual/listarPrestamosTerminados','PrestamoAudiovisualController@listarPrestamosTerminados');
Route::get('audiovisual/generarReporte','PrestamoAudiovisualController@generarReporte');

Route::get('audiovisual/generarReporteTerminados','PrestamoAudiovisualController@generarReporteTerminados');
Route::get('audiovisual/eliminarPrestamo/{id}','PrestamoAudiovisualController@eliminarPrestamo');
Route::resource('prestamoAudiovisual','PrestamoAudiovisualController');

//MaterialDidactico
Route::get('materialDidactico/buscar','MaterialDidacticoController@buscar');
Route::get('materialDidactico/buscarPrestamos','PrestamoMaterialDidacticoController@buscarPrestamos');
Route::get('materialDidactico/buscarPrestamosTerminados','PrestamoMaterialDidacticoController@buscarPrestamosTerminados');
Route::get('materialDidactico/editar','MaterialDidacticoController@editar');
Route::get('materialDidactico/insertar','MaterialDidacticoController@insertar');
Route::get('materialDidactico/listar','MaterialDidacticoController@listar');
Route::get('materialDidactico/listarPrestamos','PrestamoMaterialDidacticoController@listarPrestamos');
Route::get('materialDidactico/listarPrestamosTerminados','PrestamoMaterialDidacticoController@listarPrestamosTerminados');
Route::get('materialDidactico/prestar','MaterialDidacticoController@prestar');
Route::get('materialDidactico/storePrestamo/{id}', 'MaterialDidacticoController@storePrestamo');
Route::get('materialDidactico/eliminar/{id}', 'MaterialDidacticoController@eliminar');
Route::get('materialDidactico/reporteMateriales','MaterialDidacticoController@generarReporte');
Route::get('materialDidactico/reportePrestamos','PrestamoMaterialDidacticoController@generarReporte');
Route::get('materialDidactico/reportePrestamosTerminados','PrestamoMaterialDidacticoController@generarReporteTerminados');
Route::resource('materialDidactico', 'MaterialDidacticoController');
Route::resource('prestamoMaterialDidactico', 'PrestamoMaterialDidacticoController');
Route::get('prestamosMaterialDidactico/terminarPrestamo/{id}', 'PrestamoMaterialDidacticoController@terminarPrestamo');

//SalaAudiovisuales
Route::get('salaAudiovisuales/buscarPrestamos','SalaAudiovisualesController@buscarPrestamos');
Route::get('salaAudiovisuales/buscarPrestamosTerminados','SalaAudiovisualesController@buscarPrestamosTerminados');
Route::get('salaAudiovisuales/listar','SalaAudiovisualesController@listar');
Route::get('salaAudiovisuales/listarPrestamosTerminados','SalaAudiovisualesController@listarPrestamosTerminados');
Route::get('salaAudiovisuales/prestar','SalaAudiovisualesController@prestar');
Route::get('salaAudiovisuales/terminarPrestamo/{id}','SalaAudiovisualesController@terminarPrestamo');
Route::get('salaAudiovisuales/reportePrestamos','SalaAudiovisualesController@generarReporte');
Route::get('SalaAudiovisuales/reportePrestamosTerminados','SalaAudiovisualesController@generarReporteTerminados');
Route::resource('salaAudiovisuales','SalaAudiovisualesController');

//ServicioInternet
Route::get('servicioInternet/buscarPrestamos','ServicioInternetController@buscarPrestamos');
Route::get('servicioInternet/buscarPrestamosTerminados','ServicioInternetController@buscarPrestamosTerminados');
Route::get('servicioInternet/listar','ServicioInternetController@listar');
Route::get('servicioInternet/listarPrestamosTerminados','ServicioInternetController@listarPrestamosTerminados');
Route::get('servicioInternet/prestar','ServicioInternetController@prestar');
Route::get('servicioInternet/terminarPrestamo/{id}', 'ServicioInternetController@terminarPrestamo');
Route::get('servicioInternet/reportePrestamos','ServicioInternetController@generarReporte');
Route::get('servicioInternet/reportePrestamosTerminados','ServicioInternetController@generarReporteTerminados');
Route::resource('servicioInternet', 'ServicioInternetController');

Route::auth();

Route::get('/home', 'HomeController@index');
