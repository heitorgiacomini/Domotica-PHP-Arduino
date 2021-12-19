<?php
	error_reporting(0);
	ini_set("display_errors", 0 ); //não retorna erros
	require 'config.php'; 
	require 'connection.php'; #connection deve ser chamado antes do database 
	require 'database.php';
	$mes = date('mY');
	$request =  @DBRead('mes',"Where mesdoano = {$mes}", ' tempo, valor, vezes');
	//var_dump($request);	
	$valorres = array_values($request[0]);
	//echo '<br>';
	//var_dump ($valorres);
	//$valor = floatval($valorres[0]); 
	//echo '<br>';
	//echo $valor;
	$quantida[] = floatval($valorres[0]); 
	$quantida[] = floatval($valorres[1]); 
	$quantida[] = floatval($valorres[2]); 
	
	echo @json_encode($quantida);
?>