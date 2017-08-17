<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * 
 */
class Requisicion_model extends CI_Model {
	
	public function __construct() {
		parent::__construct();
	}
	
	public function detalle_requisicion($idreq){
				
		$this->db->where("requesicion_id",$idreq);
		$query = $this->db->get('detalle_requisicion');
		if($query->num_rows() > 0)
		{
			return $query->result();
		}		

	}
	public function requisicion_usuario($idusuario){
			
		$this->db->select('requisicion.*, detalle_requisicion.folio')->from('requisicion')->join('detalle_requisicion','detalle_requisicion.requesicion_id = requisicion.id','inner')->group_by('requisicion.id')->where("requisicion.autor", $idusuario);

		$query = $this->db->get();
		if($query->num_rows() > 0)
		{
			return $query->result();
		}
	}

	public function new_requisicion($id_user)
	{
		date_default_timezone_set('America/Mexico_City');
		ini_alter('date.timezone','America/Mexico_City');
								
		$fecha 	= date('Y-m-d H:i:s');

		$data 	= array(
			'autor'			=>	$id_user,
			'fecha'			=>	$fecha,
			'estatus'		=>  1
		);

		if($this->db->insert('requisicion',$data)){
			$insert_id = $this->db->insert_id();   			
		}else{
			$insert_id = NULL;
		}

		return  $insert_id;
	}

	public function folio(){

		return $this->db->select('id')->order_by('id','desc')->limit(1)->get('requisicion')->row('id');
	}
}