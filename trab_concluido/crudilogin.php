<?php 
    include_once("conexao.php"); //arquivo de conexao com o banco de dados


    session_start();  //iniciando sessão 

    $login = $_POST['login']; //variavel de login

    $senha = md5($_POST['senha']); //variavel de senha
	
    if ($login=="") {
    
    echo"preencha o campo login!!";
}if($senha==""){
    echo"preencha o campo senha!!";
}
      //verificando usuario comum!!
    $sql="SELECT * FROM usuario WHERE login_usuario='$login' and senha_usuario='$senha'";

    
    $result = mysqli_query($con,$sql); //usuario comum

    if(mysqli_num_rows($result)>0){
    	$_SESSION['login']=$login;
    	$_SESSION['senha']=$senha;
    	header("location:index_user.php");
    }else{
    	unset($_SESSION['login']);
    	unset($_SESSION['senha']);
    	header("location:index.php");
    }
	
    
    
	 
   
    






	



 ?>