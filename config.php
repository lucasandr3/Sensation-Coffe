<?php
require 'environment.php';
ini_set ('display_errors', 1);
global $config;
global $db;

$config = array();
if(ENVIRONMENT == 'development') {
	define("BASE_URL", "http://localhost/Sensation-Coffe/");
	$config['dbname'] = 'sensation';
	$config['host'] = 'localhost';
	$config['dbuser'] = 'root';
	$config['dbpass'] = 'admin123';
} else {
	define("BASE_URL", "http://localhost/sen/");
	$config['dbname'] = 'nova_loja';
	$config['host'] = 'localhost';
	$config['dbuser'] = 'root';
	$config['dbpass'] = '';
}

$config['default_lang'] = 'pt-br';
$config['cep_origin'] = '38440182';

$config['pagseguro_seller'] = 'lucasvieiraandrade58@gmail.com';

$db = new PDO("mysql:dbname=".$config['dbname'].";charset=utf8;host=".$config['host'], $config['dbuser'], $config['dbpass']);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

\PagSeguro\Library::initialize();
\PagSeguro\Library::cmsVersion()->setName("SensationCoffee")->setRelease("1.0.0");
\PagSeguro\Library::moduleVersion()->setName("SensationCoffee")->setRelease("1.0.0");

\PagSeguro\Configuration\Configure::setEnvironment('sandbox');
\PagSeguro\Configuration\Configure::setAccountCredentials('lucasvieiraandrade58@gmail.com','A4A9EDB264324F52BBD1C3C1DFE8B006');
\PagSeguro\Configuration\Configure::setCharset('UTF-8');
\PagSeguro\Configuration\Configure::setLog('true','pagseguro.log');
?>