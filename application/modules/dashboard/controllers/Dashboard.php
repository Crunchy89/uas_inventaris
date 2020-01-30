<?php
class Dashboard extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('dashboard_model');
    }
    public function index()
    {
        $data['title'] = "Dashboard";
        $data['data'] = $this->dashboard_model->join();
        $data['kondisi'] = $this->db->get('kondisi')->result();
        admin_page('index', $data);
    }
}
