<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro Funcionario</title>
    <link rel="stylesheet" href="css2.css">
  </head>
  <body>
    <div class="container">
	<h1 class="text-center bg-primary text-white texto2">CADASTRO DE FUNCIONARIO</h1>
	<br>
		<div class="row">
			<div class="col">
				
			</div>
			<div class="elemento">
				<form action="#" method="POST">
				  <div class="mb-3">
					<label for="nome" class="form-label">Nome       </label>
					<input type="text" class="form-control" id="nome" name="nome">
				  </div>
                  <div class="col">
                   
			      </div>
				  <div class="mb-3">
					<label for="cpf" class="form-label">CPF          </label>
					<input type="text" class="form-control" id="cpf" name="cpf">
				  </div>
                  <div class="col">
                   
			      </div>
				  <div class="mb-3">
					<label for="endereco" class="form-label">Endereço </label>
					<input type="text" class="form-control" id="endereco" name="endereco">
				  </div>
                  <div class="col">
                   
			      </div>
				  <div class="mb-3">
					<label for="tel" class="form-label">Telefone  </label>
					<input type="text" class="form-control" id="tel" name="tel">
				  </div>
                  <div class="col">
                   
			      </div>
				  <div class="mb-3">
					<label for="email" class="form-label">E-mail     </label>
					<input type="text" class="form-control" id="email" name="email">
				  </div>
                  <div class="col">
                   
			      </div>
				 <div class="col">
				  	<input type="submit" class="btn btn-primary" value="Cadastrar">
                      <div class="col">
                         
			          </div>
					<button type="button" class="btn btn-danger" onclick="javascript:location.href ='home.php';">Voltar</button>
				</div>
                
				</form>
			</div>
			<div class="col">
				
			</div>
		</div>
	</div>
  </body>
</html>

<?php

	if(!empty($_POST))
	{
		$nome = $_POST['nome'];
		$cpf = $_POST['cpf'];
		$endereco = $_POST['endereco'];
		$tel = $_POST['tel'];
		$email = $_POST['email'];
		
		$arquivo = fopen("cadastro/funcionarios.txt", "a+")or die("Não foi possivel abrir o arquivo!");
		
		$conteudo = "Nome: $nome, CPF: $cpf, Endereço: $endereco, Telefone: $tel e Email: $email
";

		if(fwrite($arquivo, $conteudo))
		{
			echo "<script>alert('Cadastrado com sucesso');</script>";
			fclose($arquivo);
		}
		else
		{
			echo "<script>alert('Erro ao cadastrar as informações');</script>";
		}
		
		
	}


?>