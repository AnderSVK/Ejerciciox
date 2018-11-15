<?php
    require_once("../modeloAbstractoDB.php");
	
    class Notificacion extends ModeloAbstractoDB {
		public $noti_codi;
		public $noti_nomb;
		public $inqui_codi;

		function __construct() {
			//$this->db_name = '';
		}
		 
		public function consultar($noti_codi='') {
			if($noti_codi != ''):
				$this->query = "
				SELECT noti_codi, noti_nomb, inqui_codi
				FROM tb_notificaciones
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
			SELECT noti_codi, noti_nomb, p.inqui_nomb
			FROM tb_notificaciones as d inner join tb_inquilinos as p
			ON (d.inqui_codi = p.inqui_codi)
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
					INSERT INTO tb_notificaciones
					(noti_codi, noti_nomb, inqui_codi)
					VALUES
					(NULL, '$noti_nomb', '$inqui_codi')
					";
				$this->ejecutar_query_simple();
			endif;
		}
		
		public function editar($datos=array()) {
			foreach ($datos as $campo=>$valor):
				$$campo = $valor;
			endforeach;
			$this->query = "
			UPDATE tb_notificaciones
			SET noti_nomb='$noti_nomb',
			inqui_codi='$inqui_codi'
			WHERE noti_codi = '$noti_codi'
			";
			$this->ejecutar_query_simple();
		}
		
		public function borrar($noti_codi='') {
			$this->query = "
			DELETE FROM tb_notificaciones
			WHERE noti_codi = '$noti_codi'
			";
			$this->ejecutar_query_simple();
		}
		
		function __destruct() {
			//unset($this);
		}
	}
?>