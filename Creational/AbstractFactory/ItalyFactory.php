<?php
namespace DesignPatterns\Creational\AbstractFactory;

class ItalyFactory extends AbstractFactory
{

    protected function createPizza($type)
    {
        switch ($type) {
          case 'cheese':
            return new ItalianPizza($type);
            break;
          default:
            //throw new \Exception('This is a not valid pizza type');
            throw new \InvalidArgumentException("$type is not a valid pizza type");
            break;
        }
    }
}
