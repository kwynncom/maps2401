<?php

require_once('/opt/kwynn/kwutils.php');
require_once('interface.php');

class maps2401GetRealDatCl  {
	
	const htmlTitle = 'Goo Maps dynamic data';
	
	private static function getDat() : array {
		kwas(is_readable(KW_MAPS_2401_GET_DAT_FILE), 'no dat file - maps 2234');

		return getMaps2401Dat();
	}
	
	public static function get(string $k) : mixed {
		if ($k !== 'markers') return self::getI($k);
		return self::getDat();
	}
	
	private static function getI(string $k) : mixed {
        $oClass = new ReflectionClass(__CLASS__);
        $cs = $oClass->getConstants();		
		return $cs[$k];

	}
}