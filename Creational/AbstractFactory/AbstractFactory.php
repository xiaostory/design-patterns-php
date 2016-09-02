<?php
 namespace DesignPatterns\Creational\AbstractFactory;

 abstract class AbstractFactory
 {

   //创建pizza的方法交给子类去实现
   abstract protected function createPizza($type);

   //接受预订
   public function orderPizza($type)
   {
     $pizza = $this->createPizza($type);
     $pizza->prepare();
     $pizza->bake();
     $pizza->cut();
     $pizza->box();
     return $pizza;
   }

 }
