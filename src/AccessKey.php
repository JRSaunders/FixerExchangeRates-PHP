<?php

namespace FixerExchangeRates;

/**
 * Class AccessKey
 * @package FixerExchangeRates
 */
class AccessKey {
	protected static $accessKey;

	/**
	 * @return string
	 */
	public static function getAccessKey() {
		return isset( static::$accessKey ) ? static::$accessKey : '';
	}

	/**
	 * @param string $accessKey
	 */
	public static function setAccessKey( $accessKey ) {
		static::$accessKey = $accessKey;
	}
}