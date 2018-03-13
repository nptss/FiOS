<?php
defined('BASEPATH')or exit('Tidakboleh di akses langsung !');
function cek_sesi_kasir(){
  $ci = & get_instance();
  if($ci->session->userdata('kode_user')==""){
    redirect('petugas/login/');
  }
  else{ return 1;}
}

function cek_sesi_admin(){
  $ci = & get_instance();
  if($ci->session->userdata('level')!=="1"){
    redirect('petugas/login/');
  }
  else{ return 1;}
}

function cek_sesi_meja(){
    $ci = & get_instance();
    if($ci->session->userdata('id')=="id_meja"){
      redirect('petugas/login/');
  }
  else{ return 1;}
}
 ?>
