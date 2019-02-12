
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Rumah Idaman</title>
    <link rel="stylesheet" href="<?php echo base_url()?>assset/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assset/vendor/metisMenu/metisMenu.min.css" >
    <link rel="stylesheet" href="<?php echo base_url()?>assset/datatables/css/jquery.dataTables.css" >
    <link rel="stylesheet" href="<?php echo base_url()?>assset/datatables/css/dataTables.bootstrap.css" >
    <link rel="stylesheet" href="<?php echo base_url()?>assset/dist/css/sb-admin-2.css" >
    <link rel="stylesheet" href="<?php echo base_url()?>assset/vendor/morrisjs/morris.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assset/vendor/font-awesome/css/font-awesome.min.css" >
    <link rel="stylesheet" href="<?php echo base_url()?>assset/dist/js/datepicker.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assset/dist/css/bootstrap-datetimepicker.min.css" >

    <script src="<?php echo base_url()?>assset/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url()?>assset/datatables/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url()?>assset/dist/js/bootstrap-datepicker.js"></script>
    <script src="<?php echo base_url()?>assset/js/bootstrap-datetimepicker.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.js"></script>


    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url()?>assset/vendor/bootstrap/js/bootstrap.min.js"></script>    

    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php echo base_url()?>assset/vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <!--<script src="<?php echo base_url()?>assset/vendor/raphael/raphael.min.js"></script> -->
    <!--<script src="<?php echo base_url()?>assset/vendor/morrisjs/morris.min.js"></script> -->
    <!--<script src="<?php echo base_url()?>assset/data/morris-data.js"></script> -->

    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url()?>assset/dist/js/sb-admin-2.js"></script>
   
</head>

<body>

    <div class="col-12" align="center">
        <?php echo $this->session->flashdata('message');?>
    </div>

    <div id="wrapper">
        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <?php echo $header;?>

            <!--Top Header -->

            <div class="navbar-default sidebar" role="navigation">
                <?php echo $sidebar;?>
            </div>
        </nav>
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="page-header"><?php echo $title;?></h2>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
            </div>
            
            <div class="row">
                <div class="container-fluid">
                    <div class="col-lg-12">
                      <?php echo $content;?>
                    </div>
                </div>
            </div>

            
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
   
</body>
</html>
