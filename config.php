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
	define("BASE_URL", "http://bsbclub.com.br/sistemblog/");
	define("PATH_SITE", "media/");
	$config['dbname'] = 'cosersal_bsbClub';
	$config['host'] = 'localhost';
	$config['dbuser'] = 'cosersal_alisonBucker';
	$config['dbpass'] = 'ZOInNyIcBuD9';
}

$db = new PDO("mysql:dbname=".$config['dbname'].";host=".$config['host'], $config['dbuser'], $config['dbpass']);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// Falta fazer
// upload de icones das categorias
// Paginação de Posts e categorias


// filtro de categorias
// pagina de categorias
// Paginação de posts

// typewrite das paginas
// slider em todas as paginas
// corrigir imagens gerais

// sistema de newslatter
// pagina de contato funcional



// FEITOS

// editar/excluir posts
// editar/excluir categorias
// upload de imagens para o slider
// Corrigir editar nome do autor

//Campo de texto inserir e editar Post (atualização EDITOR DE TEXTO)
?>