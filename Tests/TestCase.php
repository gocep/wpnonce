<?php

namespace WP_Nonce\Tests;

use Mockery;

class TestCase extends \PHPUnit\Framework\TestCase {
	/**
	 * @var \Mockery\MockInterface
	 */
	public static $functions;

	protected function setUp() {
		parent::setUp();

		static::$functions = Mockery::mock();
	}

	protected function tearDown() {
		Mockery::close();

		parent::tearDown();
	}


}