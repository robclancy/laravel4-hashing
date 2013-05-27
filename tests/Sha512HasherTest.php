<?php

class Sha512HasherTest extends PHPUnit_Framework_TestCase {

	public function testBasicHashing()
	{
		$hasher = new Robbo\Hashing\Sha512Hasher;
		$value = $hasher->make('password');
		$this->assertTrue($value !== 'password');
		$this->assertTrue($hasher->check('password', $value));
		$this->assertFalse($hasher->check('wrongpassword', $value));
	}

}
