<p class="text-center">
  <br><br><br>
   <button type="button" class="btn btn-primary" name="button" onclick="tambah()"> Tambah </button>
</p>
<div class="isine_fios"></div>



<?=$fios_crud?>
<body onload="load_data()">  </body>

<div class="modal fade" id="modal_fios" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close btn-danger" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Data</h4>
      </div>
      <div class="modal-body">
        <!-- Penempatan Isi Modal -->
          <div class="isi-modal_fios"></div>
        <!-- Penempatan Isi Modal -->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-success" id="simpan" onclick="simpan()">Simpan</button>
        <button type="button" class="btn btn-success" id="update" onclick="update()">Update</button>
      </div>
    </div>

  </div>
</div>
