<body>

	<link rel="stylesheet" href="<?php echo base_url();?>assset/datatables/detail.css">

	<script>
		$(document).ready(function() {
    		var table = $('#example').DataTable( {
 				'ajax' : '<?php echo base_url();?>/c_laporan/fetchData',
 				'responsive' : true,
    		});

  			$('#example').on( 'click', 'tr td.details-control', function () {
    			var id = table.row(this).val;
    			alert( 'Clicked row id ' + id );
 			 });
    	});    
	</script>

	<table id="example">
        <thead>
            <tr>
                <th></th>
                <th>Position</th>
                <th>Office</th>
                <th>Salary</th>
            </tr>
        </thead>
        <tbody>
           
        </tbody>
    </table>
</body>