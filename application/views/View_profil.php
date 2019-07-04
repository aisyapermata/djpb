<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<div class="card shadow mb-4">
<div class="card-header py-3">
  <h6 class="m-0 font-weight-bold text-primary">Edit Profil</h6>
</div>

<div class="card-body">
  <?php if(!empty($success)) { ?>
      <div class="alert alert-success" role="alert"> <?php echo $success; ?> </div>
    <?php } ?>

    <?php if(!empty($error)) { ?>
      <div class="alert alert-danger" role="alert"> <?php echo $error; ?> </div>
    <?php } ?> 
<form method="post" action="<?php echo base_url('index.php/profil/update') ?>">
  <div class="form-group row">
    <label for="username" class="col-sm-2 col-form-label">Username</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="username" name="username" placeholder="Username" value="<?php echo $profil->useropr; ?>">
    </div>
  </div>

  <div class="form-group row">
    <label for="nama" class="col-sm-2 col-form-label">Nama</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama" value="<?php echo $profil->nmopr; ?>">
    </div>
  </div>

  <div class="form-group row">
    <label for="email" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="email" name="email" placeholder="Email" value="<?php echo $profil->email; ?>">
    </div>
  </div>

<div class="form-group row">
    <label for="nohp" class="col-sm-2 col-form-label">No. HP</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="nohp" name="nohp" placeholder="No. HP" value="<?php echo $profil->nohp; ?>">
    </div>
  </div>

  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary">Simpan</button>
      <button type="reset" class="btn btn-danger">Reset</button>
      <a href="<?php echo base_url('index.php/umum') ?>" class="btn btn-secondary">Batal</a>
    </div>
  </div>
</form>
</div>
        <!-- /.container-fluid -->