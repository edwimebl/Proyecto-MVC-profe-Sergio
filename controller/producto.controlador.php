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

    public function FormCrear() {
        
        require_once "views/encabezado.php";
        require_once "views/productos/form.php";
        require_once "views/pie.php";
    }

    public function Guardar() {
       $p=new Producto();
       $p->setPro_id(intval($_POST['ID']));
       $p->setPro_nom($_POST['Nombre']);
       $p->setPro_mar($_POST['Marca']);
       $p->setPro_cos($_POST['Costo']);
       $p->setPro_pre($_POST['Precio']);
       $p->setPro_cant($_POST['Cantidad']);
       //$p->setPro_img($_POST['Imagen']);
       $this->modelo->Insertar($p);

       header("Location: ?c=producto");
    }
}