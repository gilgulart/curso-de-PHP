<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Números Reais</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <main>
        <h1>Analisador de Número Real</h1>
        <?php 
$num= $_POST ["n"] ?? 0;
echo "<p>analisando o número <strong>" . number_format($num,3,",",".") . "</strong> informado pelo usuário</p>";
$int= (int) $num;
$frc= $num - $int;
echo "<ul><li> A parte inteira do número é <strong>". number_format($int,3,",","."). "</strong><li>";
echo "A parte fracionária do número é <strong>". number_format($frc,3,",",".")."</strong></li></ul>";
?>
        <button onclick="window.history.back()">Voltar</button>



    </main>

</body>

</html>