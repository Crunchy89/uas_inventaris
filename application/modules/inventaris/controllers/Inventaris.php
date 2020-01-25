<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Inventaris extends MY_Controller
{

	public function __construct()
	{
		if (!$this->session->userdata('siteman')) {
			redirect('auth');
		}
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('inventaris_model');
	}

	public function index()
	{
		$data['title'] = 'Inventaris';
		$data['inventaris'] = $this->inventaris_model->join();
		admin_page('index', $data);
	}
	public function tambah()
	{
		$model = $this->inventaris_model;
		$form = $this->form_validation;
		$form->set_rules($model->rules());
		if ($form->run()) {
			$model->tambah();
		} else {
			$data['title'] = 'Tambah Inventaris';
			$data['ruang'] = $this->db->get('ruang')->result();
			$data['jenis'] = $this->db->get('jenis')->result();
			$data['sumber'] = $this->db->get('sumber')->result();
			$data['kondisi'] = $this->db->get('kondisi')->result();
			$data['tahun'] = $this->db->get('tahun')->result();
			admin_page('tambah', $data);
		}
	}
	public function edit()
	{
		$model = $this->inventaris_model;
		$form = $this->form_validation;
		$form->set_rules($model->rules());
		if ($form->run()) {
			$model->edit();
		} else {
			$id = $this->input->post('id');
			$data['title'] = 'Tambah Inventaris';
			$data['ruang'] = $this->db->get('ruang')->result();
			$data['jenis'] = $this->db->get('jenis')->result();
			$data['sumber'] = $this->db->get('sumber')->result();
			$data['tahun'] = $this->db->get('tahun')->result();
			$data['kondisi'] = $this->db->get('kondisi')->result();
			$data['inv'] = $this->db->get_where('inventaris', ['id_inv' => $id])->row();
			admin_page('edit', $data);
		}
	}
	public function hapus()
	{
		$this->inventaris_model->delete();
	}
}
