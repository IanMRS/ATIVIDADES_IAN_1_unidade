<!DOCTYPE html>
<html lang="pt-BR">
<head>
          <meta charset="UTF-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title>Validar</title>
          <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="incial">
    <p><i><a href='javascript:history.go(-1)'>Voltar a página anterior</a></i></p>
          <header>Resultado:</header>

          <?php extract($_POST);
            $matricula = '<br>Matricula: '.$matricula.'<br>';
            $nome = 'Nome: '.$nome.'<br>';
            $turma = 'Turma: '.$turma.'<br>';
            $materia = 'Matéria: '.$materia.'<br>';
            
            $unidade = (int)$unidade;
            $nota1 = (float)$nota1; 
            $nota2 = (float)$nota2; 
            $nota3 = (float)$nota3;

            // Calculando a média das notas
            $media = ($nota1 + $nota2 + $nota3) / 3;
    
            // Definindo a cor de acordo com a média
            if ($media >= 7.0) {
              $cor = '#0603f8'; // Azul (promovido)
            } elseif ($media >= 3.0 and  $media < 7.0) {
              $cor = '#15151c'; // Preto (recuperação)
            } else {
              $cor = '#841b2d'; // Vermelho (retido)
            }

            // Alterando variáveis numéricas para quando for printar
            $media_str = 'Média: <b style="color: '.$cor.';">'.(string)$media.'</b><br>';
            $unidade_str = 'Unidade: '.$unidade.'<br>';

            // Abrindo arquivo leitura.txt para armazenar os dados lidos e calculados
            $arquivo = fopen('leitura.txt','w');

            $dados = '<p>'.$matricula.$nome.$turma.$materia.$unidade_str.$media_str.'</p>';
            fwrite($arquivo, $dados);

            fclose($arquivo);

            // Abrindo novamente o arquivo porém em modo de leitura, para printar na tela
            $arquivo = fopen('leitura.txt', 'r');

            $text = fgets($arquivo);
           
          ?>
          <div class="result"><?php  echo $text;

fclose($arquivo);?></div>
                  
</body>
</html>