<?php
	require_once('../modeloAbstractoDB.php');
	class Administrador extends ModeloAbstractoDB {
		public $admin_codi;
		public $admin_nomb;
		
		function __construct() {
			//$this->db_name = '';
		}
		
		public function consultar($admin_codi='') {
			if($admin_codi != ''):
				$this->query = "
				SELECT admin_codi, admin_nomb
				FROM tb_administrador
				WHERE admin_codi = '$admin_codi'
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
			SELECT admin_codi, admin_nomb
			FROM tb_administrador as p order by admin_nomb
			";
			$this->obtener_resultados_query();
			return $this->rows;
		}
		
		public function nuevo($datos=array()) {
			if(array_key_exists('admin_codi', $datos)):
				foreach ($datos as $campo=>$valor):
					$$campo = $valor;
				endforeach;
				$this->query = "
					INSERT INTO tb_administrador
					(admin_codi, admin_nomb)
					VALUES
					(NULL, '$admin_nomb')
					";
				$this->ejecutar_query_simple();
			endif;
		}
		
		public function editar($datos=array()) {
			foreach ($datos as $campo=>$valor):
				$$campo = $valor;
			endforeach;
			$this->query = "
			UPDATE tb_administrador
			SET admin_nomb='$admin_nomb'
			WHERE admin_codi = '$admin_codi'
			";
			$this->ejecutar_query_simple();
		}
		
		public function borrar($admin_codi='') {
			$this->query = "
			DELETE FROM tb_administrador
			WHERE admin_codi = '$admin_codi'
			";
			$this->ejecutar_query_simple();
		}
		
		function __destruct() {
			//unset($this);
		}
	}
?> 	 	