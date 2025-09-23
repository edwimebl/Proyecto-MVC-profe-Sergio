<?php

require_once "models/producto.php";

class ProductoControlador {

    private $modelo;

    public function __construct() {
        $this->modelo = new Producto();
    }

    public function Inicio() {        
       
        //llamar los estilos y scripts
        require_once "views/encabezado.php";
        //llamar el controlador del inicio
        require_once "views/productos/index.php";
        //llamar el pie de pagina
        require_once "views/pie.php";
    }
}