<?php 
include_once("conexao.php");
 ?>
<html>
<head>
	
	<meta charset="utf-8">

<?php
session_start();
if((!isset ($_SESSION['login']) == true) and (!isset ($_SESSION['senha']) == true))
{
    unset($_SESSION['login']);
    unset($_SESSION['senha']);
    header('location:loginadm.php');
    }
 if (isset($_GET['sair'])) {
      unset($_SESSION['$login']);
      unset($_SESSION['$senha']);
      session_destroy();
      header('location:loginadm.php');
    }   
 
$logado = $_SESSION['login'];
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>SISTEMA WEB</title>
</head>
 
<body>
<table width="800" height="748" border="1">
  <th>
  Consultar o banco de dados!
  <a href="consultaadmdb.php">clique aqui</a>
  </th>
   <td><a href="loginadm.php">login</a><br><a href="carrinho.php">carrinho</a><br><a href="loginadm.php?sair">sair(x)</a></td>
  
  <tr>
   
    <td height="90" colspan="2" bgcolor="#CCCCCC">
    <form action="pesquisaradm.php" method="post">
      <input type="text" name="pesquisar" placeholder="pesquisar">
      <input type="submit" value="search">
    </form>
    <?php
    echo "Bem vindo $logado";
    ?>
    </td>
  </tr>
  <tr>
    <td width="103" height="410" bgcolor="#CCCCCC">MENU AQUI</td>
    <td width="546">CONTEUDO E ICONES AQUI</td>
  </tr>
  <tr>
    <td colspan="2" bgcolor="#000000"> </td>
  </tr>
</table>
</body>
</html>




