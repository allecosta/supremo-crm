<?php

	session_start();

	require_once './config/Connection.php';

	if(isset($_POST['edit'])) {
		$database = new Connection();
		$db = $database->open();

		try {
			$id = $_GET['id'];
			$firstname = $_POST['name'];
			$lastname = $_POST['phone'];
			$address = $_POST['cpf'];

			$sql = "UPDATE contacts SET name = '$name', phone = '$phone', cpf = '$cpf' WHERE id = '$id'";
			$_SESSION['message'] = ( $db->exec($sql) ) ? 'Contato atualizado com sucesso' : 'OPS! Não foi possivel atualizar esta informação.';

		} catch(PDOException $e) {
			$_SESSION['message'] = $e->getMessage();
		}
		
		$database->close();

	} else {
		$_SESSION['message'] = 'OPS! Favor preencher o formulário de edição.';
	}

	header('location: index.php');
