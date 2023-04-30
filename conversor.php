<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <title>CalcTEC</title>
</head>
<body>
    <header>
        <h1>CalcTEC</h1>
    </header>
    <nav class="menu">
        <ul>
            <li><a href="https://www.fatecpp.edu.br/">Sobre</a></li>
            <li><a href="index.php">Calculadora</a></li>
            <li><a href="temperatura.php">Temperatura</a></li>
            <li><a href="conversor.php">Conversão</a></li>
        </ul>
    </nav>
    
    <div class="div-conteudo">
        <form method="GET" action="logica/processamentoConversor.php">
            <!-- Implementar aqui! -->
            <label for="">Digite um valor em medida de Comprimento:</label>
            <input type="text" name="convnum1" placeholder="Digite um valor em medida de comprimento">
            <select name="selectConversor" id="">
                <option value="A">Centimetros para Metros</option>
                <option value="B">Metros para Centimetros</option>
                <option value="C">Metros para Quilômetros</option>
                <option value="D">Quilômetros para Metros</option>
                 
            </select>
            <input type="submit" id="botao" value="Calcular">

        </form>
        <img src="img/google-play.png">
    </div>

    <footer>
        <p>Desenvolvido por FATEC - Análise e Desenvolvimento de Sistema</p>
        <p>"Feliz é aquele que programa"</p>
        <p>Copyright © 2023 - Todos os direitos reservados</p>
    </footer>
</body>
</html>