<?php // enums.php

enum HttpStatusCode: int
{
    case Ok = 200;
    case Created = 201;
    case BadRequest = 400;
    case Unauthorized = 401;
    case Forbidden = 403;
    case InternalServerError = 500;
}

class Response
{
    const HTTP_OK = 200;

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

$response = new Response('Some content', HttpStatusCode::Created, []);

echo $response->getStatusCodeValue() . PHP_EOL;