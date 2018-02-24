<?php 

    $app->get('/', \App\Controllers\PageController::class . ':getHome')->setName('main');
