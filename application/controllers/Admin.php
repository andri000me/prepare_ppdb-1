<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index()
	{
		if ((!$this->session->userdata('username')) && ($this->session->userdata('level') != '1')) {
			redirect('web','refresh');
		}
		
		$this->load->view('admin/meta');
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/konten');
		$this->load->view('admin/control');
		$this->load->view('admin/footer');
		$this->load->view('admin/script');

	}

}

/* End of file Admin.php */
/* Location: ./application/controllers/Admin.php */