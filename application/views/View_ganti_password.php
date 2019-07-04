<!-- Begin Page Content -->
<div class="container-fluid">
<!-- DataTales Example -->
<div class="card shadow mb-4">
<div class="card-header py-3">
  <h6 class="m-0 font-weight-bold text-primary">Ganti Password</h6>
</div>

<div class="card-body">
    <?php if(!empty($success)) { ?>
      <div class="alert alert-success" role="alert"> <?php echo $success; ?> </div>
    <?php } ?>

    <?php if(!empty($error)) { ?>
      <div class="alert alert-danger" role="alert"> <?php echo $error; ?> </div>
    <?php } ?> 

<form method="post" action="<?php echo base_url('index.php/ganti_password/update')?>">
  <div class="form-group row">
    <label for="password1" class="col-sm-3 col-form-label">Password Baru</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="password1" name="password1" required="required">
    </div>
  </div>

  <div class="form-group row">
    <label for="password2" class="col-sm-3 col-form-label">Konfirmasi Password Baru</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="password2" name="password2" required="required">
    </div>
  </div>


  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary">Simpan</button>
      <button type="reset" class="btn btn-danger">Reset</button>
    </div>
  </div>
</form>