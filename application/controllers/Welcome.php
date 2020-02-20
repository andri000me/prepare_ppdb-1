<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {


	public function __construct()
	{
		parent::__construct();
		
	}

	public function index()
	{
		$data['web'] = $this->web->data_web()->row_array();
		$data['pict'] = $this->web->images_web()->row_array();
		$data['gallery'] = $this->web->gallery_web()->result();
		$data['excellence_left'] = $this->web->excellence_left()->result();
		$data['excellence_right'] = $this->web->excellence_right()->result();
		$data['testimoni'] = $this->web->testimoni()->result();
		$data['question'] = $this->web->question()->result();


		$this->load->view('welcome_message', $data);
	}
}
