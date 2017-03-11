<?php
/**
 * Created by PhpStorm.
 * User: taha
 * Date: 04/03/2017
 * Time: 07:38
 */

require '/Class/Database.php';
require '/Class/Session.php';

$container = $app->getContainer();

$container['debug'] = function (){
    return true;
};

$container['view'] = function ($container) {
    $dir = dirname(__DIR__);
    $view = new \Slim\Views\Twig($dir.'/app/views', [
        'cache' => $container->debug ? false : $dir.'/tmp/cache',
        'debug' => $container->debug
    ]);
    if ($container->debug){
        $view->addExtension(new Twig_Extension_Debug());
    }

    // Instantiate and add Slim specific extension
    $basePath = rtrim(str_ireplace('index.php', '', $container['request']->getUri()->getBasePath()), '/');
    $view->addExtension(new Slim\Views\TwigExtension($container['router'], $basePath));

    return $view;
};

$container['db'] =  function ($container) {
        if (isset($container['db']))
            return $container['db'];
        return  new Database('matcha');
};

$container['session'] = function ($container){
    return Session::getInstance();
};

