<?php // /Http/Response.php

namespace App\Http;

class Response
{
    public const HTTP_OK = 200;

    public function __construct(
        private ?string $content,
        private HttpStatusCode $statusCode, // can't be random..fixed number of status codes all with a meaning
        private array $headers
    ) {
    }

    public function getStatusCodeValue(): int
    {
        return $this->statusCode->value;
    }
}