<div class="row">
  <div class="col-md-12">
    <div class="row">
      <div class="col-md-6">
        <p class="text-center">
          <hr>
          <form class=""  onSubmit="return validateForm1()" action="<?=base_url('import/simpan_masakan.php')?>" method="post" enctype="multipart/form-data">
            <h5 class="text-center">Import Masakan</h5>
            <input type="file" class="form-control" id="masakan" name="masakan" value=""><br><br>
            <input type="submit" class="form-control btn-primary" name="submit" value="SUBMIT">
          </form>
        </p>
      </div>
      <div class="col-md-6">
        <p class="text-center">
          <hr>
          <form class="" onSubmit="return validateForm2()" action="<?=base_url('import/simpan_minuman.php')?>" method="post" enctype="multipart/form-data">
            <h5 class="text-center">Import Minuman</h5>
            <input type="file" class="form-control" id="minuman" name="minuman" value=""><br><br>
            <input type="submit" class="form-control btn-primary" name="submit" value="SUBMIT">
          </form>
        </p>
      </div>

      <div class="col-md-6">
        <p class="text-center">
          <br><br>
          <hr>
          <form class="" onSubmit="return validateForm3()" action="<?=base_url('import/simpan_meja.php')?>" method="post" enctype="multipart/form-data">
            <h5 class="text-center">Import Meja</h5>
            <input type="file" class="form-control"  id="meja" name="meja" value=""><br><br>
            <input type="submit" class="form-control btn-primary" name="submit" value="SUBMIT">
          </form>
        </p>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">
          //    validasi form (hanya file .xls yang diijinkan)
          function validateForm1()
          {
              function hasExtension(inputID, exts) {
                  var fileName = document.getElementById(inputID).value;
                  return (new RegExp('(' + exts.join('|').replace(/\./g, '\\.') + ')$')).test(fileName);
              }

              if(!hasExtension('masakan', ['.xls'])){
                  alert("Hanya file XLS (Excel 2003) yang diijinkan.");
                  return false;
              }
          }


          function validateForm2()
          {
              function hasExtension(inputID, exts) {
                  var fileName = document.getElementById(inputID).value;
                  return (new RegExp('(' + exts.join('|').replace(/\./g, '\\.') + ')$')).test(fileName);
              }

              if(!hasExtension('minuman', ['.xls'])){
                  alert("Hanya file XLS (Excel 2003) yang diijinkan.");
                  return false;
              }
          }


              function validateForm3()
              {
                  function hasExtension(inputID, exts) {
                      var fileName = document.getElementById(inputID).value;
                      return (new RegExp('(' + exts.join('|').replace(/\./g, '\\.') + ')$')).test(fileName);
                  }

                  if(!hasExtension('meja', ['.xls'])){
                      alert("Hanya file XLS (Excel 2003) yang diijinkan.");
                      return false;
                  }
              }
          </script>
