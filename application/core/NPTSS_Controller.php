<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class NPTSS_Controller extends CI_Controller{
  function __construct()
  {
    parent::__construct();
    error_reporting(0);
    atur_template();
  }

    //fungsi global
    public function tambah()
    {
      $tabel = set_value('view');
      $this->load->view('tambah/'.$tabel);
    }

    public function simpan(){
      $tabel = $this->input->get('source');
      $data  = $this->input->post(null,true);
      $this->db->insert($tabel,$data);
    }
    public function edit($id){
      $tabel = $this->input->get('source');
      $key   = $this->input->get('grip');
      $id    = set_value('id');
      $data['isi']  = $this->db->where($key,$id)->get($tabel)->row();
      $this->load->view('ubah/'.$tabel,$data);
    }
    public function update(){
      $tabel = $this->input->get('source');
      $key   = $this->input->get('grip');
      $id    = set_value('id');
      $data  = $this->input->post(null,true);
      $this->db->where($key,$id)->update($tabel,$data);
    }
    public function hapus(){
      $tabel = $this->input->get('source');
      $key   = $this->input->get('grip');
      $id    = set_value('id');
      $this->db->where($key,$id)->delete($tabel);
    }


  //Akhir class
}
?>
