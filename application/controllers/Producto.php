<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Producto extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('producto_model', 'producto');
	}

	public function index(){
			$data=array();

			$data['Param1']=$this->input->post('Param1');
			$data['Param2']=$this->input->post('Param2');
			$data['Param3']=$this->input->post('Param3');

			$Where['1']=1;
			$data['getProductos']=$this->producto->_sql('productos',$Where,'');
			
			$data['contenido'] = "Estandarizacion/getViewResponse";
			$View=$this->load->view('plantilla',$data); //Encapsular toda la Vista en una variable


			//Forma de devolver parametros (vistas, obj, echo) desde controlador a JS(AJAX)
			// $this->output
			//  		->set_content_type('application/json')
			//  		->set_output(
			//  			json_encode(array(
			//  				'success'=>true,
			//  				'ViewSet'=>$View

			//  			))	
			//  );
}


public function eliminar(){
		$data=array();
		$Where['codigo']=$this->input->post("codigo");
		$elimina=$this->producto->_Delete('productos',$Where,'');
	}
}

/* End of file producto.php */
/* Location: ./application/controllers/producto.php */