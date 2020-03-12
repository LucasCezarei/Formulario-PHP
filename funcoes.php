<?php

require("config.php");

$retorno = array();

if($_GET['acao'] == 'grupos'){
	$sql = $pdo->prepare("SELECT * FROM grupos");
	$sql->execute();	
	$n = 0;
	$retorno['qtd'] = $sql->rowCount();
	while($ln = $sql->fetchObject()){
		$retorno['grupos'][$n] = $ln->grupos;
		$retorno['id'][$n] 	 = $ln->id;
		$n++;
	}	
}

if($_GET['acao'] == 'clientes'){
	$id = $_GET['id'];
	$sql = $pdo->prepare("SELECT * FROM clientes WHERE id_grupos = :id");
	$sql->bindValue(":id", $id, PDO::PARAM_INT);
	$sql->execute();
	$n = 0;
	$retorno['qtd'] = $sql->rowCount();

	while($ln = $sql->fetchObject()){
		$retorno['clientes'][$n] = $ln->clientes;
		$retorno['id'][$n] 	   = $ln->id;
		$n++;
	}	
}

if($_GET['acao'] == 'cnpj'){
	$id = $_GET['id'];
	$sql = $pdo->prepare("SELECT * FROM cnpj WHERE id_clientes = :id");
	$sql->bindValue(":id", $id, PDO::PARAM_INT);
	$sql->execute();
	$n = 0;
	$retorno['qtd'] = $sql->rowCount();

	while($ln = $sql->fetchObject()){
		$retorno['cnpj'][$n] = $ln->cnpj;
		$retorno['id'][$n] 	   = $ln->id;
		$n++;
	}	
}

if($_GET['acao'] == 'os'){
	$id = $_GET['id'];
	$sql = $pdo->prepare("SELECT * FROM os WHERE id_cnpj = :id");
	$sql->bindValue(":id", $id, PDO::PARAM_INT);
	$sql->execute();
	$n = 0;
	$retorno['qtd'] = $sql->rowCount();

	while($ln = $sql->fetchObject()){
		$retorno['os'][$n] = $ln->os;
		$retorno['id'][$n] 	   = $ln->id;
		$n++;
	}	
}

die(json_encode($retorno));