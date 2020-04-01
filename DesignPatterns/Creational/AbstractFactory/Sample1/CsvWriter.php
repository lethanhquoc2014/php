<?php
interface CsvWriter
{
    public function write(array $line): string;
}