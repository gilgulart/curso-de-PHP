<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php 
    //0x = hexadecimal 0b = binário 0 = octal

    //array
//$vet= [6,2,false,3,5];
//var_dump ($vet);

//object
//class Pessoa {
  //  private string $nome;
//}
//$p = new Pessoa;
//var_dump($p)
$curso="PHP";
$ano= date('Y');
echo <<< FRASE
Estou estudando
$curso em $ano,
abraços!\u{1F596}
FRASE;
?>
</body>

</html>