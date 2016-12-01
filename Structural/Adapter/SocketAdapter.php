<?php
namespace DesignPatterns\Structural\Adapter;

/**
 *适配器
 */
class SocketAdapter Implements GBSocketInterface
{

  protected $socket;
  
  public function __construct(HKSocket $socket)
  {
    $this->socket = $socket;
  }
  /**
   * 对旧接口的调用适配到新接口
   * Override
   */
  public function chargeWithTwoHolePlug()
  {
      return $this->socket->chargeWithThereHolePlug();
  }

}
