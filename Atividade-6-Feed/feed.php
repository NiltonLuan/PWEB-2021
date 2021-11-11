<html>
<head>
    <!-- Metadados -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="style.css" media="screen"> 
    <!-- Título -->
    <title>Feed</title>


</head>
    
<body>
    <fieldset>
        <legend><strong>Feed dos convidados</strong></legend>
        <?php

        header('Content-type: text/html; charset=utf-8');
        include_once("conexao.php");

        $sql = "SELECT * FROM convidados";
        $result = mysqli_query($conn, $sql);
        
        
        while ($row = mysqli_fetch_assoc($result)) {
            echo '<div id="texto">Nome: '.$row["Nome"]."<br></div>";
            if ($row["Convite"] == 1){
                echo '<div id="texto">Convidado pela Noiva!<br></div>';
            }else{
                echo '<div id="texto">Convidado pelo Noivo!<br></div>';}
            echo '<div id="texto">Mensagem do usuario: '.$row["Mensagem"]."<br><br><div>";
            if ($row["Imagem"] == 'cartão1'){
                echo '<div><img src="cartão1.png" alt="Cartão 1" id="img" width="220"><br></div>';}
            if ($row["Imagem"] == 'cartão2'){
                echo '<div><img src="cartão2.png" alt="Cartão 2" id="img" width="220"><br></div>';}
            if ($row["Imagem"] == 'cartão3'){
                echo '<div><img src="cartão3.png" alt="Cartão 3" id="img" width="220"><br></div>';}
            if ($row["Imagem"] == 'cartão4'){
                echo '<div><img src="cartão4.png" alt="Cartão 4" id="img" width="220"><br></div>';}
            if ($row["Imagem"] == 'cartão5'){
                echo '<div><img src="cartão5.png" alt="Cartão 5" id="img" width="220"><br></div>';}
            if ($row["Imagem"] == 'cartão6'){
                echo '<div><img src="cartão6.png" alt="Cartão 6" id="img" width="220"><br></div>';}
            echo '<div><br></div>';
        }

        mysqli_free_result($result); 

        ?>
    </fieldset>

</body></html> 


