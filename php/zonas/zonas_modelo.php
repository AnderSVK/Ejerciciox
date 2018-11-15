<?php
	require_once('../modeloAbstractoDB.php');
	class Zonas extends ModeloAbstractoDB {
		public $zona_codi;
		public $zona_nomb;
		
		function __construct() {
			//$this->db_name = '';
		}
		
		public function consultar($zona_codi='') {
			if($zona_codi != ''):
				$this->query = "
				SELECT zona_codi, zona_nomb
				FROM tb_zonaspublicas
				WHERE zona_codi = '$zona_codi'
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
			SELECT zona_codi, zona_nomb
			FROM tb_zonaspublicas as p order by zona_nomb
			";
			$this->obtener_resultados_query();
			return $this->rows;
		}
		
		public function nuevo($datos=array()) {
			if(array_key_exists('zona_codi', $datos)):
				foreach ($datos as $campo=>$valor):
					$$campo = $valor;
				endforeach;
				$this->query = "
					INSERT INTO tb_zonaspublicas
					(zona_codi, zona_nomb)
					VALUES
					(NULL, '$zona_nomb')
					";
				$this->ejecutar_query_simple();
			endif;
		}
		
		public function editar($datos=array()) {
			foreach ($datos as $campo=>$valor):
				$$campo = $valor;
			endforeach;
			$this->query = "
			UPDATE tb_zonaspublicas
			SET zona_nomb='$zona_nomb'
			WHERE zona_codi = '$zona_codi'
			";
			$this->ejecutar_query_simple();
		}
		
		public function borrar($zona_codi='') {
			$this->query = "
			DELETE FROM tb_zonaspublicas
			WHERE zona_codi = '$zona_codi'
			";
			$this->ejecutar_query_simple();
		}
		
		function __destruct() {
			//unset($this);
		}
	}
?>