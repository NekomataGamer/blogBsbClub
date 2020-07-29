<?php
require 'environment.php';

global $config;
global $db;

$config = array();
if(ENVIRONMENT == 'development') {
	define("BASE_URL", "http://localhost/bsbClub/");
	$config['dbname'] = 'bsbClub_blog';
	$config['host'] = 'localhost';
	$config['dbuser'] = 'root';
	$config['dbpass'] = '';
} else {
	define("BASE_URL", "http://bsbclub.com.br/sistemblog/");
	$config['dbname'] = 'cosersal_bsbClub';
	$config['host'] = 'localhost';
	$config['dbuser'] = 'cosersal_alisonBucker';
	$config['dbpass'] = 'ZOInNyIcBuD9';
}

$db = new PDO("mysql:dbname=".$config['dbname'].";host=".$config['host'], $config['dbuser'], $config['dbpass']);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>