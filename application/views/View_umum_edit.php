<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<?php foreach($umum as $dataumum){ $umum_id=$dataumum->umum_id; ?>
<form method="post" action="<?php echo base_url('index.php/umum/update') ?>">
<input type="hidden" id="nip" name="nip" value="<?php echo $dataumum->umum_id; ?>">
  <div class="form-group row">
    <label for="nip" class="col-sm-2 col-form-label">NIP</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="nip" name="nip" placeholder="NIP" value="<?php echo $dataumum->umum_id; ?>" readonly>
    </div>
  </div>

  <div class="form-group row">
    <label for="status" class="col-sm-2 col-form-label">Status</label>
    <div class="col-sm-10">
      <select name="status" id="status" class="custom-select mr-sm-2">
          <?php
            if (count($status)) {
              foreach ($status as $data) {
                if($status==$data['status']){
                  echo "<option selected value='".$data['status']."'>".$data['nmstatus']."</option>";
                }else{
                  echo "<option value='".$data['status']."'>".$data['nmstatus']."</option>";
                }
              }
            }
          ?>
        </select>
    </div>
  </div>

  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary">Simpan</button>
      <button type="reset" class="btn btn-danger">Batal</button>
    </div>
  </div>



</form>
<?php } ?>
</div>
        <!-- /.container-fluid -->