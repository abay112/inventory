<body>
  <script type="text/javascript">
    $(document).ready(function(){
     $('#supplier').DataTable({
          'ajax' : '<?php echo base_url();?>/c_menu/fetchData'
      });
    });
  </script>

  <button class="btn btn-default btn-info" data-toggle="modal" data-target="#tambah-supplier" type="submit">
    <span class="glyphicon glyphicon-plus"></span> Tambah Data
  </button>
  <br>
  <br>
  <!-- table display data-->
  <table class="table table-striped table-bordered"" id="supplier">
      <thead>
          <tr>
            <th>No</th>
            <th>Kode Suplier</th>
            <th>Nama Suplier</th>
            <th>Action</th>
          </tr>
      </thead>
      <tbody>        
      </tbody>
  </table>
  <!-- end of table display-->
  
  <!-- modal tambah supplier-->
  <div class="modal fade" id="tambah-supplier" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="gridSystemModalLabel">Tambah Data Supplier</h4>
                </div>
                    <div class="modal-body">
                        <form method="POST" action="<?php echo base_url();?>c_dashboard/addMaterial">
                            <div class="form-group">
                                <div class="col-md-4">
                                    <label>Kode Material</label>
                                </div>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="kdmat"  placeholder="Material Code" required>
                                </div>
                                <br>
                                <br>
                                <div class="col-md-4">
                                    <label>Nama Material</label>
                                </div>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="namamat" placeholder="Material Name"required>
                                </div>
                                <br>
                                <br>
                                <div class="col-md-4">
                                    <label>Deskripsi</label>
                                </div>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="desmat" placeholder="Description" required>
                                </div>
                                <br>
                                <br>
                                <div class="col-md-4">
                                    <label>Tanggal Catat</label>
                                </div>
                                  <?php
                                    $tgl = date('Y-m-d H:i:s');
                                   ?>
                                <div class="col-md-6">
                                    <div class='input-group date'>
                                        <input type="text" class="form-control" name="tglmat" value="<?php echo $tgl;?>" disabled>
                                        <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                                    </div>
                                </div>
                                <br>
                                <br>
                                <div class="col-md-4">
                                    <label>Tanggal Update</label>
                                </div>
                                <div class="col-md-6">
                                    <div class='input-group date'>
                                        <input type="text" class="form-control" name="updmat" value="<?php echo $tgl;?>" disabled> 
                                        <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                                    </div>
                                </div>
                            </div>
                    </div>
                    <br>
                    <br>
                <div class="modal-footer">
                    <div class="col-md-12">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
  </div>
  <!-- end of modal tambah -->

</body>
