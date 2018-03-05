<?php 
include_once("conexao.php");

if(isset($_GET['del']))
{
	$sql = "DELETE FROM usuario WHERE idusuario=".$_GET['del'];
	$del = mysqli_query($con,$sql);
	mysqli_close($con);
	header("Location:consultaadmdb.php");

	}




 ?>