<?php 

require_once("vendor/autoload.php");
use \Slim\Slim;
use \Hcode\Page;
use \Hcode\PageAdmin;

$app = new Slim();

$app->config('debug', true);

$app->get('/', function() {
    
    // teste de inicio do projeto
	//echo "OK";

	// teste da classe DB
	//$sql = new Hcode\DB\sql();
	//$results = $sql->select("SELECT * FROM tb_users");
	//echo json_encode($results);

	// Teste de páginas TPL
	$page = new Page();
	$page->setTpl("index");

});

$app->get('/admin', function() {
    echo "passei aqui";
	$page = new PageAdmin();
	$page->setTpl("index");

});


$app->run();

 ?>