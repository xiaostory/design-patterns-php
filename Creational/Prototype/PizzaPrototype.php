<?php
namespace DesignPatterns\Creational\Prototype;

/**
 * class PizzaPrototype.
 */
abstract class PizzaPrototype
{
    /**
     * @var string
     */
    protected $name;

    /**
     * @abstract
     *
     * @return void
     */
    abstract public function __clone();

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $title
     */
    public function setName($name)
    {
        $this->name = $name;
    }
}
