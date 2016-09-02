<?php
namespace DesignPatterns\Creational\AbstractFactory;

class ChinaFactory extends AbstractFactory
{

    protected function createPizza($type)
    {
        switch ($type) {
          case 'cheese':
            return new ChinesePizza($type);
            break;
          default:
            //throw new \Exception('This is a not valid pizza type');
            throw new \InvalidArgumentException("$type is not a valid pizza type");
            break;
        }
    }
}
