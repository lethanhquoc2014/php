<?php
abstract class Address
{
    public abstract function show();
}

abstract class Phone
{
    public abstract function show();
}

abstract class Factory
{
    public function createAddress() {}

    public function createPhone() {}
}

// US
class USAddress extends Address
{
    public function show()
    {
        echo "USA address" . PHP_EOL;
    }
}

class USPhone extends Phone
{
    public function show()
    {
        echo "USA phone" . PHP_EOL;
    }
}

class USFactory extends Factory
{
    public function createAddress()
    {
        return new USAddress();
    }

    public function createPhone()
    {
        return new USPhone();
    }
}

// VN
class VNAddress extends Address
{
    public function show()
    {
        echo "VN address" . PHP_EOL;
    }
}

class VNPhone extends Phone
{
    public function show()
    {
        echo "VN phone" . PHP_EOL;
    }
}

class VNFactory extends Factory
{
    public function createAddress()
    {
        return new VNAddress();
    }

    public function createPhone()
    {
        return new VNPhone();
    }
}

$factory = new USFactory();
$address = $factory->createAddress();
$phone = $factory->createPhone();

echo 'Create Object by USFactory' . PHP_EOL;
$address->show();
$phone->show();

$factory = new VNFactory();
$address = $factory->createAddress();
$phone = $factory->createPhone();

echo 'Create Object by VNFactory' . PHP_EOL;
$address->show();
$phone->show();

// result
/*
Create Object by USFactory
USA address
USA phone
Create Object by VNFactory
VN address
VN phone
 */