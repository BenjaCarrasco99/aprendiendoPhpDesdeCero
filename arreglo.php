<?php

    $paises = array("Chile", "Kazajistán", "Irlanda", "Noruega", "Honduras", "Canadá", "Kiribati", "Burkina Faso", "Vanuatu");

    // La funcion print_r(); nos ayuda a mostrar la composición y organización del Array.
    print_r ($paises);
    echo "<br/>";



    // Podemos cambiarle el valor al indice de la siguiente forma: 
    $paises = array("ch" => "Chile", "kz" => "Kazajistán", "ir" => "Irlanda", "no" => "Noruega", "ho" => "Honduras", "ca" => "Canadá", 
                    "ki" => "Kiribati", "bf" => "Burkina Faso", "va" => "Vanuatu");

    print_r ($paises);
    echo "<br/>";



    $paises = array("Chile", "Kazajistán", "Irlanda", "Noruega", "Honduras", "Canadá", "Kiribati", "Burkina Faso", "Vanuatu");

    // Si queremos mostrar un componente del array, podemos hacerlo mediante el siguiente método.
    echo $paises[2]."<br/>";

    // También se puede mostrar todos los componentes del arreglo con un ciclo for.
    echo "Mis países favoritos son ";

    for ($indice = 0; $indice <= 8; $indice++) {

        if ($indice < 8) {

            echo $paises[$indice].", ";

        } else {

            echo $paises[$indice].".";

        }

    }

    echo "<br/>";



    $paises = array("ch" => "Chile", "kz" => "Kazajistán", "ir" => "Irlanda", "no" => "Noruega", "ho" => "Honduras", "ca" => "Canadá", 
                    "ki" => "Kiribati", "bf" => "Burkina Faso", "va" => "Vanuatu");

    // En el caso de que el indice sea un String: 
    echo $paises["bf"]."<br/>";

    // En el caso de mostrar todos los componentes del arreglo cuyos indices son del tipo String, debes utilizar el foreach
    foreach ($paises as $indice => $valor) {

        echo "El índice ".$indice." le pertenece al país de ".$valor.". <br/>";

    }

    echo "Mis países favoritos son ";

    foreach ($paises as $indice => $valor) {

        if ($indice != "va") {

            echo $valor.", ";

        } else {

            echo $valor.".";

        }

    }

    echo "<br/>";



    // Para agregar un nuevo componente al arreglo, usamos la función array_push();
    $paises = array("Chile", "Kazajistán", "Irlanda", "Noruega", "Honduras", "Canadá", "Kiribati", "Burkina Faso", "Vanuatu");

    array_push ($paises, "Burundi");

    print_r ($paises);
    echo "<br/>";

?>