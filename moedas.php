<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversão de Moedas</title>
</head>
<body>
    <h2>Conversão de Moedas</h2>
    <form method="post">
        <label for="valorDolar">Valor em Dólar ($) </label><br>
        <input type="number" id="valorDolar" name="valorDolar" placeholder="Digite o valor em dólares" step="0.01" required><br>
        <input type="submit" value="Converter">
    </form>

    <?php
        function dolarParaReal($valorDolar, $cotacao) {
            return round($valorDolar * $cotacao, 2);
        }

        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['valorDolar'])) {
            $valorDolar = $_POST['valorDolar'];
            $cotacao = 1.81;

            $valorReal = dolarParaReal($valorDolar, $cotacao);
            echo "$$valorDolar equivalem a R$$valorReal reais";
        }
    ?>

</body>
</html>