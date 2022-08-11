<?php

use \App\Http\Response;
use \App\Controller\Pages;

//ROTA ADMIN
$obRouter->get('/admin', [
    'middlewares' => [
        'required-admin-login'
    ],
    function($request){
        return new Response(200, Pages\Home::getHome($request));
    }
]);