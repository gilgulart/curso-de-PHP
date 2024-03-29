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
   $moneyfmt= number_format($money_float,2,',','.');

   $inicio= date("m-d-Y", strtotime("-7days")) ;
$fim= date("m-d-Y") ;
$url= 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\'02-19-2024\'&@dataFinalCotacao=\'02-26-2024\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra';


$data = json_decode (file_get_contents($url),true);
//var_dump($data);
$cota= $data["value"][0]["cotacaoCompra"];

   $resultado = (float)$money_float / $cota;


echo "Seus <strong> R\$ $moneyfmt </strong> equivalem a <strong> US$" . number_format($resultado,2,',','.') . "<br>";
echo " </strong> Cotação por API do <strong> Banco Central do Brasil". "<br>";

$cotareal= number_format($cota,2,",",".");
echo "</strong>A cotação atual do dólar é <strong>R\$ $cotareal";


?>
        <button onclick="window.history.back()">Voltar</button>

    </main>
</body>

</html>