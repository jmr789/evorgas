<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vehicules extends MY_Controller {

	public function index()
	{
		$this->load->model('Cars_model');
		
		$data['page_title'] = 'Offre de véhicules électriques';

		$this->load->view('vehicules', $data);
	}


}

?>