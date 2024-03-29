<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcular Tempo</title>
    <link rel="stylesheet" href="now.css">

</head>

<body>
    <?php 
    $value = $_GET['time'] ??0 ;
    ?>
    <main>
        <h1>Calculadora de tempo</h1>
        <form action="<?=$_SERVER['PHP_SELF'] ?>" method="get">
            <label for="time">Qual o total de tempo em segundos?</label>
            <input type="number" name="time" id="time">

            <button type="submit">Calcular</button>
        </form>
    </main>
    <section>
        <h2>Totalizando tudo</h2>
        <?php 
            $rest = $value ;
            //Total de semanas
            $week = intdiv($rest,604800) ;
            $rest = $rest % 604_800 ;
            //Total de dias
            $day = intdiv($rest,86_400) ;
            $rest = $rest % 86_400 ;
            //Total de horas
            $hour = intdiv($rest,3_600) ;
            $rest = $rest % 3_600 ;
            //Total de minutos
            $minute = intdiv($rest,60) ;
            $rest = $rest % 60 ;
            //Total de segundos
            $second = $rest ; 
?>

        <p>Analisando o valor que você digitou <strong> <?=number_format($value,2,',')?>s</strong> equivalem a um
            total
            de:</p>

        <ul>
            <li><?= $week ?><strong> semanas </strong></li>
            <li><?= $day ?><strong> dias </strong></li>
            <li><?= $hour ?><strong> horas </strong></li>
            <li><?= $minute ?><strong> minutos </strong></li>
            <li><?= $second ?><strong> segundos </strong></li>
        </ul>

    </section>

</body>

</html>