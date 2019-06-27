 <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Rapat</h6>
            </div>
            <div class="card-body">
              <!-- button -->
                    <button type="submit" class="btn btn-primary">
                      Tambah
                    </button>
                  <br>
                  <br>

              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

           			<thead>
           				<tr>
           					<td>No</td>
           					<td>Perihal</td>
                    <td>Stakeholder</td>
                    <td>Tanggal Rapat</td>
                    <td>Keterangan</td>
                    <td>Status</td>
                    <td>Link URL</td>
           					<td>Kode Grup</td>
           					<td>Aksi</td>
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
                    <td><a href="<?php echo $datarpt->link_url ?>" target="_blank"><?php echo $datarpt->link_url ?></a></td>
                    <td><?php echo $datarpt->kdgroup; ?></td>
           					<td>
           						<a href="<?php echo base_url('index.php/rapat/edit/').$datarpt->rapat_id; ?>" class="btn btn-warning"> Edit </a>  
                      <a href="<?php echo base_url('index.php/rapat/hapus/').$datarpt->rapat_id; ?>" class="btn btn-danger">Delete</a>
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
      


    