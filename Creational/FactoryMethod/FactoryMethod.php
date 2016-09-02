<?php
 namespace DesignPatterns\Creational\FactoryMethod;

 abstract class FactoryMethod
 {

   //创建pizza的方法交给子类去实现
   protected abstract function createPizza($type);

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
