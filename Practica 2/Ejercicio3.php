<?php


/* Ejercicio 3: Manejo de lista de compras
o Escribe un programa en PHP que gestione una lista de compras. En el programa
debe agregar nuevos elementos a la lista, eliminar elementos existentes y mostrar
la lista completa de compras.
 */
class ListaDeCompras {
    private $items;

    public function __construct() {
        $this->items = array();
    }

    public function agregarItem($item) {
        $this->items[] = $item;
    }

    public function eliminarItem($indice) {
        if (isset($this->items[$indice])) {
            unset($this->items[$indice]);
        }
    }

    public function mostrarLista() {
        echo "Lista de Compras:\n<br><br>";
        foreach ($this->items as $indice => $item) {
            echo ($indice + 1) . ". $item\n<br><br>";
        }
    }
}

// Se crea una lista de compra
$listaDeCompras = new ListaDeCompras();

$listaDeCompras->agregarItem("Frutas");
$listaDeCompras->agregarItem("Leche");
$listaDeCompras->agregarItem("Pan");
$listaDeCompras->agregarItem("Cereal");
$listaDeCompras->agregarItem("Soda");
$listaDeCompras->agregarItem("Carne");


$listaDeCompras->mostrarLista();

// se elimina un elemento de la lista de compras
$listaDeCompras->eliminarItem(1);
$listaDeCompras->eliminarItem(3);

// se muestra la lista actualizada
echo "\nDespués de eliminar un elemento:\n <br><br>";
$listaDeCompras->mostrarLista();

?>
