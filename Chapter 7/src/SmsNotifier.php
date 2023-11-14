<?php // src/SmsNotifier.php

namespace App;


class SmsNotifier implements NotifierInterface
{
    public function send($to)
    {
        echo 'Sending SMS to ' . $to . PHP_EOL;
    }
}