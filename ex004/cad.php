<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>

        <h1>Resultado do Processamento</h1>
        <main>
            <?php 
            $nome = $_GET["nome"] ?? "erro";
            $sobrenome = $_GET ["sobrenome"] ?? "erro";
            echo "<p> É um prazer ter você aqui, <strong> $nome $sobrenome </strong>! este é o meu site";
            ?>
            <p><a href="javascript:history.go(-1)">Voltar a página anterior</a></p>
        </main>
    </header>
</body>

</html>