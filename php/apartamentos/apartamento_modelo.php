<?php
    require_once("../modeloAbstractoDB.php");
	
    class Apartamentos extends ModeloAbstractoDB {
		public $apar_codi;
		public $apar_nomb;
		public $propi_codi;

		function __construct() {
			//$this->db_name = '';
		}
		 
		public function consultar($apar_codi='') {
			if($apar_codi != ''):
				$this->query = "
				SELECT apar_codi, apar_nomb, propi_codi
				FROM tb_apartamentos
				WHERE apar_codi = '$apar_codi'
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
			SELECT apar_codi, apar_nomb, p.propi_nomb
			FROM tb_apartamentos as d inner join tb_propietarios as p
			ON (d.propi_codi = p.propi_codi)
			";
			$this->obtener_resultados_query();
			return $this->rows;
		}
		
		public function nuevo($datos=array()) {
			if(array_key_exists('apar_codi', $datos)):
				foreach ($datos as $campo=>$valor):
					$$campo = $valor;
				endforeach;
				$this->query = "
					INSERT INTO tb_apartamentos
					(apar_codi, apar_nomb, propi_codi)
					VALUES
					(NULL, '$apar_nomb', '$propi_codi')
					";
				$this->ejecutar_query_simple();
			endif;
		}
		
		public function editar($datos=array()) {
			foreach ($datos as $campo=>$valor):
				$$campo = $valor;
			endforeach;
			$this->query = "
			UPDATE tb_apartamentos
			SET apar_nomb='$apar_nomb',
			propi_codi='$propi_codi'
			WHERE apar_codi = '$apar_codi'
			";
			$this->ejecutar_query_simple();
		}
		
		public function borrar($apar_codi='') {
			$this->query = "
			DELETE FROM tb_apartamentos
			WHERE apar_codi = '$apar_codi'
			";
			$this->ejecutar_query_simple();
		}
		
		function __destruct() {
			//unset($this);
		}
	}
?>