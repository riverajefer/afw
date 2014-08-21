<?php

Route::get('/', function()
{
	 if (Sentry::check())
	 {
	 	return Redirect::to('selfie/galeria');
	 }
	 return Redirect::to('home');
	 //return View::make('index');
});


/****************** RUTAS, DE ACCIONES , PARA EL CONTROLADOR LOGIN *********************/
Route::get('login_face/{id}', 'LoginController@loginWithFacebook');


/****************** Salir **********************/

Route::get('logout', function()
{
	Sentry::logout();
	return Redirect::to('home');
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

/****** Menú Home ******/
Route::get('home', function()
{
	return View::make('home');
});


/****** Terminos  ******/
Route::get('terminos_y_condiciones', function()
{
	return View::make('terminos1');
});


/****** Terminos ******/
Route::get('terminos', function()
{
	return View::make('terminos');
});


/****** ingreso_participantes ******/
Route::get('ingreso_participantes', function()
{
	return View::make('users/ingreso_participantes');
});


/****************** Completar Registro **********************/
Route::get('registro/completar', array('before' => 'completo', function()
{
 	$usuario = Sentry::getUser();
	return View::make('users/completar_registro')->with('usuario', $usuario);

}));


/****************** Filtro para validar si Completar Registro **********************/
Route::filter('completo', function()
{

	$id_user = Sentry::getUser()->id;
	$user = User::find($id_user);
	$completo = $user->registro_completo;
	if($completo)
	{
		return Redirect::to('selfie/subir');
	}

});


/****************** Subir **********************/
Route::post('registro/completar','RegistroController@Completar');


/****************** Subir Selfie**********************/
//Route::get('selfie/subir', 'SelfieController@getSelfie');

Route::get('selfie/subir', array('before' => 'Autenticado|ya_participo', 'uses' => 'SelfieController@getSelfie'));


/******************  Filtro de Autenticación**********************/
Route::filter('Autenticado', function()
{
	 if (!Sentry::check())
	 {
	 	return Redirect::to('home')->with('message_error','Primero debes ingresar');
	 }
});

/****************** Filtro para validar si Completar Registro **********************/
Route::filter('ya_participo', function()
{

	$id_user = Sentry::getUser()->id;
	$selfie = User::find($id_user)->selfie;

	if(!empty($selfie))
	{
		return Redirect::to('selfie/galeria')->with('message_error','Usted ya subio su Selfie');
	}

});



//peticiones post, protegemos de ataques csrf
Route::group(array('before' => 'csrf'), function()
{
	Route::post('selfie/subir','SelfieController@postSubir');
});

/****** Ver Selfie en Detalle ******/
Route::get('selfie/{id}', 'SelfieController@viewSelfie')->where('id', '[0-9]+');

/****** Galeria de Selfies ******/
Route::get('selfie/galeria', 'SelfieController@galeriaSelfie');




/****** Menú Home ******/
Route::get('pruebas', function()
{
	return View::make('pruebas');
});


/****** Error 404 ******/
App::missing(function($exception)
{
    return Response::view('missing', array(), 404);
});


