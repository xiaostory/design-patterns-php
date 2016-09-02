<?php
 namespace DesignPatterns\Creational\Singleton;

 class Singleton
 {

     private static $instance;

     public static function getInstance()
     {
         if (null === static::$instance) {
             static::$instance = new static();
         }
         return static::$instance;
     }

     private function __construct(){}

     final public function __clone()
     {
         throw new \Exception('This is a Singleton. Clone is forbidden');
     }

     final public function __wakeup()
     {
         throw new \Exception('This is a Singleton. __wakeup usage is forbidden');
     }


 }
