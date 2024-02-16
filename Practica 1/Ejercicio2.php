<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Numero Par</title>
</head>
<body>
    

<!-- Ejercicio 2: Verificar si un número es par o impar -->
<!-- Escribe un script PHP donde se digite un número y luego determine si el número -->
<!-- ingresado es par o impar. Imprime un mensaje indicando si el número es par o -->
<!-- impar-->

<form action="Ejercicio2.php" method="POST">
    <label for="numero">Ingrese un numero para calcular par o impar</label><br><br>
    <input type="number" name="numero" placeholder="Ingrese un numero" required><br><br>
    <input type="submit" value="Calcular">
</form>

<?php 

class Comparar {

   public $numero;

   public function __construct($numero)
   {
       $this->numero = $numero; 
   }

   public function esParOImpar() {
    if ($this->numero % 2 == 0) {
        echo $this->numero . " es un número par.";
    } else {
        echo $this->numero . " es un número impar.";
    }
}
}
if(isset($_POST['numero']))
 {
$comparador = new Comparar($_POST['numero']);
$comparador->esParOImpar();
}

?>

</body>
</html>
