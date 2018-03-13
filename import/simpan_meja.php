<?php
//koneksi ke database, username,password  dan namadatabase menyesuaikan
mysql_connect('localhost', 'root', '');
mysql_select_db('rumah_makan');

//memanggil file excel_reader
require "excel_reader.php";

//jika tombol import ditekan
if(isset($_POST['submit'])){

    $target = basename($_FILES['meja']['name']) ;
    move_uploaded_file($_FILES['meja']['tmp_name'], $target);

    $data = new Spreadsheet_Excel_Reader($_FILES['meja']['name'],false);

//    menghitung jumlah baris file xls
    $baris = $data->rowcount($sheet_index=0);

//    jika kosongkan data dicentang jalankan kode berikut

//    import data excel mulai baris ke-2 (karena tabel xls ada header pada baris 1)
    for ($i=2; $i<=$baris; $i++)
    {
//       membaca data (kolom ke-1 sd terakhir)
      $nama           = $data->val($i, 1);

//      setelah data dibaca, masukkan ke tabel pegawai sql
      $query = "INSERT into tb_meja (nomor_meja,dipakai,tablet)values('$nama','0','0')";
      $hasil = mysql_query($query);
    }
    //$hasil=1;
    if(!$hasil){
//          jika import gagal
          die(mysql_error());
      }else{
//          jika impor berhasil
          echo "Data berhasil diimpor.";
    }

//    hapus file xls yang udah dibaca
    unlink($_FILES['masakan']['name']);
    header('location:http://localhost/rumah_makan/olahdata/meja_tablet/meja_atur');
}
