<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sigin extends CI_Controller {

	public function index()
	{

		$this->form_validation->set_rules('username', 'Username', 'trim|required',
			[
				'required' => 'Username tidak boleh Kosong'
			]);

		$this->form_validation->set_rules('pass', 'Password', 'trim|required',
			[
				'required' => 'Password tidak boleh kosong'
			]);

		if ($this->form_validation->run() == FALSE) {

			$this->load->view('login/login');

		} else {
			$this->sigin_();
		}
	}

	function sigin_()
	{
		$username = $this->input->post('username');
		$pass = $this->input->post('pass');

		$query = $this->db->get_where('web_users',['username' => $username])->row_array();

		if ($query > 0) {
			if (password_verify($pass, $query['pass'])) {

				if ($query['level'] == '1') {

					$array = array(
						'username' => $username,
						'level' => '1'
					);
				
					$this->session->set_userdata( $array );

					redirect('admin','refresh');

				} else {

					$array = array(
						'username' => $username,
						'level' => '2'
					);
				
					$this->session->set_userdata( $array );

					redirect('calon','refresh');
				}
				

				

			} else {

				$this->session->set_flashdata('error', 'Username atau Password salah');
				redirect('sigin','refresh');
			}
						
		} else {
			$this->session->set_flashdata('error', 'Username tidak terdaftar');
			redirect('sigin','refresh');
		}
		
	}

}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */