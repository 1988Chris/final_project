<?php 
    include_once("conexao.php"); 


    session_start(); 


 

    $login = $_POST['login']; 

    $senha = md5($_POST['senha']); 
    
    if ($login=="") {
    
        echo"preencha o campo login!!";
    }if($senha==""){
        echo"preencha o campo senha!!";
    }

      
    $sql="SELECT * FROM usuario WHERE login_usuario='$login' and senha_usuario='$senha'";
    
    $result = mysqli_query($con,$sql); //usuario comum

    if(mysqli_num_rows($result)>0){
    	$_SESSION['login']=$login;
    	header("location:pagadm.php");
    }else{
    	unset($_SESSION['login']);
    	unset($_SESSION['senha']);
    	header("location:cadastroadm.php");
    }
    mysqli_close($con);
 ?>