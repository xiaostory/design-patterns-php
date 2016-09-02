<?php
namespace DesignPatterns\Creational\AbstractFactory\Tests;

use DesignPatterns\Creational\AbstractFactory\AbstractFactory;
use DesignPatterns\Creational\AbstractFactory\ChinaFactory;
use DesignPatterns\Creational\AbstractFactory\ItalyFactory;


class AbstractFactoryTest extends \PHPUnit_Framework_TestCase
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
    public function testOrderPizza(AbstractFactory $factory)
    {
        foreach ($this->type as $oneType)
        {
          $pizza = $factory->orderPizza($oneType);
          
          $this->assertInstanceOf('DesignPatterns\Creational\AbstractFactory\Pizza', $pizza);
        }
    }

}

// $test = new AbstractFactoryTest();
// $test->testCreation(new ChinaFactory(), 'cheese');
