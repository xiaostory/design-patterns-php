<?php
namespace DesignPatterns\Creational\FactoryMethod;

class ChinaFactory extends FactoryMethod
{

    protected function createPizza($type)
    {
        switch ($type)
        {
          case 'cheese':
            return new ChineseStyleCheesePizza($type);
            break;
          default:
            throw new \InvalidArgumentException("$type is not a valid pizza type");
            break;
        }
    }
}
