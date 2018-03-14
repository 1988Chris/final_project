<!DOCTYPE html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Gravar Dados do Formulário</title>
</head>
<body>
	<?php
		// pegar dados da tela //
		$nome = $_POST["nome"];
		$desc = $_POST["desc"];
		$preco = $_POST["preco"];
		$foto = $_FILES["foto"]; // array
		
		if ($nome=="") {
			echo"preencha o campo nome!";
		}if ($desc=="") {
			echo"preencha o campo desc!";
		}if ($preco=="") {
			echo"preencha o campo preço!";
		}if ($foto=="") {
			echo "insira um arquivo!";
		}
		/*
		 array:
		 
		  ["name"]=> string(12) "Penguins.jpg" 
		  ["type"]=> string(10) "image/jpeg" 
		  ["tmp_name"]=> string(24) "C:\xampp\tmp\php1B62.tmp" 
		  ["error"]=> int(0) 
		  ["size"]=> int(777835)
		
		*/
		
		// verificar a extensão do arquivo:
		$ext = explode(".", $foto["name"]); // [foto][crisantemo][jpg]
		$ext = array_reverse($ext); // [jpg][crisantemo][foto]
		$ext = $ext[0];
		
		if ($ext != "jpg" && $ext != "jpeg" && $ext != "png" && $ext != "gif") {
			echo "Arquivo inválido!";
		} else if ($foto["size"] > 1024*1000) {
			echo "Tamanho excedido!";
		} else {
		
		// abrir conexão com o banco:
		include_once("conexao.php");
		
		$nomefoto = date("YmdHis").rand(0000,9999).".".$ext;
		// montar a instrução para gravar no banco:
		$sql = "INSERT INTO produto values(null, '".$nome."', '".$desc."', '".$preco."',  '".$nomefoto."')";
		
		// 3 ----------->> Gravar no banco:
		
		
		if (mysqli_query($con,$sql)) {
			echo "Gravado com sucesso!";
			// criar o arquivo no Servidor:
			move_uploaded_file ($foto["tmp_name"],"../img/".$nomefoto);
		} else {
			echo "Erro ao gravar!";
		}
		
		//4 --->> Fechar conexão com o banco:
		mysqli_close($con);
		
		}
	?>
</body>
</html>