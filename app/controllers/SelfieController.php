<?php

class SelfieController extends \BaseController {

    public function getSelfie() 
    {
        return View::make('selfie/subir');
    }

    public function viewSelfie($id) 
    {
        
        $selfie = Selfie::find($id);
        if(!$selfie)
        {
            App::abort(404);
        }

        return View::make('selfie/ver')->with('selfie', $selfie);
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

        Image::make(Input::file('image')->getRealPath())->resize(200, 200)->save('uploads/thumbnail/'.$foto);
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