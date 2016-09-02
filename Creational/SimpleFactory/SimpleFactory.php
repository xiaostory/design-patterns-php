<?php

 namespace DesignPatterns\Creational\SimpleFactory;

 /**
  * class SimpleFactory.
  */
 class SimpleFactory
 {

     public static function createPizza($type)
     {
         $typeList = [
             'china' => __NAMESPACE__.'\ChinesePizza',
             'italy' => __NAMESPACE__.'\ItalianPizza',
         ];
         if (!array_key_exists($type, $typeList))
         {
             throw new \InvalidArgumentException("$type is not a valid pizza type");
         }
         $className = $typeList[$type];
         return new $className();
     }
 }
