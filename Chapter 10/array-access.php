<?php // array-access.php

require_once 'vendor/autoload.php';

class DataContainer implements ArrayAccess
{
    private array $items = [];

    public function offsetExists(mixed $offset): bool
    {
        print 'Checking if ' . $offset . ' is set' . PHP_EOL;

        return isset($this->items[$offset]);
    }

    public function offsetSet(mixed $offset, mixed $value): void
    {
        if ($offset) {
            print 'Setting ' . $offset . PHP_EOL;
            $this->items[$offset] = $value;
        } else {
            $this->items[] = $value;
        }
    }

    public function offsetGet(mixed $offset): mixed
    {
        print 'Getting ' . $offset . PHP_EOL;

        return $this->items[$offset] ?? null;
    }

    public function offsetUnset(mixed $offset): void
    {
        print 'Unsetting ' . $offset . PHP_EOL;

        unset($this->items[$offset]);
    }
}

$demoObject = new DataContainer();
// offsetExists
isset($demoObject['random-key']);

// offsetSet
$demoObject['item-one'] = 'Example item number one';

// offsetGet
print $demoObject['item-one'] . PHP_EOL;

// offsetUnset
unset($demoObject['item-one']);