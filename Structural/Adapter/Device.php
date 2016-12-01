<?php
namespace DesignPatterns\Structural\Adapter;

//设备
class Device
{

  private $socket;

  public function setSocket ($socket)
  {
    $this->socket = $socket;
  }

  public function charge()
  {
    return $this->socket->chargeWithTwoHolePlug();
  }
}
