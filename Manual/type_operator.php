<?php
// Example 1
class MyClass
{}
class NotMyClass
{}

$class = new NotMyClass();
var_dump($class instanceof MyClass); // false
var_dump($class instanceof NotMyClass); // true

// Example 2
class ParentClass
{}
class ChildClass extends ParentClass
{}

$child = new ChildClass();
var_dump($child instanceof ParentClass); // true
var_dump($child instanceof ChildClass); // true
var_dump($child instanceof StdClass); // true

// Example 3
interface MyInterface
{}
class ImplementClass implements MyInterface
{}

$implement = new ImplementClass();
var_dump($implement instanceof ImplementClass); // true
var_dump($implement instanceof MyInterface); // true