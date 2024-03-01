<?php session_start();
$usuario = "ricardo_sf05";
$senha = "6253";

$usuarioinserido = $_GET["usuario"]; 
$senhainserida = $_GET["senha"];

if($usuarioinserido == $usuario && $senhainserida == $senha){
    $_SESSION["logou"] = 1;
    header("location: arearestrita.php");
    exit();
} 
elseif (empty($usuarioinserido) || empty($senhainserida)) {
    $_SESSION["campo_vazio"] = true;
    header("location: login.php");
    exit();
} 
else{
    $_SESSION["senha_incorreta"] = true;
    header("location: login.php");
    exit();
}
?>