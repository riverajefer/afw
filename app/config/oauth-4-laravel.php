<?php
return array( 

    /*
    |--------------------------------------------------------------------------
    | oAuth Config
    |--------------------------------------------------------------------------
    */

    /**
     * Storage
     */
    'storage' => 'Session', 

    /**
     * Consumers
     */
    'consumers' => array(

        /**
         * Facebook
         */
        'Facebook' => array(
            'client_id'     => '369259199893217',
            'client_secret' => '4a8fc61cdc79523ca6433054872606dc',
            'scope'         => array('email'),
        ),      
        'Google' => array(
            'client_id'     => 'xxxx',
            'client_secret' => 'xxxx',
            'scope'         => array('userinfo_email', 'userinfo_profile'),
        ), 
        'Twitter' => array(
            'client_id'         => 'xxxx',
            'client_secret'     => 'xxxx',
            'scope'         => array(),
        ), 
    )

);

?>