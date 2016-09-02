<?php
namespace DesignPatterns\Creational\Prototype;

/**
 * Class ChinesePizzaPrototype.
 */
class ChinesePizzaPrototype extends PizzaPrototype
{
    /**
     * @var string
     */
    protected $name = 'Chinses Style Pizza';

    /**
     * empty clone.
     */
    public function __clone()
    {
    }
}
