<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	public function index()
	{
		$this->load->model('Cars_model');

		$evCar = $this->Cars_model->get_electric_cars_data()[1];
		$gasCar = $this->Cars_model->get_gas_cars_data()[0];

		$gasPrices = $this->Cars_model->get_gas_prices_by_type('regular')[0]['price'];
		$electricityPrice = $this->Cars_model->get_electricity_prices()[0]['price'];

		$evCar['fill_cost'] = $electricityPrice * $evCar['battery_size'];
		$gasCar['fill_cost'] = $gasPrices * $gasCar['tank_size'];

		$data['evCar'] = $evCar;
		$data['gasCar'] = $gasCar;

		$this->load->view('landing', $data);
	}

}
