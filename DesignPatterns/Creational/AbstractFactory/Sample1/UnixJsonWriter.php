<?php
class UnixJsonWriter implements JsonWriter
{
    public function write(array $data, bool $formatted): string
    {
        $option = 0;
        if ($formatted) {
            $option = JSON_PRETTY_PRINT;
        }
        return json_encode($data, $option);
    }
}