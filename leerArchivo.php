<?php 

    // Abriendo un archivo para leer el contenido.
    $archivo = "dsound.dll";
    $archivoAbierto = fopen ($archivo, "r");
    $contenido = fread ($archivoAbierto, filesize ($archivo));
    echo $contenido;

?>