<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="design.css">
</head>

<body>
    <main>

        <h1> Média Aritmética </h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="valueX">Valor 1 </label>
            <input type="number" name="valueX" id="valueX" min="0" value="<?=$valueX?>">

            <label for="valueX">Peso 1 </label>
            <input type="number" name="pesoX" id="pesoX" value="<?=$weightX?>">

            <label for="valueX">Valor 2 </label>
            <input type="number" name="valueY" id="valueY" min="0" value="<?=$valueY?>">

            <label for="valueX">Peso 2 </label>
            <input type="number" name="pesoY" id="pesoY" value="<?=$weightY?>">

            <button type="submit">Calcular Média</button>
        </form>
    </main>

    <section id="response">
        <h1>Cálculo das Médias</h1>
        <?php 
    $valueX = (int) $_GET['valueX'] ;
    $weightX = (int) $_GET['pesoX'] ;
    $valueY = (int) $_GET['valueY'] ;
    $weightY = (int) $_GET['pesoY'] ;
    // Média Simples
    $elements = array($valueX,$valueY) ;
    $total = array_sum($elements) ;
    $simpleMean = $total / 2 ; 
    // Média Ponderada
    $boxA = $valueX * $weightX ;
    $boxB = $valueY * $weightY ;
    $sum = $boxA + $boxB ;
    $sumWeight = $weightX + $weightY ;
    $mean = $sum / $sumWeight ;
    $finalMean = number_format($mean,1,',') ;

    echo "<p>Analisando os valores</p>";
    echo "<p>A <strong>Média Aritmética Simples</strong> entre os valores é ". $simpleMean ."</p>";
    echo "<p>A <strong>Média Aritmética Ponderada</strong> com pesos ". $weightX . " e " . $weightY . " é ". $finalMean ."</p>";

    
    ?>
    </section>

</body>

</html>