<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('auth_model');
	}
	public function index()
	{
		if ($this->session->userdata('siteman')) {
			redirect('admin');
		}
		$model = $this->auth_model;
		$validation = $this->form_validation;
		$validation->set_rules($model->rules());
		if ($validation->run()) {
			$model->signIn();
		} else {
			$data['title'] = "Login Page";
			auth_page('index', $data);
		}
	}
	public function logout()
	{
		$this->auth_model->signOut();
	}
}
