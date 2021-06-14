<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>atividade agenda array</title>
</head>
<body>
    <h1>Agenda de eventos</h1>
<?php
    $agenda = array('E3'=>'12/06/2021', 'Copa do Mundo'=> '21/11/2022');

    foreach($agenda as $agend => $data){
        echo($agend."</br>");
        echo($data."</br>");
    }
?>
</body>
</html>