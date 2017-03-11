<?php

namespace App\Controllers;

use Psr\Http\Message\ResponseInterface;

class Controlleur{
    private $container;

    public function __construct($container)
    {
        $this->container = $container;
    }

    public function render(ResponseInterface $response, $file, $params = []){
        $this->container->view->render($response, $file , $params);
    }

    public function __get($name)
    {
        // TODO: Implement __get() method.
        return $this->container->get($name);
    }

    public function redirect(ResponseInterface $response, $root){
        return $response->withStatus(302)->withHeader('location', $this->router->pathFor($root));
    }
}