<?php


$servername = "mysql995.umbler.com";
$database = "webagro";
$username = "rodrigouser";
$password = "rootroot";

header('Content-Type: text/html; charset=utf-8');


// criar conexap
$conn = mysqli_connect($servername, $username, $password, $database);

//poder colocar no banco dados com utf-8
mysqli_set_charset($conn, "utf8");

// checar a conexao
if (!$conn) {
    die("Falha ao conectar ao bd: " . mysqli_connect_error());
}

//echo "Conectado com sucesso";

mysqli_close($conn);















?>