<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cars_model extends CI_Model
{

    function __construct()
	{
		parent::__construct();
	}

	public function get_electric_cars_data()
	{
		$this->db->select('*');
		$this->db->from('vehicules_electriques');
		$this->db->order_by('after_tax_price','ASC');
		
		$query = $this->db->get();

	    return $query->result_array();
	}

	public function get_gas_cars_data()
	{
		$this->db->select('*');
		$this->db->from('vehicules_essence');
		$this->db->order_by('after_tax_price','ASC');
		
		$query = $this->db->get();

	    return $query->result_array();
	}

	public function get_gas_prices_by_type($type) 
	{
		$this->db->select('*');
		$this->db->from('gas_prices');
		$this->db->where('type', $type);
		
		$query = $this->db->get();

	    return $query->result_array();
	}

	public function get_electricity_prices() 
	{
		$this->db->select('*');
		$this->db->from('electricity_prices');
		
		$query = $this->db->get();

	    return $query->result_array();
	}

	public function get_electric_cars_data_by_id($id) 
	{
		$this->db->select('*');
		$this->db->from('vehicules_electriques');
		$this->db->where('id', $id);
		$this->db->limit(1);
		
		$query = $this->db->get();

	    return $query->result_array()[0];
	}

	public function get_gas_cars_databy_id($id) 
	{
		$this->db->select('*');
		$this->db->from('vehicules_essence');
		$this->db->where('id', $id);
		$this->db->limit(1);
		
		$query = $this->db->get();

	    return $query->result_array()[0];
	}
}