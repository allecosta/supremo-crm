<?php

session_start();

require_once './config/Connection.php';

if (isset($_POST['add'])) {
	$database = new Connection();
	$db = $database->open();

	try{
		$stmt = $db->prepare("INSERT INTO contacts (name, phone, cpf) VALUES (:name, :phone, :cpf)");
		$_SESSION['message'] = ($stmt->execute([':name' => $_POST['name'] , ':phone' => $_POST['phone'] , ':cpf' => $_POST['cpf']]) ) ? 'Contato adicionado com sucesso' : 'OPS! Não foi posssivel adicionar a informação';	
	
	} catch(PDOException $e) {
		$_SESSION['message'] = $e->getMessage();
	}

	$database->close();

} else {
	$_SESSION['message'] = 'OPS! Favor preencher o formulário de novo contato.';
}

header('location: index.php');
	