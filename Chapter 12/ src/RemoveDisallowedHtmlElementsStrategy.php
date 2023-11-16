<?php // src/RemoveDisallowedHtmlElementsStrategy.php

namespace App;

// complete RemoveDisallowedHtmlElementsStrategy
// try it out in strategy.php

class RemoveDisallowedHtmlElementsStrategy implements ContentFilterStrategyInterface
{
    public function filter(string $content): string
    {
        return strip_tags($content, ['<p>', '<a>']);
    }
}