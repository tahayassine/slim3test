<?php
spl_autoload_register('app_autoload');

function app_autoload($class){
    require __DIR__ . "/Autoloader.php";
}