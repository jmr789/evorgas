<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends MY_Controller {

	public function index()
	{
		$data['page_title'] = 'Contact';

		$this->load->view('contact', $data);
	}

    public function nousContacter() 
	{
        $this->load->model('Contact_model');

		$name = $this->input->post('name');
        $email = $this->input->post('email');
        $phone = $this->input->post('phone');
        $subject = $this->input->post('subject');
        $message = $this->input->post('message');

        $this->Contact_model->addMessage($name, $email, $phone, $subject, $message);

        redirect(base_url());
	}


}