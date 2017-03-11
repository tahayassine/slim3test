<?php

namespace App\Middlewares;

use Slim\Http\Request;
use Slim\Http\Response;
use Slim\Views\Twig;

class FlashMiddleware{


    /**
     * @var \Twig_Environment
     */
    private $twig;
    private $session;

    public function __construct(\Twig_Environment $twig, $session)
    {
        $this->twig = $twig;
        $this->session = $session;
    }

    public function __invoke(Request $request, Response $responce, $next)
    {
        // TODO: Implement __invoke() method.
        $this->twig->addGlobal('flash', $this->session->getFlashes());
//        if(isset($_SESSION['flash'])){
//            unset($_SESSION['flash']);
//        }
        return $next($request, $responce);
    }
}