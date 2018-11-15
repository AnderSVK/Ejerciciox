<?php
    require_once("../modeloAbstractoDB.php");
	
    class Roles extends ModeloAbstractoDB {
		public $rol_codi;
		public $rol_nomb;
		public $rol_desc;

		function __construct() {
			//$this->db_name = '';
		}
		 
		public function consultar($rol_codi='') {
			if($rol_codi != ''):
				$this->query = "
				SELECT rol_codi, rol_nomb, rol_desc
				FROM tb_roles
				WHERE rol_codi = '$rol_codi'
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
			SELECT rol_codi, rol_nomb, rol_desc
			FROM tb_roles as p order by rol_nomb
			";
			$this->obtener_resultados_query();
			return $this->rows;
		}
		
		public function nuevo($datos=array()) {
			if(array_key_exists('rol_codi', $datos)):
				foreach ($datos as $campo=>$valor):
					$$campo = $valor;
				endforeach;
				$this->query = "
					INSERT INTO tb_roles
					(rol_codi, rol_nomb, rol_desc)
					VALUES
					(NULL, '$rol_nomb', '$rol_desc')
					";
				$this->ejecutar_query_simple();
			endif;
		}
		
		public function editar($datos=array()) {
			foreach ($datos as $campo=>$valor):
				$$campo = $valor;
			endforeach;
			$this->query = "
			UPDATE tb_roles
			SET rol_nomb='$rol_nomb',
			rol_desc='$rol_desc'
			WHERE rol_codi = '$rol_codi'
			";
			$this->ejecutar_query_simple();
		}
		
		public function borrar($rol_codi='') {
			$this->query = "
			DELETE FROM tb_roles
			WHERE rol_codi = '$rol_codi'
			";
			$this->ejecutar_query_simple();
		}
		
		function __destruct() {
			//unset($this);
		}
	}
?>