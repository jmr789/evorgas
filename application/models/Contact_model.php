<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contact_model extends CI_Model
{

    function __construct()
	{
		parent::__construct();
	}

	public function addMessage($name, $email, $phone, $subject, $message)
	{
		$data = array (
			"name" => $name,
			"email" => $email,
            "phone" => $phone,
			"subject" => $subject,
            "message" => $message
			);

		$this->db->insert('contacts', $data);
	}

}