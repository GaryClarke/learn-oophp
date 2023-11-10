<?php // JsonFileReader.php

class JsonFileReader
{
    public function readFileAsAssociativeArray(string $filename): array
    {
        if (!file_exists($filename)) {

            throw new Exception('File could not be found');
        }

        $content = file_get_contents($filename);

        $items = json_decode($content, true);

        return $items;
    }
}
