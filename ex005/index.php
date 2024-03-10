<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Exercício PHP</title>
</head>

<body>
    <?php 
//capturando os dados do formulário retroalimentado
$valor1= $_GET['v1']??0;
$valor2= $_GET ['v2']??0;
?>
    <main>
        <h1>Somador de valores</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="v1">Valor 1</label>
            <input type="number" name="v1" id="v1" value="<?= $valor1?>">
            <label for="v2">Valor 2</label>
            <input type="number" name="v2" id="v2" value="<?= $valor2 ?>">
            <input type="submit" value="Somar">
        </form>
    </main>
    <section id="resultado">
        <h2>Resultado da soma</h2>
        <?php 
        $soma= $valor1 + $valor2;
        echo "<p>A soma entre $valor1 e $valor2 é igual a <strong> $soma <p>";
        ?>
    </section>

</body>

</html>