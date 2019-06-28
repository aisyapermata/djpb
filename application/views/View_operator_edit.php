<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<?php foreach($operator as $dataopr){ $useropr=$dataopr->useropr; ?>
<form method="post" action="<?php echo base_url('index.php/operator/update') ?>">
<input type="hidden" id="useropr" name="useropr" value="<?php echo $dataopr->useropr; ?>">
  <div class="form-group row">
    <label for="username" class="col-sm-2 col-form-label">Username</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="username" name="username" placeholder="Username" value="<?php echo $dataopr->useropr; ?>" readonly>
    </div>
  </div>

  <div class="form-group row">
    <label for="nama" class="col-sm-2 col-form-label">Nama</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama" value="<?php echo $dataopr->nmopr; ?>">
    </div>
  </div>

  <div class="form-group row">
    <label for="kppn" class="col-sm-2 col-form-label">KPPN</label>
    <div class="col-sm-10">
      <select name="kppn" id="kppn" class="custom-select mr-sm-2">
          <?php
            if (count($kppn)) {
              foreach ($kppn as $data) {
                if($kppn==$data['kdkppn']){
                  echo "<option selected value='".$data['kdkppn']."'>".$data['nmkppn']."</option>";
                }else{
                  echo "<option value='".$data['kdkppn']."'>".$data['kdkppn']." | ".$data['nmkppn']."</option>";
                }
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
    <label for="email" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="email" name="email" placeholder="Email" value="<?php echo $dataopr->email; ?>">
    </div>
  </div>

<div class="form-group row">
    <label for="hp" class="col-sm-2 col-form-label">No. HP</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="hp" name="hp" placeholder="No. HP" value="<?php echo $dataopr->nohp; ?>">
    </div>
  </div>

  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary">Simpan</button>
      <button type="reset" class="btn btn-danger">Reset</button>
    </div>
  </div>



</form>
<?php } ?>
</div>
        <!-- /.container-fluid -->