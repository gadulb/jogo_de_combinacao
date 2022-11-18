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
    <div>
        <div class="titulo">
        GUERRA (IM)PERFEITA
        </div>
    </center>
    <div class="separacao"></div>
    <div class="desc">
        <h2>
            Caro Cavaleiro,<br><br>
            <br>O reino de Inforny fora tomado pelos dragões e você, como um dos importantes cavaleiros do reino, irá enfrentá-los; entretanto, você não tem muito tempo para se preparar, por isso, terá que levar poucos objetos para conseguir sobreviver.  
            <br>Caro cavaleiro, para esta importante missão, você deverá escolher 6 dos 25 itens listados abaixo. 
            <br>Agora, cabe a você ter o conhecimento e a sorte de escolher a combinação perfeita que o fará triunfar!  
            <br><br>Boa sorte... 
        </h2>
    </div>
        
    <center>
        <form id="combinacoes" action="resultado.php" method="get">
            <table> <!-- ARMADURAS -->
                <tr class="nome"><!-- NOME -->
                    <td>Armadura padrão</td>
                    <td>Armadura robusta</td>
                    <td>Armadura simples</td>
                    <td>Armadura real</td>
                    <td>Armadura rigorosa</td>
                </tr>
                <tr class="imagem"><!-- IMAGEM -->
                    <td><img src="itens_matematica/armadura/armadura1.png" width="150"></td>
                    <td><img src="itens_matematica/armadura/armadura2.png" width="150"></td>
                    <td><img src="itens_matematica/armadura/armadura3.png" width="150"></td>
                    <td><img src="itens_matematica/armadura/armadura4.png" width="150"></td>
                    <td><img src="itens_matematica/armadura/armadura5.png" width="150"></td>
                </tr>
                <tr class="descricao"><!-- DESCRIÇÃO -->
                    <td>Uma armadura que possui uma proteção leve.</td>
                    <td>Usada por cavaleiros e aventureiros experientes.</td>
                    <td>Algumas espadadas e projeteis ela consegue segurar!</td>
                    <td>Muito utilizada por líderes dos exércitos reais.</td>
                    <td>Quase indestrutível, porém extremamente pesada e difícil de utilizar.</td>
                </tr>
                <tr class="selecao"><!-- SELEÇÃO -->
                    <td>Selecionar: <input type="checkbox" name="arm1" value="err"></td>
                    <td>Selecionar: <input type="checkbox" name="arm2" value="cer"></td>
                    <td>Selecionar: <input type="checkbox" name="arm3" value="cer"></td>
                    <td>Selecionar: <input type="checkbox" name="arm4" value="err"></td>
                    <td>Selecionar: <input type="checkbox" name="arm5" value="err"></td>
                </tr>
            </table>
            <br><br>
            <table> <!-- ESPADAS -->
                <tr class="nome">
                    <td>Espada padrão</td>
                    <td>Espada infernal</td>
                    <td>Espada laminada</td>
                    <td>Catana talhante</td>
                    <td>Espada heroica</td>
                </tr>
                <tr class="imagem">
                    <td><img src="itens_matematica/espadas/espada1.png" width="150"></td>
                    <td><img src="itens_matematica/espadas/espada2.png" width="150"></td>
                    <td><img src="itens_matematica/espadas/espada3.png" width="150"></td>
                    <td><img src="itens_matematica/espadas/espada4.png" width="150"></td>
                    <td><img src="itens_matematica/espadas/espada5.png" width="150"></td>
                </tr>
                <tr class="descricao">
                    <td>Uma simples espada de um simples cavaleiro.</td>
                    <td>Espada conhecida por muito cavaleiros como destruidora de demônios.</td>
                    <td>Uma espada forjada por um ferreiro talentoso.</td>
                    <td>Uma espada fina, porém muito cortante.</td>
                    <td>Espada utilizada somente pelos heróis dignos.</td>
                </tr>
                <tr class="selecao">
                    <td>Selecionar: <input type="checkbox" name="esp1" value="err"></td>
                    <td>Selecionar: <input type="checkbox" name="esp2" value="err"></td>
                    <td>Selecionar: <input type="checkbox" name="esp3" value="err"></td>
                    <td>Selecionar: <input type="checkbox" name="esp4" value="err"></td>
                    <td>Selecionar: <input type="checkbox" name="esp5" value="cer"></td>
                </tr>
            </table>
            <br><br>
            <table> <!-- ESCUDOS -->
                <tr class="nome">
                    <td>Escudo rústico</td>
                    <td>Escudo padrão</td>
                    <td>Escudo rígido</td>
                    <td>Escudo submerso</td>
                    <td>Escudo mítico</td>
                </tr>
                <tr class="imagem">
                    <td><img src="itens_matematica/escudos/escudo1.png" width="150"></td>
                    <td><img src="itens_matematica/escudos/escudo2.png" width="150"></td>
                    <td><img src="itens_matematica/escudos/escudo3.png" width="150"></td>
                    <td><img src="itens_matematica/escudos/escudo4.png" width="150"></td>
                    <td><img src="itens_matematica/escudos/escudo5.png" width="150"></td>
                </tr>
                <tr class="descricao">
                    <td>Cavaleiros iniciantes o utilizam.</td>
                    <td>Escudo utilizado para treinamento.</td>
                    <td>Resistente, porém pouco eficiente.</td>
                    <td>Muito resistente e eficiente em batalhas aquáticas e terrestres.</td>
                    <td>Escudo lendário, porém ninguém nunca conseguiu utilizá-lo.</td>
                </tr>
                <tr class="selecao">
                    <td>Selecionar: <input type="checkbox" name="esc1" value="err"></td>
                    <td>Selecionar: <input type="checkbox" name="esc2" value="err"></td>
                    <td>Selecionar: <input type="checkbox" name="esc3" value="err"></td>
                    <td>Selecionar: <input type="checkbox" name="esc4" value="err"></td>
                    <td>Selecionar: <input type="checkbox" name="esc5" value="cer"></td>
                </tr>
            </table>
            <br><br>
            <table> <!-- POÇÕES -->
                <tr class="nome">
                    <td>Poção de cura</td>
                    <td>Poção de força</td>
                    <td>Poção de intelecto</td>
                    <td>Poção de invisibilidade</td>
                    <td>Poção de velocidade</td>
                </tr>
                <tr class="imagem">
                    <td><img src="itens_matematica/pocoes/pocao_cura.png" width="150"></td>
                    <td><img src="itens_matematica/pocoes/pocao_forca.png" width="150"></td>
                    <td><img src="itens_matematica/pocoes/pocao_intelecto.png" width="150"></td>
                    <td><img src="itens_matematica/pocoes/pocao_invisibilidade.png" width="150"></td>
                    <td><img src="itens_matematica/pocoes/pocao_velocidade.png" width="150"></td>
                </tr>
                <tr class="descricao">
                    <td>Regenera danos sofridos.</td>
                    <td>Aumenta a força física do usuário.</td>
                    <td>Melhora as habilidades mentais do usuário.</td>
                    <td>O usuário fica totalmente invisível.</td>
                    <td>Todas as habilidades ficam mais ágeis.</td>
                </tr>
                <tr class="selecao">
                    <td>Selecionar: <input type="checkbox" name="po1" value="err"></td>
                    <td>Selecionar: <input type="checkbox" name="po2" value="err"></td>
                    <td>Selecionar: <input type="checkbox" name="po3" value="cer"></td>
                    <td>Selecionar: <input type="checkbox" name="po4" value="cer"></td>
                    <td>Selecionar: <input type="checkbox" name="po5" value="err"></td>
                </tr>
            </table>
            <br><br>
            <table> <!-- COMIDAS -->
                <tr class="nome">
                    <td>Bife</td>
                    <td>Cerveja</td>
                    <td>Queijo</td>
                    <td>Peixe Cru</td>
                    <td>Maçã</td>
                </tr>
                <tr class="imagem">
                    <td><img src="itens_matematica/comidas/comida1.png" width="150"></td>
                    <td><img src="itens_matematica/comidas/comida2.png" width="150"></td>
                    <td><img src="itens_matematica/comidas/comida3.png" width="150"></td>
                    <td><img src="itens_matematica/comidas/comida4.png" width="150"></td>
                    <td><img src="itens_matematica/comidas/comida5.png" width="150"></td>
                </tr>
                <tr class="descricao">
                    <td>Muito saboroso! :)</td>
                    <td>Ótimo para alegrar a batalha.</td>
                    <td>Alimento de alta qualidade :D</td>
                    <td>Se você gosta de sushi é uma ótica opção.</td>
                    <td>Saudável, porém não mata a fome.</td>
                </tr>
                <tr class="selecao">
                    <td>Selecionar: <input type="checkbox" name="com1" value="err"></td>
                    <td>Selecionar: <input type="checkbox" name="com2" value="cer"></td>
                    <td>Selecionar: <input type="checkbox" name="com3" value="err"></td>
                    <td>Selecionar: <input type="checkbox" name="com4" value="err"></td>
                    <td>Selecionar: <input type="checkbox" name="com5" value="err"></td>
                </tr>
            </table>
            <br><br><br>
            <center><button type="button" onclick="verificar()">IR PARA A BATALHA</button></center>
            <br><br>
        </form>
    </div>
    <!--
    <form id="combinacoes" action="resultado.php" method="get">
        <h1>Seleção 1</h1>
        <input type="checkbox" name="sel1_1" value="err">Opção 1<br>
        <input type="checkbox" name="sel1_2" value="err">Opção 2<br>
        <input type="checkbox" name="sel1_3" value="err">Opção 3<br>
        <input type="checkbox" name="sel1_4" value="cer">Opção 4<br>
        <input type="checkbox" name="sel1_5" value="cer">Opção 5<br>
        <br><br>
        <h1>Seleção 2</h1>
        <input type="checkbox" name="sel2_1" value="err">Opção 1<br>
        <input type="checkbox" name="sel2_2" value="err">Opção 2<br>
        <input type="checkbox" name="sel2_3" value="err">Opção 3<br>
        <input type="checkbox" name="sel2_4" value="err">Opção 4<br>
        <input type="checkbox" name="sel2_5" value="cer">Opção 5<br>
        <br><br>
        <h1>Seleção 3</h1>
        <input type="checkbox" name="sel3_1" value="err">Opção 1<br>
        <input type="checkbox" name="sel3_2" value="err">Opção 2<br>
        <input type="checkbox" name="sel3_3" value="err">Opção 3<br>
        <input type="checkbox" name="sel3_4" value="err">Opção 4<br>
        <input type="checkbox" name="sel3_5" value="cer">Opção 5<br>
        <br><br>
        <h1>Seleção 4</h1>
        <input type="checkbox" name="sel4_1" value="err">Opção 1<br>
        <input type="checkbox" name="sel4_2" value="err">Opção 2<br>
        <input type="checkbox" name="sel4_3" value="err">Opção 3<br>
        <input type="checkbox" name="sel1_4" value="err">Opção 4<br>
        <input type="checkbox" name="sel4_5" value="cer">Opção 5<br>
        <br><br>
        <h1>Seleção 5</h1>
        <input type="checkbox" name="sel5_1" value="err">Opção 1<br>
        <input type="checkbox" name="sel5_2" value="err">Opção 2<br>
        <input type="checkbox" name="sel5_3" value="err">Opção 3<br>
        <input type="checkbox" name="sel5_4" value="err">Opção 4<br>
        <input type="checkbox" name="sel5_5" value="cer">Opção 5<br>
        <br><br>
        <button type="button" onclick="verificar()">IR PARA A BATALHA</button>
    </form>
    -->
    <script>
    let verificar = () => {
        const selectionados = document.querySelectorAll('input[type="checkbox"]:checked').length;
        console.log(selectionados); 
        const formulario = document.getElementById("combinacoes");
        if (selectionados == 6) {
            formulario.submit(); 
        } else {
            if (selectionados < 6){
                alert("Erro: você selecionou MENOS de 6 elementos!");
            } else if (selectionados > 6) {
                alert("Erro: você selecionou MAIS de 6 elementos!");
            }
        }
    };
</script>
</center>
</body>
</html>