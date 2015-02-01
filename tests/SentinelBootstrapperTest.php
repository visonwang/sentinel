<?php namespace Cartalyst\Sentinel\Tests;
/**
 * Part of the Sentinel package.
 *
 * NOTICE OF LICENSE
 *
 * Licensed under the Cartalyst PSL License.
 *
 * This source file is subject to the Cartalyst PSL License that is
 * bundled with this package in the license.txt file.
 *
 * @package    Sentinel
 * @version    1.1.0
 * @author     Cartalyst LLC
 * @license    Cartalyst PSL
 * @copyright  (c) 2011-2015, Cartalyst LLC
 * @link       http://cartalyst.com
 */

use Cartalyst\Sentinel\Native\SentinelBootstrapper;
use Mockery as m;
use PHPUnit_Framework_TestCase;

class SentinelBootstrapperTest extends PHPUnit_Framework_TestCase {

	/**
	 * Close mockery.
	 *
	 * @return void
	 */
	public function tearDown()
	{
		m::close();
	}

	public function testInstantiate()
	{
		$bootstrapper = new SentinelBootstrapper();

		$sentinel = $bootstrapper->createSentinel();

		$this->assertInstanceOf('Cartalyst\Sentinel\Sentinel', $sentinel);
	}

}