<?php

namespace DesignPatterns\Creational\Prototype\Tests;

use DesignPatterns\Creational\Prototype\PizzaPrototype;
use DesignPatterns\Creational\Prototype\ChinesePizzaPrototype;

/**
 * PrototypeTest tests the prototype pattern
 */
class PrototypeTest extends \PHPUnit_Framework_TestCase
{

     public function getPrototype()
     {
         return [
           [new ChinesePizzaPrototype()],
         ];
     }

     /**
      * @dataProvider getPrototype
      */
     public function testCreation(PizzaPrototype $prototype)
     {
         $pizza = clone $prototype;
         $pizza->setName($pizza->getName());
         $this->assertInstanceOf('DesignPatterns\Creational\Prototype\PizzaPrototype', $pizza);
     }
}
