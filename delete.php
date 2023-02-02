<?php

session_start();

require_once './config/Connection.php';

if (isset($_GET['id'])) {
	$database = new Connection();
	$db = $database->open();

	try {
		$sql = "DELETE FROM contacts WHERE id = '".$_GET['id']."'";
		
		$_SESSION['message'] = ($db->exec($sql)) ? 'Contato excluido com sucesso' : 'OPS! Não foi possivel excluir esta informação.';

	} catch(PDOException $e) {
		$_SESSION['message'] = $e->getMessage();
	}

	$database->close();

} else {
	$_SESSION['message'] = 'OPS! Selecione um contato para excluir primeiro.';
}

header('location: index.php');
