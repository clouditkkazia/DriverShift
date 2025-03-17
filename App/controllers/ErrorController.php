<?php

namespace App\controllers;

class ErrorController
{
    /**
     * 404 not found error
     */
    public static function notFound($message = 'Resource not found..')
    {
        http_response_code(404);
        //views/home.view.php. thats what this is loading below
        //App/views/home.view.php
        loadView('error', [
            'status' => '404',
            'message' => $message
        ]);
    }


    /**
     * 403 unauthoused
     */
    public static function unauthorized($message = 'You are not authorised to view this resource')
    {
        http_response_code(403);
        //views/home.view.php. thats what this is loading below
        //App/views/home.view.php
        loadView('error', [
            'status' => '403',
            'message' => $message
        ]);
    }
}
