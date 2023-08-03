<?php

use Illuminate\Support\Facades\Route;
use App\Mail\RepositorioMail;

/*
*/

Route::get('/', function () {
    return view('frontend.index');
})->name('index');

Route::get('/administrador', 'HomeController@index')->name('home');

// frontend


Route::get('/formatos', function () {
    return view('frontend.format');
})->name('format');
Route::get('/formatos#proyectos', function () {
    return view('frontend.format');
})->name('proyectos');
Route::get('/formatos#informes', function () {
    return view('frontend.format');
})->name('informes');
Route::get('/formatos#posgrado', function () {
    return view('frontend.format');
})->name('posgrado');


// Otras rutas...

Route::get('/estado-tramite', function () {
    return view('frontend.state');
})->name('state');

Route::get('/sobre-nosotros', function () {
    return view('frontend.about-us');
})->name('about-us');

Route::get('/contacto', function () {
    return view('frontend.contact');
})->name('contact');

$controller_path = 'App\Http\Controllers';

//formulario

Route::get('/formulario', $controller_path . '\FormularioController@index')->name('form');
Route::post('/formulario/enviado', $controller_path . '\FormularioController@store')->name('formulario.store');

//tramites
Route::get('/tramites_pendientes', $controller_path . '\TramiteController@index')->name('admin.tramites_pendientes');



Route::post('/completar_datos', $controller_path . '\CompletarController@completar')->name('admin.completar_datos');
Route::post('/detalles_tramite', $controller_path . '\CompletarController@info_tramite')->name('admin.detalles_tramite');


Route::post('/actualizar_datos', $controller_path . '\ActualizarController@actualizar')->name('admin.actualizar_datos');


Route::get('/estado', $controller_path . '\TramiteController@estado_tramite')->name('estado_tramite');

///-------------------------------------------------

/*Email rutas*/
Route::post('/completar_datos/enviar-correo', [EmailController::class, 'enviarCorreo'])->name('enviar.correo');


Route::get('/ejecutar-funcion', [MiControlador::class, 'miFuncion'])->name('ejecutar.funcion');


/**
 * Admin routes
 */
Route::group(
    ['prefix' => 'admin'],
    function () {
        Route::get('/', 'Backend\DashboardController@index')->name('admin.dashboard');
        Route::resource('roles', 'Backend\RolesController', ['names' => 'admin.roles']);
        Route::resource('users', 'Backend\UsersController', ['names' => 'admin.users']);
        Route::resource('admins', 'Backend\AdminsController', ['names' => 'admin.admins']);

        // Login Routes
        Route::get('/login', 'Backend\Auth\LoginController@showLoginForm')->name('admin.login');
        Route::post('/login/submit', 'Backend\Auth\LoginController@login')->name('admin.login.submit');

        // Logout Routes
        Route::post('/logout/submit', 'Backend\Auth\LoginController@logout')->name('admin.logout.submit');

        // Forget Password Routes
        Route::get('/password/reset', 'Backend\Auth\ForgetPasswordController@showLinkRequestForm')->name('admin.password.request');
        Route::post('/password/reset/submit', 'Backend\Auth\ForgetPasswordController@reset')->name('admin.password.update');

        //Rutas de Tramites y procesos
        Route::get('/generar_constancia', 'ConstanciasController@listaConstancias')->name('admin.generar_constancia');
        
        Route::get('/generar_constancia/{formulario}', 'ConstanciasController@generarpdf')->name('admin.generar_constancia_pdf');

        Route::get('/constancias_realizadas', 'ConstanciasController@ver')->name('admin.constancias_realizadas');
        

        //Detalles
        
    }
);
