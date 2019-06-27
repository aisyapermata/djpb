<div class="content mt-3">

  <div class="animated fadeIn">
    <div class="row">

      <div class="col-md-12">
          <div class="card">
            <div class="card-header">
                <strong class="card-title">Form Edit Admin</strong>
            </div>
            <div class="card-body card-block">
              <form method="post" action="<?php echo base_url('index.php/admin/update')?>">
              <input type="hidden" id="id" name="id" value="<?php echo $dataadm->nip; ?>">
                <div class="form-group row">
                  <label for="nip" class="col-sm-2 col-form-label">NIP</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="nip" name="nip" placeholder="NIP" 
                      value="<?php echo $dataadm->nip; ?>" readonly>
                    </div>
                </div>

                <div class="form-group row">
                  <label for="password" class="col-sm-2 col-form-label">Password</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="password" name="password" placeholder="Password" value="<?php echo $dataadm->passw; ?>">
                  </div>
                </div>

                <div class="form-group row">
                  <label for="status" class="col-sm-2 col-form-label">Status</label>
                  <div class="col-sm-10">
                    <select name="status" id="status" class="custom-select mr-sm-2" required="required">
                      <option selected value="" ="">Status</option>
                      <?php if (count($status)) {
                        foreach ($status as $data) {
                          if( $nip == $data['nip']) {
                            echo "<option value='". $data['status'] . "' selected>" . $data['nmstatus'] . "</option>";
                          }else{
                            echo "<option value='". $data['status'] . "'>" . $data['nmstatus'] . "</option>";
                          }
                        } 
                      }?>
                    </select>
                  </div>
                </div>

                <div class="form-group row">
                  <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <button type="reset" class="btn btn-danger">Batal</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
      </div>
    </div>
  </div>
</div>