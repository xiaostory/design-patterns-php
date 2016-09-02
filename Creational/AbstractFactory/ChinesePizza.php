<?php

 namespace DesignPatterns\Creational\AbstractFactory;

 class ChinesePizza implements Pizza
 {

   private $name;
   private $cheese;

   private $ingredientFactory;

   public function __construct($type)
   {
     if (null === $this->ingredientFactory)
     {
         $this->ingredientFactory = new ChinaPizzaIngredientFactory();
     }
     $this->name = "Chinese Style $type Pizza";
   }

   public function prepare()
   {
     $this->cheese = $this->ingredientFactory->createCheese();
     echo $this->name . " is useing $this->cheese cheese\n";
   }

   public function bake(){}

   public function cut(){}

   public function box(){}
 }
