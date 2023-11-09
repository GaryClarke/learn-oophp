<?php // SubClass.php

class SubClass extends BaseClass
{
    public function getParentProtectedProperty():string
    {
        return $this->getProtectedProperty();
    }

    public function getParentPrivateProperty()
    {
        return $this->privateProperty;
    }
}