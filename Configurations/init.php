<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/Configurations/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/Configurations/functions.php';

spl_autoload_register(function ($class_name) {
    require_once $_SERVER['DOCUMENT_ROOT'] . '/Configurations/Storage/' . $class_name . '.php';
});
