<?php // tests/ExampleProcessorTest.php

use PHPUnit\Framework\TestCase;

class ExampleProcessorTest extends TestCase
{
    /** @test */
    public function the_example_processor_works(): void
    {
        $mockFileWriter = $this->createMock(\App\OldStuff\CsvFileWriter::class);

        $mockFileWriter->method('writeToFile')->willReturn(true);

        $processor = new \App\OldStuff\ExampleProcessor($mockFileWriter);

        $result = $processor->process(['foo' => 'bar']);

        $this->assertTrue($result);
    }
}