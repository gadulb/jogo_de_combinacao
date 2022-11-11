<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jogo de Escolhas (Combinação)</title>
</head>
<script type="text/javascript">
    var CheckMaximo = 6;
    function verificar() {
        var Marcados = 1;
        var objCheck = document.forms['form_combinacoes'].elements['objetos'];

        //Percorrendo os checks para ver quantos foram selecionados:
        for (var iLoop = 0; iLoop<objCheck.length; iLoop++) {
            //Se o número máximo de checkboxes ainda não tiver sido atingido, continua a verificação:
            if (Marcados <= CheckMaximo) {
                if (objCheck[iLoop].checked) {
                        Marcados++;
                }
                    //Habilitando todos os checkboxes, pois o máximo ainda não foi alcançado.
                    for (var i=0; i<objCheck.length; i++) {
                            objCheck[i].disabled = false;
                    }       
            //Caso contrário, desabilitar o checkbox;
            //Nesse caso, é necessário percorrer todas as opções novamente, desabilitando as não checadas;
            } else {
                    for (var i=0; i<objCheck.length; i++) {
                            if(objCheck[i].checked == false) {
                                    objCheck[i].disabled = true;
                            }       
                    }
            }
        }
        if
    }
</script>
</head>
<body>
    <form name="form_combinacoes" action="paginaPHPouASP" method="get" action="resultado2.php">
        <h1>Jogo de Combinações</h1>
        <h2>Obs: Você pode escolher até 6 opções!</h2>
        <h3>Sel 1</h3>
        <input type="checkbox" name="objetos" value="err" onclick="verificar()"> Sel 1<br>
        <input type="checkbox" name="objetos" value="err" onclick="verificar()"> Sel 2<br>
        <input type="checkbox" name="objetos" value="err" onclick="verificar()"> Sel 3<br>
        <input type="checkbox" name="objetos" value="err" onclick="verificar()"> Sel 4<br>
        <input type="checkbox" name="objetos" value="cer" onclick="verificar()"> Sel 5<br>
        <h3>Sel 1</h3>
        <input type="checkbox" name="objetos" value="err" onclick="verificar()"> Sel 6<br>
        <input type="checkbox" name="objetos" value="err" onclick="verificar()"> Sel 7<br>
        <input type="checkbox" name="objetos" value="err" onclick="verificar()"> Sel 8<br>
        <input type="checkbox" name="objetos" value="err" onclick="verificar()"> Sel 9<br>
        <input type="checkbox" name="objetos" value="cer" onclick="verificar()"> Sel 10<br>
        <h3>Sel 3</h3>
        <input type="checkbox" name="objetos" value="err" onclick="verificar()"> Sel 11<br>
        <input type="checkbox" name="objetos" value="err" onclick="verificar()"> Sel 12<br>
        <input type="checkbox" name="objetos" value="err" onclick="verificar()"> Sel 13<br>
        <input type="checkbox" name="objetos" value="err" onclick="verificar()"> Sel 14<br>
        <input type="checkbox" name="objetos" value="cer" onclick="verificar()"> Sel 15<br>
        <h3>Sel 3</h3>
        <input type="checkbox" name="objetos" value="err" onclick="verificar()"> Sel 16<br>
        <input type="checkbox" name="objetos" value="err" onclick="verificar()"> Sel 17<br>
        <input type="checkbox" name="objetos" value="err" onclick="verificar()"> Sel 18<br>
        <input type="checkbox" name="objetos" value="err" onclick="verificar()"> Sel 19<br>
        <input type="checkbox" name="objetos" value="cer" onclick="verificar()"> Sel 20<br>
        <h3>Sel 5</h3>
        <input type="checkbox" name="objetos" value="err" onclick="verificar()"> Sel 21<br>
        <input type="checkbox" name="objetos" value="err" onclick="verificar()"> Sel 22<br>
        <input type="checkbox" name="objetos" value="err" onclick="verificar()"> Sel 23<br>
        <input type="checkbox" name="objetos" value="err" onclick="verificar()"> Sel 24<br>
        <input type="checkbox" name="objetos" value="cer" onclick="verificar()"> Sel 25<br>
        <input type="submit">
    </form>
</body>
</html>