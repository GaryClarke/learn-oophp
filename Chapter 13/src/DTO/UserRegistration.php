<?php // src/DTO/UserRegistration.php

namespace App\DTO;

use App\Validation\Rules\Email;
use App\Validation\Rules\Required;

readonly class UserRegistration
{
    public function __construct(
        #[Required]
        public string $username,
        #[Required, Email]
        public string $email,
    ) {
    }
}