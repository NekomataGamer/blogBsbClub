<?php
require 'environment.php';

global $config;
global $db;

$config = array();
if(ENVIRONMENT == 'development') {
	define("BASE_URL", "http://localhost/bsbClub/");
	define("PATH_SITE", "media/");
	$config['dbname'] = 'bsbClub_blog';
	$config['host'] = 'localhost';
	$config['dbuser'] = 'root';
	$config['dbpass'] = '';
} else {
	define("BASE_URL", "http://quarentenafit.dopaminefit.com.br/");
	define("PATH_SITE", "media/");
	$config['dbname'] = 'lojanu28_bsb';
	$config['host'] = 'localhost';
	$config['dbuser'] = 'lojanu28_bucker';
	// $config['dbpass'] = 'Bm}YSYrkw_a{';
	$config['dbpass'] = 'ccsR60RfD6?E';
}

$db = new PDO("mysql:dbname=".$config['dbname'].";host=".$config['host'], $config['dbuser'], $config['dbpass']);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// Falta fazer
// Paginação de Posts e categorias


// filtro de categorias
// pagina de categorias
// Paginação de posts

// typewrite das paginas
// slider em todas as paginas


// sistema de newslatter
// pagina de contato funcional



// FEITOS

// editar/excluir posts
// editar/excluir categorias
// upload de imagens para o slider
// Corrigir editar nome do autor
// corrigir imagens gerais
// upload de icones das categorias

//Campo de texto inserir e editar Post (atualização EDITOR DE TEXTO)
?>