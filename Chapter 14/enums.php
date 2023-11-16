<?php // enums.php

class Response
{
    public const HTTP_OK = 200;
  
    public function __construct(
        private ?string $content,
        private int $status, // can't be random..fixed number of status codes all with a meaning
        private array $headers
    ) {
    }
}

$response = new Response('Some content', Response::HTTP_OK, []);

$response = new Response('Some content', 6789, []);