<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Numeros Aleatórios</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <main>
            <h1>Trabalhando com numeros Aleatórios</h1>
            <?php 
echo "Gerando um número aleatório entre 0 e 1000...". "<br>";
$aleatorio=rand(0,1000);
echo "O valor gerado foi <strong> $aleatorio". "<br>";

?>
            <button onclick="window.location.reload();">Gerar</button>

        </main>
    </header>
</body>

</html>