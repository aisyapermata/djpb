    </div>
  </div>

  <script src="<?php echo base_url("assets/login/js/jquery-3.3.1.min.js") ?>" ></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" ></script>
  <script src="<?php echo base_url("assets/vendor/bootstrap/js/bootstrap.min.js") ?>" ></script>

	<script src="<?php echo base_url('assets/login/vendor/datatables.net/js/jquery.dataTables.min.js'); ?>"></script>
	<script src="<?php echo base_url('assets/login/vendor/datatables.net-bs4/js/dataTables.bootstrap4.min.js');?>"></script>


<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
    CKEDITOR.replace('keterangan')
  })
</script>

</body>

</html>