<?php // mysql-connection.php

namespace MySql;

class Connection
{
    private string $dsn = 'mysql:dsn';

    public function connect(): string
    {
        return 'Connecting to ' . $this->dsn;
    }
}