<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Prestasi extends CI_Controller {

	public function index()
	{
		$data['web'] = $this->web->data_web()->row_array();
		$data['school'] = $this->web->school()->result();

		$this->load->view('prestasi', $data);
	}

	function daftar()
	{
		$this->form_validation->set_rules('nisn', 'NISN', 'trim|required|numeric|exact_length[10]|is_unique[std_registration.nisn]',[
			'required' => 'NISN tidak boleh kosong',
			'numeric' => 'NISN harus berupa angka',
			'exact_length' => 'NISN harus terdiri dari 10 karakter',
			'is_unique' => 'NISN sudah di gunakan untuk registrasi, silahkan cek kembali'
		]);

		$this->form_validation->set_rules('nama', 'Nama Lengkap', 'trim|required|min_length[2]',[
			'required' => 'Nama Lengkap tidak boleh kosong',
			'min_length' => 'Nama Lengkap harus lebih dari dua karakter',
		]);

		$this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir', 'trim|required|min_length[2]',[
			'required' => 'Tempat Lahir tidak boleh kosong',
			'min_length' => 'Tempat Lahir harus lebih dari dua karakter',
		]);

		$this->form_validation->set_rules('tgl_lahir', 'Tanggal Lahir', 'trim|required|exact_length[2]|numeric|less_than[32]',[
			'required' => 'Tanggal Lahir tidak boleh kosong',
			'exact_length' => 'Tanggal Lahir harus dua karakter. Contoh : 04',
			'numeric' => 'Tanggal Lahir harus angka',
			'less_than' => 'Tanggal Lahir maksimal 31',
		]);

		$this->form_validation->set_rules('bln_lahir', 'Bulan Lahir', 'trim|required|exact_length[2]|numeric|less_than[13]',[
			'required' => 'Bulan Lahir tidak boleh kosong',
			'exact_length' => 'Bulan Lahir harus dua karakter. Contoh : 08',
			'numeric' => 'Bulan Lahir harus angka',
			'less_than' => 'Bulan Lahir maksimal 12',
		]);

		$this->form_validation->set_rules('thn_lahir', 'Tahun Lahir', 'trim|required|exact_length[4]|numeric|greater_than[1998]',[
			'required' => 'Tahun Lahir tidak boleh kosong',
			'exact_length' => 'Tahun Lahir harus dua karakter. Contoh : 2005',
			'numeric' => 'Tahun Lahir harus angka',
			'greater_than' => 'Tahun Lahir kelahiran maksimal 1999',
		]);

		$this->form_validation->set_rules('alamat', 'Alamat', 'trim|required|min_length[2]',[
			'required' => 'Alamat tidak boleh kosong',
			'min_length' => 'Alamat harus lebih dari dua karakter',
		]);

		$this->form_validation->set_rules('kecamatan', 'Kecamatan', 'trim|required|min_length[2]',[
			'required' => 'Kecamatan tidak boleh kosong',
			'min_length' => 'Nama kecamatan harus lebih dari dua karakter',
		]);

		$this->form_validation->set_rules('kota', 'Kota', 'trim|required|min_length[2]',[
			'required' => 'Kota/Kabupaten tidak boleh kosong',
			'min_length' => 'Nama kota/kabupaten harus lebih dari dua karakter',
		]);

		$this->form_validation->set_rules('sekolah_asal', 'Sekolah Asal', 'trim|required|min_length[2]',[
			'required' => 'Sekolah Asal tidak boleh kosong',
			'min_length' => 'Nama sekolah asal harus lebih dari dua karakter',
		]);

		$this->form_validation->set_rules('nomor_hp', 'Nomor HP', 'trim|required',[
			'required' => 'Nomor HP tidak boleh kosong, jika tidak memiliki silahkan masukkan nomor hp keluarga',
		]);

		$this->form_validation->set_rules('bin', 'B. Indonesia', 'trim|required|less_than[101]',[
			'required' => 'Nilai B. Indonesia tidak boleh kosong',
			'less_than' => 'Nilai B. Indonesia tidak boleh lebih dari 100'
		]);

		$this->form_validation->set_rules('big', 'B. Inggris', 'trim|required|less_than[101]',[
			'required' => 'Nilai B. Inggris tidak boleh kosong',
			'less_than' => 'Nilai B. Inggris tidak boleh lebih dari 100'
		]);

		$this->form_validation->set_rules('mtk', 'Matematika', 'trim|required|less_than[101]',[
			'required' => 'Nilai Matematika tidak boleh kosong',
			'less_than' => 'Nilai Matematika tidak boleh lebih dari 100'
		]);

		$this->form_validation->set_rules('ipa', 'IPA', 'trim|required|less_than[101]',[
			'required' => 'Nilai IPA tidak boleh kosong',
			'less_than' => 'Nilai IPA tidak boleh lebih dari 100'
		]);


		if ($this->form_validation->run() == FALSE) {
			
			$this->index();

		} else {

			  /**
		     * Membuat nomor pendaftaran
		     */

		    $prefix = 'PPDB';

		    $this->db->select('RIGHT(std_registration.nomor_daftar,4) as kode', FALSE);
			$this->db->order_by('nomor_daftar','DESC');
			$this->db->limit(1);
			$query = $this->db->get('std_registration'); 
			if($query->num_rows() <> 0){      
				   //jika kode ternyata sudah ada.      
				   $data = $query->row();      
				   $kode = intval($data->kode) + 1;    
			  } else {      
				   //jika kode belum ada      
				   $kode = 1;    
			  }

			  $kodemax = str_pad($kode, 4, "0", STR_PAD_LEFT);
			  $nomor_daftar = $prefix.'-'.$kodemax;
			  

			$nisn = $this->input->post('nisn');
		    $nama = $this->input->post('nama');
		    $jk = $this->input->post('jk');
		    $tempat_lahir = $this->input->post('tempat_lahir');
		    $tgl_lahir = $this->input->post('tgl_lahir');
		    $bln_lahir = $this->input->post('bln_lahir');
		    $thn_lahir = $this->input->post('thn_lahir');
		    $agama = $this->input->post('agama');
		    $alamat = $this->input->post('alamat');
		    $kecamatan = $this->input->post('kecamatan');
		    $kota = $this->input->post('kota');
		    $sekolah_asal = $this->input->post('sekolah_asal');
		    $nomor_hp = $this->input->post('nomor_hp');
		    $bin = $this->input->post('bin');
		    $big = $this->input->post('big');
		    $mtk = $this->input->post('mtk');
		    $ipa = $this->input->post('ipa');
		    $tingkat = $this->input->post('tingkat');
		    $jua = $this->input->post('juara');
		    if ($jua != '') {
		    	$juara = $jua;
		    } else {
		    	$juara = '';
		    }
		    $bid = $this->input->post('bidang');
		     if ($bid != '') {
		    	$bidang = $bid;
		    } else {
		    	$bidang = '';
		    }
		    $nm_lmb = $this->input->post('nama_lomba');
		     if ($nm_lmb != '') {
		    	$nama_lomba = $nm_lmb;
		    } else {
		    	$nama_lomba = '';
		    }
		    $rerata_un = ($bin+$big+$mtk+$ipa)/4;

		    $data = [
		    	'nomor_daftar' => $nomor_daftar,
	    		'nisn' => $nisn,
			    'nama' => $nama,
			    'jk' => $jk,
			    'tempat_lahir' => $tempat_lahir,
			    'tgl_lahir' => $tgl_lahir,
			    'bln_lahir' => $bln_lahir,
			    'thn_lahir' => $thn_lahir,
			    'agama' => $agama,
			    'alamat' => $alamat,
			    'kecamatan' => $kecamatan,
			    'kota' => $kota,
			    'sekolah_asal' => $sekolah_asal,
			    'bin' => $bin,
			    'big' => $big,
			    'mtk' => $mtk,
			    'ipa' => $ipa,
			    'rerata_un' => $rerata_un,
			    'nomor_hp' => $nomor_hp,
			    'jalur' => '2',
			    'tingkat' => $tingkat,
				'juara' => $juara,
				'bidang' => $bidang,
				'nama_lomba' => $nama_lomba,

		    ];

		    $insert = $this->insert->registrasi($data);

		    if ($insert) {
		    	$this->session->set_flashdata('success', '<strong>Pendaftaran berhasil</strong>, silahkan <a target="_blank" href="'.base_url('prestasi/cetak/').encrypt_url($nisn).'" class="btn btn-primary">klik di sini</a> untuk mencetak');
		    	redirect('prestasi','refresh');
		    } else {
		    	$this->session->set_flashdata('error', 'Pendaftaran gagal, silahkan diulang kembali');
		    	redirect('prestasi','refresh');
		    }
		    
		}
	}

	function cetak($q)
	{
		$nisn = decrypt_url($q);
		$this->db->where('nisn', $nisn);
		$data['query'] = $this->db->get('std_registration')->row_array();

		$data['web'] = $this->web->data_web()->row_array();

		$this->load->view('bukti', $data);
	}

}

/* End of file Zonasi.php */
/* Location: ./application/controllers/Zonasi.php */

// echo "<pre>";
// 		print_r($_POST);
// 		echo "</pre>";