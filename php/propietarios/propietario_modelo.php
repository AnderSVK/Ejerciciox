<?php
	require_once('../modeloAbstractoDB.php');
	class Propietario extends ModeloAbstractoDB {
		public $propi_codi;
		public $propi_nomb;
		
		function __construct() {
			//$this->db_name = '';
		}
		
		public function consultar($propi_codi='') {
			if($propi_codi != ''):
				$this->query = "
				SELECT propi_codi, propi_nomb
				FROM tb_propietarios
				WHERE propi_codi = '$propi_codi'
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
			SELECT propi_codi, propi_nomb
			FROM tb_propietarios as p order by propi_nomb
			";
			$this->obtener_resultados_query();
			return $this->rows;
		}
		
		public function nuevo($datos=array()) {
			if(array_key_exists('propi_codi', $datos)):
				foreach ($datos as $campo=>$valor):
					$$campo = $valor;
				endforeach;
				$this->query = "
					INSERT INTO tb_propietarios
					(propi_codi, propi_nomb)
					VALUES
					(NULL, '$propi_nomb')
					";
				$this->ejecutar_query_simple();
			endif;
		}
		
		public function editar($datos=array()) {
			foreach ($datos as $campo=>$valor):
				$$campo = $valor;
			endforeach;
			$this->query = "
			UPDATE tb_propietarios
			SET propi_nomb='$propi_nomb'
			WHERE propi_codi = '$propi_codi'
			";
			$this->ejecutar_query_simple();
		}
		
		public function borrar($propi_codi='') {
			$this->query = "
			DELETE FROM tb_propietarios
			WHERE propi_codi = '$propi_codi'
			";
			$this->ejecutar_query_simple();
		}
		
		function __destruct() {
			//unset($this);
		}
	}
?>