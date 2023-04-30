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
            <!-- Implementar aqui! -->
            <form method="GET" action="logica/processamento.php">
            <!-- Implementar aqui! -->
            <label for="">Primeiro número:</label>
            <input type="text" name="inputnum1" placeholder="Digite o numero 1">
            <label for="">Segundo número:</label>
            <input type="text" name="inputnum2" placeholder="Digite o numero 2">
            <select name="selectOperacoes" id="">
                <option value="adicao">Adição</option>
                <option value="subtracao">Subtração</option>
                <option value="multi">Multiplicação</option>
                <option value="divisao">Divisão</option>
            </select>
            <input type="submit" id="botao" value="Calcular">
        </form>
        <img src="img/google-play.png">
    </div>

    <footer>
        <p>Desenvolvido por FATEC - Análise e Desenvolvimento de Sistemas</p>
        <p>"Feliz é aquele que programa"</p>
        <p>Copyright © 2023 - Todos os direitos reservados</p>
    </footer>
</body>
</html>