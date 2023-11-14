<?php // Postgres/Connection.php

namespace Postgres;

class Connection
{
    private string $dsn = 'postgresql:dsn';

    public function connect(): string
    {
        return 'Connecting to ' . $this->dsn;
    }
}