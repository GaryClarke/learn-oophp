<?php // src/Validation/Rules/ValidationRuleInterface.php

namespace App\Validation\Rules;

use App\Validation\Validators\ValidatorInterface;

interface ValidationRuleInterface
{
    public function getValidator(): ValidatorInterface;
}