<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salário mínimo</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&display=swap"
        rel="stylesheet">

</head>

<body>
    <main>
        <h1>Calcule seu Salário</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <input type="number" name="payment" id="payment" value="<?= $clientValue ?>" placeholder="Seu salário aqui">
            <button type="submit"> Calcular </button>
        </form>
        <section>
            <?php 
$clientValue = (int) $_GET['payment'] ??1 ;
$formatValue = number_format($clientValue,2,',','.') ;
$fixedValue = 1412 ;
$fractionValue = (int) $clientValue / $fixedValue ;
$result1 = (int) number_format($fractionValue,1) ;
$restValue = (int) $clientValue % $fixedValue ;
$result2 = number_format($restValue,2,',','.');
echo "Seu salário é de R\$" . $formatValue . " <p> Que corresponde a " . $result1 . " salários" . " + R\$" . $result2 ;
echo "<p> O salário mínimo atual é de R\$" . $fixedValue;
?>
        </section>
    </main>
</body>

</html>