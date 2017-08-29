<?php

namespace FixerExchangeRates;

/**
 * Class Rate
 * @package ExchangeRates
 */
class Rate {
	protected $query;
	protected $data = false;

	public function __construct( $data = false ) {
		$this->data = $data;
	}

	/**
	 * @param string $currency
	 *
	 * @return mixed
	 * @throws \Exception
	 */
	public function get() {
		if ( isset( $this->data->rates ) ) {
			foreach ( $this->data->rates as $currency => $rate ) {
				if ( is_numeric( $rate ) ) {
					return $rate;
				}
			}
		}
		throw new \Exception( 'No Exchange Rate Data Found!' );
	}

	/**
	 * @return bool|data
	 */
	public function getData() {
		return $this->data;
	}

}