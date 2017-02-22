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

	public function loadAjaxResults() 
	{
		$this->load->model('Cars_model');

		$evCar = $this->Cars_model->get_electric_cars_data_by_id($this->input->post('ev'));
		$gasCar = $this->Cars_model->get_gas_cars_databy_id($this->input->post('gas'));

		$evCar['after_tax_price'] = $evCar['after_tax_price'];
		$evCar['gov_rebate'] = $evCar['gov_rebate'];
		$evCar['after_rebate_price'] = $evCar['after_rebate_price'];
		$gasCar['after_tax_price'] =$gasCar['after_tax_price'];

		$gasPrice = $this->Cars_model->get_gas_prices_by_type('regular')[0]['price'];
		$electricityPrice = $this->Cars_model->get_electricity_prices()[0]['price'];

		$evCar['fill_cost'] = $electricityPrice * $evCar['battery_size'];
		$gasCar['fill_cost'] = $gasPrice * $gasCar['tank_size'];

		$evCar['onehundredkmcost'] = round($evCar['avg_consumption_rate'] * $electricityPrice, 2);
		$gasCar['onehundredkmcost'] = round($gasPrice * $gasCar['avg_consumption_rate'], 2);

		$evCar['twentykkmcost'] = round($evCar['onehundredkmcost'] * 200, 2);
		$gasCar['twentykkmcost'] = round($gasCar['onehundredkmcost'] * 200, 2);

		$yearlyeconomy = round(($gasCar['onehundredkmcost'] - $evCar['onehundredkmcost']) * 200);

		$after1yeareconomy = round($evCar['after_rebate_price'] - $yearlyeconomy, 2);
		$after3yearseconomy = round($evCar['after_rebate_price'] - $yearlyeconomy * 3, 2);
		$after5yearseconomy = round($evCar['after_rebate_price'] - $yearlyeconomy * 5, 2);

		$evCar['twentykkmeconomy'] = $yearlyeconomy;
		$evCar['after1yearcost'] = $after1yeareconomy;
		$evCar['after3yearscost'] = $after3yearseconomy;
		$evCar['after5yearscost'] = $after5yearseconomy;

		$data['evCar'] = $evCar;
		$data['gasCar'] = $gasCar;
		$data['electricity_cost'] = $electricityPrice;
		$data['gas_cost'] = $gasPrice;

		$this->load->view('AJAX_calculResult', $data);
	}

}
