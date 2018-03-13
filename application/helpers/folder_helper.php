<?php
defined('BASEPATH') OR exit('No direct script access allowed');


// function membuat directory
function c_folder($folder){
  if (!mkdir($folder, 0777, true)) {
        return false;
      }
}

// function menghapus directory
function r_folder($path=null,$folder){
  if (!is_dir($folder)) {
      mkdir($path.$folder);
  }
  rmdir($path.$folder);
}


//konfig upload
function upload_config($folder){
  $ci = & get_instance();
  $config = array(
      'upload_path' => $folder,
      'allowed_types' => 'jpeg|jpg|png|jfif|PNG',
      'max_size' => '2048',
      'max_width' => '2000',
      'max_height' => '2000'
    );
    $ci->load->library('upload', $config);
    $ci->upload->initialize($config);
}

