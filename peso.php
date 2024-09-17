<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peso Ideal</title>
</head>
<body>
    <h2>Peso Ideal</h2>
    <form method="post">
        <label for="altura">Altura (em metros): </label><br>
        <input type="number" id="altura" name="altura" placeholder="Digite sua altura" step="0.01" required><br>
        <label for="sexo">Sexo: </label><br>
        <select id="sexo" name="sexo" required>
            <option value="M">Masculino</option>
            <option value="F">Feminino</option>
        </select><br><br>
        <input type="submit" value="Calcular">
    </form>

    <?php
        function CalcularPesoIdeal($altura, $sexo) {
            if (strtolower($sexo) == 'm') {
                return round((72.2 * $altura) - 58, 2);
            } elseif (strtolower($sexo) == 'f') {
                return round((62.1 * $altura) - 44.7, 2);
            } else {
                return "Inválido";
            }
        }

        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['altura']) && isset($_POST['sexo'])) {
            $altura = $_POST['altura'];
            $sexo = $_POST['sexo'];

            $pesoIdeal = CalcularPesoIdeal($altura, $sexo);
            if ($pesoIdeal === "Inválido") {
                echo "Sexo inválido. Por favor, selecione Masculino ou Feminino.<br>";
            } else {
                echo "Peso ideal para o sexo $sexo com altura $altura m: $pesoIdeal kg<br>";
            }
        }
    ?>

</body>
</html>