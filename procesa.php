<!-- Archivo que procesa nuestro formulario de ingreso -->
<?php

$usuario = $_POST["login"];
$clave = $_POST["clave"];

if (($usuario != null) && ($clave != null)){
    if(($usuario == 'admin') && ($clave == '1234')) {
        echo "<p>Perfecto, tus datos son correctos</p>";
    } else {
        echo "<p>Te equivocaste gil XD</p>";
    }
    /* echo "<p>Ingresaste un valor al usuario</p>"; */
} else {
    echo "<p>Debes colocar un valor al usuario</p>";
}
?>