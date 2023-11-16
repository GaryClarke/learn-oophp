<?php // src/ContentFilter.php

namespace App;

class ContentFilter
{
    private array $filterStrategy;

    public function __construct(ContentFilterStrategyInterface $filterStrategy)
    {
        $this->filterStrategy = $filterStrategy;
    }

    public function filter($content): string
    {
        return $this->filterStrategy->filter($content);
    }
}