<?php
    require_once("../modeloAbstractoDB.php");
	
    class Ciudades extends ModeloAbstractoDB {
		public $ciu_codi;
		public $ciu_nomb;
		public $pais_codi;

		function __construct() {
			//$this->db_name = '';
		}
		 
		public function consultar($ciu_codi='') {
			if($ciu_codi != ''):
				$this->query = "
				SELECT ciu_codi, ciu_nomb, pais_codi
				FROM tb_ciudades
				WHERE ciu_codi = '$ciu_codi'
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
			SELECT ciu_codi, ciu_nomb, p.pais_nomb
			FROM tb_ciudades as d inner join tb_paises as p
			ON (d.pais_codi = p.pais_codi)
			";
			$this->obtener_resultados_query();
			return $this->rows;
		}
		
		public function nuevo($datos=array()) {
			if(array_key_exists('ciu_codi', $datos)):
				foreach ($datos as $campo=>$valor):
					$$campo = $valor;
				endforeach;
				$this->query = "
					INSERT INTO tb_ciudades
					(ciu_codi, ciu_nomb, pais_codi)
					VALUES
					(NULL, '$ciu_nomb', '$pais_codi')
					";
				$this->ejecutar_query_simple();
			endif;
		}
		
		public function editar($datos=array()) {
			foreach ($datos as $campo=>$valor):
				$$campo = $valor;
			endforeach;
			$this->query = "
			UPDATE tb_ciudades
			SET ciu_nomb='$ciu_nomb',
			pais_codi='$pais_codi'
			WHERE ciu_codi = '$ciu_codi'
			";
			$this->ejecutar_query_simple();
		}
		
		public function borrar($ciu_codi='') {
			$this->query = "
			DELETE FROM tb_ciudades
			WHERE ciu_codi = '$ciu_codi'
			";
			$this->ejecutar_query_simple();
		}
		
		function __destruct() {
			//unset($this);
		}
	}
?>