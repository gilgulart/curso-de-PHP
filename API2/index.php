<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="<?=$_SERVER['PHP_SELF'] ?>" method="post">
        <label for="cepInput">CEP:</label>
        <input type="text" id="cepInput" name="cep" min="8" max="8" pattern="\d{5}-\d{3}" required>
        <button type="submit">Consultar</button>
    </form>
    <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $cep = $_POST["cep"];
    $url = "https://viacep.com.br/ws/" . $cep . "/json";
    $response = file_get_contents($url);
    $data = json_decode($response, true);

    if (isset($data["erro"])) {
        echo "<p>CEP não encontrado.</p>";
    } else {
        echo "<p>CEP: " . $data['cep'] . "</p>";
        echo "<p>Logradouro: " . $data['logradouro'] . "</p>";
        echo "<p>Complemento: " . $data['complemento'] . "</p>";
        echo "<p>Bairro: " . $data['bairro'] . "</p>";
        echo "<p>Cidade: " . $data['localidade'] . "</p>";
        echo "<p>Estado: " . $data['uf']  . "</p>" ;
    };
}
?>
</body>

</html>