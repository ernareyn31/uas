<?php

class Model_jenis extends CI_Model{

    public function getAll(){
        return $this->db->get('daftar_jenis')->result_array();
    }
    public function simpan($data)
    {

        $query = $this->db->insert("daftar_jenis", $data);

        if($query){
            return true;
        }else{
            return false;
        }

    }
    public function hapus($id){
        $query = $this->db->delete("daftar_jenis", $id);
        if($query){
            return true;
        }else{
            return false;
        }
    }
}