<?php // enums.php

enum HttpStatusCode: int
{
    case Ok = 200;
    case Created = 201;
    case BadRequest = 400;
    case Forbidden = 403;
    case LargeHeaders = 431;
    case InternalServerError = 500;

    public function message(): string
    {
        return match ($this)
        {
            self::Ok => 'Request OK',
            self::Created => 'Resource Created',
            self::BadRequest => 'Bad Request',
            self::LargeHeaders => 'Request Header Fields Too Large',
            self::Forbidden => 'Forbidden Request',
            self::InternalServerError => 'Internal Server Error',
        };
    }
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

$status = HttpStatusCode::LargeHeaders;

echo $status->message() . PHP_EOL;