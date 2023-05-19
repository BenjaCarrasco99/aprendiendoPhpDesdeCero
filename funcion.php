<?php 

    function imprimirNombre ($nombre, $apellido = "") {
        
        echo "Hola ".$nombre." ".$apellido."<br/>";

    }

    imprimirNombre ("Benjamín", "Carrasco");
    imprimirNombre ("Paula", "Oportus");
    imprimirNombre ("Juanito");
    imprimirNombre ("Yerko", "Tapia");
    imprimirNombre ("Benjamín", "Carrasco");

    for ($n = 0; $n < 10; $n++) {
        
        imprimirNombre ("Benjamín", "Carrasco");

    }
?>