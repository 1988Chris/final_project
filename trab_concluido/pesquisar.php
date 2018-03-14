<?php 
include_once("conexao.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Pesquisa de Cursos</title>
	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Krona+One" rel="stylesheet">
</head>

<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-info mb-3">
      <div class="container">
        <a href="index.php" class="navbar-brand h1 mb-0"><i class="fab fa-jenkins"></i>P&C Programação</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSite"><span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSite">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link" href="index.php"><b>INÍCIO</b></a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle"  data-toggle="dropdown" id="navDrop" href="cursos.php"><b>CURSOS</b></a>
              <div class="dropdown-menu">
                <a href="#" class="dropdown-item n1" data-toggle="modal" data-target="#siteModal">HTML 5 & CSS 3</a><hr>
                <a href="#" class="dropdown-item n0" data-toggle="modal" data-target="#siteModal">PHP</a><hr>
                <a href="#" class="dropdown-item n0" data-toggle="modal" data-target="#siteModal">JAVASCRIPT</a><hr>
                <a href="#" class="dropdown-item n0" data-toggle="modal" data-target="#siteModal">MYSQL</a><hr>
                <a href="#" class="dropdown-item n0" data-toggle="modal" data-target="#siteModal">PYTHON</a><hr>
                <a href="#" class="dropdown-item n6" data-toggle="modal" data-target="#siteModal">JAVA</a>
              </div>
            </li>
          </ul>

          <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown">
              <a href="" class="nav-link"  data-toggle="dropdown" id="navDrop"><i class="fas fa-user"></i><b>LOGIN</b></a>
                <div class="dropdown-menu">
                <form action="crudilogin.php" method="post">
                  <div class="form-group dropdown-item">
                    <label for="inputNome">NOME DO USUÁRIO</label>
                    <input type="text" name="login" id="inputNome" class="form-control">
                  </div>
                  <div class="form-group dropdown-item">
                    <label for="inputPass">SENHA</label>
                    <input name="senha" type="password" id="inputPass" class="form-control">
                  </div>
  				        <div class="form-group text-center">
                    <div class="col-12">
                      <button class="btn btn-success"><b>ENTRAR</b></button>
                    </div>
  				        </div>
                </div>
               </form> 
            </li>
              <a href="" class="nav-link mr-4" data-toggle="modal" data-target="#siteModal"><i class="fas fa-pencil-alt"></i><b>CADASTRE-SE</b></a>
          </ul>
			
          <form action="pesquisar.php" class="form-inline" name="pesquisar" method="post">
            <input type="text" class="form-control col-6 mr-2" placeholder="Buscar..." name="pesquisar">
            <button class="btn btn-dark" type="submit" >Ok</button>
          </form>
		  
		  </div> <!-- .collapse.navbar-collapse -->
	     </div> <!-- .container --> 
    </nav>

	<div class="container">
    <div class="jumbotron mb-3"> 
      <div class="row justify-content-sm-center">
        <div class="col-md-4 col-sm-6 mb-5 mt-5">
          <div class="card mb-5">
            <?php

              $pesquisar = $_POST['pesquisar'];
              $sql = "SELECT * FROM produto WHERE nome_produto LIKE '%$pesquisar%' LIMIT 5";
              $pesq = mysqli_query($con,$sql);
               

              while($dados = mysqli_fetch_array($pesq)){
            ?>
                
                <img src="img/<?php echo $dados['foto_produto']; ?>" alt="html&css" class="card-img-top">
                <div class="card-body">
                  <h4 class="card-target"><?php echo $dados['nome_produto']; ?></h4>
                  <h6 class="card-subtarget mb-2 text-muted">Curso para WebDev</h6>
                  <p class="card-text mt-5 text-success pdif"><?php echo "<b>PREÇO: R$ ".$dados['preco_produto']."</b>"; ?></p>
                </div>
                <div class="card-body card-curioso">
                  <?php echo '<a href="#" data-toggle="modal" data-target="#siteModal">Cadastre-se para comprar</a>'; ?>
                </div>
                <hr color="#000">
              
            
            <?php 
              
              }
            ?>

          </div>
        </div>
      </div>
    </div>
  </div>

	<div class="container-fluid mb-2"> 
        <div class="row"> 
            <div class="col-12 mb-3"><hr class="mt-0"></div>
            <div class="col-sm-4">
                <h3 class="text-info">P&C Programação</h3>
                <p>Site criado para o projeto final da matéria E-Commerce</p>
                <p>Ministrada pela Profª. Simone</p>
            </div>
            <div class="col-sm-4">
				        <h3 class="text-info">Menu</h3>
				        <div class="list-group">
				        	<a href="index.php" class="">Início</a>
				        	<a href="#" class="" data-toggle="modal" data-target="#siteModal">Cursos</a>
				        	<a href="#" class="" data-toggle="modal" data-target="#siteModal">Cadastre-se</a>
				        </div>
            </div>
            <div class="col-sm-4">
				        <h3 class="text-info">Social</h3>
				        <div class="btn-group-vertical btn-group-lg" role="group"> 
				        	<a href="https://facebook.com" target="_blank" class="btn btn-outline-primary text-left"><i class="fab fa-facebook-square"></i>facebook</a>
				        	<a href="https://twitter.com" target="_blank" class="btn btn-outline-info text-left"><i class="fab fa-twitter"></i>Twitter</a>
				        	<a href="https://instagram.com" target="_blank" class="btn btn-outline-warning text-left"><i class="fab fa-instagram"></i>Instagram</a>
				        </div>
            </div>
        </div>
    </div>

    <footer class="page-footer mt-2">
        <div class="footer-copyright text-center">  
            <div class="container-fluid">                  
              <div class="col-12"><hr></div>
              <p class="text-info">Desenvolvido por Christian dos Santos Silva & Pedro Palmerim Dantas</p>
            </div>
        </div>
    </footer>

    <!-- Modal -->
    <div class="modal fade right" id="siteModal" tabindex="-1" role="dialog">
      <div class="modal-dialog modal-lg" role="document" >
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title text-center">Cadastre-se agora e dê o primeiro passo para se tornar um excelente programador!</h5>
            <button type="button" class="close" data-dismiss="modal">
              <span>&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="container">
              <div class="row justify-content-center mb-5"> <!-- Row Ini -->
                <div class="col-sm-12 col-md-10 col-lg-8">  <!-- Col Ini -->
                  <form action="crudicadastro.php" method="post"> <!-- Form Ini -->
                    <div class="form-row mt-4"> <!-- Form-row 1 -->
                      <div class="col-sm-6 form-group">     
                      <label for="inputNome">Nome</label>
                      <input type="text" class="form-control" id="inputNome" placeholder="Primeiro nome" name="nome">
                      </div>
                      <div class="col-sm-6 form-group">     
                      <label for="inputSobrenome">Sobrenome</label>
                      <input type="text" class="form-control" id="inputSobrenome" placeholder="Sobrenome" name="sobrenome">
                      </div>
                    </div> <!-- /Form-row 1 -->
                    <div class="form-row">
                      <div class="col-sm-6 form-group">
                      <label for="inputLog">E-mail (para entrar no site)</label>
                      <input type="email" class="form-control" id="inputLog" placeholder="Seu E-mail" name="login">
                      </div>
                      <div class="col-sm-6 form-group">
                        <label for="inputPass">Senha (para entrar no site)</label>
                        <input type="password" class="form-control" id="inputPass" placeholder="Sua senha" name="senha">
                      </div>
                    </div>
                    <div class="form-row"> <!-- Form-row 2 -->
                      <div class="form-group col-sm-3">  
                      <label for="inputAge">Idade</label>
                      <input type="number" class="form-control" id="inputAge" placeholder="Sua idade" maxlenght="2" name="idade">
                      </div>
                    </div>
                    <div class="form-row"> <!-- Form-row 2 -->
                      <div class="form-group col-sm-12">  
                      <label for="inputEnd">Endereço</label>
                      <input type="text" class="form-control" id="inputEnd" placeholder="Endereço completo" name="endereco">
                      </div>
                    </div> <!-- /Form-row 2 -->
                    <div class="form-row"> <!-- Form-row 3 -->
                      <div class="col-sm-6 form-group">
                      <label for="inputCid">Cidade</label>
                      <input type="text" class="form-control" id="inputCid" placeholder="Sua Cidade" name="cidade">
                      </div>
                      <div class="form-group col-sm-6">
                      <label for="estado">Estado</label>
                        <select name="estado" class="form-control" id="estado">
                          <?php 
                              $est = "SELECT * FROM estado";
                              $res = mysqli_query($con,$est);

                              while($dados = mysqli_fetch_array($res)){
                              $id = $dados['idestado'];
                                $estado = $dados['nome_estado'];
                                echo "<option value='$id'>$estado</option>";
                              }

                              ?>

                        </select>
                      </div>
                    </div> <!-- /Form-row 3 -->
                    <div class="form-row"> <!-- Form-row 5 -->  
                      <button class="btn btn-primary justify-content-center">Enviar</button>
                      <a tabindex="0" class="btn btn-secondary ml-2 justify-content-center" role="button" data-toggle="popover" data-placement="right" data-trigger="focus" title="What?!" data-content="Precisa de ajuda para preencher um simples formulário???" style="margin: 0 auto">Ajuda</a>
                    </div> <!-- /Form-row 5 --> 
                  </form> <!-- /Form Ini -->
                </div> <!-- /Col Ini -->
              </div> <!-- /Row Ini -->
            </div> <!-- /.container -->
          </div> <!-- /.modal-body -->
          <div class="modal-footer">
            <button class="btn btn-danger" type="button" data-dismiss="modal">Fechar</button>
          </div>
        </div> <!-- modal-content -->
      </div> <!-- modal-dialog -->
    </div> <!-- .modal -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

  <script>  
    $(document).ready(function () {
        $('[data-toggle="popover"]').popover();
    });
  
  </script>	
</body>
</html>
