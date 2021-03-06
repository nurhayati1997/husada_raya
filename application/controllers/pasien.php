<?php
defined('BASEPATH') or exit('No direct script access allowed');

class pasien extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		if (!$this->session->userdata("id_user")) {
			redirect("login");
		}
		$this->load->model('Db_model');
	}

	public function index()
	{
		$this->template->load('template', 'pasien_v');
	}

	function get_data_pasien()
	{
		echo json_encode($this->Db_model->get_where('tbl_pasien', array('id' => $this->input->post('id', TRUE)))->row());
	}

	function get_pasien()
	{
		if ($this->input->post('tgl', TRUE) == null) {
			$newformat = $this->input->post('tgl', TRUE);
		} else {
			$time = strtotime($this->input->post('tgl', TRUE));
			$newformat = date('Y-m-d', $time);
		}
		echo json_encode($this->Db_model->get_tbl_pasien('v_riwayat_diagnosa', 'nama', $newformat, $this->input->post('dokter', TRUE), $this->input->post('kec', TRUE), $this->input->post('diagnosa', TRUE))->result());
	}

	function get_diagnosa()
	{
		echo json_encode($this->Db_model->get_group('tbl_riwayat_diagnosa', 'diagnosa')->result());
	}

	function ubah_data()
	{
		$data = [
			"kode" => $this->input->post('nrm', TRUE),
			"nik" => $this->input->post('nik', TRUE),
			"nama" => $this->input->post('nama', TRUE),
			"kecamatan" => $this->input->post('kec', TRUE),
			"alamat" => $this->input->post('alamat', TRUE),
			"jenis_kelamin" => $this->input->post('jk', TRUE),
			"agama" => $this->input->post('agama', TRUE),
			"status" => $this->input->post('status', TRUE),
			"ttl" => $this->input->post('ttl', TRUE),
			"pekerjaan" => $this->input->post('pekerjaan', TRUE),
			"pendidikan" => $this->input->post('pendd', TRUE),
			"nohp" => $this->input->post('telp', TRUE),
			"ortu" => $this->input->post('ortu', TRUE)
		];

		echo json_encode($this->Db_model->update('tbl_pasien', $data, array('id' => $this->input->post('id', TRUE))));
		// echo json_encode($this->Db_model->insert_get("tbl_pasien", $data));
	}
}
