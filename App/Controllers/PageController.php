<?php

    namespace App\Controllers;

    class PageController extends Controller{

        public function getHome(\Slim\Http\Request $request, \Slim\Http\Response $response, array $args){
            echo "hello world";
        }
    }
