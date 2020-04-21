<?php
interface AbstractFactory
{
    public function CreateProductA(): AbstractProductA;

    public function CreateProductB(): AbstractProductB;
}

class ConcreteFactory1 implements AbstractFactory
{
    public function CreateProductA(): AbstractProductA
    {
        return new ConcreteProductA1;
    }

    public function CreateProductB(): AbstractProductB
    {
        return new ConcreteProductB1;
    }
}

class ConcreteFactory2 implements AbstractFactory
{
    public function CreateProductA(): AbstractProductA
    {
        return new ConcreteProductA2;
    }

    public function CreateProductB(): AbstractProductB
    {
        return new ConcreteProductB2;
    }
}

interface AbstractProductA
{
    public function usefulFunctionA(): string;
}

class ConcreteProductA1 implements AbstractProductA
{
    public function usefulFunctionA(): string
    {
        return "The result of the product A2." . PHP_EOL;
    }
}

interface AbstractProductB
{
    public function usefulFunctionB(): string;

    public function anotherUsefulFunctionB(AbstractProductA $collaborator): string;
}

class ConcreteProductB1 implements AbstractProductB
{
    public function usefulFunctionB(): string
    {
        return "The result of the product B1." . PHP_EOL;
    }

    public function anotherUsefulFunctionB(AbstractProductA $collaborator): string
    {
        $result = $collaborator->usefulFunctionA();

        return "The result of the B1 collaborating with the ({$result})";
    }
}

class ConcreteProductB2 implements AbstractProductB
{
    public function usefulFunctionB(): string
    {
        return "The result of the product B2." . PHP_EOL;
    }

    public function anotherUsefulFunctionB(AbstractProductA $collaborator): string
    {
        $result = $collaborator->usefulFunctionA();

        return "The result of the B2 collaborating with the ({$result})";
    }
}

function clientCode(AbstractFactory $factory)
{
    $productA = $factory->CreateProductA();
    $productB = $factory->CreateProductB();

    echo $productB->usefulFunctionB() . PHP_EOL;
    echo $productB->anotherUsefulFunctionB($productA);
}

echo "Client: Testing client code with the first factory type: " . PHP_EOL;
clientCode(new ConcreteFactory1);

echo PHP_EOL;

echo "Client: Testing the same client code with the second factory type:\n";
clientCode(new ConcreteFactory2);