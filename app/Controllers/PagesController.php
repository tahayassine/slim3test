<?php

namespace App\Controllers;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

class PagesController extends Controlleur {

    public function home(RequestInterface $request, ResponseInterface $response){
        $this->render($response, 'pages/home.twig');
    }

    public function getSignin(RequestInterface $request, ResponseInterface $response){
//        $flash = $this->session->getFlashes();
        return $this->render($response, 'pages/signin.twig');
    }

    public function postSignin(RequestInterface $request, ResponseInterface $response){
        $errors = [];
        Validator::email()->validate($request->getParam('email')) || $errors['email'] = 'Invalide email!';
        Validator::notEmpty()->validate($request->getParam('name')) || $errors['name'] = 'Invalide email!';
        Validator::notEmpty()->validate($request->getParam('passeword')) || $errors['passeword'] = 'Invalide email!';
//        $this->session->setFlashError('mail', 'mail is inset');
//        $this->session->setFlashError('passeword', 'name is haha inset');
//        $this->session->setFlashError('name', 'name is inset');
        $this->session->setFlashErrors($errors);
        return $this->redirect($response, 'signin');
    }

    public function getSignup(RequestInterface $request, ResponseInterface $response){
        $this->render($response, 'pages/signup.twig');
    }

    public function postSignup(RequestInterface $request, ResponseInterface $response){
        return $this->redirect($response, 'signup');
    }
}