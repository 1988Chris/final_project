<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Krona+One" rel="stylesheet">


    <title>Cursos para Programação P&C</title>
     <?php
     include("conexao.php");
         session_start();
         
           
          $logado = $_SESSION['login'];


          if (isset($_GET['sair'])) {
              unset($_SESSION['login']);
              unset($_SESSION['senha']);
              session_destroy();
              header('location:index.php');
          }
    ?>
    
  </head>
  <body>


    <nav class="navbar navbar-expand-lg navbar-dark bg-info mb-5">
      <div class="container">
        <a href="index_user.php" class="navbar-brand h1 mb-0"><i class="fab fa-jenkins"></i>P&C Programação</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSite"><span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSite">
          <ul class="navbar-nav mr-5">
            <li class="nav-item">
              <a class="nav-link" href="index_user.php"><b>INÍCIO</b></a>
            </li>
          </ul>

          <ul class="navbar-nav">
            <li class="nav-item dropdown">
              <a href="#" class="nav-link dropdown-toggle"  data-toggle="dropdown" id="navDrop"><i class="far fa-user-circle"></i><b>OLÁ, <?php echo $logado ?></b></a>
                <div class="dropdown-menu">
                  <div class="form-group dropdown-item">
                    <p class="text-center">DESEJA SAIR?</p>
                  </div>
  				        <div class="form-group text-center">
                    <div class="col-12">
                      <a href="index.php?sair"><button type="submit" class="btn btn-danger"><b>SAIR</b></button></a>
                    </div>
                  </div>
                </div>
            </li>
          </ul>
			
          <form action="pesquisar.php" class="form-inline" method="post">
            <input type="search" class="form-control ml-4 mr-2" placeholder="Buscar..." name="pesquisar">
            <button class="btn btn-dark" type="submit">Ok</button>
          </form>
		  </div> <!-- .collapse.navbar-collapse -->
 	     </div> <!-- .container -->
        <a href="#" class="nav-link navbar-nav" data-toggle="modal" data-target="#siteModal" style="color: #fff"><b>CARRINHO</b><i class="fas fa-shopping-cart fa-2x mr-2" style="color: #fff"></i></a>   
    </nav>

    <div class="container"> 
        <div class="row justify-content-center mb-5">  
            <h2>Todos os nossos cursos por um precinho camarada!</h2>
        </div>
    </div>

    <div class="container-fluid">
      <div class="jumbotron"> 
	    <div class="row justify-content-sm-center">
        <div class="col-md-4 col-sm-6 mb-5 mt-5">
          <div class="card">
            <img src="img/slide1.jpg" alt="html" class="card-img-top">
            <div class="card-body">
              <h4 class="card-target">HTML5 & CSS3</h4>
              <h6 class="card-subtarget mb-2 text-muted">Curso para WebDev</h6>
              <p class="card-text mt-5 text-success pdif">PREÇO: R$ 750,00 (uma pechincha, não concorda?)</p>
            </div>
            <div class="card-body card-curioso">
              <a href="#" class="card-link" data-toggle="modal" data-target="#siteModal">Comprar</a>
            </div>
            <div class="card-footer text-muted">
                <div class="row mb-1">
                    Nível Jenkins de Satisfação:
                </div>
                <div class="row jenkins">
                    <i class="fab fa-jenkins fa-2x"></i><i class="fab fa-jenkins fa-2x"></i><i class="fab fa-jenkins fa-2x"></i><i class="fab fa-jenkins fa-2x"></i><i class="fab fa-jenkins fa-2x"></i>
                </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-6 mb-5 mt-5">
          <div class="card">
            <img src="img/slide2.jpg" alt="python" class="card-img-top">
            <div class="card-body">
               <h4 class="card-target">PHP</h4>
              <h6 class="card-subtarget mb-2 text-muted">Curso para WebDev</h6>
              <p class="card-text mt-5 text-success pdif">PREÇO: R$ 600,00 (mais barato que uma cafeteira Nescafé)</p>
            </div>
            <div class="card-body card-curioso">
              <a href="#" class="card-link" data-toggle="modal" data-target="#siteModal">Comprar</a>
            </div>
            <div class="card-footer text-muted">
              <div class="row mb-1">
                  Nível Jenkins de Satisfação:
              </div>
              <div class="row jenkins">
                  <i class="fab fa-jenkins fa-2x"></i><i class="fab fa-jenkins fa-2x"></i><i class="fab fa-jenkins fa-2x"></i><i class="fab fa-jenkins fa-2x"></i><i class="fab fa-jenkins fa-2x"></i>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-6 mb-5 mt-5">
          <div class="card">
            <img src="img/slide3.jpg" alt="javascript" class="card-img-top">
            <div class="card-body">
              <h4 class="card-target">JAVASCRIPT</h4>
              <h6 class="card-subtarget mb-2 text-muted">Curso para WebDev</h6>
              <p class="card-text mt-5 text-success pdif">PREÇO: R$ 500,00 (praticamente, uma doação)</p>
            </div>
            <div class="card-body card-curioso">
              <a href="#" class="card-link" data-toggle="modal" data-target="#siteModal">Comprar</a>
            </div>
            <div class="card-footer text-muted">
              <div class="row mb-1">
                    Nível Jenkins de Satisfação:
              </div>
              <div class="row jenkins">
                    <i class="fab fa-jenkins fa-2x"></i><i class="fab fa-jenkins fa-2x"></i><i class="fab fa-jenkins fa-2x"></i><i class="fab fa-jenkins fa-2x"></i><i class="fab fa-jenkins fa-2x"></i> 
              </div>
            </div>
          </div>
        </div> <!-- /.col.md-4 -->
        <div class="col-md-4 col-sm-6 mb-5 mt-5">
          <div class="card">
            <img src="img/slide4.png" alt="mysql" class="card-img-top">
            <div class="card-body">
              <h4 class="card-target">mySQL</h4>
              <h6 class="card-subtarget mb-2 text-muted">Curso para WebDev</h6>
              <p class="card-text mt-5 text-success pdif">PREÇO: R$ 650,00 (nunca mais mencione Access na sua vida!)</p>
            </div>
            <div class="card-body card-curioso">
              <a href="#" class="card-link" data-toggle="modal" data-target="#siteModal">Comprar</a>
            </div>
            <div class="card-footer text-muted">
                <div class="row mb-1">
                    Nível Jenkins de Satisfação:
                </div>
                <div class="row jenkins">
                    <i class="fab fa-jenkins fa-2x"></i><i class="fab fa-jenkins fa-2x"></i><i class="fab fa-jenkins fa-2x"></i><i class="fab fa-jenkins fa-2x"></i>
                </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-6 mb-5 mt-5">
          <div class="card">
            <img src="img/slide5.jpg" alt="python" class="card-img-top">
            <div class="card-body">
              <h4 class="card-target">Python</h4>
              <h6 class="card-subtarget mb-2 text-muted">Propósito Geral</h6>
              <p class="card-text mt-5 text-success pdif">PREÇO: R$ 800,00 (Às vezes, o caro sai barato.)</p>
            </div>
            <div class="card-body card-curioso">
              <a href="#" class="card-link" data-toggle="modal" data-target="#siteModal">Comprar</a>
            </div>
            <div class="card-footer text-muted">
                <div class="row mb-1">
                    Nível Jenkins de Satisfação:
                </div>
                <div class="row jenkins">
                    <i class="fab fa-jenkins fa-2x"></i><i class="fab fa-jenkins fa-2x"></i><i class="fab fa-jenkins fa-2x"></i><i class="fab fa-jenkins fa-2x"></i><i class="fab fa-jenkins fa-2x"></i>
                </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-6 mb-5 mt-5">
          <div class="card">
            <img src="img/slide6.jpg" alt="java" class="card-img-top">
            <div class="card-body">
              <h4 class="card-target">Java</h4>
              <h6 class="card-subtarget mb-2 text-muted">Ideal para MobileDev</h6>
              <p class="card-text mt-5 text-success pdif">PREÇO: R$ 590,00 (tem que gostar para comprar...)</p>
            </div>
            <div class="card-body card-curioso">
              <a href="#" class="card-link" data-toggle="modal" data-target="#siteModal">Comprar</a>
            </div>
            <div class="card-footer text-muted">
                <div class="row mb-1">
                    Nível Jenkins de Satisfação:
                </div>
                <div class="row jenkins">
                    <i class="fab fa-jenkins fa-2x"></i><i class="fab fa-jenkins fa-2x"></i><i class="fab fa-jenkins fa-2x"></i><i class="fab fa-jenkins fa-2x"></i>
                </div>
            </div>
          </div>
        </div>
      </div> <!-- /.row -->
      </div>
    </div> <!-- /.container --> 

    <div class="container-fluid mb-2"> 
        <div class="row"> 
            <div class="col-12 mb-3"><hr></div>
            <div class="col-sm-4">
                <h3 class="text-info">P&C Programação</h3>
                <p>Site criado para o projeto final da matéria E-Commerce</p>
                <p>Ministrada pela Profª. Simone</p>
            </div>
            <div class="col-sm-4">
				        <h3 class="text-info">Menu</h3>
				        <div class="list-group">
				        	<a href="index_user.php" class="">Início</a>
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
    <div class="modal fade" id="siteModal" tabindex="-1" role="dialog">
      <div class="modal-dialog modal-lg" role="document" >
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title text-center">Carrinho de compras</h5>
            <button type="button" class="close" data-dismiss="modal">
              <span>&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="container">
              <div class="row justify-content-center mb-5"> <!-- Row Ini -->
                <div class="col-sm-12 col-md-10 col-lg-8">  <!-- Col Ini -->
                  <form action="  "> <!-- Form Ini -->
                    <div class="form-row mt-4"> <!-- Form-row 1 -->
                      <div class="col-sm-6 form-group">     
                        <p class="text-left mb-0">Produto</p>
                      </div>
                      <div class="col-sm-6 form-group">     
                        <p class="text-right mb-0">Subtotal</p>
                      </div>
                    </div> <!-- /Form-row 1 -->
                    <hr class="mt-0">
                    <div class="form-row" style="background-color: #F7D488">
                      <div class="col-sm-12 form-group mb-0">
                          <p class="text-center">"Seu carrinho de compras está vazio!"</p>
                      </div>
                    </div>
                    
                    <div class="form-row text-center"> <!-- Form-row 5 -->  
                      <div class="col-sm-12 mt-5"> 
                      <button class="btn btn-success">Continuar comprando =)</button>
                      <button class="btn btn-danger">Finalizar compra =(</button>
                      </div>
                    </div> <!-- /Form-row 5 --> 
                  </form> <!-- /Form Ini -->
                </div> <!-- /Col Ini -->
              </div> <!-- /Row Ini -->
            </div> <!-- /.container -->
          </div> <!-- /.modal-body -->
        </div> <!-- modal-content -->
      </div> <!-- modal-dialog -->
    </div> <!-- .modal -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>