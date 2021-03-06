<?php
function ngolah_data_gambar($kelas,$elemen=array(''=>''),$tabel,$field_kunci){
  $ci   = & get_instance();
  //membuat urutan data
  $data = 'id="+id+"';
  $i=count($elemen);
  $a=0;
  while ($a < $i) {
    $data= $data.'&'.$elemen[$a].'="+'.$elemen[$a].'+"';
    $a++;
  }
  //membuat variabel
  $i=count($elemen);
  $nama="";
  $a=0;
  while ($a < $i) {
    $nama= $nama.' var '.$elemen[$a].' = $("#'.$elemen[$a].'").val(); ';
    $a++;
  }
  $master_crud_fios = '
  <script type="text/javascript">
  function load_data(){
    $.ajax({
      type    : "POST",
      url     : "'.base_url('privasi/'.$kelas).'/view",
      data    : "",
      success : function(data){
        $(".isine_fios").html(data);
        $("#update").hide();
        $("#simpan").show();
      }
    });
  }
  //menyimpan data
  function tambah(){
      $("#modal_fios").modal();
      $.ajax({
        type    : "POST",
        url     : "'.base_url('privasi/'.$kelas).'/tambah/",
        data    : "view='.$tabel.'",
        success : function(data){
          $(".isi-modal_fios").html(data);
          $("#update").hide();
          $("#simpan").show();
        }
      });

  }
  function simpan(){
      var id     = "";
      '.$nama.'
      $.ajax({
        type    : "POST",
        url     : "'.base_url('privasi/'.$kelas).'/simpan_gambar?source='.$tabel.'",
        data    : "'.$data.'",
        success : function(data){
          $("#modal_fios").modal("hide");
          load_data();
          //alert(data);
        }
      });
  }
  function edit(id){
      $.ajax({
        type    : "POST",
        url     : "'.base_url('privasi/'.$kelas).'/edit/?source='.$tabel.'&grip='.$field_kunci.'",
        data    : "id="+id,
        success : function(data){
          $("#modal_fios").modal();
          $(".isi-modal_fios").html(data);
          $("#update").show();
          $("#simpan").hide();
        }
      });
  }
  function update(){
      var id = $("#id").val();
      '.$nama.'
      $.ajax({
        type    : "POST",
        url     : "'.base_url('privasi/'.$kelas).'/update_gambar?source='.$tabel.'&grip='.$field_kunci.'",
        data    : "'.$data.'",
        success : function(data){
          $("#modal_fios").modal("hide");
          load_data();
          //localStorage.removeItem("isinya");
          //alert(data);
        }
      });
  }
  function hapus(id){
    var longok = confirm("Yakin menghapus data ini ?");
    if (longok == true ){
      $.ajax({
        type    : "POST",
        url     : "'.base_url('privasi/'.$kelas).'/hapus_gambar?source='.$tabel.'&grip='.$field_kunci.'",
        data    : "id="+id,
        success : function(data){
          $("#modal_tambah").modal("hide");
          load_data();
          //alert(data);
        }
      });
    }
  }
  </script>
  ';
  return $master_crud_fios;
}
?>
