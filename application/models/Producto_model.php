<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Producto_model extends CI_Model {

	function __construct()
	{
		parent::__construct();
		$this->load->database();
		
	}

	public function _sql($Table,$Where,$Orden){
		$this->db->where($Where);
		if($Orden){
			$this->db->order_by($Orden);
		}
		$query=$this->db->get($Table);
		//$this->LastQuery();
		if($query->num_rows()>0){
			return $query->result();
		}
}

public function _Delete($table,$where){
		$this->db->where($where);
		$this->db->delete($table);  
	}

}

/* End of file Producto_model.php */
/* Location: ./application/models/Producto_model.php */