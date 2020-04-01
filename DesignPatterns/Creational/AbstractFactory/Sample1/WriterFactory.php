<?php
interface WriterFactory
{
    public function createCsvWriter(): CsvWriter;
    public function createJsonWriter(): CsvWriter;
}