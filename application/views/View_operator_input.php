 <!-- Begin Page Content -->
<div class="container-fluid">
<!-- DataTales Example -->
<div class="card shadow mb-4">
<div class="card-header py-3">
  <h6 class="m-0 font-weight-bold text-primary">Form Input Operator</h6>
</div>

<div class="card-body">
<form method="post" action="<?php echo base_url('index.php/operator/action')?>">
  <div class="form-group row">
    <label for="nrp" class="col-sm-2 col-form-label">Username</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="username" name="username" placeholder="Username" required="required">
    </div>
  </div>

  <div class="form-group row">
    <label for="nrp" class="col-sm-2 col-form-label">Password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="password" name="password" placeholder="Password" required="required">
    </div>
  </div>

  <div class="form-group row">
    <label for="kppn" class="col-sm-2 col-form-label">KPPN</label>
    <div class="col-sm-10">
      <select name="kppn" id="kppn" class="custom-select mr-sm-2">
          <?php
            if (count($kppn)) {
              foreach ($kppn as $data) {
                  echo "<option value='".$data['kdkppn']."'>".$data['kdkppn']." | ".$data['nmkppn']."</option>";
                }
              }
          ?>
        </select>
    </div>
  </div>

  <div class="form-group row">
    <label for="status" class="col-sm-2 col-form-label">Status</label>
    <div class="col-sm-10">
      <select name="status" id="status" class="custom-select mr-sm-2">
          <?php
            if (count($status)) {
              foreach ($status as $data) {
                  echo "<option value='".$data['status']."'>".$data['nmstatus']."</option>";
                }
              }
          ?>
        </select>
    </div>
  </div>

  <div class="form-group row">
    <label for="nama" class="col-sm-2 col-form-label">Nama</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama" required="required">
    </div>
  </div>

  <div class="form-group row">
    <label for="email" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="email" name="email" placeholder="Email" required="required">
    </div>
  </div>

  <div class="form-group row">
    <label for="hp" class="col-sm-2 col-form-label">No. HP</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="hp" name="hp" placeholder="No. HP" required="required">
    </div>
  </div>

  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary">Simpan</button>
      <button type="reset" class="btn btn-danger">Batal</button>
    </div>
  </div>
</form>