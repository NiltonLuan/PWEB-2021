<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>PHPMailer</title>
    </head>
    <body>
        <?php
        //Variáveis do forms
        $nome = $_POST['nome'];
        $email = $_POST['email'];

        //BIblioteca
        use PHPMailer\PHPMailer\PHPMailer;
        use PHPMailer\PHPMailer\SMTP;
        use PHPMailer\PHPMailer\Exception;

        //Conexao com o Banco de Dados
        include_once("conexao.php");
        if (!$conn) {
            die("Falha na Conexão: " . mysqli_connect_error());
        }

        //Enviando para o banco
        $result_usuario = "INSERT INTO contatos (Nome, Email) VALUES ('$nome', '$email')";
        $resultado_usuario = mysqli_query($conn, $result_usuario);

        if(mysqli_insert_id($conn)){
	        $_SESSION['atualize'] = "";
        }else{
	        $_SESSION['atualize'] = "";}

        
        require './lib/vendor/autoload.php';

        $mail = new PHPMailer(true);

        try {
            //$mail->SMTPDebug = SMTP::DEBUG_SERVER;
            $mail->CharSet = 'UTF-8';
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'niltonbarros2003@gmail.com';
            $mail->Password = '********';
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port = 587;

            $mail->setFrom('niltonbarros2003@gmail.com', 'Niltin');
            $mail->addAddress($email, $nome);
            
            $mail->isHTML(true);                                 
            $mail->Subject = 'E-mail teste';
            $mail->Body = "<strong>Este e-mail é um teste</strong>.<br>Teste okay.";
            $mail->AltBody = "Este e-mail é um teste.\r\nTeste okay.";

            $mail->send();
            
            echo 'E-mail enviado com sucesso!<br>';
        } catch (Exception $e) {
            echo "Erro: E-mail não enviado com sucesso. Error PHPMailer: {$mail->ErrorInfo}";
            //echo "Erro: E-mail não enviado com sucesso.<br>";
        }
        echo "<meta http-equiv='refresh' content='10;URL=./final.html'>";
        ?>
    </body>
</html>
