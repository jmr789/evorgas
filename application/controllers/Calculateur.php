<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Calculateur extends CI_Controller {

	public function index()
	{
		$this->load->model('Cars_model');
		
		$data['page_title'] = 'Calculateur de coûts';

		$data['evCar'] = $this->Cars_model->get_electric_cars_data();
		$data['gasCar'] = $this->Cars_model->get_gas_cars_data();

		$this->load->view('calculateur', $data);
	}

}
