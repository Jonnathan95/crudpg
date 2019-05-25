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
        $fecha = null;
        if (isset($_REQUEST['calendario']) or !is_null($_REQUEST['calendario'])) {
            $date = new DateTime($_REQUEST['calendario']);
            $fecha = $date->format('Y-m-d');
        }

        $data = $this->model->Listar();
        $lecturas = $this->model->LecturasFecha($fecha);
        $lecturaMes = $this->model->LecturasMes($fecha);
        $detalleFecha = $this->model->DetalleLecturasFecha($fecha);
        $detalleMes = $this->model->DetalleLecturaMes($fecha);
        require_once 'view/header.php';
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

    public function test()
    {
        $data = $this->model->LecturasFecha();


        echo "</pre>";
        var_dump($_REQUEST['lectura']);
        echo "</pre>";
    }
}
