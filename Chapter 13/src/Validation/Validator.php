
<?php // src/Validation/Validator.php

namespace App\Validation;

use ReflectionClass;

class Validator
{
    private array $errors = [];

    public function validate(object $object): void
    {
        // Instantiate a $reflector using new ReflectionClass($object);
        $reflector = new ReflectionClass($object);

        dd($reflector);

        // Loop over the reflector properties

            // Get the Attributes using $property->getAttributes(); (only if ValidationRuleInterface)

            // Loop over the Attributes

                // Instantiate a PropertyValidator instance using $attribute->getValidator();

                // Ask IF the property does not validate

                    // Add the property to errors with a message
    }
}