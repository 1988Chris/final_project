<?php 
include_once("conexao.php");
 ?>
<!DOCTYPE html>
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
    
  </head>
  <body>


    <nav class="navbar navbar-expand-lg navbar-dark bg-info">
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
                    <input name="senha" type="text" id="inputPass" class="form-control">
                  </div>
  				        <div class="form-group text-center">
                    <div class="col-12">
                      <button class="btn btn-success"><b>ENTRAR</b></button>
                    </div>
  				        </div>
                </div>
               </form> 
            </li>
              <a href="" class="nav-link" data-toggle="modal" data-target="#siteModal"><i class="fas fa-pencil-alt"></i><b>CADASTRE-SE</b></a>
          </ul>
			
          <form action="pesquisar.php" class="form-inline" name="pesquisar" method="post">
            <input type="text" class="form-control ml-4 mr-2" placeholder="Buscar..." name="pesquisar">
            <button class="btn btn-dark" type="submit" >Ok</button>
          </form>
		  
		  </div> <!-- .collapse.navbar-collapse -->
	     </div> <!-- .container --> 
    </nav>

    <div id="carouselSite" class="carousel slide mt-2" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselSite" data-slide-to="0" class="active"></li>
        <li data-target="#carouselSite" data-slide-to="1"></li>
        <li data-target="#carouselSite" data-slide-to="2"></li>
        <li data-target="#carouselSite" data-slide-to="3"></li>
        <li data-target="#carouselSite" data-slide-to="4"></li>
        <li data-target="#carouselSite" data-slide-to="5"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="img-fluid d-block" src="img/slide001.jpg" alt="HTML5 & CSS3">
          
        </div>
        <div class="carousel-item">
          <img class="img-fluid d-block" src="img/slide2.jpg" alt="PHP" >
          <div class="carousel-caption d-none d-md-block"></div>
        </div>
        <div class="carousel-item">
          <img class="img-fluid d-block" src="img/slide03.jpg" alt="JAVASCRIPT">
          <div class="carousel-caption d-none d-md-block"></div>
        </div>
        <div class="carousel-item">
          <img class="img-fluid d-block" src="img/slide4.png" alt="MYSQL">
          <div class="carousel-caption d-none d-md-block"></div>
        </div>
        <div class="carousel-item">
          <img class="img-fluid d-block" src="img/slide06.jpg" alt="PYTHON">
          <div class="carousel-caption d-none d-md-block"></div>
        </div>
        <div class="carousel-item">
          <img class="img-fluid d-block" src="img/slide6.jpg" alt="JAVA">
          <div class="carousel-caption d-none d-md-block"></div>
        </div>
      </div>

      <a href="#carouselSite" class="carousel-control-prev" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
        <span class="sr-only">Anterior</span>
      </a>

      <a href="#carouselSite" class="carousel-control-next" role="button" data-slide="next">
        <span class="carousel-control-next-icon"></span>
        <span class="sr-only">Próximo</span>
      </a>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-sm-12 text-center my-5">
          <h1 class="display-2"><i class="fas fa-spinner fa-spin text-info"></i>P&C<i class="fas fa-spinner fa-spin text-info"></i></h1>
          <p class="p1">Porque qualquer pessoa é capaz de aprender a programar</p>
        </div>
      </div> 


    <div class="row mb-5">
        <div class="col-md-4 col-sm-6 mb-3"> 
          <nav id="navbarVert" class="navbar navbar-light bg-light">
            <nav class="nav nav-pills flex-column">
              <a href="#item1" class="nav-link">Por que programar?</a>
              <nav class="nav nav-pills flex-column">
                <a href="#item1-1" class="nav-link ml-3">Programação nas escolas</a>
              <a href="#item1-2" class="nav-link ml-3">Entendendo o mundo</a>
              </nav>
              <a href="#item2" class="nav-link mt-2">Nosso Projeto</a>
              <a href="#item3" class="nav-link mt-2">Quem Somos Nós</a>
              <nav class="nav nav-pills flex-column">
                <a href="#item3-1" class="nav-link ml-3">Christian</a>
                <a href="#item3-2" class="nav-link ml-3">Pedro</a>
              </nav>
            </nav>
          </nav>
        </div>
        <div class="col-md-8 col-sm-6">
          <div data-spy="scroll" data-target="#navbarVert" data-offset="0" class="scrollspySite">
            <h4 id="item1">Por que programar?</h4>
            <p>Em 2013, um vídeo reunindo gigantes da tecnologia, entre eles Bill Gates e Mark Zuckerberg, fez sucesso na internet falando sobre a importância de aprender programação. A campanha foi feita pela organização Code.com, cujo objetivo é disseminar o ensino das ciências computacionais no mundo, e ilustra uma discussão que está em pauta nos últimos anos: programar, na atualidade, tornou-se fundamental. Segundo a organização, 1 milhão de empregos nos Estados Unidos podem não ser preenchidos porque os candidatos não têm a qualificação necessária. Atualmente, apenas uma entre quatro escolas americanas oferecem cursos de programação.</p>

            <h5 id="item1-1">Programação nas escolas</h5>
            <p>A demanda nos Estados Unidos fez com que surgisse a partir de 2012 as “code academies”, escolas de programação com cursos intensivos para ensinar a linguagem de computadores rapidamente. Em 2016, o então presidente Barack Obama lançou o programa Computer Science for All (ciência da computação para todos), voltado à implementação da disciplina no currículo escolar americano.</p>

            <h5 id="item1-2">Entendendo o mundo</h5>
            <p>Em um mundo cada vez mais conectado, entender e saber dominar as máquinas torna-se premente. Ainda mais considerando o contexto da chamada “internet das coisas” - conceito segundo o qual cada vez mais objetos do nosso cotidiano estarão conectados em rede. Assim, entender como eles funcionam será a única forma de resolver inúmeros problemas na casa, no trabalho e na rua. Além disso, a programação aproxima as pessoas de disciplinas consideradas indecifráveis por muitos estudantes, como matemática, por mostrar como alguns conceitos são aplicados na prática e aparecem em nosso cotidiano.</p>

            <h4 id="item2">Nosso Projeto</h4>
            <p>Nosso projeto tem como objetivo aproximar as pessoas desse maravilhoso universo da programação, comprovando por A + B que qualquer pessoa - isso mesmo, QUALQUER pessoa - pode, e deve, aprender linguagem de programação. O método desenvolvido por nós consiste em fazer mais com menos, ou seja, tornar mais simples uma tarefa complexa, assim como Bruce Lee fez com o Kung Fu.</p>

            <h4 id="item3">Quem Somos Nós</h4>
            <h5 id="item3-1">Christian</h5>
            <p>Eu sou o Christian.</p>

            <h5 id="item3-2">Pedro</h5>
            <p>E eu sou o Pedro.</p>
          </div>
        </div>
      </div> <!-- .row.mb-5 -->
    
    

    <div class="jumbotron jumbotron-fluid">
      <div class="container">
        <div class="row">
          <div class="col-12 text-center">
            <h1 class="display-4"><i class="fab fa-youtube text-danger"></i>Aulas</h1>
            <p class="lead">Veja algumas aulas gratuitas de nossos professores diretamente pelo YouTube!</p>
            <hr>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <ul class="nav nav-pills justify-content-center mb-3" id="pills-nav" role="tablist">
              <li class="nav-item">
                <a href="#nav-item-01" class="nav-link active" id="nav-pills-01" data-toggle="pill">HTML5 & CSS3</a>
              </li>
              <li class="nav-item">
                <a href="#nav-item-02" class="nav-link" id="nav-pills-02" data-toggle="pill">Python</a>
              </li>
              <li class="nav-item">
                <a href="#nav-item-03" class="nav-link" id="nav-pills-03" data-toggle="pill">Java</a>
              </li>
            </ul>
            <div class="tab-content" id="nav-pills-content">
              <div class="tab-pane fade show active" id="nav-item-01" role="tabpanel">
                <div class="row">
                  <div class="col-sm-6">
                    <div class="embed-responsive embed-responsive-16by9">
                      <iframe src="https://www.youtube.com/embed/epDCjksKMok" class="embed-responsive-item"></iframe>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <p>Não há escapatória: se você deseja se tornar um Desenvolvedor Web de mão cheia, esse curso é mandatório. São mais de trinta aulas de puro ensinamento dinâmico, sem lenga-lenga, sem enrolação. Feito especialmente para você, que não gosta de ficar perdendo tempo com cursos que só prometem, mas nunca cumprem. Sem essa de tutoriais; aqui, o professor olha diretamente para você, como se estivesse mesmo dentro de uma sala de aula! Adquira já este maravilhoso curso. Prometo que você não se arrependerá (eu acho...)</p>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade show" id="nav-item-02" role="tabpanel">
                <div class="row">
                  <div class="col-sm-6">
                    <div class="embed-responsive embed-responsive-16by9">
                      <iframe src="https://www.youtube.com/embed/Mp0vhMDI7fA" class="embed-responsive-item"></iframe>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <p>Sem dúvida alguma, Python é uma das linguagens que mais vem crescendo nos últimos anos, e sabe por quê? Porque essa bendita linguagem pode ser usada para praticamente tudo: IA, MAchine Learning, Deep Learning, Data Science, Big Data, análise de comportamento de mercado, dentre várias outras coisas. Ainda em dúvida se quer aprender Python? Clique no botão play ao lado e assista a uma aula totalmente gratuita. Garanto que, depois de assisti-la, você irá imediatamente clicar no botão "Comprar". Vamos, o que está esperando? Nós precisamos do seu dinheiro para sobreviver!</p>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade show" id="nav-item-03" role="tabpanel">
                <div class="row">
                  <div class="col-sm-6">
                    <div class="embed-responsive embed-responsive-16by9">
                      <iframe src="https://www.youtube.com/embed/sTX0UEplF54" class="embed-responsive-item"></iframe>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <p>Falem bem ou falem mal, Java ainda é uma linguagem essencial nos dias de hoje. Se você quer ganhar grana na área de desenvolvimento, então Java deve ser a sua escolha número um. Clique no botão ao lado e assista a uma maravilhosa aula, totalmente gratuita. Só não espere que disponibilizemos todo o material assim, for free. Ninguém vive de luz, tampouco nós, programadores. Dependemos muito do seu dinheiro para repor nosso estoque de café.</p>
                  </div>
                </div>
              </div>
            </div>
              </div>
            </div> <!-- row -->
          </div> <!-- .container -->
        </div> <!-- .jumbotron.jumbotron-fluid -->

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
				        	<a href="index.php" class="">Início</a>
				        	<a href="#" class="" data-toggle="modal" data-target="#siteModal">Cursos</a>
				        	<a href="#" class=""data-toggle="modal" data-target="#siteModal">Cadastre-se</a>
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