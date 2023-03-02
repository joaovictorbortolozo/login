<?php
$usuario = $_POST["usuario"];
$senha = $_POST["senha"];

if($usuario == "carlos" && $senha == "123"){
    header("location: painel.php");
}else{
    header("location: usuario_invalido.php");
}
?>