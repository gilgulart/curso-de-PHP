<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reajustador</title>
    <link rel="stylesheet" href="new.css">
</head>

<body>
    <?php 
$value = $_GET['price'] ;
$percent = (int) $_GET['rangeInput'] ??1;
$expression = ($value * $percent)/100;
$readjustment = $expression + $value ;
    
    ?>
    <main>

        <h1>Reajustador de Preços</h1>
        <form action="<?=$_SERVER['PHP_SELF'] ?>" method="get">

            <label for="price">Preço do produto</label>
            <input type="number" name="price" id="price" min="0.10" step="0.01" value="<?=$value?>">

            <label for="rangeInput">Qual será o percentual do reajuste?(<strong><span id="p">?%</span>%</strong> )
            </label>
            <input type="range" name="rangeInput" id="rangeInput" min="0%" max="100%" step="1" oninput="changeValue()"
                value="<?= $readjustment?>">
            <button type="submit">Enviar</button>
        </form>

    </main>
    <section>
        <h2>Resultado do Reajuste</h2>
        <p>O produto que custava R$ <?=$value?>, com <strong> <?=$percent?>% de aumento</strong> vai passar a custar
            <strong>R$<?= number_format( $readjustment,2,',','.')?></strong> a partir de agora.
        </p>
    </section>
    <script>
    changeValue()

    function changeValue() {
        p.innerText = rangeInput.value;
    }
    </script>
</body>

</html>