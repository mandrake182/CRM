<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * 
 */
class Requisicion_model extends CI_Model {
	
	public function __construct() {
		parent::__construct();
	}
	
	//añadimos usuarios
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