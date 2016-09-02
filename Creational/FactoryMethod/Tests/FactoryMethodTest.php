<?php

namespace DesignPatterns\Creational\FactoryMethod\Tests;

use DesignPatterns\Creational\FactoryMethod\FactoryMethod;
use DesignPatterns\Creational\FactoryMethod\ChinaFactory;
use DesignPatterns\Creational\FactoryMethod\ItalyFactory;

class FactoryMethodTest extends \PHPUnit_Framework_TestCase
{

    protected $type = ['cheese'];

    public function getFactory()
    {
        return [
            [new ChinaFactory()],
            [new ItalyFactory()],
        ];
    }

    /**
     * @dataProvider getFactory
     */
    public function testOrderPizza(FactoryMethod $factory)
    {
        foreach ($this->type as $oneType)
        {
          $pizza = $factory->orderPizza($oneType);
          //echo $pizza->getName()." is ok!\n";
          $this->assertInstanceOf('DesignPatterns\Creational\FactoryMethod\Pizza', $pizza);
        }
    }

    /**
     * @dataProvider getFactory
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage chocolate is not a valid pizza type
     */
    public function testUnknownType(FactoryMethod $factory)
    {
        $factory->orderPizza('chocolate');
    }

}

//做了这么多，应该可以吃披萨了吧;预订一份中式奶酪披萨
// $test = new FactoryMethodTest();
// $test->testCreation(new ChinaFactory(), 'cheese');
