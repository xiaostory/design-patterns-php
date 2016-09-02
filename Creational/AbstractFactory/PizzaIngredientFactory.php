<?php
namespace DesignPatterns\Creational\AbstractFactory;

//抽象工厂的任务是定义一个负责创建一组产品的接口，在这个接口中的每个方法都负责创建一个具体的产品，利用抽象工厂的子类提供具体做法。
interface PizzaIngredientFactory
{
    //奶酪
    public function createCheese();

    //
}
