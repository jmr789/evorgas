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

	private function computePricingElectric($car_id) {

		//LOAD MODEL
		$this->load->model('Cars_model');

		//GET CAR DATA
		$evCar = $this->Cars_model->get_electric_cars_data_by_id($car_id);

		//WTF DOES THAT EVEN DO???
		//$evCar['after_tax_price'] = $evCar['after_tax_price'];
		//$evCar['gov_rebate'] = $evCar['gov_rebate'];
		//$evCar['after_rebate_price'] = $evCar['after_rebate_price'];

		//GET ELECTRICITY PRICING
		$electricityPrice = $this->Cars_model->get_electricity_prices()[0]['price'];

		//CALCULATE COST TO FULL BATTERY (ELECTRICITY TIMES BATTERY SIZE ... ALL IN KWH)
		//$evCar['fill_cost'] = $electricityPrice * $evCar['battery_size'];

		//CALCULATE COST BY RANGE (100KM AND 20,000KM)
		$evCar['onehundredkmcost'] = round($evCar['avg_consumption_rate'] * $electricityPrice, 2);
		$evCar['twentykkmcost'] = round($evCar['onehundredkmcost'] * 200, 2);

		//YEARLY MAINTENANCE COSTS
		$oilChanges_fees = 0;
		$charging_fees = $evCar['twentykkmcost'];
		$brakes_fees = 80; //400$ for 1 brake change until 100 000km ...means 80$ per 20,000km
		$otherStuff_fees = 100;
		$totalYearExpenses = round($charging_fees + $brakes_fees + $otherStuff_fees, 2);

		//CALCULATE TOTAL COSTS OVER THE YEARS BASED ON 20,000 KM PER YEAR + HOME CHARGING ONLY
		$evCar['totalYearExpenses'] = $totalYearExpenses;
		$evCar['firstYearCosts'] = round($evCar['after_rebate_price'] + $totalYearExpenses, 2);
		$evCar['secondYearCosts'] = round($evCar['firstYearCosts'] + $totalYearExpenses, 2);
		$evCar['thirdYearCosts'] = round($evCar['secondYearCosts'] + $totalYearExpenses, 2);
		$evCar['fourthYearCosts'] = round($evCar['thirdYearCosts'] + $totalYearExpenses, 2);
		$evCar['fifthYearCosts'] = round($evCar['fourthYearCosts'] + $totalYearExpenses, 2);
		//TO MENTION : AFTER 5 YEARS...APPROX ADD NEW BATTERTY COSTS

		//Some calculations peg this to about 3 or 4 cents per mile of maintenance cost in an EV versus closer to 6 cents in an internal combustion car. 
		//But it’s hard to know for certain.

		return $evCar;
	}

	private function computePricingGas($car_id) {
		//LOAD MODEL
		$this->load->model('Cars_model');

		//GET CAR DATA
		$gasCar = $this->Cars_model->get_gas_cars_databy_id($car_id);

		//WTF DOES THAT EVEN DO???
		//$gasCar['after_tax_price'] =$gasCar['after_tax_price'];

		//GET GAS PRICING
		$gasPrice = $this->Cars_model->get_gas_prices_by_type('regular')[0]['price'];

		//CALCULATE COST TO FILL GAS TANK
		//$gasCar['fill_cost'] = $gasPrice * $gasCar['tank_size'];

		//CALCULATE COST BY RANGE (100KM AND 20,000KM)
		$gasCar['onehundredkmcost'] = round($gasPrice * $gasCar['avg_consumption_rate'], 2);
		$gasCar['twentykkmcost'] = round($gasCar['onehundredkmcost'] * 200, 2);

		//YEARLY MAINTENANCE COSTS
		$oilChanges_fees = 120; //3 x 40$ by year
		$fueling_fees = $gasCar['twentykkmcost'];
		$brakes_fees = 160; //800$ for 2 brake changes until 100 000km ...means 160$ per 20,000km 
		$otherStuff_fees = 200; //MUFFLER, SPARK PLUGS, WIRES, ETC. PRORATA SUR 100,000KM http://insideevs.com/ev-vs-ice-maintenance-the-first-100000-miles/
		$totalYearExpenses = round($oilChanges_fees + $fueling_fees + $brakes_fees + $otherStuff_fees, 2);

		//CALCULATE TOTAL COSTS OVER THE YEARS BASED ON 20,000 KM PER YEAR + HOME CHARGING ONLY
		$gasCar['totalYearExpenses'] = $totalYearExpenses;
		$gasCar['firstYearCosts'] = round($gasCar['after_tax_price'] + $totalYearExpenses, 2);
		$gasCar['secondYearCosts'] = round($gasCar['firstYearCosts'] + $totalYearExpenses, 2);
		$gasCar['thirdYearCosts'] = round($gasCar['secondYearCosts'] + $totalYearExpenses, 2);
		$gasCar['fourthYearCosts'] = round($gasCar['thirdYearCosts'] + $totalYearExpenses, 2);
		$gasCar['fifthYearCosts'] = round($gasCar['fourthYearCosts'] + $totalYearExpenses, 2);
		//TO MENTION : AFTER 5 YEARS...APPROX ADD Timing belt, water pump 900-1000$ for both

		//Some calculations peg this to about 3 or 4 cents per mile of maintenance cost in an EV versus closer to 6 cents in an internal combustion car. 
		//But it’s hard to know for certain.

		return $gasCar;
	}

	public function loadAjaxResults()
	{
		$this->load->model('Cars_model');

		$data['evCar'] = $this->computePricingElectric($this->input->post('ev'));
		$data['gasCar'] = $this->computePricingGas($this->input->post('gas'));

		$this->load->view('AJAX_calculResult', $data);
	}

}
