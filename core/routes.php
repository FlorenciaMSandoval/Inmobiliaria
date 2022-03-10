<?php

function cargarControlador($controlador)
{

  $nombreControlador = ucwords(strtolower($controlador)) . "Controller";
  $archivoControlador = 'controllers/' . ucwords(strtolower($controlador)) . 'Controller.php';

  if (!is_file($archivoControlador)) {

    $archivoControlador = 'controllers/' . CONTROL_PRINCIPAL . ".php";
  }

  require_once $archivoControlador;
  $controlador = new $nombreControlador();

  return $controlador;
}

function cargarAccion($controlador, $accion, $id = null)
{


  if (isset($accion) && method_exists($controlador, $accion)) {
    if ($id == null) {
      $controlador->$accion($id = null);
    } else {
      $controlador->$accion($id);
    }
  } else {

    $controlador->ACCION_PRINCIPAL();
  }
}
