<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Caixa Eletrônico</title>
    <link rel="stylesheet" href="my.css">

    <style>
    img.nota {
        height: 50px;
        margin: 5px;
    }
    </style>
</head>

<body>
    <main>
        <h1>Caixa Eletrônico</h1>

        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">

            <label for="withdraw">Quanto você deseja sacar? (R$)<sup>*</sup> </label>
            <input type="number" name="withdraw" id="withdraw" step="5" required value="<?=$withdraw?>">
            <p style="font-size:0.6em"> <sup>*</sup> Notas disponíveis R$100, R$50, R$10 e R$5 </p>

            <button type="submit">Sacar</button>

        </form>
    </main>
    <section>
        <?php
$withdraw = $_GET['withdraw']??0 ;
$rest = $withdraw ;
// sacar 100
$hundred = floor($rest/100);
$rest %= 100;
// sacar 50
$fifty = floor($rest/50);
$rest %= 50;
//sacar 10
$ten = floor($rest/10);
$rest %= 10;
//sacar 5
$five = floor($rest/5);
$rest %= 5;

?>
        <h2>Saque de R$<?=number_format($withdraw,2,',','.')?> realizado</h2>
        <p>O caixa eletrônico vai te entregar as seguintes notas</p>
        <ul>
            <li>
                <p> <img src="imagens/hundred.jpg" alt="100 reais" class="nota"> x<?=$hundred?></p>
            </li>

            <li>
                <p> <img src="imagens/fifty.jpg" alt="50 reais" class="nota"> x<?=$fifty?></p>
            </li>

            <li>
                <p> <img src="imagens/ten.jpg" alt="10 reais" class="nota"> x<?=$ten?></p>
            </li>

            <li>
                <p> <img src="imagens/five.jpg" alt="5 reais" class="nota"> x<?=$five?></p>
            </li>
        </ul>

    </section>

</body>

</html>