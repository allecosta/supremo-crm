<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<title>Supremo CRM</title>
</head>
<body>
<div class="container">
	<h1 class="page-header text-center">Sistema Supremo CRM</h1>
	<div class="row">
		<div class="col-sm-8 col-sm-offset-2">
			<a href="#addnew" class="btn btn-primary" data-toggle="modal"><span class="glyphicon glyphicon-plus"></span> Novo</a>
            <?php 

                session_start();

                if(isset($_SESSION['message'])) {  ?>
                   
                    <div class="alert alert-info text-center" style="margin-top:20px;">
                        <?= $_SESSION['message']; ?>
                    </div>

                    <?php

                    unset($_SESSION['message']);
                }
            ?>
			<table class="table table-bordered table-striped" style="margin-top:20px;">
				<thead">
					<th class="text-center">#</th>
					<th class="text-center">Nome</th>
					<th class="text-center">Telefone</th>
					<th class="text-center">CPF</th>
					<th class="text-center">Ação</th>
				</thead>
				<tbody>
					<?php
						
						require_once './config/Connection.php';

						$database = new Connection();
    					$db = $database->open();

						try{	
						    $sql = 'SELECT * FROM contacts';
						    foreach ($db->query($sql) as $row) { ?>
						    	
						    	<tr>
						    		<td><?php echo $row['id']; ?></td>
						    		<td><?php echo $row['name']; ?></td>
						    		<td><?php echo $row['phone']; ?></td>
						    		<td><?php echo $row['cpf']; ?></td>
						    		<td>
						    			<a href="#edit_<?= $row['id']; ?>" class="btn btn-success btn-sm" data-toggle="modal"><span class="glyphicon glyphicon-edit"></span> Editar</a>
						    			<a href="#delete_<?= $row['id']; ?>" class="btn btn-danger btn-sm" data-toggle="modal"><span class="glyphicon glyphicon-trash"></span> Excluir</a>
						    		</td>

						    		<?php require './modals/edit_delete_modal.php'; ?>
						    	</tr>
						    	<?php 
						    }
						} catch(PDOException $e){
							echo "OPS! Falha na conexão: " . $e->getMessage();
						}

						$database->close();

					?>
				</tbody>
			</table>
		</div>
	</div>
</div>

<?php require './modals/add_modal.php'; ?>

<script src="bootstrap/js/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>

</body>
</html>