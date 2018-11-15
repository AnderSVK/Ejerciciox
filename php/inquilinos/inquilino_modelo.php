<?php
    require_once("../modeloAbstractoDB.php");
	
    class Inquilinos extends ModeloAbstractoDB {
		public $inqui_codi;
		public $inqui_nomb;
		public $inqui_edad;
		public $inqui_sexo;
		public $apar_codi;

		function __construct() {
			//$this->db_name = '';
		}
		 
		public function consultar($inqui_codi='') {
			if($inqui_codi != ''):
				$this->query = "
				SELECT inqui_codi, inqui_nomb, inqui_edad, inqui_sexo, apar_codi
				FROM tb_inquilinos
				WHERE inqui_codi = '$inqui_codi'
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
			SELECT inqui_codi, inqui_nomb, inqui_edad, inqui_sexo, p.apar_nomb
			FROM tb_inquilinos as d inner join tb_apartamentos as p
			ON (d.apar_codi = p.apar_codi)
			";
			$this->obtener_resultados_query();
			return $this->rows;
		}
		
		public function nuevo($datos=array()) {
			if(array_key_exists('inqui_codi', $datos)):
				foreach ($datos as $campo=>$valor):
					$$campo = $valor;
				endforeach;
				$this->query = "
					INSERT INTO tb_inquilinos
					(inqui_codi, inqui_nomb, inqui_edad, inqui_sexo, apar_codi)
					VALUES
					(NULL, '$inqui_nomb', '$inqui_edad', '$inqui_sexo', '$apar_codi')
					";
				$this->ejecutar_query_simple();
			endif;
		}
		
		public function editar($datos=array()) {
			foreach ($datos as $campo=>$valor):
				$$campo = $valor;
			endforeach;
			$this->query = "
			UPDATE tb_inquilinos
			SET inqui_nomb='$inqui_nomb',
			inqui_edad='$inqui_edad',
			inqui_sexo='$inqui_sexo',
			apar_codi='$apar_codi'
			WHERE inqui_codi = '$inqui_codi'
			";
			$this->ejecutar_query_simple();
		}
		
		public function borrar($inqui_codi='') {
			$this->query = "
			DELETE FROM tb_inquilinos
			WHERE inqui_codi = '$inqui_codi'
			";
			$this->ejecutar_query_simple();
		}
		
		function __destruct() {
			//unset($this);
		}
	}
?>