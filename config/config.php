<?php

/* Database connection values */
define("DB_HOST", "localhost");
define("DB", "sanjose");
define("DB_USER", "root");
define("DB_PASS", "");

/* Default options */
define("DEFAULT_CONTROLLER", "usuario");
define("DEFAULT_ACTION", "list");

$campos_materia = [
    "id_materia" => "ID",
    "nombre"=>"Materia"
];
$campos_materia_curso = [
    "id_materia_curso"=>"ID",
    "id_materia"=>"Materia",
    "id_curso"=>"Curso",
    "fecha_desde",
    "fecha_hasta"
];
// nombre = Año + División + Grupo
$campos_curso = [
    "id_curso"=>"ID",
    "anio"=>"Año",
    "division"=>"División",
    "grupo"=>"Grupo"
];
// Administrador, Editor, Profesor, Preceptor, Director, Alumno, Auxiliar, ...
$campos_rol = [
    "id_rol"=>"ID",
    "nombre"=>"Rol"
];
$campos_usuario_rol = [
    "id_usuario",
    "id_rol",
    "id_materia_curso",
    "fecha_desde",
    "fecha_hasta"
];
$campos_nota = [
    "id_usuario"=>"Usuario",
    "id_materia_curso"=>"Materia",
    "nota"=>"Nota",
    "fecha"
];

?>