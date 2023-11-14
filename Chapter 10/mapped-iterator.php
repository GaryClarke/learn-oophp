<?php // src/mapped-iterator.php

class MappedIteratorDemo implements Iterator, Countable
{

    public function __construct(private array $items = [])
    {
    }

    public function current(): mixed
    {
        return current($this->items);
    }

    public function next(): void
    {
        next($this->items);
    }

    public function key(): mixed
    {
        return key($this->items);
    }

    public function valid(): bool
    {
        return key($this->items) !== null;
    }

    public function rewind(): void
    {
        reset($this->items);
    }

    public function count(): int
    {
        return count($this->items);
    }
}

$mappedArray = [
    'name' => 'Gary',
    'location' => 'London, UK',
    'role' => 'Software Developer'
];

$mappedIteratorDemo = new MappedIteratorDemo($mappedArray);

foreach ($mappedIteratorDemo as $item => $value) {

    print "$item: $value" . PHP_EOL;
}

print count($mappedIteratorDemo) . PHP_EOL; // Countable