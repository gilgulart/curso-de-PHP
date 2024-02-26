<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de moedas</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <main>
        <h1>Conversor de moedas v1.0</h1>
        <?php 

   $money= $_GET ["money"]; 
   $money_float= (float)$money;
   $valor_formatado= number_format($money_float,2,',','.');
   $fator = 4.99;
   $resultado = (float)$money_float / $fator;

echo "você tem <strong>R\$ $valor_formatado </strong>". "<br>";
echo "Seus <strong> R\$ $valor_formatado </strong> equivalem a <strong> US$" . number_format($resultado,2,',','.') . "<br>";
echo " </strong> <strong> Cotação fixa de R\$ 4,99 </strong>  informada diretamente no código";
?>
        <button onclick="window.history.back()">Voltar</button>

    </main>
</body>

</html>