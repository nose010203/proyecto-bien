<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST["usuario"];
    $contraseña = $_POST["contraseña"];
    
    echo $usuario . "<br>";
    echo $contraseña . "<br>";
}
?>