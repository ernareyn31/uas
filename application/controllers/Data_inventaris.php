<?php

class Data_inventaris extends CI_Controller{
    
    public function index(){
        $data['contents']='data_inventaris/index';
		$this->load->view('templates/index', $data);
    }
    public function tambah_inventaris(){
        $data['contents'] = 'data_inventaris/tambah_inventaris';
        $this->load->view('templates/index', $data);
    }
}