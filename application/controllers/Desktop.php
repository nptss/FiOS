<?php
defined('BASEPATH')or exit('Tidak Boleh !');
class Desktop extends CI_Controller
{
  function __construct()
  {
    parent::__construct();
    error_reporting(0);
    atur_template();
  }

  public function index(){
    $this->template->load('templates/desktop','desktop');
  }
  public function cek_crud(){
    $elemen =array('nama','alamat','uang');
    $data['fios_crud']=ngolah_data('desktop',$elemen,'ujicoba','id');
    $this->template->load('templates/desktop','halaman/view',$data);
  }
  public function view()
  {
    $hasil= $this->db->get('ujicoba')->result();
    $this->table->set_heading('No','Name', 'Color', 'Size','Aksi');
    $no=1;
    foreach ($hasil as $f) {
      $this->table->add_row(nomor($no),$f->nama,$f->alamat,$f->uang,tombol_grup($f->id));
      $no++;
    }
    $this->load->view('load_data/view');
  }

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

  //Akhir Class
}
?>
