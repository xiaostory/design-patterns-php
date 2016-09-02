<?php

namespace DesignPatterns\Creational\FactoryMethod;

class ItalyFactory extends FactoryMethod
{

    protected function createPizza($type)
    {
      switch ($type) {
        case 'cheese':
          return new ItalianStyleCheesePizza($type);
          break;
        default:
          throw new \InvalidArgumentException("$type is not a valid pizza type");
          break;
      }
    }
}
