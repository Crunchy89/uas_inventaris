<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Inventaris_model extends CI_Model
{

    public function user_rules()
    {
        return [
            [
                'field' => 'nama',
                'label' => 'Nama',
                'rules'  => 'trim|required',
                'errors' => array(
                    'required' => 'Field %s tidak boleh kosong'
                )
            ],
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
                'rules'  => 'required|min_length[6]',
                'errors' => array(
                    'required' => 'Field %s tidak boleh kosong',
                    'min_length' => '%s minimal 6 karakter'
                )
            ],
            [
                'field' => 'level',
                'label' => 'Level',
                'rules'  => 'required',
                'errors' => array(
                    'required' => 'Field %s tidak boleh kosong'
                )
            ],
            [
                'field' => 'status',
                'label' => 'Status',
                'rules'  => 'required',
                'errors' => array(
                    'required' => 'Field %s tidak boleh kosong'
                )
            ]

        ];
    }

    public function edit_rules()
    {
        return [
            [
                'field' => 'nama',
                'label' => 'Nama',
                'rules'  => 'trim|required',
                'errors' => array(
                    'required' => 'Field %s tidak boleh kosong'
                )
            ],
            [
                'field' => 'level',
                'label' => 'Level',
                'rules'  => 'required',
                'errors' => array(
                    'required' => 'Field %s tidak boleh kosong'
                )
            ],
            [
                'field' => 'status',
                'label' => 'Status',
                'rules'  => 'required',
                'errors' => array(
                    'required' => 'Field %s tidak boleh kosong'
                )
            ]
        ];
    }
}
