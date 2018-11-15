<?php
    require_once("../modeloAbstractoDB.php");
	
    class Cobro extends ModeloAbstractoDB {
		public $cobro_codi;
		public $cobro_nomb;
		public $uni_codi;

		function __construct() {
			//$this->db_name = '';
		}
		 
		public function consultar($cobro_codi='') {
			if($cobro_codi != ''):
				$this->query = "
				SELECT cobro_codi, cobro_nomb, uni_codi
				FROM tb_cobros
				WHERE cobro_codi = '$cobro_codi'
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
			SELECT cobro_codi, cobro_nomb, p.uni_nomb
			FROM tb_cobros as d inner join tb_unidades as p
			ON (d.uni_codi = p.uni_codi)
			";
			$this->obtener_resultados_query();
			return $this->rows;
		}
		
		public function nuevo($datos=array()) {
			if(array_key_exists('cobro_codi', $datos)):
				foreach ($datos as $campo=>$valor):
					$$campo = $valor;
				endforeach;
				$this->query = "
					INSERT INTO tb_cobros
					(cobro_codi, cobro_nomb, uni_codi)
					VALUES
					(NULL, '$cobro_nomb', '$uni_codi')
					";
				$this->ejecutar_query_simple();
			endif;
		}
		
		public function editar($datos=array()) {
			foreach ($datos as $campo=>$valor):
				$$campo = $valor;
			endforeach;
			$this->query = "
			UPDATE tb_cobros
			SET cobro_nomb='$cobro_nomb',
			uni_codi='$uni_codi'
			WHERE cobro_codi = '$cobro_codi'
			";
			$this->ejecutar_query_simple();
		}
		
		public function borrar($cobro_codi='') {
			$this->query = "
			DELETE FROM tb_cobros
			WHERE cobro_codi = '$cobro_codi'
			";
			$this->ejecutar_query_simple();
		}
		
		function __destruct() {
			//unset($this);
		}
	}
?>