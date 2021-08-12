<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_Siswa');
	}
	public function index()
	{
		$queryAllSiswa = $this->M_Siswa->getDataSiswa();
		$this->load->view('home', array('queryAllSw' => $queryAllSiswa));
	}
	public function halaman_tambah() {
		$this->load->view('halaman_tambah_sw');
	}
	public function halaman_edit($nis) {
		$querySiswaDetail = $this->M_Siswa->getDataSiswaDetail($nis);
		$this->load->view('halaman_edit_sw', array('querySwDetail' => $querySiswaDetail));
	}
	public function fungsiTambah()
	{
		$nis = $this->input->post('nis');
		$nama = $this->input->post('nama');
		$jurusan = $this->input->post('jurusan');

		$ArrInsert = array(
			'nis' => $nis,
			'nama' => $nama,
			'jurusan' => $jurusan
		);

		$this->M_Siswa->insertDataSiswa($ArrInsert);
		redirect(base_url(''));
		/*echo "<pre>";
		print_r($ArrInsert);
		echo "</pre>";*/
	}
	public function fungsiEdit()
	{
		$nis = $this->input->post('nis');
		$nama = $this->input->post('nama');
		$jurusan = $this->input->post('jurusan');

		$ArrUpdate = array(
			'nama' => $nama,
			'jurusan' => $jurusan
		);
		$this->M_Siswa->updateDataSiswa($nis, $ArrUpdate);
		redirect(base_url(''));
	}
	public function fungsiDelete($nis)
	{
		$this->M_Siswa->deleteDataSiswa($nis);
		redirect(base_url(''));
	}
}
