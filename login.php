<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sessão</title>
</head>
<body>
    <h1>Insira Seu Login</h1>
    <form action="verificar.php" method="get">
        <label for="usuario">Nome de Usúario:</label><br>
            <input type="text" name="usuario"><br><br>
        <label for="senha">Senha:</label><br>
            <input type="password" name="senha"><br><br>
        <input type="submit" value="Enviar">

    <!-- CÓDIGO PHP -->
    <?php session_start();
    if(isset($_SESSION["senha_incorreta"]) && $_SESSION["senha_incorreta"] === true){
        echo "<p style= 'color: red;'>Usuário e/ou senha incorreta. Tente Novamente.</p>";
        unset ($_SESSION["senha_incorreta"]);
    }
    elseif (isset($_SESSION["campo_vazio"]) && $_SESSION["campo_vazio"] === true) {
        echo "<p style= 'color: red;'>Preencha todos os campos.</p>";
        unset ($_SESSION["campo_vazio"]);
    }
    ?>    
    </form>
</body>
</body>
</html>