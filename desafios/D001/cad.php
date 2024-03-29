<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Desafio 1</title>
</head>

<body>
    <section>

        <main>
            <h1>Resultado Final</h1>


            <?php 
           $numero= $_GET["numero"];
           echo "Seu número é " . $numero . "<br>";
           echo "Seu sucessor é "  . $numero + 1 . "<br>";
           echo "Seu antecessor é " .$numero - 1 . "<br>";
           
           ?>
            <button onclick="window.history.back()">Voltar</button>

    </section>
    </main>

</body>

</html>