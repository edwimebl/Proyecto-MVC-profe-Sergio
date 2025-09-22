<?php

require_once "models/baseDeDatos.php";

// Lista blanca de controladores permitidos
$controladoresPermitidos = [
    'inicio' => 'InicioControlador',
    'usuario' => 'UsuarioControlador',
    'producto' => 'ProductoControlador',
];

// Nombre del controlador solicitado
$controladorSolicitado = isset($_GET['c']) ? strtolower($_GET['c']) : 'inicio';

// Verifica si el controlador está en la lista blanca
if (!array_key_exists($controladorSolicitado, $controladoresPermitidos)) {
    exit("Error 404: Controlador no encontrado.");
}

// Ruta del archivo del controlador
$archivoControlador = "controller/{$controladorSolicitado}.controlador.php";

// Verifica si el archivo del controlador existe
if (!file_exists($archivoControlador)) {
    exit("Error 404: Archivo de controlador no encontrado.");
}

require_once $archivoControlador;

// Nombre de la clase del controlador
$nombreClaseControlador = $controladoresPermitidos[$controladorSolicitado];

// Verifica si la clase existe
if (!class_exists($nombreClaseControlador)) {
    exit("Error: La clase del controlador no existe.");
}

// Crea una instancia del controlador
$controlador = new $nombreClaseControlador();

// Acción (método) a ejecutar, por defecto "Inicio"
$accion = isset($_GET['a']) ? $_GET['a'] : 'Inicio';

// Verifica si el método existe en la clase
if (!method_exists($controlador, $accion)) {
    exit("Error 404: La acción '$accion' no existe en el controlador '$nombreClaseControlador'.");
}

// Llama al método del controlador
call_user_func([$controlador, $accion]);

?>
