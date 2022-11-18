<?php
require("fonts.php");
// Armaduras
$arm1 = filter_input(INPUT_GET, 'arm1');
$arm2 = filter_input(INPUT_GET, 'arm2');
$arm3 = filter_input(INPUT_GET, 'arm3');
$arm4 = filter_input(INPUT_GET, 'arm4');
$arm5 = filter_input(INPUT_GET, 'arm5');

// Espadas
$esp1 = filter_input(INPUT_GET, 'esp1');
$esp2 = filter_input(INPUT_GET, 'esp2');
$esp3 = filter_input(INPUT_GET, 'esp3');
$esp4 = filter_input(INPUT_GET, 'esp4');
$esp5 = filter_input(INPUT_GET, 'esp5');

// Escudos
$esc1 = filter_input(INPUT_GET, 'esc1');
$esc2 = filter_input(INPUT_GET, 'esc2');
$esc3 = filter_input(INPUT_GET, 'esc3');
$esc4 = filter_input(INPUT_GET, 'esc4');
$esc5 = filter_input(INPUT_GET, 'esc5');

// Poções
$po1 = filter_input(INPUT_GET, 'po1');
$po2 = filter_input(INPUT_GET, 'po2');
$po3 = filter_input(INPUT_GET, 'po3');
$po4 = filter_input(INPUT_GET, 'po4');
$po5 = filter_input(INPUT_GET, 'po5');

// Comidas
$com1 = filter_input(INPUT_GET, 'com1');
$com2 = filter_input(INPUT_GET, 'com2');
$com3 = filter_input(INPUT_GET, 'com3');
$com4 = filter_input(INPUT_GET, 'com4');
$com5 = filter_input(INPUT_GET, 'com5');

if ($arm3 && $esp5 && $esc5 && $po3 && $po4 && $com2 == 'cer'){ // Variáveis que têm o value="cer"
    $msgVenceu = 'Parabéns, você fez uma escolha perfeita!';
    $msgVenceu2 = 'Agora você pode vencer a batalha!';
} else{
    $msgPerdeu = 'Você falhou...';
    //Armaduras
    $armadurasErr = $arm1 || $arm2 || $arm4 || $arm5; // Escolhas erradas do tipo específico
    if($armadurasErr){ 
        $armErr = 'Você escolheu uma(s) armadura(s) ruim(s).<br>';
    } /* else if ($arm3 && ($armadurasErr)){
        echo 'Você escolheu uma combinação com armaduras repetidas sem necessidade.';
    } */
    //Espadas
    $espadasErr = $esp1 || $esp2 || $esp3 || $esp4; //Errados
    if ($espadasErr == 'err'){
        $espErr = 'Você escolheu uma(s) espada(s) ruim(s).<br>';
    } /* else if ($esp5 && ($espadasErr)){
        echo 'Você escolheu uma combinação com espadas repetidas sem necessidade.';
    } */
    //Escudos
    $escudosErr = $esc1 || $esc2 || $esc3 || $esc4;
    if ($escudosErr == 'err'){
        $escErr = 'Você escolheu um(s) escudo(s) ruim(s).<br>';
    } /* else if ($esc5 && ($escudosErr)){
        echo 'Você escolheu uma combinação com escudos repetidos sem necessidade.';
    } */
    // Poções
    $pocoesErr = $po1 || $po2 || $po5;
    if ($pocoesErr == 'err'){
        $poErr = 'Você escolheu uma(s) poção(s) ruim(s).<br>';
    } /* else if ($po3 && $po4 && ($pocoesErr)){
        echo 'Você escolheu uma combinação com poções repetidas sem necessidade.';
    } */
    // Comidas
    $comidasErr = $com1 || $com3 || $com4 || $com5;
    if ($comidasErr == 'err'){
        $comErr = 'Você escolheu um(s) alimento(s) ruim(s).<br>';
    } /* else if ($com2 && ($comidasErr)){
        echo 'Você escolheu uma combinação com alimentos repetidas sem necessidade.';
    } */
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Aboreto&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Taviraj:wght@300&display=swap" rel="stylesheet">
    <link href="style.css?v=1" rel="stylesheet">
    <title>Jogo de Escolhas (Combinação)</title>
</head>
<body>
<center>
    <div>
        <div class="titulo">
        GUERRA (IM)PERFEITA
        </div>
    </center>
    <div class="separacao"></div>
</body>
</html>