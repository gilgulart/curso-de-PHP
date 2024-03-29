<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcular Tempo</title>
    <link rel="stylesheet" href="now.css">

</head>

<body>
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
            $seconds = (float) $_GET['time'] ;
            $fmtsecond = number_format($seconds,2,'.','.') ;
            $hour = $seconds / 3600 ;
            $hourfmt = (int)$hour ; 
            $minute = $seconds / 60 ;
            $minutefmt = (int) $minute ;
            $day = $seconds / 864000 ;
            $dayfmt = (int) $day ;
            $week = $seconds / 604800 ;
            $weekfmt = (int) $week ;
       echo "<p>Analisando o valor que você digitou <strong>" . $fmtsecond . "s</strong> equivalem a um total de:</p>";
       echo "<p>" . $weekfmt . "<strong> semanas </p></strong>";
       echo "<p>" . $dayfmt . "<strong> dias </p></strong>" ;
       echo "<p>" . $hourfmt . "<strong> horas </p></strong>" ;
       echo "<p>" . $minutefmt . "<strong> minutos </p></strong>" ;
            
?>
    </section>

</body>

</html>