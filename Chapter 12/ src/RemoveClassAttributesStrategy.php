<?php // src/RemoveClassAttributesStrategy.php

namespace App;

class RemoveClassAttributesStrategy implements ContentFilterStrategyInterface
{
    public function filter(string $content): string
    {
        return preg_replace_callback(
            '/\s*class="[a-zA-Z0-9:;\.\s\(\)\-\,]*"/',
            function ($matches) {
                return '';
            },
            $content
        );
    }
}