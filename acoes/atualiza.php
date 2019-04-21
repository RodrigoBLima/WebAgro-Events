<?php
//iniciando sessão
session_start();

//fazendo requisicao do banco de dados
@require_once 'conexaobanco.php';


// adicionando conexao a variavel com os dados do banco 
$conn = mysqli_connect($servername, $username, $password, $database);


//adicionando o que vem do post nas variaveis
$cidade = $_POST['cidade']  = preg_replace('/[^[:alpha:]_]/', '',$_POST['cidade']);
$estado = $_POST['estado'];
$dataa  = $_POST['dataa'];
$id  = $_POST['id'];


//inserindo dados no banco
$query = "UPDATE  `eventos` SET cidade = '$cidade', estado = '$estado', dataa ='$dataa' WHERE id = '$id' ";



if (mysqli_query($conn, $query)) {

        header('Location: ../listagem.php');
        $_SESSION['mensagem'] = "Atualizado com sucesso";

} else {
     //se não deu certo exibir mensagem de erro
    echo  "<script>alert('Erro!);</script>". $query . "<br>" . mysqli_error($conn);
    header('Location: ../listagem.php');
   
}




?>