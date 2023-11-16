<?php // src/Validation/Rules/Required.php

namespace App\Validation\Rules;

use Attribute;

#[Attribute]
class Required implements ValidationRuleInterface
{
    public function getValidator()
    {
        // TODO: Implement getValidator() method.
    }
}