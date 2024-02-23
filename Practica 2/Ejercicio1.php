<?php 
/* Ejercicio 1: Edades Mayores a 18 años
o Crea un array con las edades de 10 personas. Luego, utilizando un bucle “while”,
muestra solo las edades mayores de 18 años.*/
class Persona {
    private $nombre;
    private $edad;

    public function __construct($nombre, $edad) {
        $this->nombre = $nombre;
        $this->edad = $edad;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getEdad() {
        return $this->edad;
    }
}

// Se crea el array
$personas = [
    new Persona("Juan", 22),
    new Persona("María", 16),
    new Persona("Pedro", 25),
    new Persona("Ana", 30),
    new Persona("Luis", 18),
    new Persona("Laura", 21),
    new Persona("Carlos", 17),
    new Persona("Sofía", 20),
    new Persona("Diego", 19),
    new Persona("Elena", 23)
];

// para mostar las personas mayores a 18  años
echo "Edades mayores de 18 años:\n <br><br>";
$i = 0;
while ($i < count($personas)) {
    if ($personas[$i]->getEdad() > 18) {
        echo $personas[$i]->getNombre() . " tiene " . $personas[$i]->getEdad() . " años.\n <br><br>";
    }
    $i++;
}

?>



