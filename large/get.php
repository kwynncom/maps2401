<?php

interface maps2401ExampleDat {
	const htmlTitle = 'Goo Maps dynamic data';
	const mapCenter = [34.0142563,-84.3627834];
	const mapZoom      = 12;
	const markers = [

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