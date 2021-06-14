<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>usando formulario</title>
</head>
<body>
    <header>
        <h1>Pesquisa sobre as mundanças.</h1>
    </header>
    <form action="muda.php" method="post">
        <p>Nome: <input type="text" name="nome"></p>
        <p>Idade: <input type="number" name="idade"></p>
        <p>Nota: </p>
        <p>Educação: <input type="number" name="educacao"></p>
        <p>Saúde: <input type="number" name="saude"></p>
        <p>Segurança: <input type="number" name="seguranca"></p>
        <p>Opinião: <input type="text" name="opiniao"></p>


        <input type="submit" value="Salvar">
    </form>    


</body>
</html>