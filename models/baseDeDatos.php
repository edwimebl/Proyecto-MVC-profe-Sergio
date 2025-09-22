<?php 

class BaseDeDatos {
    const servidor = "localhost";
    const usuariobd = "root";
    const clave = "";
    const nombrebd = "proyecto_mvc";

    public static function Conectar() {
        try {
            $conexion = new PDO("mysql:host=" . self::servidor . ";dbname=" . self::nombrebd, self::usuariobd, self::clave);
            $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $conexion->exec("SET CHARACTER SET utf8");
            return $conexion;
        } catch (PDOException $e) {
            die("Error de conexión a la base de datos: " . $e->getMessage());
        }
    }

}