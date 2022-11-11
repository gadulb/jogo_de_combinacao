<?php
$sel1 = filter_input(INPUT_GET, 'sel1');
$sel2 = filter_input(INPUT_GET, 'sel2');
$sel3 = filter_input(INPUT_GET, 'sel3');
$sel4 = filter_input(INPUT_GET, 'sel4');
$sel5 = filter_input(INPUT_GET, 'sel5');

if ($sel1 && $sel2 && $sel3 && $sel4 && $sel5 == 'cer'){
    echo '<h1>Parabéns, você fez uma escolha perfeita!</h1>Agora você pode vencer a batalha!<br>;)';
} else{
    echo '<h1>Você falhou...</h1>';
    if($sel1 == 'err'){
        echo 'Você escolheu um (sel1) ruim<br>';
    }
    if ($sel2 == 'err'){
        echo 'Você escolheu um (sel2) ruim<br>';
    }
    if ($sel3 == 'err'){
        echo 'Você escolheu um (sel3) ruim<br>';
    }
    if ($sel4 == 'err'){
        echo 'Você escolheu um (sel4) ruim<br>';
    }
    if ($sel5 == 'err'){
        echo 'Você escolheu um (sel5) ruim<br>';
    }
}
?>