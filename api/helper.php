<?php 
namespace Helper;

class Util
{
	// Lista de origens permitidas
	public static $whiteList = [
		// 'http://127.0.0.2:8000',
		'http://127.0.0.3:8000'
	];

	// Esse método valida a origem e retorna
	// a mesma caso seja permitida
	public static function getOriginAllowed($origin) {
		if (in_array($origin, self::$whiteList)) {
			return $origin;			
		}

		// caso a origem informada não seja permitida
		// o método retorna o domínio da própria API
		// bloqueando qualquer requisição de outra origem
		return 'http://127.0.0.1:8100';
	}
}
