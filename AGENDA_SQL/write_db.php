<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Cadastrar</title>
    <link rel="stylesheet" href="../main_style.css">
</head>

<?php
    extract($_POST);

    

    if(isset($submit)) {
        $db_hostname = 'localhost';
        $db_user = 'root';
        $db_pass = '';
        $db_name = 'register';

        $password = md5($password);

        $db_connection = new mysqli($db_hostname, $db_user, $db_pass, $db_name);
        $sql_query = mysqli_query($db_connection, "INSERT INTO records VALUES (DEFAULT, '$user', '$email', '$password')");

        if($db_connection->connect_errno) {
            echo 'Não foi possivel estabelecer uma conexão com o banco de dados';
        } else {
            header('Location: sign_up.html');
            exit;
        }
    }
?>