<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculo de Salario</title>

    <!-- LINK DO CSS -->
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <form action="calcularSalario.php" method="post">
        
        <label>
            Digite as horas trabalhadas:
            <input type="text" name="txthoras"><br>
        </label>

        <label>
            Digite o valor da hora trabalhada:
            <input type="text" name="txtvalor"><br>
        </label>

        <input type="submit" value="Calcular">
        <input type="reset" value="Limpar">

    </form>

</body>
</html>