<?php   

class InicioControlador {

    private $modelo;

    public function __construct() {
    // $this->modelo = new Producto();
    }


    public function Inicio() {        

        // Aquí puedes cargar la vista de inicio o realizar otras acciones necesarias
        $bd = BaseDeDatos::Conectar();
        //llamar los estilos y scripts
        require_once "views/encabezado.php";
        //llamar el controlador del inicio
        require_once "views/inicio/principal.php";
        //llamar el pie de pagina
        require_once "views/pie.php";
    }
}