<?php

namespace ExactTarget;

class ET_CurlFactory {

	protected static $default_options = array();

	public static function setDefaultOptions(array $options) {
		self::$default_options = $options;
	}

	public static function create($url = NULL) {
		$curl = curl_init($url);
		if (!empty(self::$default_options)) {
			curl_setopt_array($curl, self::$default_options);
		}
		return $curl;
	}

	private function __construct() {}
}
