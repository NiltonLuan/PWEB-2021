<?php
session_start();
include_once("conexao.php");

if (!$conn) {
    die("Falha na Conexão: " . mysqli_connect_error());
  }else
  echo "Conectado com Sucesso <BR><BR>";


//Declarando Variaveis
$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);

if (filter_input(INPUT_POST, 'convidado', FILTER_SANITIZE_STRING) == "Noivo"){
    $convite = 1;
}else{
    $convite = 0;
}

$mensagem = filter_input(INPUT_POST, 'mensagem', FILTER_SANITIZE_STRING);
$imagem = filter_input(INPUT_POST, 'cartao', FILTER_SANITIZE_STRING);

//Enviando para o banco
$result_usuario = "INSERT INTO convidados (Nome, Convite, Mensagem, Imagem) VALUES ('$nome', '$convite', '$mensagem', '$imagem')";
$resultado_usuario = mysqli_query($conn, $result_usuario);

if(mysqli_insert_id($conn)){
	$_SESSION['atualize'] = "";
	header("Location: feed.php");
}else{
	$_SESSION['atualize'] = "";
	header("Location: feed.php");}

