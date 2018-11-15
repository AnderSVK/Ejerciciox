<?php
    require_once("../modeloAbstractoDB.php");
	
    class Presupuesto extends ModeloAbstractoDB {
		public $presu_codi;
		public $presu_nomb;
		public $uni_codi;

		function __construct() {
			//$this->db_name = '';
		}
		 
		public function consultar($presu_codi='') {
			if($presu_codi != ''):
				$this->query = "
				SELECT presu_codi, presu_nomb, uni_codi
				FROM tb_presupuestos
				WHERE presu_codi = '$presu_codi'
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
			SELECT presu_codi, presu_nomb, p.uni_nomb
			FROM tb_presupuestos as d inner join tb_unidades as p
			ON (d.uni_codi = p.uni_codi)
			";
			$this->obtener_resultados_query();
			return $this->rows;
		}
		
		public function nuevo($datos=array()) {
			if(array_key_exists('presu_codi', $datos)):
				foreach ($datos as $campo=>$valor):
					$$campo = $valor;
				endforeach;
				$this->query = "
					INSERT INTO tb_presupuestos
					(presu_codi, presu_nomb, uni_codi)
					VALUES
					(NULL, '$presu_nomb', '$uni_codi')
					";
				$this->ejecutar_query_simple();
			endif;
		}
		
		public function editar($datos=array()) {
			foreach ($datos as $campo=>$valor):
				$$campo = $valor;
			endforeach;
			$this->query = "
			UPDATE tb_presupuestos
			SET presu_nomb='$presu_nomb',
			uni_codi='$uni_codi'
			WHERE presu_codi = '$presu_codi'
			";
			$this->ejecutar_query_simple();
		}
		
		public function borrar($presu_codi='') {
			$this->query = "
			DELETE FROM tb_presupuestos
			WHERE presu_codi = '$presu_codi'
			";
			$this->ejecutar_query_simple();
		}
		
		function __destruct() {
			//unset($this);
		}
	}
?>