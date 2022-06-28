<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css2.css">
    <title>Cadastro Cliente</title>
  </head>
  <body>
    <div class="elemento">
	<h1 class="text-center bg-success text-white">CONSULTA USUARIOS</h1>
	<br>
		<div class="row">
			
			<div class="col">
				<?php
					$arquivo = fopen("cadastro/usuarios.txt", "r") or die("Não foi possível abrir o arquivo");
					echo nl2br(fread($arquivo,filesize("cadastro/usuarios.txt")));
					fclose($arquivo);
				?>
			</div>
			
		</div>
        <div class="col">
                   
		</div>
		<div class="text-center">
			<button type="button" class="btn btn-danger" onclick="javascript:location.href ='home.php';">Voltar</button>
		</div>
	</div>
  </body>
</html>