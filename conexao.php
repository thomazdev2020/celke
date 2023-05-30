<?php

$host = "localhost";
$user = "root";
$pass = "";
$dbname = "celke";
$port = "3306";

try{
     $conn = new PDO ("mysql:host=$host;port=$port;dbname=" . $dbname, $user, $pass);
    }catch(PDOException $err){
    echo "Erro Conexão com Banco de dados" . $err -> getMessage();
}