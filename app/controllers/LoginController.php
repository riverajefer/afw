<?php

class LoginController extends \BaseController 
{

public function loginWithFacebook($id_selfie = null)
{

    $code = Input::get( 'code' );
    $fb = OAuth::consumer( 'Facebook' );

    if ( !empty( $code ) ) {

        $token = $fb->requestAccessToken( $code );
        $me = json_decode( $fb->request( '/me' ), true );
        //return dd($result);

            $id = $me['id'];
            $user = User::where('facebook_id','=', $id )->first();

            if ($user) 
            {
                $user = Sentry::findUserByLogin($user->email);
                Sentry::login($user, false);
                if($id_selfie==0)
                {
                    return Redirect::to('registro/completar');
                }
                else{
                    return Redirect::to('selfie/'.$id_selfie); 
                }
                
               // return Redirect::to('selfie/galeria');
            }
            else {
                $user = Sentry::createUser(array(
                    'first_name'=>$me['first_name'],
                    'last_name'=>$me['last_name'],
                    'email'=>$me['email'],
                    'photo'=>'https://graph.facebook.com/'.$me['id'].'/picture?type=large',
                    'facebook_id'=>$me['id'],
                    'password'  => 'test',
                    'activated' => true,
                ));
                $user = Sentry::findUserByLogin($me['email']);
                Sentry::login($user, false);
               
                if($id_selfie==0)
                {
                    return Redirect::to('registro/completar');
                }
                else{
                    return Redirect::to('selfie/'.$id_selfie); 
                }

            }
    }
    else {
        $url = $fb->getAuthorizationUri();
        return Redirect::to( (string)$url );
    }

}


} // fin class