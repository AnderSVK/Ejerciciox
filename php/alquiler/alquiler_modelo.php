<?php
    require_once("../modeloAbstractoDB.php");
	
    class Alquiler extends ModeloAbstractoDB {
		public $alquizona_codi;
		public $zona_codi;
		public $inqui_codi;

		function __construct() {
			//$this->db_name = '';
		}
		 
		public function consultar($alquizona_codi='') {
			if($alquizona_codi != ''):
				$this->query = "
				SELECT alquizona_codi, zona_codi, inqui_codi
				FROM tb_alquilerzona
				WHERE alquizona_codi = '$alquizona_codi'
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
			SELECT alquizona_codi, p.zona_nomb, a.inqui_nomb
			FROM tb_alquilerzona as d 
				inner join tb_zonaspublicas as p 
				ON d.zona_codi = p.zona_codi
				inner join tb_inquilinos as a
				ON d.inqui_codi = a.inqui_codi
				";

			$this->obtener_resultados_query();
			if ($this->rows != null){
				return $this->rows;	
			}else{
				return 0;
			}
		}
		
		public function nuevo($datos=array()) {
			if(array_key_exists('alquizona_codi', $datos)):
				foreach ($datos as $campo=>$valor):
					$$campo = $valor;
				endforeach;
				$this->query = "
					INSERT INTO tb_alquilerzona
					(alquizona_codi, zona_codi, inqui_codi)
					VALUES
					(NULL, '$zona_codi', '$inqui_codi')
					";
				$this->ejecutar_query_simple();
			endif;
		}
		
		public function editar($datos=array()) {
			foreach ($datos as $campo=>$valor):
				$$campo = $valor;
			endforeach;
			$this->query = "
			UPDATE tb_alquilerzona
			SET zona_codi='$zona_codi',
			inqui_codi='$inqui_codi'
			WHERE alquizona_codi = '$alquizona_codi'
			";
			$this->ejecutar_query_simple();
		}
		
		public function borrar($alquizona_codi='') {
			$this->query = "
			DELETE FROM tb_alquilerzona
			WHERE alquizona_codi = '$alquizona_codi'
			";
			$this->ejecutar_query_simple();
		}
		
		function __destruct() {
			//unset($this);
		}
	}
?>