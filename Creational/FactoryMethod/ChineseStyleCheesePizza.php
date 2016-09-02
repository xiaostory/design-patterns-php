<?php

 namespace DesignPatterns\Creational\FactoryMethod;

 class ChineseStyleCheesePizza implements Pizza
 {
   public $name;

   public function __construct($type)
   {
       $this->name = "Chinese Style $type Pizza";
   }

   public function prepare()
   {
      echo $this->name." is preparing...\n";
   }

   public function bake()
   {
      echo $this->name." is baking...\n";
   }

   public function cut()
   {
     echo $this->name." is cutting...\n";
   }

   public function box()
   {
     echo $this->name." is boxing...\n";
   }

   public function getName()
   {
      return $this->name;
   }

 }
