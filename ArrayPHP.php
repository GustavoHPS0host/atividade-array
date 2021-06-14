<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuario Array no PHP</title>
</head>
<body>
    <?php
    $nome= array('Guilherme Soares','Caio Elias','Washington');
    $nome[3] = 'Gustavo';

    $nome = array('Bruno','Daniel Santos','Diego');

    echo(count($nome));

    echo($nome[3]);
    $notas= array('Guilherme Soares'=>'6','Caio Elias'=>'7','Washington'=>'8');
    $media = ($notas['Guilherme Soares'] + $notas['Caio Elias']+ $notas['Washington'])/3;
    echo("A média de notas da sala é: $media");
    ?>
<hr>
<?php
    $pessoa = array(
        'nome'=>'Guilherme Soares',
        'Nota'=>9.75,
        'Aluno'=>true);
        echo("Nome: ".$pessoa['nome']."</br>");
        echo("Nota: ".$pessoa['Nota']."</br>");
        echo("Aluno: ".$pessoa['Aluno']."</br>");
?>
<h1>Usando o Forech</h1>

<?php
    $produtos = array('Hd' => 234.09,'Placa mãe' =>2345.95,'Processador' => 262.98);
    
    foreach($produtos as $prod => $preco){
        echo($prod."</br>");
        echo($preco."</br>");
    }

?>
</body>
</html>