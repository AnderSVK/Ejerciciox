<?php
	require_once('../modeloAbstractoDB.php');
	class Proceso extends ModeloAbstractoDB {
		public $proce_codi;
		public $proce_nomb;
		
		function __construct() {
			//$this->db_name = '';
		}
		
		public function consultar($proce_codi='') {
			if($proce_codi != ''):
				$this->query = "
				SELECT proce_codi, proce_nomb
				FROM tb_procesos
				WHERE proce_codi = '$proce_codi'
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
			SELECT proce_codi, proce_nomb
			FROM tb_procesos as p order by proce_nomb
			";
			$this->obtener_resultados_query();
			return $this->rows;
		}
		
		public function nuevo($datos=array()) {
			if(array_key_exists('proce_codi', $datos)):
				foreach ($datos as $campo=>$valor):
					$$campo = $valor;
				endforeach;
				$this->query = "
					INSERT INTO tb_procesos
					(proce_codi, proce_nomb)
					VALUES
					(NULL, '$proce_nomb')
					";
				$this->ejecutar_query_simple();
			endif;
		}
		
		public function editar($datos=array()) {
			foreach ($datos as $campo=>$valor):
				$$campo = $valor;
			endforeach;
			$this->query = "
			UPDATE tb_procesos
			SET proce_nomb='$proce_nomb'
			WHERE proce_codi = '$proce_codi'
			";
			$this->ejecutar_query_simple();
		}
		
		public function borrar($proce_codi='') {
			$this->query = "
			DELETE FROM tb_procesos
			WHERE proce_codi = '$proce_codi'
			";
			$this->ejecutar_query_simple();
		}
		
		function __destruct() {
			//unset($this);
		}
	}
?>