<?php
namespace DesignPatterns\Structural\Adapter;

//国标插座
class GBSocket Implements GBSocketInterface
{
  //使用两孔插头充电
  public function chargeWithTwoHolePlug()
  {
      echo 'GB Socket charge using two-hole-plug';
  }
}
