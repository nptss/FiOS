
<div class="navbar-fixed-top">
<div class="ngajeng">
  <div class="row">
    <div class="col-md-1">
      <button type="button" onclick="ngajeng()" name="button" class="btn btn-primary"></i> Run App </button>
    </div>
      <!--AWAL TASK -->
      <div class="col-md-1">
        <button type="button" onclick="taskbar_fios(0)" name="button" class="btn btn-warning"></i> Task 0 </button>
      </div>
      <!-- AKHIR TASK -->

      <!--AWAL TASK -->
      <div class="col-md-1">
        <button type="button" onclick="taskbar_fios(1)" name="button" class="btn btn-warning"></i> Task 1 </button>
      </div>
      <!-- AKHIR TASK -->

      <!--AWAL TASK -->
      <div class="col-md-1">
        <button type="button" onclick="taskbar_fios(2)" name="button" class="btn btn-warning"></i> Task 2 </button>
      </div>
      <!-- AKHIR TASK -->
      <!--AWAL TASK -->
      <div class="col-md-1">
        <button type="button" onclick="taskbar_fios(3)" name="button" class="btn btn-warning"></i> Task 3 </button>
      </div>
      <!-- AKHIR TASK -->

      <!--AWAL TASK -->
      <div class="col-md-1">
        <button type="button" onclick="taskbar_fios(4)" name="button" class="btn btn-warning"></i> Task 4 </button>
      </div>
      <!-- AKHIR TASK -->
      <!--AWAL TASK -->
      <div class="col-md-1">
        <button type="button" onclick="taskbar_fios(5)" name="button" class="btn btn-warning"></i> Task 5 </button>
      </div>
      <!-- AKHIR TASK -->

      <!--AWAL TASK -->
      <div class="col-md-1">
        <button type="button" onclick="taskbar_fios(6)" name="button" class="btn btn-warning"></i> Task 6 </button>
      </div>
      <!-- AKHIR TASK -->
      <!--AWAL TASK -->
      <div class="col-md-1">
        <button type="button" onclick="taskbar_fios(7)" name="button" class="btn btn-warning"></i> Task 7 </button>
      </div>
      <!-- AKHIR TASK -->

      <!--AWAL TASK -->
      <div class="col-md-1">
        <button type="button" onclick="taskbar_fios(8)" name="button" class="btn btn-warning"></i> Task 8 </button>
      </div>
      <!-- AKHIR TASK -->
      <!--AWAL TASK -->
      <div class="col-md-1">
        <button type="button" onclick="taskbar_fios(9)" name="button" class="btn btn-warning"></i> Task 9 </button>
      </div>
      <!-- AKHIR TASK -->

      <!--AWAL TASK -->
      <div class="col-md-1">
        <button type="button" onclick="taskbar_fios(10)" name="button" class="btn btn-warning"></i> Task 10 </button>
      </div>
      <!-- AKHIR TASK -->
  </div>
</div>
</div>

<script type="text/javascript">
  function ngajeng(){
    //$(".setar-menu-fi").html();
    $("#modal_start").modal();
  }
  function dokumentasi(){
    $("#modal_start").modal("hide");
    window.open('<?=base_url('user_guide')?>','_blank','channelmode =1,scrollbars=1,status=0,titlebar=0,toolbar=0,resizable=1');
  }
</script>


<div class="modal fade" id="modal_start" style="width:90%;" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content" id="modal_start-fios">
      <div class="modal-header">
        <button type="button" class="close btn-danger" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">FiOS </h4><i>nptss</i>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-8">
            <p class="text-center">
                <button type="button" class="btn btn-primary form-control" onclick="dokumentasi()" name="button">User Gude CI</button>
            </p>
            <p class="text-center">
                <button type="button" class="btn btn-primary form-control" name="button">File</button>
            </p>
            <p class="text-center">
                <button type="button" class="btn btn-primary form-control" name="button">Config</button>
            </p>
            <p class="text-center">
                <button type="button" class="btn btn-primary form-control" name="button">Config</button>
            </p>
            <p class="text-center">
                <button type="button" class="btn btn-primary form-control" name="button">Config</button>
            </p>
            <p class="text-center">
                <button type="button" class="btn btn-primary form-control" name="button">Config</button>
            </p>

            <hr>
            <input type="text" name="" class="btn form-control" value="">
          </div>


          <div class="col-md-4">
            <p class="text-center">
                <button type="button" class="btn btn-primary form-control" name="button">Dokumen</button>
            </p>
            <p class="text-center">
                <button type="button" class="btn btn-primary form-control" name="button">File</button>
            </p>
            <p class="text-center">
                <button type="button" class="btn btn-primary form-control" name="button">Panel</button>
            </p>
            <p class="text-center">
                <button type="button" class="btn btn-primary form-control" name="button">Config</button>
            </p>
            <p class="text-center">
                <button type="button" class="btn btn-primary form-control" name="button">Bantuan</button>
            </p>
            <p class="text-center">
                <button type="button" class="btn btn-primary form-control" name="button">Perangkat</button>
            </p>
          </div>
        </div>
      </div>
      <div class="modal-footer">
          <button type="button" class="btn btn-danger">Log Out</button>
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>


<div class="modal fade" id="modal_jenela_app" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close btn-danger" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Mulai</h4>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-12">
            <div class="row">
              <div class="col-md-12">
                <input type="hidden" id="id" class="form-control"  name="" value="">
                Nama Masakan :<br>  <input type="text" id="nama_masakan" class="form-control"  name="" value="">
              </div>
              <div class="col-md-12">
                  <br><button  type="button" id="simpan" onclick="simpan()" class="form-control btn btn-primary" name="button">SIMPAN</button>
              </div>

            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-danger">Log Out</button>
      </div>
    </div>

  </div>
</div>

<!-- ISI -->
<div class="mburian">
<div class="setar-menu-fi"></div>

<div class="container-fluid">
  <div class="ngisi-data">
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <h1 class="text-center text-blue">FiOS</h1>
  </div>
</div>
</div>
