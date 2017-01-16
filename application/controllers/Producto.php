<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Producto extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('producto_model');
	}

	public function index(){
			$data=array();

			$data['Param1']=$this->input->post('Param1');
			$data['Param2']=$this->input->post('Param2');
			$data['Param3']=$this->input->post('Param3');

			$Where['1']=1;
			$data['getProductos']=$this->producto_model->_sql('productos',$Where,'');
			

			$View=$this->load->view('Estandarizacion/getViewResponse',$data); //Encapsular toda la Vista en una variable


			//Forma de devolver parametros (vistas, obj, echo) desde controlador a JS(AJAX)
			// $this->output
			// 		->set_content_type('application/json')
			// 		->set_output(
			// 			json_encode(array(
			// 				'success'=>true,
			// 				'ViewSet'=>$View

			// 			))	
			// );
}

}

/* End of file producto.php */
/* Location: ./application/controllers/producto.php */