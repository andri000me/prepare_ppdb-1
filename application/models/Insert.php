<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Insert extends CI_Model {

	function registrasi($data)
	{
		$insert = $this->db->insert('std_registration', $data);

		if ($insert) {
			return 1;
		} else {
			return FALSE;
		}
		
	}

}

/* End of file Insert.php */
/* Location: ./application/models/Insert.php */