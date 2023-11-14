<?php // src/Collection.php

namespace App;

use Traversable;

class Collection implements \IteratorAggregate, \Countable, \ArrayAccess
{
    public function __construct(private array $elements = [])
    {
    }


    public function getIterator(): Traversable
    {
        return new \ArrayIterator($this->elements);
    }

    public function get($key)
    {
        return $this->elements[$key] ?? null;
    }

    public function set($key, $value): void
    {
        $this->elements[$key] = $value;
    }

    public function add($element): bool
    {
        $this->elements[] = $element;

        return true;
    }

    public function containsKey($key): bool
    {
        return isset($this->elements[$key]) || array_key_exists($key, $this->elements);
    }

    public function offsetExists($offset): bool
    {
        return $this->containsKey($offset);
    }

    public function offsetGet($offset): mixed
    {
        return $this->get($offset);
    }

    public function offsetSet($offset, $value): void
    {
        if (! isset($offset)) {
            $this->add($value);

            return;
        }

        $this->set($offset, $value);
    }

    public function offsetUnset($offset): void
    {
        $this->remove($offset);
    }

    public function remove($key): mixed
    {
        if (! isset($this->elements[$key]) && ! array_key_exists($key, $this->elements)) {
            return null;
        }

        $removed = $this->elements[$key];
        unset($this->elements[$key]);

        return $removed;
    }

    public function count(): int
    {
        return count($this->elements);
    }

    public function toArray(): array
    {
        return $this->elements;
    }

    public function first()
    {
        return reset($this->elements);
    }

    public function last()
    {
        return end($this->elements);
    }

    public function getValues(): array
    {
        return array_values($this->elements);
    }

    public function getKeys(): array
    {
        return array_keys($this->elements);
    }

    public function isEmpty(): bool
    {
        return empty($this->elements);
    }

    public function clear(): void
    {
        $this->elements = [];
    }
}
