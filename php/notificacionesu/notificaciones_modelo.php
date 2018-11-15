<?php
    require_once("../modeloAbstractoDB.php");
	
    class Notificacionu extends ModeloAbstractoDB {
		public $noti_codi;
		public $noti_nomb;
		public $uni_codi;

		function __construct() {
			//$this->db_name = '';
		}
		 
		public function consultar($noti_codi='') {
			if($noti_codi != ''):
				$this->query = "
				SELECT noti_codi, noti_nomb, uni_codi
				FROM tb_notificacionesu
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
			SELECT noti_codi, noti_nomb, p.uni_nomb
			FROM tb_notificacionesu as d inner join tb_unidades as p
			ON (d.uni_codi = p.uni_codi)
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
					INSERT INTO tb_notificacionesu
					(noti_codi, noti_nomb, uni_codi)
					VALUES
					(NULL, '$noti_nomb', '$uni_codi')
					";
				$this->ejecutar_query_simple();
			endif;
		}
		
		public function editar($datos=array()) {
			foreach ($datos as $campo=>$valor):
				$$campo = $valor;
			endforeach;
			$this->query = "
			UPDATE tb_notificacionesu
			SET noti_nomb='$noti_nomb',
			uni_codi='$uni_codi'
			WHERE noti_codi = '$noti_codi'
			";
			$this->ejecutar_query_simple();
		}
		
		public function borrar($noti_codi='') {
			$this->query = "
			DELETE FROM tb_notificacionesu
			WHERE noti_codi = '$noti_codi'
			";
			$this->ejecutar_query_simple();
		}
		
		function __destruct() {
			//unset($this);
		}
	}
?>