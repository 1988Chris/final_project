<html>
<?php 
session_start();

$logado = $_SESSION['login'];

echo"bem-vindo ao seu carrinho de compra, $logado!<br><br>";



if (!isset($_SESSION['carrinho'])){
	$_SESSION['carrinho'] = array();
}



if (isset($_GET['acao'])){
	/*Adiciona ao carrinho*/
	if ($_GET['acao']=='add') {
		 $id = intval($_GET['id']);
		 if(!isset($_SESSION['carrinho'][$id])){
		 	 $_SESSION['carrinho'][$id]=1;
		 }else{
		 	 $_SESSION['carrinho'][$id]+=1;
		 }
	     }
       }

  if (isset($_GET['del'])){
       $del = $_GET['del'];
       unset($_SESSION['carrinho'][$del]);
       }     

     
if(count($_SESSION['carrinho'])==0){
	echo"<tr><td colpan='5'>Não há produto no carrinho</td></tr>";
}else{
	include_once("conexao.php");
  $total="";
	foreach($_SESSION['carrinho'] as $id => $qtd):

		$sql = "SELECT * FROM produto WHERE idproduto='$id'";
		  $qr= mysqli_query($con,$sql)or die(mysqli_error());
		  $in = mysqli_fetch_assoc($qr);
          $idprod = $in['idproduto'];
          $nome = $in['nome_produto'];
          $desc = $in['descricao_produto'];
          $foto = $in['foto_produto'];
          $preco = number_format($in['preco_produto'], 2, ',', '.');
          $sub = number_format($in['preco_produto']*$qtd, 2, ',', '.');
         echo"<table border='1px'>";
          echo "<tr>";
              echo"<td>$nome</td><br>";
              echo"<td>$desc</td><br>";
              echo"<td>R$$preco</td><br>";
              echo"<td>$sub</td><br>";
              $total+=$preco*$qtd;
             ?>
			   <img width="100px" height="100px" src="../img/<?php echo $in['foto_produto']; ?>"."<br><br>";
           <?php
         
              echo"<td><input type='text' size='3px' name='prod[".$id."]' value=".$qtd."></td>";
              echo"<td><a href='carrinho.php?del=".$id."'>remover</a></td>";
                echo"<td><a href='pagprincipal.html'>continuar comprando</a></td>";
              
      
         echo"</tr>";
       
	endforeach;
	echo"<tr>";
	
	echo"<td colspan='6' align='right'>TOTAL:R$".$total."</td>";
	echo"</tr>";
  echo"</table>"; 
}
 ?>
 <?php 
 if (isset($_POST['enviar'])){
  
  
    $in = "INSERT INTO venda(produto_idproduto, quantidade_venda, nome_venda)VALUES('$idprod', '$qtd', '$logado')";
  
    $inserir = mysqli_query($con,$in);
 	
  echo"<script>alert('venda finalizada com sucesso!!')</script>";
  
 }
 session_destroy();
  ?>
 <body>
 <form action="" enctyope="multiparte/form-data" method="post">
 		<input type="submit" value="finalizar pedido" name="enviar">
 </form>
 </body>

 </html>
