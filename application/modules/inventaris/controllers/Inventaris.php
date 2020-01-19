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
		admin_page('index', $data);
	}
}
