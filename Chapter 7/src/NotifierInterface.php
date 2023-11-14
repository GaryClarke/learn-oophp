<?php // src/NotifierInterface.php

namespace App;

interface NotifierInterface
{
    public function send($to);
}