<?php // src/EmailNotifier.php

namespace App;


class EmailNotifier implements NotifierInterface
{

    public function send($to)
    {
        echo 'Sending email to ' . $to . PHP_EOL;
    }
}