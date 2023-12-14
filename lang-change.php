<?php
session_start();

// Obtener el idioma actual del usuario (por ejemplo, desde una variable de sesión)
$userLanguage = isset($_SESSION['language']) ? $_SESSION['language'] : 'en';



function translate($key) {
  global $translations;
  return isset($translations[$key]) ? $translations[$key] : $key;
}

// Verificar si se cambió el idioma a través del formulario
if (isset($_POST['change_language'])) {
    $userLanguage = $_POST['language'];
    $_SESSION['language'] = $userLanguage;
}

// Función para mostrar texto traducido

// Incluir el archivo de traducciones correspondiente al idioma actual
include 'lang/' . $userLanguage . '.php';

// Resto de tu código HTML/PHP...
?>