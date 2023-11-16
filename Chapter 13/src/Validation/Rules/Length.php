<?php

namespace App\Validation\Rules;

use App\Validation\Validators\LengthValidator;
use App\Validation\Validators\ValidatorInterface;
use Attribute;

#[Attribute]
class Length implements ValidationRuleInterface
{
    public function __construct(
        private int $min,
        private int $max,
    )
    {
    }

    public function getValidator(): ValidatorInterface
    {
        return new LengthValidator($this->min, $this->max);
    }
}