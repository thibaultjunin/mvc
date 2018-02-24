<?php

    use \Psr\Http\Message\ServerRequestInterface as Request;
    use \Psr\Http\Message\ResponseInterface as Response;

    require '../vendor/autoload.php';

    $dotenv = new Dotenv\Dotenv("../");
    $dotenv->load();

    $configuration = [
        'settings' => [
            'displayErrorDetails' => boolval(getenv("DEBUG")),
        ],
    ];
    $c = new \Slim\Container($configuration);
    $app = new \Slim\App($c);

    require '../App/config.php';
    require '../App/routes.php';

    $app->run();
