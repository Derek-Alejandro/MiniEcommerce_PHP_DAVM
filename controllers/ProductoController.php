<?php
require_once __DIR__ . '/../models/Producto.php';
class ProductoController {
public function mostrarCatalogo() {
$productos = Producto::obtenerTodos();
// manda los datos a la vista
require __DIR__ . '/../views/catalogo.php';
}
}
?>