<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Média Aritmética</title>
    <link rel="stylesheet" href="design.css">
</head>

<body>
    <?php 
    $valueX = (int) $_GET['valueX'] ;
    $weightX = (int) $_GET['pesoX'] ;
    $valueY = (int) $_GET['valueY'] ;
    $weightY = (int) $_GET['pesoY'] ;
    ?>
    <main>

        <h1> Média Aritmética </h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="valueX">Valor 1 </label>
            <input type="number" name="valueX" id="valueX" min="1" required value="<?=$valueX?>">

            <label for="valueX">Peso 1 </label>
            <input type="number" name="pesoX" id="pesoX" min="1" required value="<?=$weightX?>">

            <label for="valueX">Valor 2 </label>
            <input type="number" name="valueY" id="valueY" min="1" required value="<?=$valueY?>">

            <label for="valueX">Peso 2 </label>
            <input type="number" name="pesoY" id="pesoY" min="1" required value="<?=$weightY?>">

            <button type="submit">Calcular Média</button>
        </form>
    </main>

    <section id="response">

        <?php 
    // Média Simples
    $simpleMean = ($valueX + $valueY) / 2 ; 
    // Média Ponderada
    $mean = (($valueX * $weightX) + ($valueY * $weightY)) / ($weightX + $weightY) ;
    
    ?>
        <h2>Cálculo da médias</h2>
        <p>Analisando os Valores <?=$valueX?> e <?=$valueY?> ; </p>
        <ul>
            <li>A <strong> Média Aritimética Simples </strong> entre os valores é igual a
                <?=number_format($simpleMean,2,',')?> . </li>
            <li>A <strong> Média Aritimética Ponderada </strong> com os pesos <?=$weightX?> e <?=$weightY?> igual a
                <?=number_format($mean,2,',')?> . </li>
        </ul>
    </section>

</body>

</html>