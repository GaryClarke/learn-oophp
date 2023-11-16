<?php // strategy.php

require_once 'vendor/autoload.php';

$content = '<p class="some-class">Some Content</p><div>divs not allowed</div>';

$contentFilter = new \App\ContentFilter(
    new \App\RemoveDisallowedHtmlElementsStrategy()
);

$filteredContent = $contentFilter->filter($content);

print $filteredContent . PHP_EOL;