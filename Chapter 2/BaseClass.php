<?php // BaseClass.php

class BaseClass
{
    public $publicProperty = 'Public properties and methods can be accessed anywhere in your code';

    protected $protectedProperty = 'Protected properties and methods can only be accessed within the declaring class or from a subclass';

    private $privateProperty = 'Private properties and methods can only be accessed within the declaring class. They are not visible anywhere else';

    public function getProtectedProperty(): string
    {
        return $this->protectedProperty;
    }

    public function getPrivateProperty(): string
    {
        return $this->privateProperty;
    }
}