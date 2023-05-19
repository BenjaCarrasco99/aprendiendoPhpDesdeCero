<?php  

class persona {

    public $nombre; // Propiedades de la clase
    private $edad;
    protected $altura;

    function __construct ($nuevoNombre) {

        $this -> nombre = $nuevoNombre;

    }
    
    public function ingresarNombre ($nuevoNombre) { // El método o atributo de la clase

        $this -> nombre = $nuevoNombre; // Dentro del método de la clase se le puede asignar un valor a una propiedad de la clase

    }

    public function imprimirNombre () {
        
        echo "El nombre del alumno es ".$this -> nombre." ";

    }

    public function ingresarEdad ($nuevaEdad) {

        $this -> edad = $nuevaEdad;

    }

    public function imprimirEdad () {

        echo "y su edad es de ".$this -> edad." años. <br/>";

    }

}

class alumno extends persona {

    public $puesto;

    public function ingresarAltura ($nuevaAltura) {

        $this -> altura = $nuevaAltura;

    }

    public function imprimirAltura () {

        echo "La altura de ".$this -> nombre." es de ".$this -> altura." metros ";

    }

    public function ingresarPuesto ($nuevoPuesto) {

        $this -> puesto = $nuevoPuesto;

    }

    public function imprimirPuesto () {

        echo "y su puesto es la de ".$this -> puesto.". <br/>";

    }

}

$alumno1 = new persona ("Benjamín Carrasco"); //Se crea un objeto
//$alumno1 -> ingresarNombre ("Benjamín"); // Se le implementa un método al objeto
$alumno1 -> imprimirNombre ();
$alumno1 -> ingresarEdad (24);
$alumno1 -> imprimirEdad ();

$alumno2 = new persona ("Paula Oportus");
//$alumno2 -> ingresarNombre ("Paula");
$alumno2 -> imprimirNombre ();
$alumno2 -> ingresarEdad (18);
$alumno2 -> imprimirEdad ();

$alumno3 = new alumno ("Yerko Tapia");
//$alumno3 -> ingresarNombre ("Yerko");
$alumno3 -> imprimirNombre ();
$alumno3 -> ingresarEdad(25);
$alumno3 -> imprimirEdad ();
$alumno3 -> ingresarAltura (1.80);
$alumno3 -> imprimirAltura ();
$alumno3 -> ingresarPuesto ("Psicólogo");
$alumno3 -> imprimirPuesto ();

?>