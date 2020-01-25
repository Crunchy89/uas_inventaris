<?php
class Auth_model extends CI_Model
{
    public function rules()
    {
        return [
            [
                'field' => 'username',
                'label' => 'Username',
                'rules'  => 'trim|required',
                'errors' => array(
                    'required' => 'Field %s tidak boleh kosong'
                )
            ],
            [
                'field' => 'password',
                'label' => 'Password',
                'rules'  => 'required|min_length[8]',
                'errors' => array(
                    'required' => 'Field %s tidak boleh kosong',
                    'min_length' => '%s minimal 8 karakter'

                )
            ]
        ];
    }
    public function signIn()
    {
        $username = htmlspecialchars($this->input->post('username'));
        $password = htmlspecialchars($this->input->post('password'));
        $cek = $this->db->get_where('user', ['username' => $username])->row_array();
        if ($cek) {
            if ($password == $cek['password']) {
                $data = [
                    'siteman' => TRUE
                ];
                $this->session->set_userdata($data);
                redirect('dashboard');
            } else {
                $this->session->set_flashdata('message', '<div class="card-alert card red lighten-5">
            <div class="card-content red-text center-align">
            <p>Username Atau Password salah</p>
            </div>
            </div>');
                redirect('auth');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="card-alert card red lighten-5">
            <div class="card-content red-text center-align">
            <p>Username Atau Password salah</p>
            </div>
            </div>');
            redirect('auth');
        }
    }
    public function signOut()
    {
        $this->session->unset_userdata('siteman');
        $this->session->sess_destroy();
        redirect('auth');
    }
}
