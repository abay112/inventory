
<script type="text/javascript">
    
    // mengisi variable untuk setiap inputan
    function edit_material(id){
        $('#form-edit')[0].reset(); //reset value form ketika open modal
        $('#myModal-edit').modal('show'); // open modal 

            //load data ajax 
            $.ajax({
                url:"<?php echo base_url();?>c_dashboard/detailMat/"+id, //url to controller
                type:"GET", //method display data
                dataType:"JSON", // type data to display
                success:function(data){ 
                    //console.log('data');
                    $('[name="id_mat"]').val(data.material_id);
                    $('[name="kd_mat"]').val(data.material_code);
                    $('[name="nama_mat"]').val(data.material_name);
                    $('[name="des_mat"]').val(data.material_desc);
                }
            });
    }
    //end edit material

    // display by datatable
    $(document).ready(function(){
        $('#material').DataTable();
    });
    // end of datatable
    
    // delete data material
    function deletedata(id)
    {
        swal({
            title: "HAPUS DATA",
            text: "Yakin untuk menghapus ?",
            type: "warning",
            showCancelButton: true,
            confirmButtonClass: 'btn-danger',
            confirmButtonText: 'Hapus',
            closeOnConfirm: false
            //closeOnCancel: false
            },
            function(){
                $.ajax({
                    url: "<?php echo base_url();?>c_dashboard/delMaterial",
                    type: "POST",
                    data:{id:id},
                    success: function(){
                                swal('Data Berhasil Dihapus','success');
                    }
                });
            });
    }

    // end delete data material
</script>


<div class="container">
    <?php echo $this->session->flashdata('mess_sukses');?>
</div>

<button class="btn btn-default btn-info" data-toggle="modal" data-target="#myModal-tambah" type="submit">
    <span class="glyphicon glyphicon-plus"></span> Tambah Data</button>    

<!-- Table Material -->
<br>
<br>
<table class="table table-striped table-bordered" id="material">
    <thead>
        <tr>
            <th>No</th>            
            <th>Kode Material</th>
            <th>Material</th>
            <th>Deskripsi</th>
            <th>Created date</th>
            <th>Updated Date</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php
            $id =1;
            foreach ($menu as $row) {
        ?>
        <tr>
            <td><?php echo $id++;?></td>                
            <td><?php echo $row->material_code;?></td>
            <td><?php echo $row->material_name;?></td>
            <td><?php echo $row->material_desc;?></td>
            <td><?php echo $row->material_created_date;?></td>
            <td><?php echo $row->material_updated_date;?></td>
            <td>
                <button class="btn btn-sm btn-default" onclick="edit_material(<?php echo $row->material_id;?>)"><i class="glyphicon glyphicon-edit"></i></button>
                <!--<a href="<?php echo base_url() ."c_dashboard/delMaterial/". $row->material_id;?>" class="btn btn-sm btn-danger" role="button"><i class="glyphicon glyphicon-trash"></i></a> -->
                <!--<button class="btn btn-sm btn-danger" href="<?php echo base_url() ."c_dashboard/delMaterial/". $row->material_id;?>""><i class="glyphicon glyphicon-trash"></i></button>-->
                <button class="btn btn-sm btn-danger" onclick="deletedata(<?php echo $row->material_id;?>)" type="button">
                    <i class="glyphicon glyphicon-trash"></i></button>
            </td>
        </tr>
    <?php } ?>       
    </tbody>
</table>
<!--End Material-->



<!--Modal Bootstrap Edit-->
<div class="modal fade" id="myModal-edit" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="gridSystemModalLabel">Ubah Data Inventori</h4>
                </div>
                    <div class="modal-body">
                        <form  id="form-edit" method="POST" action="<?php echo base_url();?>c_dashboard/editMaterial">
                            <div class="form-group">
                                <div class="col-md-4">
                                    <label>ID Material</label>
                                </div>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="id_mat" placeholder="Material ID">
                                </div>
                                <br>
                                <br>
                                <div class="col-md-4">
                                    <label>Kode Material</label>
                                </div>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="kd_mat" placeholder="Material Code">
                                </div>
                                <br>
                                <br>
                                <div class="col-md-4">
                                    <label>Nama Material</label>
                                </div>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="nama_mat"  placeholder="Material Name"> 
                                </div>
                                <br>
                                <br>
                                <div class="col-md-4">
                                    <label>Deskripsi</label>
                                </div>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="des_mat"  placeholder="Description" >
                                </div>
                                <br>
                                <br>
                                <?php
                                    $tgl1 = date('Y-m-d H:i:s');
                                ?>
                                <div class="col-md-4">
                                    <label>Tanggal Update</label>
                                </div>
                                <div class="col-md-6" id>
                                    <div class='input-group date'>
                                        <input type="text" class="form-control" name="upd_mat" disabled value="<?php echo $tgl1;?>"> 
                                        <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                                    </div>
                                </div>
                                <br>
                            </div>
                        
                            </div>
                            <br>
                            <br>
                            <div class="modal-footer">
                                <div class="col-md-12">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                                    <button type="submit" class="btn btn-primary">Ubah</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

<!--End Modal Bootstrap Edit-->



<!--Modal Bootstrap Tambah-->
<div class="modal fade" id="myModal-tambah" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="gridSystemModalLabel">Tambah Data Inventori</h4>
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
<!--End Modal Bootstrap Tambah-->


