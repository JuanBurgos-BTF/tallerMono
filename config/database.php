<?php

class Conectar
{


    public static function conexion()
    {
        $conexion = new mysqli("localhost", "root", "", "ingresos_salas_db");
        return $conexion;
    }
}
