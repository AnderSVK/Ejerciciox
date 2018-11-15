<?php
    require_once("../modeloAbstractoDB.php");
	
    class Registro extends ModeloAbstractoDB {
		public $regis_codi;
		public $vehi_codi;
		public $ingre_hora;
		public $sali_hora;

		function __construct() {
			//$this->db_name = '';
		}
		 
		public function consultar($regis_codi='') {
			if($regis_codi != ''):
				$this->query = "
				SELECT regis_codi, vehi_codi, ingre_hora, sali_hora
				FROM tb_ingresal
				WHERE regis_codi = '$regis_codi'
				";
				$this->obtener_resultados_query();
			endif;
			if(count($this->rows) == 1):
				foreach ($this->rows[0] as $propiedad=>$valor):
					$this->$propiedad = $valor;
				endforeach;
			endif;
		}
		
		public function lista() {
			$this->query = "
			SELECT regis_codi, p.vehi_nomb, ingre_hora, sali_hora
			FROM tb_ingresal as d inner join tb_vehiculos as p
			ON (d.vehi_codi = p.vehi_codi)
			";
			$this->obtener_resultados_query();
			return $this->rows;
		}
		
		public function nuevo($datos=array()) {
			if(array_key_exists('regis_codi', $datos)):
				foreach ($datos as $campo=>$valor):
					$$campo = $valor;
				endforeach;
				$this->query = "
					INSERT INTO tb_ingresal
					(regis_codi, vehi_codi, ingre_hora, sali_hora)
					VALUES
					(NULL,  '$vehi_codi', '$ingre_hora', '$sali_hora')
					";
				$this->ejecutar_query_simple();
			endif;
		}
		
		public function editar($datos=array()) {
			foreach ($datos as $campo=>$valor):
				$$campo = $valor;
			endforeach;
			$this->query = "
			UPDATE tb_ingresal
			SET vehi_codi='$vehi_codi',
			ingre_hora='$ingre_hora',
			sali_hora='$sali_hora'
			WHERE regis_codi = '$regis_codi'
			";
			$this->ejecutar_query_simple();
		}
		
		public function borrar($regis_codi='') {
			$this->query = "
			DELETE FROM tb_ingresal
			WHERE regis_codi = '$regis_codi'
			";
			$this->ejecutar_query_simple();
		}
		
		function __destruct() {
			//unset($this);
		}
	}
?>