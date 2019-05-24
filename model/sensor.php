<?php

class sensor
{
    private $pdo;

    public function __construct()
    {
        try {
            $this->pdo = Database::Conectar();
        } catch (Exception $e) {
            die("Mensaje es: " . $e->getMessage());
        }
    }

    public function Listar()
	{
		try
		{
			$result = array();
			//Sentencia SQL para selección de datos.
			$stm = $this->pdo->prepare("SELECT * FROM sensor");
			//Ejecución de la sentencia SQL.
			$stm->execute();
			//fetchAll — Devuelve un array que contiene todas las filas del conjunto
			//de resultados
			return $stm->fetchAll(PDO::FETCH_OBJ);
		} catch(Exception $e) {
			//Obtener mensaje de error.
			die($e->getMessage());
		}
	}

    public function Registrar($datos = array())
	{
		$result = FALSE;
        if ((count($datos) == 0) or (!is_array($datos))) {
            return false;
		}

		try {
			$query = "INSERT INTO sensor (lectura)
		        VALUES (?)";

			$stm = $this->pdo->prepare($query);
			$stm->bindParam(1, $datos['lectura']);

            if ($stm) {
                $stm->execute();
                $result = TRUE;
            } else {
                $result = FALSE;
            }

		} catch (Exception $e) {
			die($e->getMessage());
		}

        return $result;
	}




}
