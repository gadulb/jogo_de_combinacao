<html>
<body>
    <form id="cadastro" action="https://www.google.com/">
        <label><input type="checkbox" name="c1"> check 01</label>
        <label><input type="checkbox" name="c2"> check 02</label>
        <label><input type="checkbox" name="c3"> check 03</label>
        <label><input type="checkbox" name="c4"> check 04</label>
        <label><input type="checkbox" name="c5"> check 05</label>
        <label><input type="checkbox" name="c6"> check 06</label>
        <label><input type="checkbox" name="c7"> check 07</label>
        <label><input type="checkbox" name="c8"> check 08</label>
        <label><input type="checkbox" name="c9"> check 09</label>
        <p id="erro">

        </p>
    </form>


  <button type="button" onclick="verificar()">
    clicar
  </button>
  <script>

    let verificar = () => {
        const selectionados = document.querySelectorAll('input[type="checkbox"]:checked').length;
        console.log(selectionados);
        const formulario = document.getElementById("cadastro");
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
</body>
</html>