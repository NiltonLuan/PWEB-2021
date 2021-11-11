<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <!-- Metadados -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Título -->
    <title>Formulário</title>
</head>
<body>
    <fieldset>
        <legend><strong>Casamento</strong></legend>
        <?php
		if(isset($_SESSION['atualize'])){
			unset($_SESSION['atualize']);}
		?>
        
        <form method="POST" action="processa.php">
            <div>
                <label for="nome">Nome:</label><br>
                <input type="text" id="nome" name="nome" />
            </div>
            <div>
                <label for="convite">Quem convidou:</label><br>
                <input type="radio" id="noivo" name="convidado" value="Noivo">Noivo<br>
                <input type="radio" id="noiva" name="convidado" value="Noiva">Noiva<br>
            </div>
            <div>
                <label for="msg">Mensagem:</label><br>
                <textarea id="msg" name="mensagem"></textarea>
            </div>
            <div>
                <label for="imagem">Escolha um cartão:</label><br>
                <table border="1">
                    <tr>
                        <td><input type="radio" id="img1" name="cartao" value="cartão1"><img src="cartão1.png" alt="Cartão 1" width="220"><br></td>
                        <td><input type="radio" id="img2" name="cartao" value="cartão2"><img src="cartão2.png" alt="Cartão 2" width="220"><br></td></tr>
                    <tr>
                        <td><input type="radio" id="img3" name="cartao" value="cartão3"><img src="cartão3.png" alt="Cartão 3" width="220"><br></td>
                        <td><input type="radio" id="img4" name="cartao" value="cartão4"><img src="cartão4.png" alt="Cartão 4" width="220"><br></td>
                    </tr>
                    <tr>
                        <td><input type="radio" id="img5" name="cartao" value="cartão5"><img src="cartão5.png" alt="Cartão 5" width="220"><br></td>
                        <td><input type="radio" id="img6" name="cartao" value="cartão6"><img src="cartão6.png" alt="Cartão 6" width="220"><br></td>
                    </tr>
                </table>
            </div>
            <br>
            <div class="button">
                <button type="submit">Enviar</button>
            </div>
        </form>
    </fieldset>
</body>
</html>