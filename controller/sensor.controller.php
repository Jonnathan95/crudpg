<?php
require_once 'model/sensor.php';
class SensorController
{

    private $model;

    //Creación del modelo
    public function __construct(){
        $this->model = new sensor();
    }

    public function index()
    {
        return $this->model->Listar();
    }

    # Ejemplo de acceso   192.168.1.13/?c=sensor&a=Guardar&lectura=1995
    public function Guardar()
    {
        foreach ($_REQUEST as $key => $value) {
            $data[$key] = trim($value);
        }

        unset($data['c'], $data['a']);
        $resultado = $this->model->Registrar($data);
    }
}
