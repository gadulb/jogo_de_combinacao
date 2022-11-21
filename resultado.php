<?php
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
    $msgVenceu = 'Parabéns, Cavaleiro!<br><br>
    <br>O reino de Inforny fora tomado pelos dragões e você, como um dos importantes cavaleiros do reino, enfrentou-os de forma sábia com êxito, mesmo não encontrando tempo suficiente para se preparar, por isso, além de parabenizá-lo pela sua sabedoria de escolhas, o reino o parabeniza pelo bom desempenho durante a guerra.   
    <br><br><br>Ass. Reino de Inforny.';
} else{
    $msgPerdeu = 'Lamentamos ao Cavaleiro...<br><br> 
    <br>O reino de Inforny lamenta, através desta carta, à morte do cavaleiro. Por conta de suas más escolhas, não conseguiu resistir à guerra.
    <br><br>Alguns dos itens encontrados que, possivelmente, o atrapalharam durante a guerra:<br><br>';
    $msgPerdeu1 = '<br>Nossas condolências à família e amigos... 
    <br><br><br><br>Ass. Reino de Inforny. ';
    //Armaduras
    $armadurasErr = $arm1 || $arm2 || $arm4 || $arm5; // Escolhas erradas do tipo específico
    if($armadurasErr){ 
        $armErr = '♞ O cavaleiro escolheu uma(s) armadura(s) ruim(s).<br>';
    } else{
        $armErr = '';
    }
    //Espadas
    $espadasErr = $esp1 || $esp2 || $esp3 || $esp4; //Errados
    if ($espadasErr == 'err'){
        $espErr = '♞ O cavaleiro escolheu uma(s) espada(s) ruim(s).<br>';
    } else{
        $espErr = '';
    }
    //Escudos
    $escudosErr = $esc1 || $esc2 || $esc3 || $esc4;
    if ($escudosErr == 'err'){
        $escErr = '♞ O cavaleiro escolheu um(s) escudo(s) ruim(s).<br>';
    } else{
        $escErr = '';
    }
    // Poções
    $pocoesErr = $po1 || $po2 || $po5;
    if ($pocoesErr == 'err'){
        $poErr = '♞ O cavaleiro escolheu uma(s) poção(s) ruim(s).<br>';
    } else{
        $poErr = '';
    }
    // Comidas
    $comidasErr = $com1 || $com3 || $com4 || $com5;
    if ($comidasErr == 'err'){
        $comErr = '♞ O cavaleiro escolheu um(s) alimento(s) ruim(s).<br>';
    } else{
        $comErr = '';
    }
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
    <link href="style.css?v=2" rel="stylesheet">
    <title>Jogo de Escolhas (Combinação)</title>
</head>
<body>
<center>
    <div class="titulo">GUERRA (IM)PERFEITA</div>
    <div class="separacao"></div>
</center>
    <h2 class="desc">
        <?php if($arm3 && $esp5 && $esc5 && $po3 && $po4 && $com2 == 'cer'){echo $msgVenceu;} 
        else{
            echo $msgPerdeu.$armErr.$espErr.$escErr.$poErr.$comErr.$msgPerdeu1;
        }?>
    </h2>
    <center>
        <a target="blank" href="https://github.com/gadulb/jogo_de_combinacao">Repositório do projeto (GitHub)</a>
    </center>
    <br><br><br>
</body>
</html>