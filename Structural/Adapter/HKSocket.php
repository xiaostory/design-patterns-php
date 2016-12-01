<?php
namespace DesignPatterns\Structural\Adapter;

//港式插座
class HKSocket Implements HKSocketInterface
{
  //三孔插头充电
  public function chargeWithThereHolePlug()
  {
      echo 'HK Socket charge using there-hole-plug';
  }
}
