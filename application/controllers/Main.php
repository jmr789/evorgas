<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends MY_Controller {

	public function index()
	{
		$this->load->model('Cars_model');

		$evCar = $this->Cars_model->get_electric_cars_data()[4];
		$gasCar = $this->Cars_model->get_gas_cars_data()[4];

		$data['evCar'] = $this->computePricingElectric($evCar['id']);
		$data['gasCar'] = $this->computePricingGas($gasCar['id']);

		$data['page_title'] = 'Coût véhicule électrique Québec';

		$this->load->view('landing', $data);
	}


}
