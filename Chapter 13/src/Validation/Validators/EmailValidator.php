<?php // src/Validation/Validators/EmailValidator.php

namespace App\Validation\Validators;

class EmailValidator implements ValidatorInterface
{
    public function validate($value): bool
    {
        return filter_var($value, FILTER_VALIDATE_EMAIL) !== false;
    }
}