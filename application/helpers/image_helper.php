<?php
//menyimpan gambar segai png global berdasar folder nama tapi buat foldernya manual
function atur_png($folder,$nama,$img){
      $tempat = "./gambar/".$folder."/".$nama;
      $img    = str_replace('data:image/png;base64,', '', $img);
      $img    = str_replace(' ', '+', $img);
      $data   = base64_decode($img);
      //$file = UPLOAD_DIR . uniqid() . '.png';
      $success = file_put_contents($tempat, $data);
      //print $success ? $tempat : 'Unable to save the file.';
      return 1;
    }


function atur_png_minuman($nama,$img){
      $tempat = "./gambar/minuman/".$nama.".png";
      $img    = str_replace('data:image/png;base64,', '', $img);
      $img    = str_replace(' ', '+', $img);
      $data   = base64_decode($img);
      //$file = UPLOAD_DIR . uniqid() . '.png';
      $success = file_put_contents($tempat, $data);
      //print $success ? $tempat : 'Unable to save the file.';
      return 1;
    }

//untuk mengambil gambar dari files
function ambil_gambar($folder,$nama){
  $ci = & get_instance();
  return '<img src="'.base_url('gambar/'.$folder."/".$nama).'" width="57"> </img> ';
}
//untuk menghapus gambar
function hapus_gambar($tabel,$gambar){
  $target='./gambar/'.$tabel.'/'.$gambar.'.png';
  if (file_exists($target)){unlink($target);  }
  if (file_exists($target)){  return 0;  }
  else{ return 1;}
}



 ?>
