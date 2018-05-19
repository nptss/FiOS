<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Setting extends NPTSS_Controller{

  public function __construct()
  {
    parent::__construct();
    atur_template();
  }
  public function index()
  {
    $elemen =array('nama','alamat','uang','gambar');
    $data['fios_crud']=ngolah_data('setting',$elemen,'ujicoba','id');
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
//Akhir class
}
