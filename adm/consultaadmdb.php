<?php 
include_once("conexao.php");
 ?>
<html>
<head>
	<title>CONSULTA</title>
	<meta charset="utf-8">
</head>
<body>
<center><h3>bem vindo ADM</h3></center>
<?php 
echo "<center>";
echo "<table border=1>";
echo "<tr>";
echo "<th>ID:</th>";
echo "<th>NOME:</th>";
echo "<th>SOBRENOME:</th>";
echo "<th>IDADE:</th>";
echo "<th>ENDEREÇO:</th>";
echo "<th>CIDADE:</th>";
echo "<th>LOGIN:</th>";
echo "<th>ESTADO:</th>";
echo "<th>DELETAR</th>";

echo"</tr>";



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
	
	echo"<tr>";
	echo "<td>".$id."</td>";
    echo "<td>".$nome."</td>";
    echo "<td>".$sobrenome."</td>";
    echo "<td>".$idade."</td>";
    echo "<td>".$endereco."</td>";
    echo "<td>".$cidade."</td>";
    echo "<td>".$login."</td>";
    echo "<td>".$estado."</td>";
   
	
    
    ?>
    
     <td><a href="del.php?del=<?php echo $id;?>" onClick="confirm('tem certeza que deseja deletar esse usuario? '); " >delete</a></td>
    
     
				    
				
				   
				    
			
<?php
}
echo"</tr>";
?>


<?php

echo"</table>";
 echo "</center>";
    
mysqli_close($con);
 ?>

</body>
</html>