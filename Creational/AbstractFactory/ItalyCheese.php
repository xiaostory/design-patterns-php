<?php
namespace DesignPatterns\Creational\AbstractFactory;

class ItalyCheese implements Cheese
{
  public function getVolume()
  {
    return "2L";
  }
}
