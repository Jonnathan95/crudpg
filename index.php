<?php
    // Incluyendo conexion a DB
    require 'model/database.php';
    // llamando al controlador empleado para panel de inicio
    $controller = 'sensor';
    if (!isset($_REQUEST['c'])) {
        require_once "controller/$controller.controller.php";
        $controller = ucwords($controller) . 'Controller';
        $controller = new $controller;
        $controller->Index();
    } else {
        $controller = strtolower($_REQUEST['c']);

        $accion = isset($_REQUEST['a']) ? $_REQUEST['a'] : 'Index';
        // Instancia el controlador
        require_once "controller/$controller.controller.php";
        $controller = ucwords($controller) . 'Controller';
        $controller = new $controller;
        // Llama la accion
        call_user_func(array($controller, $accion));
    }
