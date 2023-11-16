<?php

namespace App\DTO;

use App\Validation\Rules\Email;
use App\Validation\Rules\Length;
use App\Validation\Rules\Required;

readonly class UserRegistration
{
    public function __construct(
        #[Required, Length(6, 50)]
        public string $username,
        #[Required, Email]
        public string $email,
    ) {
    }
}