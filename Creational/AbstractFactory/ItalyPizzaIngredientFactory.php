<?php
namespace DesignPatterns\Creational\AbstractFactory;

//具体工厂
class ItalyPizzaIngredientFactory implements PizzaIngredientFactory
{

  public function createCheese()
  {
      $obj = new ItalyCheese();
      return $obj->getVolume();
  }

}
