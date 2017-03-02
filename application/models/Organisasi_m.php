<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class Organisasi_m extends MY_Model
{
	public $table = 'organisasi';
	public $primary_key = 'id';
    public $protected = array('id');

     public $rules = array(
        'insert' => array(
            'nama' => array(
                'field' => 'nama',
                'label' => 'Nama Kelurahan',
                'rules' => 'trim|required|min_length[3]|max_length[100]')
            ),
        'update' => array(
            'nama' => array(
                'field' => 'nama',
                'label' => 'Nama Kelurahan',
                'rules' => 'trim|required|min_length[3]|max_length[100]')
            )
        );

	public function __construct()
	{
        $this->has_many['akuns'] = array('akun_m', 'id', 'id'); //foreign, local
        $this->has_many['keluargas'] = array('keluarga_m', 'no', 'id');
		$this->has_many['surats'] = array('surat_m', 'no_surat', 'id');
		$this->soft_deletes = TRUE;
		parent::__construct();
	}
}