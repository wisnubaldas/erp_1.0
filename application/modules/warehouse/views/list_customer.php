 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
 



  <script type="text/javascript">
    var dt_custom;
 
 $(document).ready(function() {    
    
          dt_custom = $('#dt_custom').DataTable({ 
            "processing": true, //Feature control the processing indicator.
			"bInfo": true,
			//"order":[[4,"desc"],[3,"desc"],[1,"asc"]],
 "lengthMenu": [[25, 50, 75, -1], [25, 50, 75, "All"]],
            "serverSide": true, //Feature control DataTables' server-side processing mode
            // Load data for the table's content from an Ajax source
            "ajax": {
                "url": "<?php echo site_url('customer/Customer/list_customer')?>",
                "type": "POST",
            },
            "columns": [
            { "data": "no","orderable":false,"visible":true },
            { "data": "Name" },
			{ "data": "city" },
            { "data": "country"},
            { "data": "Email"},
			{ "data": "TotEmployee"},
			{ "data": "isActive"},
			{ "data": "Status"}
			//{ "data": "Status","orderable":false,"visible":true}
            ]
          });  
    
$('#dt_custom tbody').on('dblclick', 'tr', function () {
            var tr = $(this).closest('tr');
            var row = dt_custom.row(tr);
           //alert(row.data().firstName);
         });
});
    function reload_dt_custom()
    {
      dt_custom.ajax.reload(null,false); //reload datatable ajax 
    }

  </script>

<div class="md-card uk-margin-medium-bottom">
                <div class="md-card-content">
<h2>
<i class="material-icons md-24">people</i>
<span>List Customers</span>
</h2>
                    <table id="dt_custom" class="uk-table" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th width="2%">No</th>
                                <th width="30%">Customer Name</th>
                                <th width="13%">City</th>
                                <th width="14%">Country</th>
                                <th width="10%">Email</th>
                                <th width="3%">Employee</th>
                                <th width="5%">isActive</th>
                                <th width="9%">Status</th>
                            </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Customer Name</th>
                            <th>City</th>
                            <th>Country</th>
                            <th>Email</th>
                            <th>TotEmployee</th>
                            <th>isActive</th>
                            <th>Status</th>
                        </tr>
                        </tfoot>

                        <tbody>
                        </tbody>
                    </table>
                </div>
  </div>
  
  