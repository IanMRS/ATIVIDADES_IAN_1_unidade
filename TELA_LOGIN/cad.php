<!DOCTYPE html>
<html lang="en">
<head>
          <meta charset="UTF-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title>Document</title>
</head>
<body>
          <main>
          <?php extract($_POST);
$user = $_POST["user"];
$pass = $_POST["pass"];
    if(isset($enviar)){
        if($user != "aluno" or $pass != "1234"){
            header('location: http://localhost/AULAIFBA/TELA_LOGIN/bloqueio.html');
            exit;
        }
        if($user =="aluno" && $pass == "1234"){
            header('location: http://localhost/AULAIFBA/TELA_LOGIN/bemvindo.html');
            exit;
        }
    }

?>     <p><i><a href="javascript:history.go(-1)">Voltar a página anterior</a></i></p>
          </main>
</body>
</html>