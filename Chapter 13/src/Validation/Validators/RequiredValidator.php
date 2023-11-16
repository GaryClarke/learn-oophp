<?php // src/Validation/Validators/RequiredValidator.php

namespace App\Validation\Validators;

class RequiredValidator implements ValidatorInterface
{
    public function validate($value): bool
    {
        return !empty($value);
    }
}