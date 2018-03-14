<html>
<head>
	<title>logar</title>
	<meta charset="utf-8">
	 <script type="text/javascript">
             function validar(){
             	var nome = f2.nome.value;
             	var senha = f2.nome.value;
             	if (nome=="") {
             		alert("preencha o campo nome!!");
             		f2.nome.focus();
             		return false;
                 }
                 if (senha==""){
                 	alert("preencha o campo senha!");
                 	f2.senha.focus();
                 	return false;
                 }
             }
	 </script>
</head>
<body>
<form action="crudilogin.php" method="post" name="f2" onsubmit="return validar()">
<legend>LOGIN:</legend>
<input type="email" name="login" required><br><br>

<legend>SENHA:</legend>
<input type="password" name="senha" required><br><br>

<input type="submit" value="logar" name="logar">

</form><br><br>

<a href="cadastro.php">cadastrar</a>

</body>
</html>