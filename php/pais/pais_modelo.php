<?php
	require_once('../modeloAbstractoDB.php');
	class Pais extends ModeloAbstractoDB {
		public $pais_codi;
		public $pais_nomb;
		
		function __construct() {
			//$this->db_name = '';
		}
		
		public function consultar($pais_codi='') {
			if($pais_codi != ''):
				$this->query = "
				SELECT pais_codi, pais_nomb
				FROM tb_paises
				WHERE pais_codi = '$pais_codi'
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
			SELECT pais_codi, pais_nomb
			FROM tb_paises as p order by pais_nomb
			";
			$this->obtener_resultados_query();
			return $this->rows;
		}
		
		public function nuevo($datos=array()) {
			if(array_key_exists('pais_codi', $datos)):
				foreach ($datos as $campo=>$valor):
					$$campo = $valor;
				endforeach;
				$this->query = "
					INSERT INTO tb_paises
					(pais_codi, pais_nomb)
					VALUES
					(NULL, '$pais_nomb')
					";
				$this->ejecutar_query_simple();
			endif;
		}
		
		public function editar($datos=array()) {
			foreach ($datos as $campo=>$valor):
				$$campo = $valor;
			endforeach;
			$this->query = "
			UPDATE tb_paises
			SET pais_nomb='$pais_nomb'
			WHERE pais_codi = '$pais_codi'
			";
			$this->ejecutar_query_simple();
		}
		
		public function borrar($pais_codi='') {
			$this->query = "
			DELETE FROM tb_paises
			WHERE pais_codi = '$pais_codi'
			";
			$this->ejecutar_query_simple();
		}
		
		function __destruct() {
			//unset($this);
		}
	}
?>