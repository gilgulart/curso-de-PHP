<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informe um número</title>
    <link rel="stylesheet" href="design.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&display=swap"
        rel="stylesheet">

</head>

<body>

    <main>

        <h1>Informe um número</h1>
        <form action="<?=$_SERVER ['PHP_SELF']?>" method="get">
            <input type="number" name="number" id="number" min="1" placeholder="Seu número aqui...">
            <button type="submit">Analisar</button>

        </form>

    </main>
    <section id="resultado">
        <h2>Resultado final</h2>
        <?php 
        $number = $_GET['number']??1;
        $fmtNumber = (int)$number  ;
        $root = pow($fmtNumber, 1/2) ;
        $rootfmt = number_format($root,3,',');
        $cubic = pow($fmtNumber, 1/3) ;
        $cubicfmt = number_format($cubic,3,',');
        echo "<strong><p>Analisando o número " . $fmtNumber . ",</strong> temos:</p>" ;
        echo "<p> A raiz quadrada é <strong>" . $rootfmt . "</strong></p>" ;
        echo "<p> A raiz cúbica é <strong>" . $cubicfmt . "</strong></p>" ;
        ?>
    </section>
</body>

</html>