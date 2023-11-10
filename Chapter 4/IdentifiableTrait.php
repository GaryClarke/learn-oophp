<?php // IdentifiableTrait.php

trait IdentiableTrait
{
    public function getHexId(): string
    {
        return bin2hex(random_bytes(5));
    }

    public function getId(): string
    {
        return 'ID returned from trait';
    }
}