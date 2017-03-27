<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Calculateur extends MY_Controller {

	public function index()
	{		
		$data['page_title'] = 'Calculateur de coûts';

		$data['evCar'] = $this->Cars_model->get_electric_cars_data();
		$data['gasCar'] = $this->Cars_model->get_gas_cars_data();

		$this->load->view('calculateur', $data);
	}

	public function loadAjaxResults()
	{
		$data['evCar'] = $this->computePricingElectric($this->input->post('ev'));
		$data['gasCar'] = $this->computePricingGas($this->input->post('gas'));

		$this->load->view('AJAX_calculResult', $data);
	}

}
