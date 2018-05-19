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

    /// Untuk gambar
    public function simpan_gambar(){
      $tabel  = $this->input->get('source');
      $gambar = $this->input->post('gambar');
      $nama   = date('Y-m-d-h-i-s').".png";
      atur_png($tabel,$nama,$gambar);
      $post = array();
        foreach ( $_POST as $key => $value )
        {
            if($key!=="gambar"){
              $post[$key] = $this->input->post($key);
            }
        }
      $gambar_db = array('gambar'=>$nama);
      $data_murni= array_merge($post,$gambar_db);
      $this->db->insert($tabel,$data_murni);
    }

    public function update_gambar(){
      $tabel = $this->input->get('source');
      $key   = $this->input->get('grip');
      $id    = set_value('id');
      $cek_gambar = $this->input->post('gambar');
      $post = array();
        foreach ( $_POST as $key1 => $value )
        {
            if($key1!=="gambar"){
              $post[$key1] = $this->input->post($key1);
            }
        }

      if ($cek_gambar!=="") {
          $data  = $this->db->where($key,$id)->get($tabel)->row();
          if($data->gambar!=="nopic.jpg"){
          hapus_gambar($tabel,$data->gambar);            
          }
          $nama   = date('Y-m-d-h-i-s').".png";
          atur_png($tabel,$nama,$cek_gambar);
          $gambar_db = array('gambar'=>$nama);
          $data_murni= array_merge($post,$gambar_db);
          $this->db->where($key,$id)->update($tabel,$data_murni);
      }else {
          $this->db->where($key,$id)->update($tabel,$post);
      }
    }
    public function hapus_gambar(){
      $tabel = $this->input->get('source');
      $key   = $this->input->get('grip');
      $id    = set_value('id');
      $data  = $this->db->where($key,$id)->get($tabel)->row();
      hapus_gambar($tabel,$data->gambar);
      $this->db->where($key,$id)->delete($tabel);
    }
  //Akhir class
}
?>
