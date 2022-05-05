<?php
	define('ROOT_PATH', $_SERVER['DOCUMENT_ROOT'].'/');
	//define('URL_PRIVATE', ROOT_PATH.'/dante/Serigrafia-UVluz');	
	//define('APP_DOMAIN', 'http://localhost/dante/Serigrafia-UVluz');
echo '<pre>';
echo ROOT_PATH;
echo '</pre>';
	define('URL_PRIVATE', 'http://agenciamayor.com/portfolio/Serigrafia-UVluz');	
	define('APP_DOMAIN', 'http://agenciamayor.com/portfolio/Serigrafia-UVluz');
	define('TPL_PATH', URL_PRIVATE.'/public/tpl');
	//define('PUBLIC_PATH', 'http://localhost/dante/Serigrafia-UVluz');
	define('CSS_PATH', APP_DOMAIN.'/public/css');
	define('IMAGE_PATH', APP_DOMAIN.'/public/images');
	define('JS_PATH', APP_DOMAIN.'/public/js');	
?>