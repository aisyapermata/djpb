 <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-dark">Rapat</h6>
            </div>
            <div class="card-body">
              <!-- button -->
                <a href="<?php echo base_url('index.php/rapat/add');?>" class="btn btn-primary">Tambah</a>
                  <br>
                  <br>

              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

           			<thead>
           				<tr>
           					<th>No</th>
           					<th>Perihal</th>
                    <th>Stakeholder</th>
                    <th>Tanggal Rapat</th>
                    <th>Keterangan</th>
                    <th>Status</th>
                    <th>Link URL</th>
           					<th>Kode Grup</th>
           					<th>Aksi</th>
           				</tr>
           			</thead>

           			<tbody>
           				<?php 
                  $no=0;
                  foreach($rapat as $datarpt){ 
                  $no++; ?>
           				<tr>
           					<td><?php echo $no; ?></td>
           					<td><?php echo $datarpt->perihal; ?></td>
           					<td><?php echo $datarpt->stakeholder; ?></td>
                    <td><?php echo $datarpt->tgl_rapat; ?></td>
                    <td><?php echo $datarpt->keterangan; ?></td>
                    <td><?php echo $datarpt->nmstatus; ?></td>
                    <td>
                      <a href="<?php echo $datarpt->link_url ?>" target="_blank" class="btn btn-outline-info btn-circle text-bold-gray">Link</a>
                    </td>
                    <td><?php echo $datarpt->kdgroup; ?></td>
           					<td>
                      <a href="<?php echo base_url('index.php/rapat/edit/'.$datarpt->rapat_id); ?>" class="btn btn-warning btn-icon-split">
                        <span class="icon text-white">  
                          <i class="fa fa-edit"></i>
                        </span>
                        <span class="text">Edit</span>
                      </a>  
                      <a href="<?php echo base_url('index.php/rapat/delete/'.$datarpt->rapat_id); ?>" class="btn btn-danger btn-icon-split" onclick="return confirm('Apakah Anda yakin akan menghapus <?php echo $datarpt->rapat_id; ?> ?')">
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
      


    