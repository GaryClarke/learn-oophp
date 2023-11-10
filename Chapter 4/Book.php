<?php // Book.php

require_once 'Identifiable.php';
require_once 'IdentiableTrait.php';

class Book implements Identifiable
{
    use IdentiableTrait;
}