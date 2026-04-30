<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina de Calculo de Salario</title>

    <!-- LINK DO CSS -->
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <?php
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $horas = $_POST["txthoras"];
            $valor = $_POST["txtvalor"];
            $salario = $horas * $valor;

            echo "<p>O salário é: R$ " . number_format($salario, 2, ",", ".") . "</p>";
        }
    ?>

</body>
</html>