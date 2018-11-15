<?php
    require_once("../modeloAbstractoDB.php");
	
    class Unidades extends ModeloAbstractoDB {
		public $uni_codi;
		public $uni_nomb;
		public $ciu_codi;
		public $admin_codi;

		function __construct() {
			//$this->db_name = '';
		}
		 
		public function consultar($uni_codi='') {
			if($uni_codi != ''):
				$this->query = "
				SELECT uni_codi, uni_nomb, ciu_codi, admin_codi
				FROM tb_unidades
				WHERE uni_codi = '$uni_codi'
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
			SELECT uni_codi, uni_nomb, p.ciu_nomb, a.admin_nomb
			FROM tb_unidades as d 
				inner join tb_ciudades as p 
				ON d.ciu_codi = p.ciu_codi
				inner join tb_administrador as a
				ON d.admin_codi = a.admin_codi
				";

			$this->obtener_resultados_query();
			if ($this->rows != null){
				return $this->rows;	
			}else{
				return 0;
			}
		}
		
				
		public function nuevo($datos=array()) {
			if(array_key_exists('uni_codi', $datos)):
				foreach ($datos as $campo=>$valor):
					$$campo = $valor;
				endforeach;
				$this->query = "
					INSERT INTO tb_unidades
					(uni_codi, uni_nomb, ciu_codi, admin_codi)
					VALUES
					(NULL, '$uni_nomb', '$ciu_codi', '$admin_codi')
					";
				$this->ejecutar_query_simple();
			endif;
		}
		
		public function editar($datos=array()) {
			foreach ($datos as $campo=>$valor):
				$$campo = $valor;
			endforeach;
			$this->query = "
			UPDATE tb_unidades
			SET uni_nomb='$uni_nomb',
			ciu_codi='$ciu_codi',
			admin_codi='$admin_codi'
			WHERE uni_codi = '$uni_codi'
			";
			$this->ejecutar_query_simple();
		}
		
		public function borrar($uni_codi='') {
			$this->query = "
			DELETE FROM tb_unidades
			WHERE uni_codi = '$uni_codi'
			";
			$this->ejecutar_query_simple();
		}
		
		function __destruct() {
			//unset($this);
		}
	}
?>