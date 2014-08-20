<?php

Route::get('/', function()
{
	return View::make('index');
});


/****************** RUTAS, DE ACCIONES , PARA EL CONTROLADOR LOGIN *********************/
//Route::controller('login', 'LoginController');


Route::get('login_face/', 'LoginController@loginWithFacebook');


/****************** Salir **********************/

Route::get('logout', function()
{
	Sentry::logout();
	return Redirect::to('login');
});

/****************** url de pruebas **********************/

Route::get('hola', function()
{
	//$id_user     = Sentry::getUser()->id;
	//$terminado   = User::find($id_user)->RojoPaginas->terminado;
	//return Response::json(array('name' => 'Steve', 'estado' => $terminado));

});


Route::get('registro', function()
{
	
	Sentry::register(array(
	    'email'    => 'jefersonpatino@yahoo.es',
	    'password' => '123',
	    'first_name'=> 'Jefferson',
	    'last_name' => 'Rivera',
	    'activated' => true,
	));
	return "Registrado...";

});

/****************** Subir **********************/
Route::get('selfie/subir', 'SelfieController@getSelfie');

//peticiones post, protegemos de ataques csrf
Route::group(array('before' => 'csrf'), function()
{
	Route::post('selfie/subir','SelfieController@postSubir');
});

Route::get('selfie/{id}', 'SelfieController@viewSelfie')->where('id', '[0-9]+');



/****** Error 404 ******/
App::missing(function($exception)
{
    return Response::view('missing', array(), 404);
});



Route::get('imagen', function()
{

	$img = Image::make('http://localhost/afw/public/uploads/pNqSx5yFaGRb.jpg');
	$img->resize(320, 240);
	return "ImageN:  $img";
	//$img->save('http://localhost/afw/public/uploads/watermark.png');
});
