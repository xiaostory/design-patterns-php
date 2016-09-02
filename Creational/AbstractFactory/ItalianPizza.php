<?php

 namespace DesignPatterns\Creational\AbstractFactory;

 class ItalianPizza implements Pizza
 {

   private $name;
   private $cheese;
   private $ingredientFactory;

   public function __construct($type)
   {
     if (null === $this->ingredientFactory)
     {
         $this->ingredientFactory = new ItalyPizzaIngredientFactory();
     }
     $this->name = "Italian Style $type Pizza";
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
