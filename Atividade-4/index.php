<?php
session_start()
?>

<!DOCTYPE html>
<html lang="pt br">
<head>
	
	<!-- Metadados -->
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="Style.css" media="screen">
	
	<!-- Título da página (aparece na aba) -->
	<title>Atividade 3</title>
</head>

<body>
	<div class="box">
		<p class="texto" id="titulo">Top 3 melhores jogadores de Basquete da história</p>
		<p class="texto" id="subtitutlo">Por: Nilton Luan Guedes Barros</p>
		<br> <br>
		<form action="">
			<fieldset>
				<div class="texto">
					<p>1. Michael Jordan</p>
				</div>
				<a href="MJ.html">
				<img src="Imagem/MJ.jpg" alt="Michael Jordan" width="700" class="imagem"></a>
				
				<div class="texto">
					<p>2. Michael Jordan</p>
				</div>
				<a href="MJ2.html">
				<img src="Imagem/MJ2.jpg" alt="Michael Jordan 2" width="700" class="imagem"></a>
				
				<div class="texto">
					<p>3. Michael Jordan</p>
				</div>
				<a href="MJ3.html">
				<img src="Imagem/MJ3.jpg" alt="Michael Jordan 3" width="700" class="imagem"></a>
			</fieldset>
		</form>

		<br><br><br>
		<a href="Questionario.html">
		<p class="texto" id="textofinal"><em>Clique para votar na próxima enquete!</em></p></a>

		<form method="post" action="resp.php">
			<fieldset>
				<legend>
					<strong>Inscreva-se para receber notificações</strong>
				</legend>
                <div>
                    <label for="inputName">Nome</label>
                    <input type="text" id="inputName" name="nome" maxlength="50">
                    <span></span>
                </div>
                <div>
                    <label for="inputEmail">Endereço de Email</label>
                    <input type="text" id="inputEmail" name="email" maxlength="50">
                    <span></span>
                </div>
                <button>Enviar mensagem</button>
            </fieldset>
		</form>
	</div>
</body>
</html>