<?php
/**
 * Created by PhpStorm.
 * User: taha
 * Date: 03/03/2017
 * Time: 09:29
 */
use App\Controllers\PagesController;

require '../vendor/autoload.php';

//session_start();

$app = new \Slim\App([
    'settings' => [
        'displayErrorDetails' => true
    ]
]);

require '../app/Container.php';
$container = $app->getContainer();

// Middleware
$app->add(new \App\Middlewares\FlashMiddleware($container->view->getEnvironment(), $container->session));


$app->get('/', App\Controllers\PagesController::class .':home');
$app->get('/user/signin', PagesController::class .':getSignin')->setName('signin');
$app->post('/user/signin', PagesController::class .':postSignin');
$app->get('/user/signup', PagesController::class .':getSignup')->setName('signup');
$app->get('/user/signout', PagesController::class .':getSignout')->setName('signout');
$app->run();
