<?php session_start();
    if (isset($_SESSION["logou"]) && $_SESSION["logou"] = 1){
    echo "<h1>Acesso Concedido.</h1>";
    echo "<img src='baleia-jubarte.webp' alt='Minha Foto'>";
    unset ($_SESSION["logou"]);
    exit();
    }
    else{
        header("location: login.php");
        exit();
    }
?>
