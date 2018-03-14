<?php 
include_once("conexao.php");
 ?>
<html>
<head>
<?php 

session_start();
if((!isset ($_SESSION['login']) == true) and (!isset ($_SESSION['senha']) == true)){
    unset($_SESSION['login']);
    unset($_SESSION['senha']);
    header('location:index.php');
    }
 
$logado = $_SESSION['login'];

if (isset($_GET['sair'])){
    unset($_SESSION['login']);
    unset($_SESSION['senha']);
    session_destroy();
    header('location:login.php');
}
?>

  

<meta charset="utf-8"/>
<title>SISTEMA WEB</title>
</head>
 
<body>
<table width="800" height="748" border="1">
  <tr>
    <td><a href="login.php?sair">sair(x)</a><td><a href="Carrinho.php">Carrinho</a><br>
    <td height="90" colspan="2" bgcolor="#CCCCCC">
    
    <form action="pesquisar.php" method="post">
      <input type="text" name="pesquisar" placeholder="pesquisar">
      <input type="submit" value="search">
    </form>
    <?php
    echo "bem vindo $logado";
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