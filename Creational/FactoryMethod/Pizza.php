<?php
 namespace DesignPatterns\Creational\FactoryMethod;

 interface Pizza
 {
   public function prepare();
   public function bake();
   public function cut();
   public function box();
 }
