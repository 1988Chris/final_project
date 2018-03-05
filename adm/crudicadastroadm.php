<?php
include_once("conexao.php");

 
$nome=$_POST['nome'];
$sobrenome=$_POST['sobrenome'];
$idade=$_POST['idade'];
$endereco=$_POST['endereco'];
$estado=$_POST['estado'];
$cidade=$_POST['cidade'];
$login=$_POST['login'];
$senha=md5($_POST['senha']);
if ($nome=="") {
	echo"preencha o campo nome!";
}if ($sobrenome=="") {
	echo"preencha o campo sobrenome!";
}if ($idade=="") {
	echo"preencha o campo idade";
}if ($endereco=="") {
	echo"preencha o campo endereço!!";
}if ($cidade=="") {
	echo"preencha o campo estado!";
}if ($login=="") {
	 echo"preencha o campo login!";
}if ($senha=="") {
	echo"preencha o campo senha!!":
}

$sql = "INSERT INTO usuario(nome_usuario, sobrenome_usuario, idade_usuario, endereco_usuario, cidade_usuario, login_usuario, senha_usuario, estado_idestado)values('$nome', '$sobrenome', '$idade', '$endereco', '$cidade', '$login', '$senha', '$estado')";

$in = mysqli_query($con,$sql);

header("location:pagadm.php");

mysqli_close($con);









 ?>