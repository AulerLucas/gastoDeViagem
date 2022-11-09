
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title> exercicio7 </title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="style.css">
   
    </head>
    <body>
    <?php
        $velocidade = $_POST['v'];
        $tempo = $_POST['t'];

        $distancia =  $tempo + $velocidade;
        $litros_usados = $distancia / 12;

        echo "Resultado da distância é: " .$distancia ."<br>
        Litros usados: " .$litros_usados ."<br>
        Velocidade: "  .$velocidade ."<br>
        Tempo: " .$tempo;

?>
    </body>
</html>