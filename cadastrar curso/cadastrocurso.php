<!DOCTYPE html>
<head>
	<meta charset="utf-8">
	<title>Cadastro de cursos</title>
	<script type="text/javascript">
           function validar(){
           	var nome = f.nome.value; 
           	var desc = f.desc.value
           	var preco = f.preco.value;
           	var foto = f.foto.value;

           	if (nome =="") {
           		alert('preencha o campo nome');
           		f.nome.focus();
                return false;
           	}if (desc=="") {
           		alert('preencha o campo descricão');
           		f.desc.focus();
           		return false;
           	}if (preco="") {
           		alert('preencha o campo preço');
           		f.preco.focus();
           		return false;
           	}if (foto=="") {
           		alert('insira um arquivo!');
           		f.foto.focus();
           		return false;
           	}  
           }
	</script>
</head>
<body>
	<h1>Cadastrar os cursos</h1>
	<hr color="red" width="80%">
	
	<!-- o form precisa ser habilitado a enviar arquivo: <enctype="multipart/form-data"> = habilita o form a enviar arquivo para o db -->
	<form action="cadastraproduto.php" method="post" enctype="multipart/form-data" name="f"onsubmit="return validar()">
		nome:<br/><input type="text" name="nome" required="required"/><br/><br/>
	    descricao:<br/><input type="text" name="desc" required="required"/><br/><br/>
		preco:<input type="number" name="preco" required="required"/><br/><br/>
			
		Foto:<br/><input type="file" name="foto" required="required"><br/><br/>
		
		<input type="submit" value="Cadastrar"/>
	</form>
</body>
</html>