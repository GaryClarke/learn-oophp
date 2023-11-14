<?php // autoloading.php

$simpleAutoload = function(string $classname) {

    if (file_exists("{$classname}.php")) {
        require_once "{$classname}.php";
    }
};


spl_autoload_register($simpleAutoload);

$chart = new Chart();
print $chart->draw();