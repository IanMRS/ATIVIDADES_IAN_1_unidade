<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <title>Conversor de Algarismo p/ Romano</title>
    </head>
    <body>

        <div id="caixa">
            <form method="post">
                <center>
                    <label for="Numeros" class="incluir"><b>Digite qualquer número inteiro até 3999</b></label>
                <br>
                <!--ENTRADA DE DADOS DE HTML-->
                <input type = "text" name="Numeros" size = "4" id= "respForm" /><br/>
                <br><button type="submit" name="submit" value="submit" class="verificar">Calcular</button>
                <div class="line"></div>
                <div id="resposta"></div> <!--SAÍDA DE DADOS E MOSTRAR NA MESMA PÁGINA-->
                <?php extract($_POST);
    function algarismo() {
        //DECLARANDO VARIAVEIS NECESSARIAS PARA FORMAR OS ALARISMOS
        $milhar = ["", "M", "MM", "MMM"];
        $centena = ["", "C", "CC", "CCC", "CD", "D", "DC", "DCC", "DCCC", "CM"];
        $dezena = ["", "X", "XX", "XXX", "XL", "L", "LX", "LXX", "LXXX", "XC"];
        $unidade = ["", "I", "II", "III", "IV", "V", "VI", "VII", "VIII", "IX"];
        //DECLARANDO VARIÁVEIS RELACIONADAS AO INPUT/HTML
        $input = $_POST["Numeros"];
        $resposta = ""; //VÁRIAVEL DO VALOR CONVERTIDO
        //VERIFICANDO SE O NUMERO ESTÁ DENRO DOS PARAMETROS E A QUANTIDADE DE CARACTERES
        if ($input < 1 || $input > 3999) {
            $resposta = "O número digitado está fora de alcance!";
        } else {
            $input = substr($input, 0, 4);
            $contador = strlen($input); //CONTADOR DE CARACTERES
            switch ($contador) {
                case 1: 
                    $resposta = $unidade[$input[0]];
                    break;
                case 2: 
                    $resposta = $dezena[$input[0]] . $unidade[$input[1]];
                    break;
                case 3: 
                    $resposta = $centena[$input[0]] . $dezena[$input[1]] . $unidade[$input[2]];
                    break;
                case 4: 
                    $resposta = $milhar[$input[0]] . $centena[$input[1]] . $dezena[$input[2]] . $unidade[$input[3]];
                    break;
            }
        }
        return $resposta;
}
if (isset($submit)) {
    $resultado = algarismo(); echo '<div id="resposta">'.$resultado.'</div>';
}
?>
            </center>
        </div>
    </body>
</html>