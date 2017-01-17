  <script type="text/javascript">
    var tbl_open;
 
 $(document).ready(function() {    
    
          tbl_open = $('.tbl_open').DataTable({ 
            "processing": true, //Feature control the processing indicator.
			"bInfo": true,
			"bFilter":false,
			//"order":[[4,"desc"],[3,"desc"],[1,"asc"]],
 "lengthMenu": [[25, 50, 75, -1], [25, 50, 75, "All"]],
            "serverSide": true, //Feature control DataTables' server-side processing mode
            // Load data for the table's content from an Ajax source
            "ajax": {
                "url": "<?php echo site_url('logistic/Inquiry/list_inquiry')?>",
                "type": "POST",
            },
            "columns": [
            { "data": "no","orderable":false,"visible":true },
			{ "data": "id_header","orderable":false,"visible":false },
            { "data": "nm_customer" },
			{ "data": "ori_country" },
            { "data": "ori_port"},
            { "data": "dest_country"},
			{ "data": "dest_port"},
			{ "data": "nm_service"},
			{ "data": "Incoterm"},
			{ "data": "LoadingType"},
			{ "data": "nm_commodity"},
			{ "data": "nm_ms_stage"},
			{ "data": "DateOfAvailable"}
			//{ "data": "Status","orderable":false,"visible":true}
            ]
          });  
  
$('.tbl_open tbody').on('click', 'tr', function () {
            var tr = $(this).closest('tr');
            var row = tbl_open.row(tr);
           //alert(row.data().id_header);
// Redirect if click
window.location.href = "<?php echo base_url();?>logistic/Inquiry/inquiry_detail/"+row.data().id_header;
			//sidebarNonAktif();
			
     });
});

//reload/refresh table list
function reload_tbl_open()
    {
      tbl_open.ajax.reload(null,false); //reload datatable ajax 
    }

  </script>

<table id="tbl_openyyyyy" class="uk-table hover tbl_open" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                              <th width="2%">No</th>
                                <th width="2%">No</th>
                                <th width="30%">Customer Name</th>
                                <th width="13%">Origin</th>
                                <th width="14%">Port Origin</th>
                                <th width="10%">Destination</th>
                                <th width="3%">Port Dest.</th>
                                <th width="5%">Service</th>
                                <th width="9%">Incoterm</th>
                                <th width="9%">LoadingType</th>
                                <th width="9%">Commodity</th>
                                <th width="9%">Stage Master</th>
                                <th width="9%">DateOfAvailable</th>
                            </tr>
                        </thead>
                       <tbody>
                        <tr>
                          <th>No</th>
                            <th>&nbsp;</th>
                            <th>&nbsp;</th>
                            <th>&nbsp;</th>
                            <th>&nbsp;</th>
                            <th>&nbsp;</th>
                            <th>&nbsp;</th>
                            <th>&nbsp;</th>
                            <th>&nbsp;</th>
                            <th>&nbsp;</th>
                            <th>&nbsp;</th>
                            <th>&nbsp;</th>
                            <th>&nbsp;</th>
                        </tr>
                         
                        </tbody>
                         <tfoot>
                        </tfoot>


                    </table>