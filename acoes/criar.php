<?php
//iniciando sessão
session_start();

//fazendo requisicao do banco de dados
@require_once 'conexaobanco.php';

// adicionando conexao a variavel com os dados do banco 
$conn = mysqli_connect($servername, $username, $password, $database);


//adicionando o que vem do post nas variaveis
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];
$dataa  = $_POST['dataa'];

//inserindo dados no banco
$query = "INSERT INTO `eventos` (`cidade`, `estado`, `dataa`) VALUES ('$cidade', '$estado', '$dataa')";

//se deu tudo certo? exibir uma mensagem de ok

if (mysqli_query($conn, $query)) {
    
    header('Location: ../index.php');
    $_SESSION['mensagem'] = "Evento criado com sucesso";

} else {
  //se não deu certo exibir mensagem de erro
    echo  "<script>alert('Erro!);</script>". $query . "<br>" . mysqli_error($conn);
    //header('Location: ../index.php');
   
}




?>