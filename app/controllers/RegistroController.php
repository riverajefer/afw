<?php

class registroController extends \BaseController 
{

public function Completar()
{


    $user_id = Sentry::getUser()->id;
    $user = User::find($user_id);
        
    $input = Input::all();
    $rules = array(
        'email'    => 'required|email|max:150',
        'nombre'   => 'required|min:2|max:100|',
        'telefono' => 'required|numeric|min:7|',
        'estudia'  => 'required',
    );
        
    $validation = Validator::make($input, $rules);

        if ($validation->fails())
        {
            return Redirect::back()->withErrors($validation->messages())->withInput();
        }

        $user->nombre_completo = Input::get('nombre');
        $user->email = Input::get('email');
        $user->celular = Input::get('telefono');
        $user->registro_completo = true;
        $user->estudia = Input::get('estudia');
        if(Input::get('estudia')=='si')
        {
            $user->que_estudia = Input::get('idioma');
        }
        else{
            $user->que_estudia = '';
        }

        if ($user->save())
        {
            return Redirect::to('selfie/subir');
        }
        else
        {
            return Redirect::back()->withErrors($validation->messages())->withInput();
        }

}


} // fin class