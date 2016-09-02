<?php
namespace DesignPatterns\Creational\AbstractFactory;

//具体工厂
class ChinaPizzaIngredientFactory implements PizzaIngredientFactory
{

  //中式奶酪材料
  public function createCheese()
  {
      $obj = new ChinaCheese();
      return $obj->getVolume();
  }

}
