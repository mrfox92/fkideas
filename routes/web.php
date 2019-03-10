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




Auth::routes(['verify' => true]);


Route::get('/', 'Web\HomeController@index')->name('inicio');
Route::get('profile', 'Admin\ProfileController@index')->name('perfil')->middleware('verified');

// Authentication Routes...
$this->get('login', 'Auth\LoginController@showLoginForm')->name('login');
$this->post('login', 'Auth\LoginController@login');
$this->post('logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes...
$this->get('registro', 'Auth\RegisterController@showRegistrationForm')->name('registro');
$this->post('register', 'Auth\RegisterController@register');

// Password Reset Routes...
$this->get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
$this->post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
$this->get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
$this->post('password/reset', 'Auth\ResetPasswordController@reset')->name('password.update');

// Email Verification Routes...
$this->get('email/verify', 'Auth\VerificationController@show')->name('verification.notice');
$this->get('email/verify/{id}', 'Auth\VerificationController@verify')->name('verification.verify');
$this->get('email/resend', 'Auth\VerificationController@resend')->name('verification.resend');


//Web public routes
Route::get('servicio-muebleria-retail', 'Web\MuebleriaRetailController@index')->name('muebleria_retail');
Route::get('servicio-aseo-industrial', 'Web\AseoIndustrialController@index')->name('aseo_industrial');
Route::get('servicio-remodelacion-y-construccion', 'Web\RemodelacionConstruccionController@index')
    ->name('remodelacion_construccion');
Route::get('nosotros', 'Web\NosotrosController@index')->name('nosotros');
Route::post('formSubmit', 'Web\ContactoController@formSubmit');

/* routes resources, middleware auth group and permissions*/

Route::middleware(['auth'])->group(function(){
    Route::resource('usuarios', 'Admin\UserController')->only('index')
        ->middleware('permission:users.index');
    Route::resource('roles', 'Admin\RoleController')->only('index')
        ->middleware('permission:roles.index');
    Route::resource('gestion-informacion-empresa', 'Admi\InfoController')->only('index')
        ->middleware('permission:info.index');
    Route::resource('gestion-aseo-industrial', 'Admin\AseoIndustrialController')->only('index')
        ->middleware('permission:aseo_industrial.index');
    Route::resource('gestion-muebleria-retail', 'Admin\RetailController')->only('index')->middleware('permission:retail.index');
    Route::resource('gestion-remodelacion-construccion', 'Admin\RemodelacionConstruccionController')
        ->only('index')
        ->middleware('permission:remodelacion_construccion.index');                
});

/* routes permisssions administration panel */

Route::middleware(['auth'])->group(function(){
    //roles
    Route::get('roles', 'Admin\RoleController@index')->name('roles.index')
        ->middleware('permission:roles.index');
    Route::get('roles/create', 'Admin\RoleController@create')->name('roles.create')
        ->middleware('permission:roles.create');
    Route::post('roles/store', 'Admin\RoleController@store')->name('roles.store')
        ->middleware('permission:roles.create');
    Route::get('roles/{role}', 'Admin\RoleController@show')->name('roles.show')
        ->middleware('permission:roles.show');
    Route::get('roles/{role}/edit', 'Admin\RoleController@edit')->name('roles.edit')
        ->middleware('permission:roles.edit');
    Route::put('roles/{role}', 'Admin\RoleController@update')->name('roles.update')
        ->middleware('permission:roles.edit');
    Route::delete('roles/{role}', 'Admin\RoleController@destroy')->name('roles.destroy')
        ->middleware('permission:roles.destroy');
    
    //users
    Route::get('usuarios', 'Admin\UserController@index')->name('users.index')
        ->middleware('permission:users.index');
    Route::get('usuarios/{user}', 'Admin\UserController@show')->name('users.show')
        ->middleware('permission:users.show');
    Route::get('usuarios/{user}/edit', 'Admin\UserController@edit')->name('users.edit')
        ->middleware('permission:users.edit');
    Route::put('usuarios/{user}', 'Admin\UserController@update')->name('users.update')
        ->middleware('permission:users.edit');
    Route::delete('usuarios/{user}', 'Admin\UserController@destroy')->name('users.destroy')
        ->middleware('permission:users.destroy');
    //Retail
    Route::get('gestion-muebleria-retail', 'Admin\RetailController@index')->name('retail.index')
        ->middleware('permission:retail.index');       
    Route::get('gestion-muebleria-retail/create', 'Admin\RetailController@create')->name('retail.create')
        ->middleware('permission:retail.create');
    Route::post('gestion-muebleria-retail/store', 'Admin\RetailController@store')->name('retail.store')
        ->middleware('permission:retail.create'); 
    Route::get('gestion-muebleria-retail/{retail}', 'Admin\RetailController@show')->name('retail.show')
        ->middleware('permission:retail.show');
    Route::get('gestion-muebleria-retail/{retail}/edit', 'Admin\RetailController@edit')->name('retail.edit')
        ->middleware('permission:retail.edit');
    Route::put('gestion-muebleria-retail/{retail}', 'Admin\RetailController@update')->name('retail.update')
        ->middleware('permission:retail.edit');
    Route::delete('gestion-muebleria-retail/{retail}', 'Admin\RetailController@destroy')->name('retail.destroy')
        ->middleware('permission:retail.destroy');

    /* Retail Images */
    Route::get('gestion-muebleria-retail/galeria/{project}', 'Admin\RetailImageController@show')->name('retail.images.index')
        ->middleware('permission:retail.images.index');
    Route::get('gestion-muebleria-retail/galeria/{project}/create', 'Admin\RetailImageController@create')->name('retail.images.create')
    ->middleware('permission:retail.images.create');
    Route::post('gestion-muebleria-retail/galeria/store', 'Admin\RetailImageController@store')->name('retail.images.store')
        ->middleware('permission:retail.images.create');
    Route::get('gestion-muebleria-retail/galeria/{project}/edit/{image}', 'Admin\RetailImageController@edit')->name('retail.images.edit')
        ->middleware('permission:retail.images.edit');
    Route::put('gestion-muebleria-retail/galeria/{image}', 'Admin\RetailImageController@update')->name('retail.images.update')
        ->middleware('permission:retail.images.edit');
    Route::delete('gestion-muebleria-retail/galeria/{image}', 'Admin\RetailImageController@destroy')->name('retail.images.destroy')
        ->middleware('permission:retail.images.destroy');

    //info
    Route::get('gestion-informacion-empresa', 'Admin\InfoController@index')->name('info.index')
        ->middleware('permission:info.index');
    Route::get('gestion-informacion-empresa/{info}', 'Admin\InfoController@show')->name('info.show')
        ->middleware('permission:info.show');
    Route::get('gestion-informacion-empresa/{info}/edit', 'Admin\InfoController@edit')->name('info.edit')
        ->middleware('permission:info.edit');
    Route::put('gestion-informacion-empresa/{info}', 'Admin\InfoController@update')->name('info.update')
        ->middleware('permission:info.edit');
    
    //Aseo industrial
    Route::get('gestion-aseo-industrial', 'Admin\AseoIndustrialController@index')->name('aseo_industrial.index')
        ->middleware('permission:aseo_industrial.index');
    Route::get('gestion-aseo-industrial/create', 'Admin\AseoIndustrialController@create')->name('aseo_industrial.create')
        ->middleware('permission:aseo_industrial.create');
    Route::post('gestion-aseo-industrial/store', 'Admin\AseoIndustrialController@store')->name('aseo_industrial.store')
        ->middleware('permission:aseo_industrial.create');
    Route::get('gestion-aseo-industrial/{aseo}', 'Admin\AseoIndustrialController@show')->name('aseo_industrial.show')
        ->middleware('permission:aseo_industrial.show');
    Route::get('gestion-aseo-industrial/{aseo}/edit', 'Admin\AseoIndustrialController@edit')->name('aseo_industrial.edit')
        ->middleware('permission:aseo_industrial.edit');
    Route::put('gestion-aseo-industrial/{aseo}', 'Admin\AseoIndustrialController@update')->name('aseo_industrial.update')
        ->middleware('permission:aseo_industrial.edit');
    Route::delete('gestion-aseo-industrial/{aseo}', 'Admin\AseoIndustrialController@destroy')->name('aseo_industrial.destroy')
        ->middleware('permission:aseo_industrial.destroy');

    //remodelaciones y construcciones
    Route::get('gestion-remodelacion-construccion', 'Admin\RemodelacionConstruccionController@index')->name('remodelacion_construccion.index')
        ->middleware('permission:remodelacion_construccion.index');
    Route::get('gestion-remodelacion-construccion/create', 'Admin\RemodelacionConstruccionController@create')->name('remodelacion_construccion.create')
        ->middleware('permission:remodelacion_construccion.create');
    Route::post('gestion-remodelacion-construccion/store', 'Admin\RemodelacionConstruccionController@store')->name('remodelacion_construccion.store')
        ->middleware('permission:remodelacion_construccion.create');
    Route::get('gestion-remodelacion-construccion/{remodelacion}', 'Admin\RemodelacionConstruccionController@show')->name('remodelacion_construccion.show')
        ->middleware('permission:remodelacion_construccion.show');
    Route::get('gestion-remodelacion-construccion/{remodelacion}/edit', 'Admin\RemodelacionConstruccionController@edit')->name('remodelacion_construccion.edit')
        ->middleware('permission:remodelacion_construccion.edit');
    Route::put('gestion-remodelacion-construccion/{remodelacion}', 'Admin\RemodelacionConstruccionController@update')->name('remodelacion_construccion.update')
        ->middleware('permission:remodelacion_construccion.edit');
    Route::delete('gestion-remodelacion-construccion/{remodelacion}', 'Admin\RemodelacionConstruccionController@destroy')->name('remodelacion_construccion.destroy')
        ->middleware('permission:remodelacion_construccion.destroy');
    
    /* Remodelacion y construccion Images */
    Route::get('gestion-remodelacion-construccion/galeria/{project}', 'Admin\RemodelacionImagesController@show')->name('remodelacion_construccion.images.index')
        ->middleware('permission:remodelacion_construccion.images.index');
    Route::get('gestion-remodelacion-construccion/galeria/{project}/create', 'Admin\RemodelacionImagesController@create')->name('remodelacion_construccion.images.create')
    ->middleware('permission:remodelacion_construccion.images.create');
    Route::post('gestion-remodelacion-construccion/galeria/store', 'Admin\RemodelacionImagesController@store')->name('remodelacion_construccion.images.store')
        ->middleware('permission:remodelacion_construccion.images.create');
    Route::get('gestion-remodelacion-construccion/galeria//{project}/edit/{image}', 'Admin\RemodelacionImagesController@edit')->name('remodelacion_construccion.images.edit')
        ->middleware('permission:remodelacion_construccion.images.edit');
    Route::put('gestion-remodelacion-construccion/galeria/{image}', 'Admin\RemodelacionImagesController@update')->name('remodelacion_construccion.images.update')
        ->middleware('permission:remodelacion_construccion.images.edit');
    Route::delete('gestion-remodelacion-construccion/galeria/{image}', 'Admin\RemodelacionImagesController@destroy')->name('remodelacion_construccion.images.destroy')
        ->middleware('permission:remodelacion_construccion.images.destroy');
});



