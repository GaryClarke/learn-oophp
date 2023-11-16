<?php // enums.php

use App\Http\HttpStatusCode;
use App\Http\Response;

require_once 'vendor/autoload.php';

$response = new Response('Some content', HttpStatusCode::Forbidden, []);

$serializedResponse = serialize($response);

$unserialized = unserialize($serializedResponse);

dd($unserialized);