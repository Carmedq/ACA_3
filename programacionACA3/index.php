<?php
require_once "controlador/leer/leer_controlador.php";

// Verificar si se solicita la página de inicio (home)
if (empty($_GET['seccion'])) {
    // Redirigir a la página de inicio (home)
    header("Location: home.php");
    exit;
}

// Obtener el parámetro de la sección
$seccion = $_GET['seccion'];

// Redirigir a la sección correspondiente
switch ($seccion) {
    case 'leer':
        require_once "controlador/leer/leer_controlador.php";
        $plantilla = new ControladorLeer();
        $plantilla->ctrlTraerPlantilla();
        break;
    case 'musica':
        require_once "controlador/musica/musica_controlador.php";
        $plantilla = new controladorMusica();
        $plantilla->ctrlTraerPlantilla();
        break;
    case 'series':
        require_once "controlador/series/series_controlador.php";
        $plantilla = new ControladorSeries();
        $plantilla->ctrlTraerPlantilla();
        break;
    default:
        // Redirigir a la página de inicio (home) si se proporciona una sección no válida
        header("Location: home.php");
        exit;
}

?>