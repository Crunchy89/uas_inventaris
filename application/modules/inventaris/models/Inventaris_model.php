<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Inventaris_model extends CI_Model
{

    public function rules()
    {
        return [
            [
                'field' => 'inv',
                'label' => 'Inventaris',
                'rules'  => 'trim|required',
                'errors' => array(
                    'required' => 'Field %s tidak boleh kosong'
                )
            ],
            [
                'field' => 'kode',
                'label' => 'Kode Inventaris',
                'rules'  => 'required',
                'errors' => array(
                    'required' => 'Field %s tidak boleh kosong'
                )
            ],
            [
                'field' => 'sumber',
                'label' => 'Sumber',
                'rules'  => 'trim|required',
                'errors' => array(
                    'required' => 'Field %s tidak boleh kosong'
                )
            ],
            [
                'field' => 'ruang',
                'label' => 'Ruangan',
                'rules'  => 'trim|required',
                'errors' => array(
                    'required' => 'Field %s tidak boleh kosong'
                )
            ],
            [
                'field' => 'jenis',
                'label' => 'Jenis',
                'rules'  => 'trim|required',
                'errors' => array(
                    'required' => 'Field %s tidak boleh kosong'
                )
            ]
        ];
    }
}
