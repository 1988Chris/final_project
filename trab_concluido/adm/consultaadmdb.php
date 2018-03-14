<?php 
include_once("conexao.php");
 ?>
<html>
<head>
	<title>CONSULTA</title>
	<meta charset="utf-8">
	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Krona+One" rel="stylesheet">
</head>
<body>
	<h3 class="text-center mb-5 mt-5">Bem-vindo, ADMINISTRADOR!</h3>		
	
	<div class="container-fluid">
		<table class="table table-striped text-center">
		  <thead>
			<tr>
			  <th>#</th>
			  <th>Nome</th>
			  <th>Sobrenome</th>
			  <th>Idade</th>
			  <th>Endereço</th>
			  <th>Cidade</th>
			  <th>Login</th>
			  <th>Estado</th>
			  <th>Deletar</th>
			</tr>
		  </thead>
		  
		  <?php
		
			$sql = "SELECT * FROM usuario";

			$resultado = mysqli_query($con, $sql) or die("ERRO");	

			while($dados = mysqli_fetch_array($resultado)){
			
			$nome = $dados['nome_usuario'];
			$sobrenome = $dados['sobrenome_usuario'];
			$idade = $dados['idade_usuario'];
			$endereco = $dados['endereco_usuario'];
			$cidade = $dados['cidade_usuario'];
			$estado = $dados['estado_idestado'];
			$login = $dados['login_usuario'];
			$id= $dados['idusuario'];
		  ?> 
			<tbody>
				<tr>
					<th scope="row"><?php echo $id; ?></th>
					<td><?php echo $nome; ?></td>
					<td><?php echo $sobrenome; ?></td>
					<td><?php echo $idade; ?></td>
					<td><?php echo $endereco; ?></td>
					<td><?php echo $cidade; ?></td>
					<td><?php echo $login; ?></td>
					<td><?php echo $estado; ?></td>
					<td><a href="del.php?del=<?php echo $id;?>" onClick="return confirm('tem certeza que deseja deletar esse usuario? ');" class="btn btn-danger">deletar</a></td>
				</tr>
			</tbody>	
			<?php
			}
			?>

		</table>
		<a href="../index_adm.php"><button class="btn btn-info mb-3">Voltar à pagina anterior</button></a>
	</div>
		
			<?php
			mysqli_close($con);
			?>
	
</body>
</html>