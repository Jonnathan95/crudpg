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


	public function LecturasFecha($date = null)
	{
		try
		{
			
			if (!is_null($date)) {
				$fecha = date('Y-m-d', $date);
			} else {
				$fecha = date('Y-m-d', (time() - (1 * 24 * 60 * 60)));
			}


			$result = array();
			//Sentencia SQL para selección de datos.
			$query = "SELECT
							fecha::date,
							coalesce((SUM(lectura) / count(*)), 0) AS promedio_temperatura,
							count(*) AS cantidad
					FROM sensor
					WHERE fecha::DATE = '$fecha'
					GROUP BY fecha::DATE;";

			

			$stm = $this->pdo->prepare($query);
			//Ejecución de la sentencia SQL.
			$stm->execute();
			//fetchAll — Devuelve un array que contiene todas las filas del conjunto
			//de resultados
			$resultado = $stm->fetchAll(PDO::FETCH_OBJ)[0];

			$resultadoFinal = array(
				'lecturas' => $resultado->cantidad,
				'promedio' => $resultado->promedio_temperatura
			);

			return $resultadoFinal;
			#return $stm->fetchAll(PDO::FETCH_OBJ);
		} catch(Exception $e) {
			//Obtener mensaje de error.
			die($e->getMessage());
		}
	}


	public function LecturasMes($date = null)
	{
		try
		{
			
			if (!is_null($date)) {
				$fecha = date('m', $date);
			} else {
				$fecha = date('m', (time() - (1 * 24 * 60 * 60)));
			}


			$result = array();
			//Sentencia SQL para selección de datos.
			$query = "SELECT
						count(*) AS cantidad,
						coalesce(SUM(lectura), 0) AS promedio_temperatura
					FROM sensor
					WHERE to_char(fecha::date, 'MM') = '$fecha';";
			$stm = $this->pdo->prepare($query);
			$stm->execute();
			$resultado = $stm->fetchAll(PDO::FETCH_OBJ)[0];
			$resultadoFinal = array(
				'lecturas' => $resultado->cantidad,
				'promedio' => $resultado->promedio_temperatura
			);

			return $resultadoFinal;
			#return $stm->fetchAll(PDO::FETCH_OBJ);
		} catch(Exception $e) {
			//Obtener mensaje de error.
			die($e->getMessage());
		}
	}


	public function DetalleLecturasFecha($date = null)
	{
		try
		{
			
			if (!is_null($date)) {
				$fecha = date('Y-m-d', $date);
			} else {
				$fecha = date('Y-m-d', (time() - (1 * 24 * 60 * 60)));
			}


			$result = array();
			//Sentencia SQL para selección de datos.
			$query = "SELECT
					(
						SELECT
						coalesce(count(*), 0) AS cantidad
						FROM sensor
						WHERE lectura >= 500
						AND fecha::date = '$fecha'
					) AS mayor,
					(
						SELECT
						coalesce(count(*), 0) AS cantidad
						FROM sensor
						WHERE lectura < 500
						AND fecha::date = '$fecha'
					) AS menor;";
			$stm = $this->pdo->prepare($query);
			$stm->execute();
			$resultado = $stm->fetchAll(PDO::FETCH_OBJ)[0];
			$resultadoFinal = array(
				'menor' => $resultado->menor,
				'mayor' => $resultado->mayor
			);

			return $resultadoFinal;
			#return $stm->fetchAll(PDO::FETCH_OBJ);
		} catch(Exception $e) {
			//Obtener mensaje de error.
			die($e->getMessage());
		}
	}

	public function DetalleLecturaMes($date = null)
	{
		try
		{
			
			if (!is_null($date)) {
				$fecha = date('m', $date);
			} else {
				$fecha = date('m', (time() - (1 * 24 * 60 * 60)));
			}


			$result = array();
			//Sentencia SQL para selección de datos.
			$query = "SELECT
					(
					SELECT
							count(*) AS cantidad
					FROM sensor
					WHERE lectura >= 500
					AND to_char(fecha::date, 'MM') = '$fecha'
					) AS mayor,
					(
					SELECT
							count(*) AS cantidad
					FROM sensor
					WHERE lectura < 500
					AND to_char(fecha::date, 'MM') = '$fecha'
					) AS menor;";
			$stm = $this->pdo->prepare($query);
			$stm->execute();
			$resultado = $stm->fetchAll(PDO::FETCH_OBJ)[0];
			$resultadoFinal = array(
				'menor' => $resultado->menor,
				'mayor' => $resultado->mayor
			);

			return $resultadoFinal;
			#return $stm->fetchAll(PDO::FETCH_OBJ);
		} catch(Exception $e) {
			//Obtener mensaje de error.
			die($e->getMessage());
		}
	}
	



}
