<?php
$message = "Hello";

$example = function()
{
    echo $message . PHP_EOL; // throw error PHP Notice:  Undefined variable: message
};
$example();

$example = function() use ($message)
{
    echo $message . PHP_EOL;
};
$example();

$message = 'world';
$example(); // still "Hello"

$message = "Hi";

$example = function() use (&$message)
{
    echo $message . PHP_EOL;
};
$example();

$message = "Hii ";
$example();

$example = function($name) use ($message)
{
    echo $message . $name . PHP_EOL;
};
$example('Quoc');