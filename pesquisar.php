<?php 
include_once("conexao.php");

$pesquisar = $_POST['pesquisar'];

$sql = "SELECT * FROM produto WHERE nome_produto LIKE '%$pesquisar%' LIMIT 5";

$pesq = mysqli_query($con,$sql);

while($dados = mysqli_fetch_array($pesq)){
      echo "<b>NOME:</b>".$dados['nome_produto']."<br><br>";
      echo "<b>DESCRIÇAO:</b>".$dados['descricao_produto']."<br><br>";
?>      
     <img width="100px" height="100px" src="img/<?php echo $dados['foto_produto']; ?>"."<br><br>"
			
			
<?php      
      echo "<b>PREÇO:</b>".$dados['preco_produto']."<br><br>";
      echo '<a href="carrinho.php?acao=add&id='.$dados['idproduto'].'">adicionar ao carrinho</a>';
?>     
    <hr color="000000"><br><br>
<?php	
}
?>