<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jogo de Escolhas (Combinação)</title>
</head>
<body>
    <center>
    <div>
        <form id="combinacoes" action="resultado.php" method="get">
            <table>
                <tr><!-- NOME -->
                    <td>ITEM 1</td>
                    <td>ITEM 2</td>
                    <td>ITEM 3</td>
                    <td>ITEM 4</td>
                    <td>ITEM 5</td>
                </tr>
                <tr><!-- IMAGEM -->
                    <td><img src="" width="150">(Imagem 1)</td>
                    <td><img src="" width="150">(Imagem 2)</td>
                    <td><img src="" width="150">(Imagem )</td>
                    <td><img src="" width="150">(Imagem)</td>
                    <td><img src="" width="150">(Imagem)</td>
                </tr>
                <tr><!-- DESCRIÇÃO -->
                    <td>Descrição...</td>
                </tr>
                <tr><!-- SELEÇÃO -->
                    <td>Selecionar: <input type="checkbox" name="sel1_1" value="err"></td>
                </tr>
            </table>
            <table>
                <tr>
                    <td>ITEM 6</td>
                    <td>ITEM 7</td>
                    <td>ITEM 8</td>
                    <td>ITEM 9</td>
                    <td>ITEM 10</td>
                </tr>
                <tr>
                    
                </tr>
                <tr>
                    
                </tr>
                <tr>
                    
                </tr>
            </table>
            <table>
                <tr>
                    <td>ITEM 11</td>
                    <td>ITEM 12</td>
                    <td>ITEM 13</td>
                    <td>ITEM 14</td>
                    <td>ITEM 15</td>
                </tr>
                <tr></tr>
                <tr></tr>
                <tr></tr>
            </table>
            <table>
                <tr>
                    <td>ITEM 16</td>
                    <td>ITEM 17</td>
                    <td>ITEM 18</td>
                    <td>ITEM 19</td>
                    <td>ITEM 20</td>
                </tr>
                <tr></tr>
                <tr></tr>
                <tr></tr>
            </table>
            <table>
                <tr>
                    <td>ITEM 21</td>
                    <td>ITEM 22</td>
                    <td>ITEM 23</td>
                    <td>ITEM 24</td>
                    <td>ITEM 25</td>
                </tr>
                <tr></tr>
                <tr></tr>
                <tr></tr>
            </table>
            <button type="button" onclick="verificar()">IR PARA A BATALHA</button>
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