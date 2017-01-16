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

}

/* End of file Producto_model.php */
/* Location: ./application/models/Producto_model.php */