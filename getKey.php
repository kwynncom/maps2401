<?php

require_once('/opt/kwynn/kwutils.php'); // https://github.com/kwynncom/kwynn-php-general-utils

class GooMapsAPIKeyAccess2401 {
	
const gmkf = '/var/kwynn/maps2401/maps2401_kwynncom_Goo_api_key.txt';

public static function get() : string {
	try {
		kwas(is_readable(self::gmkf), 'Goo key file Maps unreadable');
		$t = trim(file_get_contents(self::gmkf));
		kwas($t && is_string($t), 'Goo Maps key file bad data 1 - 2230');
		return $t;
	} catch(Exception $ex) {
		return '';
	}
} // func
} // class