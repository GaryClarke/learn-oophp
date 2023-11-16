<?php // src/Validation/Rules/Email.php

namespace App\Validation\Rules;

use App\Validation\Validators\EmailValidator;
use App\Validation\Validators\ValidatorInterface;
use Attribute;

#[Attribute]
class Email implements ValidationRuleInterface
{
    public function getValidator(): ValidatorInterface
    {
        return new EmailValidator();
    }
}