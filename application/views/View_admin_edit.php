<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<div class="card shadow mb-4">
<div class="card-header py-3">
  <h6 class="m-0 font-weight-bold text-primary">Form Edit Admin</h6>
</div>

<div class="card-body">
<?php foreach($admin as $dataadm){ $nip=$dataadm->nip; ?>
<form method="post" action="<?php echo base_url('index.php/admin/update') ?>">
<input type="hidden" id="nip" name="nip" value="<?php echo $dataadm->nip; ?>">
  <div class="form-group row">
    <label for="nip" class="col-sm-2 col-form-label">NIP</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="nip" name="nip" placeholder="NIP" value="<?php echo $dataadm->nip; ?>" readonly>
    </div>
  </div>

  <div class="form-group row">
    <label for="status" class="col-sm-2 col-form-label">Status</label>
    <div class="col-sm-10">
      <select name="status" id="status" class="custom-select mr-sm-2">
          <?php
              foreach ($status as $data) {
                if($dataadm->status==$data['status']){
                  echo "<option value='".$data['status']."' selected>".$data['nmstatus']."</option>";
                }else{
                  echo "<option value='".$data['status']."'>".$data['nmstatus']."</option>";
                }
              }
            
          ?>
        </select>
    </div>
  </div>

  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary">Simpan</button>
      <a href="<?php echo base_url('index.php/admin') ?>" class="btn btn-secondary">Batal</a>
    </div>
  </div>



</form>
<?php } ?>
</div>
        <!-- /.container-fluid -->