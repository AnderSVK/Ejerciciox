<?php
    require_once("../modeloAbstractoDB.php");
	
    class Notificaciong extends ModeloAbstractoDB {
		public $noti_codi;
		public $noti_nomb;
		public $apar_codi;

		function __construct() {
			//$this->db_name = '';
		}
		 
		public function consultar($noti_codi='') {
			if($noti_codi != ''):
				$this->query = "
				SELECT noti_codi, noti_nomb, apar_codi
				FROM tb_notificacionesg
				WHERE noti_codi = '$noti_codi'
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
			SELECT noti_codi, noti_nomb, p.apar_nomb
			FROM tb_notificacionesg as d inner join tb_apartamentos as p
			ON (d.apar_codi = p.apar_codi)
			";
			$this->obtener_resultados_query();
			return $this->rows;
		}
		
		public function nuevo($datos=array()) {
			if(array_key_exists('noti_codi', $datos)):
				foreach ($datos as $campo=>$valor):
					$$campo = $valor;
				endforeach;
				$this->query = "
					INSERT INTO tb_notificacionesg
					(noti_codi, noti_nomb, apar_codi)
					VALUES
					(NULL, '$noti_nomb', '$apar_codi')
					";
				$this->ejecutar_query_simple();
			endif;
		}
		
		public function editar($datos=array()) {
			foreach ($datos as $campo=>$valor):
				$$campo = $valor;
			endforeach;
			$this->query = "
			UPDATE tb_notificacionesg
			SET noti_nomb='$noti_nomb',
			apar_codi='$apar_codi'
			WHERE noti_codi = '$noti_codi'
			";
			$this->ejecutar_query_simple();
		}
		
		public function borrar($noti_codi='') {
			$this->query = "
			DELETE FROM tb_notificacionesg
			WHERE noti_codi = '$noti_codi'
			";
			$this->ejecutar_query_simple();
		}
		
		function __destruct() {
			//unset($this);
		}
	}
?>