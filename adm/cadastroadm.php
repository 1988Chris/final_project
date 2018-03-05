<?php 
include_once("conexao.php");
 ?>
<html>
<head>
	<title>CADASTROPHP</title>
	<script type="text/javascript">
           function validar(){
           	var nome = f.nome.value;
           	var sobrenome = f.sobrenome.value;
           	var idade = f.idade.value;
           	var endereco = f.endereco.value;
           	var cidade = f.cidade.value;
           	var login  = f.login.value;
           	var senha = f.senha.value;

           	if (nome=""){
           		alert ('preencha o campo nome!!');
           		f.nome.focus();
           		return false;
           	}
           	if(sobrenome==""){
           		alert('preencha o campo sobrenome!!');
           		f.sobrenome.focus();
           		return false
           	}if(idade=="" && idade.length > 3){
           		alert('preencha corretamente o campo idade!!');
           		f.idade.focus();
           		return false;
           	}
           	if(endereco=""){
           		alert('preencha o campo endereço!!');
           		f.endereco.focus();
           		return false;
           	}
           	if(cidade=""){
           		alert('preencha o campo cidade!!');
           		f.cidade.focus();
           		return false;
           	}
           	if(login==""){
           		alert('preencha o campo login!!');
           		f.login.focus();
           		return false;
           	}
           	if(senha=="") {
           		alert('preencha o campo senha!!');
           		f.senha.focus();
           		return false;
           	}
           }
	</script>
</head>
<body>
<form action="crudicadastroadm.php" method="post" name="f" onsubmit="validar()">
  	<legend>NOME:</legend>
	<input type="text" name="nome" required><br><br>

		<legend>SOBRENOME:</legend>
	<input type="text" name="sobrenome" required><br><br>

		<legend>IDADE:</legend>
	<input type="number" name="idade" required><br><br>

		<legend>ENDEREÇO:</legend>
	<input type="text" name="endereco" required><br><br>

		<legend>ESTADO:</legend>
	<select name="estado">
		<?php 
		$est = "SELECT * FROM estado";
		$res = mysqli_query($con,$est);

		while($dados = mysqli_fetch_array($res)){
		$id = $dados['idestado'];
    	$estado = $dados['nome_estado'];
    	echo "<option value='$id'>$estado</option>";
		}

 		?>
	</select><br><br>

		<legend>CIDADE</legend>
	<input type="text" name="cidade" required><br><br>

		<legend>LOGIN:</legend>
	<input type="text" name="login" required><br><br>

		<legend>SENHA:</legend>
	<input type="password" name="senha" required><br><br>


     


	<input type="submit" value="cadastra" name="cadastra">
</form>

</body>
</html>