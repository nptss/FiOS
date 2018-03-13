<?php
defined('BASEPATH') OR exit('No direct script access allowed');

function alert_danger(){
  // type alert ada success, warning, error
  $ci = & get_instance();
  return $ci->session->set_flashdata('message',
    '<script type="text/javascript">
    swal("KESALAHAN!","Maaf masih terdapat kesalahan.!","error")
    </script>'
  );
}

function alert_images(){
  // type alert ada success, warning, error
  $ci = & get_instance();
  return $ci->session->set_flashdata('message',
    '<script type="text/javascript">
    swal("KESALAHAN!","Maaf gambar tidak sesuai..!","error")
    </script>'
  );
}

function alert_success(){
  // type alert ada success, warning, error
  $ci = & get_instance();
  return $ci->session->set_flashdata('message',
    '<script type="text/javascript">
    swal("SUKSES!","Proses berhasil!","success")
    </script>'
  );
}

function alert_delete(){
  // type alert ada success, warning, error
  $ci = & get_instance();
  return $ci->session->set_flashdata('message',
    '<script type="text/javascript">
    swal("SUKSES!","Proses hapus berhasil!","success")
    </script>'
  );
}