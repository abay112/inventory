<body>
  <link rel="stylesheet" href="<?php echo base_url();?>assset/datatables/css/jquery.dataTables.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assset/datatables/detail.css">
  <link rel="stylesheet" href="<?php echo base_url()?>assset/vendor/bootstrap/css/bootstrap.min.css">
  <script src="<?php echo base_url();?>assset/vendor/jquery/jquery.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
  <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script> 
  




<script>

       $(document).ready(function () {

        function format (data) {
          return '<div class="details-container">'+
              '<table cellpadding="5" cellspacing="0" border="0" class="details-table">'+
                  '<tr>'+
                      '<td class="title">Supplier Name:</td>'+
                      '<td>'+data.supplier_name+'</td>'+
                  '</tr>'+
                  '<tr>'+
                      '<td class="title">Supplier Code:</td>'+
                      '<td>'+data.supplier_code+'</td>'+
                  '</tr>'+
                  '<tr>'+
                      '<td class="title">Date:</td>'+
                      '<td>'+data.supplier_created_date +'</td>'+
                  '</tr>'+
              '</table>'+
            '</div>';
        };

        $.ajax({
               url:"<?php echo base_url();?>c_laporan/fetchDetailData",
               method:"POST",
               dataType:"JSON",
               success: function(data){
                var table = $('.datatables').DataTable({
            
                   columns: [
                     {
                       "className":      'details-control',
                       "orderable":      false,
                       "data":           null,
                       "defaultContent": ''
                     },
                  
                     {"data" : 'supplier_id'},
                     {"data" : 'supplier_code'},
                     {"data" : 'supplier_name'},
                     {
                      
                       "orderable":      false,
                       "data":           null,
                       "defaultContent": '<button class="btn btn-sm btn-default"><i class="glyphicon glyphicon-edit"></i></button>'     
                     },
                   ],
                   data:data,
                 })
                 
                 $('.datatables tbody').on('click', 'td.details-control', function () {
                 var tr  = $(this).closest('tr'),
                     row = table.row(tr);
                
                 if (row.child.isShown()) {
                   tr.next('tr').removeClass('details-row');
                   row.child.hide();
                   tr.removeClass('shown');
                 }
                 else {
                   row.child(format(row.data())).show();
                   tr.next('tr').addClass('details-row');
                   tr.addClass('shown');
                 }
                 });
              }
           });        
      });
</script>
                  
  
          <br>
           <br>
            
      <table class="table table-striped table-bordered datatables">
        <thead>
          <tr>
            <th>
            <th> Supplier ID
            <th> Supplier Code
            <th> Supplier Name
            <th> Action
           
        <tbody>
      </table>
          <!--  <table class="table table-bordered" id="example" cellspacing="0" width="100%">
             <thead>
               <tr>
                 <th></th>
                 <th>name</th>
                 <th>position</th>
                 <th>office</th>
                 <th>salary</th>
               </tr>
             </thead>
             <tbody>             
              
             </tbody>
           </table> -->
</body>
  