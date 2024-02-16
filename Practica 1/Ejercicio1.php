<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora basica</title>
</head>
<body>
    

<!--Ejercicio 1: Calculadora básica
o Crea un script PHP donde se digiten dos números y luego realice las cuatro
operaciones aritméticas básicas (suma, resta, multiplicación y división) con esos
números. Mostrar el resultado de cada operación. !-->


<form action="Ejercicio1.php" method="POST">
                <label>Numero 1</label><br>
                <input type="number" name="numero1"  placeholder="Digite el primer numero" required><br>
                <br>
                <label>Numero 2</label><br>
                <input type="number" name="numero2"  placeholder="Digite el segundo numero" required><br>
                <br>
                <input type="submit" value="Calcular">

</form>

<?php 
class Calculadora {
    public $numero1;
    public $numero2;
    public $resultado;

    public function __construct($numero1, $numero2)
    {
        $this->numero1 = $numero1;
        $this-> numero2 = $numero2;
       
    }

    public function Suma(){
        $this->resultado = $this->numero1 + $this->numero2;
        echo "La suma de ".$this->numero1." + ".$this->numero2." es= ".$this->resultado."<br>";
    }

    public function Resta (){
        $this->resultado = $this->numero1 - $this->numero2;
        echo "La resta de ".$this->numero1." - ".$this->numero2." es= ".$this->resultado."<br>";
    }

    public function Division (){

        $this->resultado = $this->numero1 / $this->numero2;
        echo "La division de ".$this->numero1." / ".$this->numero2." es= ".$this->resultado ."<br>";
    }

    public function Multiplicacion (){

        $this->resultado = $this->numero1 * $this->numero2;
        echo "La multiplicacion de ".$this->numero1." * ".$this->numero2." es= ".$this->resultado;
    }
}
if(isset($_POST['numero1']) && isset($_POST['numero2']))
 {
    $operacion = new Calculadora($_POST['numero1'], $_POST['numero2']);
    $operacion->Suma();
    $operacion->Resta();
    $operacion->Division();
    $operacion->Multiplicacion();
}
?>

</body>
</html>