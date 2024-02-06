<?php

interface maps2401ExampleDat {
	const htmlTitle = 'Goo Maps dynamic data';
	const mapCenterLat =  34.2929699;
	const mapCenterLng = -83.8449646; // 34.2929699,-83.8449646
	const mapZoom      = 12;
	const markers = [
		[ 34.2696248,
		 -83.819695,
		'mid1'
			],
		[34.2911338,-83.8364995, 'mid2'],
		[34.3003298,-83.8738416, 'mid3']
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