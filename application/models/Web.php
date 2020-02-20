<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Web extends CI_Model {

	function data_web()
	{
		return $this->db->get('web_info');
	}

	function images_web()
	{
		return $this->db->get('web_pict');
	}

	function gallery_web()
	{
		return $this->db->get('web_gallery');
	}

	function excellence_left()
	{
		return $this->db->get('web_excellence_left');
	}

	function excellence_right()
	{
		return $this->db->get('web_excellence_right');
	}

	function testimoni()
	{
		return $this->db->get('web_testimoni');
	}

	function question()
	{
		return $this->db->get('web_question');
	}
	
	function school()
	{
		return $this->db->get('sch_zonasi');
	}
	
	function sub_district()
	{
		return $this->db->get('adr_sub_district');
	}

}

/* End of file Web.php */
/* Location: ./application/models/Web.php */