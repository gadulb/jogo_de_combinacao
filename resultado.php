<?php
$sel1_1 = filter_input(INPUT_GET, 'sel1_1');
$sel1_2 = filter_input(INPUT_GET, 'sel1_2');
$sel1_3 = filter_input(INPUT_GET, 'sel1_3');
$sel1_4 = filter_input(INPUT_GET, 'sel1_4');
$sel1_5 = filter_input(INPUT_GET, 'sel1_5');

$sel2_1 = filter_input(INPUT_GET, 'sel2_1');
$sel2_2 = filter_input(INPUT_GET, 'sel2_2');
$sel2_3 = filter_input(INPUT_GET, 'sel2_3');
$sel2_4 = filter_input(INPUT_GET, 'sel2_4');
$sel2_5 = filter_input(INPUT_GET, 'sel2_5');

$sel3_1 = filter_input(INPUT_GET, 'sel3_1');
$sel3_2 = filter_input(INPUT_GET, 'sel3_2');
$sel3_3 = filter_input(INPUT_GET, 'sel3_3');
$sel3_4 = filter_input(INPUT_GET, 'sel3_4');
$sel3_5 = filter_input(INPUT_GET, 'sel3_5');

$sel4_1 = filter_input(INPUT_GET, 'sel4_1');
$sel4_2 = filter_input(INPUT_GET, 'sel4_2');
$sel4_3 = filter_input(INPUT_GET, 'sel4_3');
$sel4_4 = filter_input(INPUT_GET, 'sel4_4');
$sel4_5 = filter_input(INPUT_GET, 'sel4_5');

$sel5_1 = filter_input(INPUT_GET, 'sel5_1');
$sel5_2 = filter_input(INPUT_GET, 'sel5_2');
$sel5_3 = filter_input(INPUT_GET, 'sel5_3');
$sel5_4 = filter_input(INPUT_GET, 'sel5_4');
$sel5_5 = filter_input(INPUT_GET, 'sel5_5');

$cer = filter_input(INPUT_GET, 'cer');

if ($sel1_4 && $sel1_5 /* variaveis certas */  && $sel2_5 && $sel3_5 && $sel4_5 && $sel5_5 == 'cer'){ //Ou substituir pela combinação (variáveis que têm o value="cer")
    echo '<h1>Parabéns, você fez uma escolha perfeita!</h1>Agora você pode vencer a batalha!<br>;)';
} else{
    echo '<h1>Você falhou...</h1>';
    /*if ($~armadura errada~ || $armadura_errada…~) (
        echo “Você escolheu a armadura errada.”;
        } else if ($~arm_cer~ && ($~arm_err~ ||…){
        echo “Voce escolheu uma combinação com armadura repetidas sem necessidade”;
        }*/
    //Armaduras (ou outro objeto)
    $tipo1 = $sel1_1 || $sel1_2 || $sel1_3; // || $sel1_4; //Errados
    if($tipo1){ //Menos a opção certa
        echo 'Você escolheu um(s) (sel1) ruim(s)<br>';
    } else if ($sel1_4 && $sel1_5 && ($tipo1)){
        echo 'Você escolheu uma combinação com armadura repetidas sem necessidade';
    }
    $tipo2 = $sel2_1 || $sel2_2 || $sel2_3 || $sel2_4; //Errados
    if ($tipo2 == 'err'){
        echo 'Você escolheu um(s) (sel2) ruim(s)<br>';
    } else if ($sel2_5 && ($tipo2)){
        echo 'Você escolheu uma combinação com (tipo 2) repetidas sem necessidade';
    }
    $tipo3 = $sel3_1 || $sel3_2 || $sel3_3 || $sel3_4;
    if ($tipo3 == 'err'){
        echo 'Você escolheu um(s) (sel3) ruim(s)<br>';
    } else if ($sel3_5 && ($tipo3)){
        echo 'Você escolheu uma combinação com (tipo 3) repetidas sem necessidade';
    }
    $tipo4 = $sel4_1 || $sel4_2 || $sel4_3 || $sel4_4;
    if ($tipo4 == 'err'){
        echo 'Você escolheu um(s) (sel4) ruim(s)<br>';
    } else if ($sel4_5 && ($tipo4)){
        echo 'Você escolheu uma combinação com (tipo 4) repetidas sem necessidade';
    }
    $tipo5 = $sel5_1 || $sel5_2 || $sel5_3 || $sel5_4;
    if ($tipo5 == 'err'){
        echo 'Você escolheu um(s) (sel5) ruim(s)<br>';
    } else if ($sel5_5 && ($tipo5)){
        echo 'Você escolheu uma combinação com (tipo 5) repetidas sem necessidade';
    }
}
?>