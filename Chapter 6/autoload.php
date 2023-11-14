<?php // autoload.php

//$simpleAutoload = function(string $classname) {
//
//    $classname = str_replace('\\', DIRECTORY_SEPARATOR, $classname);
//
//    if (file_exists("{$classname}.php")) {
//        require_once "{$classname}.php";
//    }
//};


spl_autoload_register();