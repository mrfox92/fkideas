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




Auth::routes();

Route::get('/', 'Web\HomeController@index')->name('inicio');

//routes permisssions

Route::middleware(['auth'])->group(function(){
    //roles
    Route::get('roles', 'Admin\RoleController@index')->name('roles.index')
        ->middleware('permission:roles.index');
    Route::get('roles/create', 'Admin\RoleController@create')->name('roles.create')
        ->middleware('permission:roles.create');
    Route::post('roles/store', 'Admin\RoleController@store')->name('roles.create')
        ->middleware('permission:roles.create');
    Route::get('roles/{role}', 'Admin\RoleController@show')->name('roles.show')
        ->middleware('permission:roles.show');
    Route::get('roles/{role}/edit', 'Admin\RoleController@edit')->name('roles.edit')
        ->middleware('permission:roles.edit');
    Route::put('roles/{role}', 'Admin\RoleController@update')->name('roles.edit')
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
    Route::put('usuarios/{user}', 'Admin\UserController@update')->name('users.edit')
        ->middleware('permission:users.edit');
    Route::delete('usuarios/{user}', 'Admin\UserController@destroy')->name('users.destroy')
        ->middleware('permission:users.destroy');
    //Retail
    Route::get('muebleria-retail', 'Admin\RetailController@index')->name('retail.index')
        ->middleware('permission:retail.index');
    Route::get('muebleria-retail/create', 'Admin\RetailController@create')->name('retail.create')
        ->middleware('permission:retail.create');
    Route::post('muebleria-retail/store', 'Admin\RetailController@store')->name('retail.create')
        ->middleware('permission:retail.create');
    Route::get('muebleria-retail/{retail}', 'Admin\RetailController@show')->name('retail.show')
        ->middleware('permission:retail.show');
    Route::get('muebleria-retail/{retail}/edit', 'Admin\RetailController@edit')->name('retail.edit')
        ->middleware('permission:retail.edit');
    Route::put('muebleria-retail/{retail}', 'Admin\RetailController@update')->name('retail.edit')
        ->middleware('permission:retail.edit');
    Route::delete('muebleria-retail/{retail}', 'Admin\RetailController@destroy')->name('retail.destroy')
        ->middleware('permission:retail.destroy');
    
    //info
    Route::get('informacion', 'Admin\InfoController@index')->name('info.index')
        ->middleware('permission:info.index');
    Route::get('informacion/create', 'Admin\InfoController@create')->name('info.create')
        ->middleware('permission:info.create');
    Route::post('informacion/store', 'Admin\InfoController@store')->name('info.create')
        ->middleware('permission:info.create');
    Route::get('informacion/{info}', 'Admin\InfoController@show')->name('info.show')
        ->middleware('permission:info.show');
    Route::get('informacion/{info}/edit', 'Admin\InfoController@edit')->name('info.edit')
        ->middleware('permission:info.edit');
    Route::put('informacion/{info}', 'Admin\InfoController@update')->name('info.edit')
        ->middleware('permission:info.edit');
    Route::delete('informacion/{info}', 'Admin\InfoController@destroy')->name('info.destroy')
        ->middleware('permission:info.destroy');
    
    //Aseo industrial
    Route::get('aseo-industrial', 'Admin\AseoIndustrialController@index')->name('aseo_industrial.index')
        ->middleware('permission:aseo_industrial.index');
    Route::get('aseo-industrial/create', 'Admin\AseoIndustrialController@create')->name('aseo_industrial.create')
        ->middleware('permission:aseo_industrial.create');
    Route::post('aseo-industrial/store', 'Admin\AseoIndustrialController@store')->name('aseo_industrial.create')
        ->middleware('permission:aseo_industrial.create');
    Route::get('aseo-industrial/{aseo}', 'Admin\AseoIndustrialController@show')->name('aseo_industrial.show')
        ->middleware('permission:aseo_industrial.show');
    Route::get('aseo-industrial/{aseo}/edit', 'Admin\AseoIndustrialController@edit')->name('aseo_industrial.edit')
        ->middleware('permission:aseo_industrial.edit');
    Route::put('aseo-industrial/{aseo}', 'Admin\AseoIndustrialController@update')->name('aseo_industrial.edit')
        ->middleware('permission:aseo_industrial.edit');
    Route::delete('aseo-industrial/{aseo}', 'Admin\AseoIndustrialController@destroy')->name('aseo_industrial.destroy')
        ->middleware('permission:aseo_industrial.destroy');

    //remodelaciones y construcciones
    Route::get('remodelacion-construccion', 'Admin\RemodelacionConstruccionController@index')->name('remodelacion_construccion.index')
        ->middleware('permission:remodelacion_construccion.index');
    Route::get('remodelacion-construccion/create', 'Admin\RemodelacionConstruccionController@create')->name('remodelacion_construccion.create')
        ->middleware('permission:remodelacion_construccion.create');
    Route::post('remodelacion-construccion/store', 'Admin\RemodelacionConstruccionController@store')->name('remodelacion_construccion.create')
        ->middleware('permission:remodelacion_construccion.create');
    Route::get('remodelacion-construccion/{remodelacion}', 'Admin\RemodelacionConstruccionController@show')->name('remodelacion_construccion.show')
        ->middleware('permission:remodelacion_construccion.show');
    Route::get('remodelacion-construccion/{remodelacion}/edit', 'Admin\RemodelacionConstruccionController@edit')->name('remodelacion_construccion.edit')
        ->middleware('permission:remodelacion_construccion.edit');
    Route::put('remodelacion-construccion/{remodelacion}', 'Admin\RemodelacionConstruccionController@update')->name('remodelacion_construccion.edit')
        ->middleware('permission:remodelacion_construccion.edit');
    Route::delete('remodelacion-construccion/{remodelacion}', 'Admin\RemodelacionConstruccionController@destroy')->name('remodelacion_construccion.destroy')
        ->middleware('permission:remodelacion_construccion.destroy');
});

//Web routes
Route::get('muebleria-retail', 'Web\RetailController@index')->name('muebleria-retail');
Route::get('remodelacion-construccion', 'Web\RemodelacionContruccion@index')
    ->name('remodelacion-construccion');
Route::get('aseo-industrial', 'Web\Controller@index')->name('aseo-industrial');

Route::middleware(['auth'])->group(function(){
    Route::resource('usuarios', 'Admin\UserController')->only('index')
        ->middleware('permission:users.index');
    Route::resource('roles', 'Admin\RoleController')->only('index')
        ->middleware('permission:roles.index');
    Route::resource('informacion', 'Admi\InfoController')->only('index')
        ->middleware('permission:info.index');
    Route::resource('aseo-industrial', 'Admin\AseoIndustrialController')->only('index')
        ->middleware('permission:aseo_industrial.index');
    Route::resource('muebleria-retail', 'Admin\RetailController')->only('index')
        ->middleware('permission:retail.index');
    Route::resource('remodelacion-construccion', 'Admin\RemodelacionConstruccionController')
        ->only('index')
        ->middleware('permission:remodelacion_construccion.index');                
});