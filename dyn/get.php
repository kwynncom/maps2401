<?php

interface maps2401ExampleDat {
	const htmlTitle = 'Goo Maps dynamic data';
	const mapCenterLat =  34.2726562;
	const mapCenterLng = -83.8332973;
	const mapZoom      = 12;
	const markers = [
		[ 34.2696248,
		 -83.819695,
		'mark1'
			],
		[34.2911338,-83.8364995, 'mark2'],
		[34.3003298,-83.8738416, 'lake1']
	];
	
	public static function get(string $k) : mixed;
}

class maps2401GetDatCl implements maps2401ExampleDat {
	public static function get(string $k) : mixed {
		return self::getI($k);
	}
	
	private static function getI(string $k) : mixed {
        $oClass = new ReflectionClass(__CLASS__);
        $cs = $oClass->getConstants();		
		return $cs[$k];

	}
}