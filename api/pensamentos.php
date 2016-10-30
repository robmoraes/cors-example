<?php 

include('helper.php');

$allow_origin = Helper\Util::getOriginAllowed(
	$_SERVER['HTTP_ORIGIN']
);

header( 'Content-Type: application/json' );
header( 'Access-Control-Allow-Origin: '.$allow_origin );
header( 'Access-Control-Allow-Headers: x-token, x-other' );

echo json_encode([
	[ 
		'autor'=>'desconhecido',
		'pensamento'=>'A zueira não tem limites.',
	],
	[ 
		'autor'=>'desconhecido',
		'pensamento'=>'Hoje é dia de maldade.',
	],
]);