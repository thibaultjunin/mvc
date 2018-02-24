<?php

    namespace App\Controllers;

    use \Psr\Http\Message\ServerRequestInterface as Request;
    use \Psr\Http\Message\ResponseInterface as Response;

    class Controller{

        protected $twig;
        protected $mysql;

        public function __construct(){
            $loader = new \Twig_Loader_Filesystem('../App/views');
            $this->twig = new \Twig_Environment($loader, array());

            $pdo = new \Simplon\Mysql\PDOConnector(
                getenv("MYSQL_HOST"),
                getenv("MYSQL_USER"),
                getenv("MYSQL_PASS"),
                getenv("MYSQL_BASE")
            );
            $pdoConn = $pdo->connect('utf8', []);
            $this->mysql = new \Simplon\Mysql\Mysql($pdoConn);
        }
        
    }
