<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcule sua idade</title>
    <link rel="stylesheet" href="cad.css">
</head>

<body>
    <?php 
    $actual = date("Y");
    $year = (int) $_GET ['year']??'0' ;
    $old = (int) $_GET ['old'] ??$actual;
    ?>
    <main>
        <h1>Calculando a sua idade</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">

            <label for="year">Em que ano você nasceu</label>
            <input type="number" name="year" id="year" max="<?=($actual-1)?>" required value="<?=$year?>">

            <label for="old"> Quer saber sua idade em qual ano? (atualmente estamos em <?=$actual?>)
            </label>
            <input type="number" name="old" id="old" required value="<?=$old?>">

            <button type="submit">Qual será a minha idade?</button>

        </form>
    </main>

    <section>
        <h2>Resultado</h2>
        <?php 
$howOld = $old - $year ;
echo "Quem nasceu em " . $year . " vai ter " . $howOld . " anos em " . $old ;
?>
    </section>
</body>

</html>