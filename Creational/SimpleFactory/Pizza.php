<?php

 namespace DesignPatterns\Creational\SimpleFactory;

 interface Pizza
 {
   public function prepare();
   public function bake();
   public function cut();
   public function box();
 }
