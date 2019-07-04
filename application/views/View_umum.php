 <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Umum</h6>
            </div>
            <div class="card-body">
              <!-- button -->
                <a href="<?php echo base_url('index.php/umum/add');?>" class="btn btn-primary">Tambah</a>
                  <br>
                  <br>

              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Jenis</th>
                                        <th>Perihal</th>
                                        <th>Keterangan</th>
                                        <th>Status</th>
                                        <th>Link URL</th>
                                        <th>Group</th>
                                        <th>KPPN</th>
                                        <th>Operator</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>

                            <tbody>
                                <?php 
                                $no=0;
                                foreach($umum as $dataumum){ 
                                $no++; ?>
                                <tr>
                                    <td><?php echo $no; ?></td>
                                    <td><?php echo $dataumum->nmjenis ?></td>
                                    <td><?php echo $dataumum->perihal ?></td>
                                    <td><?php echo $dataumum->isi ?></td>
                                    <td><?php echo $dataumum->nmstatus ?></td>
                                    <td><a href="<?php echo $dataumum->link_url ?>" target="_blank"><?php echo $dataumum->link_url ?></a></td>
                                    <td><?php echo $dataumum->keterangan ?></td>
                                    <td><?php echo $dataumum->nmkppn ?></td>
                                    <td><?php echo $dataumum->nmopr ?></td>
                                    <td>
                                        <a href="<?php echo base_url('index.php/umum/edit/'.$dataumum->umum_id); ?>" class="btn btn-warning btn-icon-split">
                                            <span class="icon text-white">  
                                            <i class="fa fa-edit"></i>
                                            </span>
                                            <span class="text">Edit</span>
                                        </a>  
                                        <a href="<?php echo base_url('index.php/umum/delete/'.$dataumum->umum_id); ?>" class="btn btn-danger btn-icon-split" onclick="return confirm('Apakah Anda yakin akan menghapus <?php echo $dataumum->umum_id; ?> ?')">
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
</div>
      
<td>