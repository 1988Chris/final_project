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

</head>
<body>


	<div class="container"> 
			<div class="row"> 
				<div class="col-12">  
					<h1 class="display-4 text-center my-5"><i class="fas fa-paper-plane text-primary"></i>Programming Formulary</h1>
				</div>
			</div>

		<div class="row justify-content-center mb-5"> <!-- Row Ini -->
			<div class="col-sm-12 col-md-10 col-lg-8">  <!-- Col Ini -->
				<form action="  "> <!-- Form Ini -->
				  <div class="form-row"> <!-- Form-row 1 -->
					  <div class="col-sm-6 form-group">     
						<label for="inputNome">Nome</label>
						<input type="text" class="form-control" id="inputNome" placeholder="Primeiro nome">
					  </div>
					  <div class="col-sm-6 form-group">     
						<label for="inputSobrenome">Sobrenome</label>
						<input type="text" class="form-control" id="inputSobrenome" placeholder="Sobrenome">
					  </div>
				  </div> <!-- /Form-row 1 -->
				  <div class="form-row"> <!-- Form-row 2 -->
					  <div class="form-group col-sm-12">  
						<label for="inputEnd">Endereço</label>
						<input type="text" class="form-control" id="inputEnd" placeholder="Endereço completo">
					  </div>
				  </div> <!-- /Form-row 2 -->
				  <div class="form-row"> <!-- Form-row 3 -->
					  <div class="col-sm-6 form-group">
						<label for="inputCid">Cidade</label>
						<input type="text" class="form-control" id="inputCid" placeholder="Sua cidade">
					  </div>
					  <div class="form-group col-sm-4">
						<label for="inputEst">Estado</label>
						  <select class="form-control" name="" id="inputEst">
							<option value="" selected>Escolha...</option>
							<option value="">...</option>
							<option value="">...</option>
							<option value="">...</option>
						  </select>
					  </div>
					  <div class="col-sm-2 form-group">
						<label for="inputCEP">CEP</label>
						<input type="text" class="form-control" id="inputCEP">
					  </div>
				  </div> <!-- /Form-row 3 -->
				  <div class="form-row">  <!-- Form-row 4 -->
					<div class="form-group col-sm-12">  
						<div class="form-check">  
							<label for="form-check-label">
							  <input type="checkbox" class="form-check-input" id="form-check-label">Desejo receber novidades por e-mail
							</label>
						</div>
					</div>
				  </div> <!-- /Form-row 4 -->
				  <div class="form-row"> <!-- Form-row 5 --> 	
					  <button class="btn btn-primary justify-content-center">Enviar</button>
					  <a tabindex="0" class="btn btn-secondary ml-2 justify-content-center" role="button" data-toggle="popover" data-placement="right" data-trigger="focus" title="Help" data-content="Isso é um exemplo de popover de ajuda." style="margin: 0 auto">Ajuda</a>
				  </div> <!-- /Form-row 5 --> 
				</form> <!-- /Form Ini -->
			</div> <!-- /Col Ini -->
		</div> <!-- /Row Ini -->
	</div>
	
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