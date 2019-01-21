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
Route::get('/trabajando', function () {
    return view('trabajando');
});

Route::get('/', 'HomeController@index');

/*Route::get('/', function () {
	//return("holamiette");
    return view('home');
});*/

Route::resources([
    'products' => 'ProductsController',
    'slider' => 'SliderController'
]);
/*
las rutas se interpretan en orden

//recibiendo parametros por url
Route::get('/usuarios/{id}',function($id){
    return "Mostrando detalle de usuario: {$id}";
});

//recibiendo parametros por url con filtro de expresion regular
Route::get('/usuarios/{id}',function($id){
    return "Mostrando detalle de usuario: {$id}";
})->where('id','[0-9]+');

//ruta sin recibir parametros
Route::get('/usuarios/nuevo',function(){
    return "Creando usuario nuevo."
});

//ruta con 2 parametros
Route::get('saludo/{name}/{nickname}', function($name, $nickname){
  return "Bienvenido {$name}, tu apodo es {$nickname}";
});

//ruta con 2 parametros con segundo parametro opcional
Route::get('saludo/{name}/{nickname?}', function($name, $nickname = null){
  if($nickname){
    return "Bienvenido {$name}, tu apodo es {$nickname}";
  } else {
    return "Bienvenido {$name}, no tienes apodo";
  }

});
*/
