<?php
    require_once("../modeloAbstractoDB.php");
	
    class Vehiculo extends ModeloAbstractoDB {
		public $vehi_codi;
		public $vehi_nomb;
		public $inqui_codi;

		function __construct() {
			//$this->db_name = '';
		}
		 
		public function consultar($vehi_codi='') {
			if($vehi_codi != ''):
				$this->query = "
				SELECT vehi_codi, vehi_nomb, inqui_codi
				FROM tb_vehiculos
				WHERE vehi_codi = '$vehi_codi'
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
			SELECT vehi_codi, vehi_nomb, p.inqui_nomb
			FROM tb_vehiculos as d inner join tb_inquilinos as p
			ON (d.inqui_codi = p.inqui_codi)
			";
			$this->obtener_resultados_query();
			return $this->rows;
		}
		
		public function nuevo($datos=array()) {
			if(array_key_exists('vehi_codi', $datos)):
				foreach ($datos as $campo=>$valor):
					$$campo = $valor;
				endforeach;
				$this->query = "
					INSERT INTO tb_vehiculos
					(vehi_codi, vehi_nomb, inqui_codi)
					VALUES
					(NULL, '$vehi_nomb', '$inqui_codi')
					";
				$this->ejecutar_query_simple();
			endif;
		}
		
		public function editar($datos=array()) {
			foreach ($datos as $campo=>$valor):
				$$campo = $valor;
			endforeach;
			$this->query = "
			UPDATE tb_vehiculos
			SET vehi_nomb='$vehi_nomb',
			inqui_codi='$inqui_codi'
			WHERE vehi_codi = '$vehi_codi'
			";
			$this->ejecutar_query_simple();
		}
		
		public function borrar($vehi_codi='') {
			$this->query = "
			DELETE FROM tb_vehiculos
			WHERE vehi_codi = '$vehi_codi'
			";
			$this->ejecutar_query_simple();
		}
		
		function __destruct() {
			//unset($this);
		}
	}
?>