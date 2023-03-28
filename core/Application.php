<?php 

namespace App\core;

class Application 
{
    public Router $router;
    public Request $request;
    public Response $response;
    public Controller $controller;
    public static string $ROOT_DIR;
    public static Application $app;
    public function __construct($rootPath)
    {
        self::$ROOT_DIR = $rootPath;
        self::$app = $this;
        $this->response = new Response;
        $this->request = new Request;
        $this->router = new Router($this->request,$this->response);
    }

    public function run()
    {
        echo $this->router->resolve();
    }
}