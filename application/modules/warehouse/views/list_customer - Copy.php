 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
 

  <script type="text/javascript">

    
    var dt_tableTools;
 
 $(document).ready(function() {    
    
          dt_tableTools = $('#dt_tableTools').DataTable({ 
            "processing": true, //Feature control the processing indicator.
			"bInfo": false,
			"order":[[4,"desc"],[3,"desc"],[1,"asc"]],
            "serverSide": true, //Feature control DataTables' server-side processing mode
            // Load data for the table's content from an Ajax source
            "ajax": {
                "url": "<?php echo site_url('customer/Customer/list_customer')?>",
                "type": "POST",
            },
            "columns": [
            { "data": "no","orderable":false,"visible":true },
            { "data": "Name" },
			{ "data": "IdCity" },
            { "data": "IdCountry"},
            { "data": "VATNo","orderable":false,"visible":true },
			{ "data": "YearEst","orderable":false,"visible":true },
			{ "data": "CompanyInf"}
            ]
          });  
    
$('#dt_tableTools tbody').on('dblclick', 'tr', function () {
            var tr = $(this).closest('tr');
            var row = dt_tableTools.row(tr);
           //alert(row.data().firstName);
         });
});

  </script>




<div class="md-card uk-margin-medium-bottom">
                <div class="md-card-content">
                    <table id="dt_tableTools" class="uk-table" cellspacing="0" width="100%">
                        <thead>
                        <tr>
                          <th>No</th>
                            <th>Name </th>
                            <th>Position</th>
                            <th>Office</th>
                            <th>Age</th>
                            <th>Start date</th>
                            <th>Salary</th>
                        </tr>
                        </thead>

                        <tfoot>
                        <tr>
                          <th>No</th>
                            <th>Name</th>
                            <th>Position</th>
                            <th>Office</th>
                            <th>Age</th>
                            <th>Start date</th>
                            <th>Salary</th>
                        </tr>
                        </tfoot>

                        <tbody>
                        </tbody>
                    </table>
                </div>
</div>
            
<script>



</script>
 