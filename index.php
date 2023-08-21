<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <h1>Tabela</h1>
    <?php 
        $minimo=1;
        $maximo=100;
        $numero =mt_rand($minimo,$maximo);
        echo"O valor entre o $minimo e $maximo <br>";
        echo "O Valor e $numero"
        
        ?>
    
    <Main>
      <form action="index.php" method="get">
      <input type="submit" value="calcular"  >

      </form>
    </Main>
    
</body>
</html>