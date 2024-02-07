<?php

require_once('/opt/kwynn/kwutils.php');

define('KW_MAPS_2401_GET_DAT_FILE', '/var/kwynn/maps2401/get.php');

class maps2401GetRealDatCl  {
	
	const htmlTitle = 'Goo Maps dynamic data';
	const mapCenter = [34.0142563,-84.3627834];
	const mapZoom      = 10;
	const markers = [

	];
	
	
	private static function getDat() : array {
		kwas(is_readable(KW_MAPS_2401_GET_DAT_FILE), 'no dat file - maps 2234');
		require_once(KW_MAPS_2401_GET_DAT_FILE);
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