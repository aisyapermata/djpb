 <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Master Operator</h6>
            </div>
            <div class="card-body">
              <!-- button -->
                <a href="<?php echo base_url('index.php/operator/add');?>" class="btn btn-primary">Tambah</a>
                  <br>
                  <br>

              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Username</th>
                                    <th>Nama</th>
                                    <th>Kode KPPN</th>
                                    <th>Nama KPPN</th>
                                    <th>Status</th>
                                    <th>Email</th>
                                    <th>No. HP</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>

                        <tbody>
                            <?php 
                            $no=0;
                            foreach($operator as $dataopr){ 
                            $no++; ?>
                            <tr>
                                <td><?php echo $no; ?></td>
                                <td><?php echo $dataopr->useropr ?></td>
                                <td><?php echo $dataopr->nmopr ?></td>
                                <td><?php echo $dataopr->kdkppn ?></td>
                                <td><?php echo $dataopr->nmkppn ?></td>
                                <td><?php echo $dataopr->nmstatus ?></td>
                                <td><?php echo $dataopr->email ?></td>
                                <td><?php echo $dataopr->nohp ?></td>
                                <td>
                                  <a href="<?php echo base_url('index.php/operator/edit/'.$dataopr->useropr); ?>" class="btn btn-warning btn-icon-split">
                                    <span class="icon text-white">  
                                      <i class="fa fa-edit"></i>
                                    </span>
                                    <span class="text">Edit</span>
                                  </a>  
                                  <a href="<?php echo base_url('index.php/operator/delete/'.$dataopr->useropr); ?>" class="btn btn-danger btn-icon-split" onclick="return confirm('Apakah Anda yakin akan menghapus <?php echo $dataopr->useropr; ?> ?')">
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

