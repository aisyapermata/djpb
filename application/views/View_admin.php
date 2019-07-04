<!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Master Admin</h6>
            </div>
            <div class="card-body">
              <!-- button -->
                <a href="<?php echo base_url('index.php/admin/add');?>" class="btn btn-primary">Tambah</a>
                  <br>
                  <br>

              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

                <thead>
                  <tr>
                    <td>No</td>
                    <td>NIP</td>
                    <td>Status</td>
                    <td>Aksi</td>
                  </tr>
                </thead>

                <tbody>
                  <?php 
                  $no=0;
                  foreach($admin as $dataadm){ 
                  $no++; ?>
                  <tr>
                    <td><?php echo $no; ?></td>
                    <td><?php echo $dataadm->nip; ?></td>
                    <td><?php echo $dataadm->nmstatus; ?></td>
                    <td>
                      <a href="<?php echo base_url('index.php/admin/edit/'.$dataadm->nip); ?>" class="btn btn-warning btn-icon-split">
                        <span class="icon text-white">  
                          <i class="fa fa-edit"></i>
                        </span>
                        <span class="text">Edit</span>
                      </a>  
                      <a href="<?php echo base_url('index.php/admin/delete/'.$dataadm->nip); ?>" class="btn btn-danger btn-icon-split" onclick="return confirm('Apakah Anda yakin akan menghapus <?php echo $dataadm->nip; ?> ?')">
                        <span class="icon text-white">
                          <i class="far fa-trash-alt"></i>
                        </span>
                        <span class="text">Delete</span>
                      </a>
                    </td>
                  </tr>
                      <?php } ?>
                </tbody>
              </table>
          </div>
          
      </div>
    </div>
  </div>
</div>
</div>