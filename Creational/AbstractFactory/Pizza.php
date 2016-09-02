<?php
 namespace DesignPatterns\Creational\AbstractFactory;

 interface Pizza
 {
   public function prepare();
   public function bake();
   public function cut();
   public function box();
 }
