<?php

 namespace DesignPatterns\Creational\SimpleFactory\Tests;
 use DesignPatterns\Creational\SimpleFactory\SimpleFactory;
 use DesignPatterns\Creational\SimpleFactory\ChinesePizza;

 class SimpleFactoryTest extends \PHPUnit_Framework_TestCase
 {

   public function getType()
   {
       return [
         ['china'],
         ['italy']
       ];
   }

   /**
    * @dataProvider getType
    */
   public function testCreation($type)
   {
       $obj = SimpleFactory::createPizza($type);
       $this->assertInstanceOf('\DesignPatterns\Creational\SimpleFactory\Pizza', $obj);
   }
 }
 // $simpleFactoryTest = new SimpleFactoryTest();
 // $simpleFactoryTest->testCreation('china');
