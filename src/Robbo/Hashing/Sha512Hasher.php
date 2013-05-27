<?php namespace Robbo\Hashing;

use PasswordLib\PasswordLib;
use Illuminate\Hashing\HasherInterface;

class Sha512Hasher implements HasherInterface {

	protected $hasher;

	/**
	 * Create a new Sha512 hasher instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->hasher = new PasswordLib;
	}

	/**
	 * Hash the given value.
	 *
	 * @param  string  $value
	 * @return array   $options
	 * @return string
	 */
	public function make($value, array $options = array())
	{
		return $this->hasher->createPasswordHash($value, '$6$', $options);
	}

	/**
	 * Check the given plain value against a hash.
	 *
	 * @param  string  $value
	 * @param  string  $hashedValue
	 * @param  array   $options
	 * @return bool
	 */
	public function check($value, $hashedValue, array $options = array())
	{
		return $this->hasher->verifyPasswordHash($value, $hashedValue);
	}

	/**
	 * Check if the given hash has been hashed using the given options.
	 *
	 * @param  string  $hashedValue
	 * @param  array   $options
	 * @return bool
	 */
	public function needsRehash($hashedValue, array $options = array())
	{
		return false;
	}
}
