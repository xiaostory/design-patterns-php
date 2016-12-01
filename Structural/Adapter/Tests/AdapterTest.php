<?php
namespace DesignPatterns\Structural\Adapter\Tests;

use DesignPatterns\Structural\Adapter\Device;
use DesignPatterns\Structural\Adapter\GBSocket;
use DesignPatterns\Structural\Adapter\HKSocket;
use DesignPatterns\Structural\Adapter\SocketAdapter;

class AdapterTest extends \PHPUnit_Framework_TestCase
{

  /**
   * @return array
   */
  public function getSocket()
  {
      return [
          [new GBSocket()],
          [new SocketAdapter(new HKSocket())]
      ];
  }

  /**
   *
   * @dataProvider getSocket
   */
  public function testDevice($socket)
  {
      $this->assertTrue(method_exists($socket, 'chargeWithTwoHolePlug'));
  }

}
