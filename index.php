<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jogo de Escolhas (Combinação)</title>
</head>
<script>
    function validateForm(){
        let sel1 = document.forms["combinacoes"]["sel1"].value;
        if (sel1 == "") {
        alert("Responda todas a todas as perguntas!");
        return false;
        }
        let sel2 = document.forms["combinacoes"]["sel2"].value;
        if (sel2 == "") {
        alert("Responda todas a todas as perguntas!");
        return false;
        }
        let sel3 = document.forms["combinacoes"]["sel3"].value;
        if (sel3 == "") {
        alert("Responda todas a todas as perguntas!");
        return false;
        }
        let sel4 = document.forms["combinacoes"]["sel4"].value;
        if (sel4 == "") {
        alert("Responda todas a todas as perguntas!");
        return false;
        }
        let sel5 = document.forms["combinacoes"]["sel5"].value;
        if (sel5 == "") {
        alert("Responda todas a todas as perguntas!");
        return false;
        }
    }
</script>
<body>
    <form name="combinacoes" action="resultado.php" method="get" onsubmit="return validateForm()">
        <h1>Seleção 1</h1>
        <input type="radio" name="sel1" value="err">Opção 1<br>
        <input type="radio" name="sel1" value="err">Opção 2<br>
        <input type="radio" name="sel1" value="err">Opção 3<br>
        <input type="radio" name="sel1" value="err">Opção 4<br>
        <input type="radio" name="sel1" value="cer">Opção 5<br>
        <br><br>
        <h1>Seleção 2</h1>
        <input type="radio" name="sel2" value="err">Opção 1<br>
        <input type="radio" name="sel2" value="err">Opção 2<br>
        <input type="radio" name="sel2" value="err">Opção 3<br>
        <input type="radio" name="sel2" value="err">Opção 4<br>
        <input type="radio" name="sel2" value="cer">Opção 5<br>
        <br><br>
        <h1>Seleção 3</h1>
        <input type="radio" name="sel3" value="err">Opção 1<br>
        <input type="radio" name="sel3" value="err">Opção 2<br>
        <input type="radio" name="sel3" value="err">Opção 3<br>
        <input type="radio" name="sel3" value="err">Opção 4<br>
        <input type="radio" name="sel3" value="cer">Opção 5<br>
        <br><br>
        <h1>Seleção 4</h1>
        <input type="radio" name="sel4" value="err">Opção 1<br>
        <input type="radio" name="sel4" value="err">Opção 2<br>
        <input type="radio" name="sel4" value="err">Opção 3<br>
        <input type="radio" name="sel1" value="err">Opção 4<br>
        <input type="radio" name="sel4" value="cer">Opção 5<br>
        <br><br>
        <h1>Seleção 5</h1>
        <input type="radio" name="sel5" value="err">Opção 1<br>
        <input type="radio" name="sel5" value="err">Opção 2<br>
        <input type="radio" name="sel5" value="err">Opção 3<br>
        <input type="radio" name="sel5" value="err">Opção 4<br>
        <input type="radio" name="sel5" value="cer">Opção 5<br>
        <br><br>
        <input type="submit">
    </form>
</body>
</html>