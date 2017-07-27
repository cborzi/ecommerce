<?php 

require_once("vendor/autoload.php");

$app = new \Slim\Slim();

$app->config('debug', true);

$app->get('/', function() {
    
    // teste de inicio do projeto
	//echo "OK";

	// teste da classe DB
	$sql = new Hcode\DB\sql();
	$results = $sql->select("SELECT * FROM tb_users");
	echo json_encode($results);

});

$app->run();

 ?>