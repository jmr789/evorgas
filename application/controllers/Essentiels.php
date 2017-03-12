<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Essentiels extends CI_Controller {

	public function index()
	{
		$data['page_title'] = 'En savoir plus';

		$this->load->view('essentiels', $data);
	}


}

?>