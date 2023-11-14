<?php // iterator-interface.php

//class ExampleObject
//{
//    public string $prop1 = 'prop1';
//    public string $prop2 = 'prop2';
//    public string $prop3 = 'prop3';
//    protected string $prop4 = 'prop4';
//    private string $prop5 = 'prop5';
//}
//
//$object = new ExampleObject();
//
//foreach ($object as $item => $value) {
//    echo $value . PHP_EOL;
//}

class IterableDemoClass implements Iterator
{
    private array $sizes = ['s', 'm', 'l'];
    private int $index = 0;

    public function current(): mixed
    {
        echo __FUNCTION__ . PHP_EOL;
        return $this->sizes[$this->index];
    }

    public function next(): void
    {
        echo __FUNCTION__ . PHP_EOL;
        $this->index++;
    }

    public function key(): mixed
    {
        echo __FUNCTION__ . PHP_EOL;
        return $this->index;
    }

    public function valid(): bool
    {
        echo __FUNCTION__ . PHP_EOL;
        return isset($this->sizes[$this->index]);
    }

    public function rewind(): void
    {
        echo __FUNCTION__ . PHP_EOL;
        $this->index = 0;
    }
}

$iteratorDemo = new IterableDemoClass();

function iterate_things(iterable $iterableObject): void
{
    foreach ($iterableObject as $item => $value) {

        print "$item: $value" . PHP_EOL;
    }
}

iterate_things($iteratorDemo);