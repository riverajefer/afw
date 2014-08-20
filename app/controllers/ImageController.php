<?php

class ImageController extends \BaseController {

    public function getSelfie() 
    {
        return View::make('image/selfie');
    }

    public function viewSelfie($id) 
    {
        
        return "Hola ID: $id";
        //return View::make('image/selfie');
    }

    public function postSubir() 
    {
        $input = Input::all();
        $destinationPath = 'uploads';
        $rules = array(
            'image' => 'required|image|max:3000|mimes:jpeg,png',
            'mensaje' => 'required|min:5|max:150',
        );

        $file = Input::file('image');
        $mensaje = Input::get('mensaje');

        $validation = Validator::make($input, $rules);

        if ($validation->fails())
        {
            return Redirect::back()->withErrors($validation->messages())->withInput();
        }
      
        $ext = pathinfo($file, PATHINFO_EXTENSION);
        if($ext=='')  
        {
          //return "Formato invalido";
          return Redirect::back()->withErrors($validation->messages())->withInput();
        }

        $filename  = str_random(12);
        $extension = $file->getClientOriginalExtension();
        $foto =  $filename.'.'.$extension;
            //$filename  = $file->getClientOriginalName();
        $upload_success = Input::file('image')->move($destinationPath, $foto);

        if( $upload_success ) {

            $selfie = new Selfie;
            $selfie->user_id = 1;
            $selfie->foto = $foto;
            $selfie->mensaje = $mensaje;
            $selfie->save();
            $id = $selfie->id;
            //return "Ok gusrdado $id";
            return Redirect::to('selfie/'.$id);
        } 
        else {
            return Response::json('error', 400);
        }
    }

}