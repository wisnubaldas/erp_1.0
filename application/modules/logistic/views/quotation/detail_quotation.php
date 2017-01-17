
 <script src="<?php echo base_url();?>asset/datatables/js/jquery-3.1.1.js"></script>
    <link rel="stylesheet" href="<?php echo base_url();?>asset/datatables/css/jquery.dataTables.min.css">
 
<style>

sup{
	color:red;
	font-size:14px;
}
.uk-width-medium-10-10 .md-card .md-card-toolbar{
	background:#F8F8F8;
	border-bottom:none;
    border-top: 1px #ddd solid;
	margin-bottom:6px;
	
}


.md-card-toolbar-actions .md-btn{
	margin-top:-4px;	
}
</style>

  <script type="text/javascript">
    var tbl_inquiry;
 
 $(document).ready(function() {    
    
          tbl_inquiry = $('#tbl_inquiry').DataTable({ 
            "processing": true, //Feature control the processing indicator.
			"bInfo": true,
			"bFilter":false,
			//"order":[[4,"desc"],[3,"desc"],[1,"asc"]],
 "lengthMenu": [[25, 50, 75, -1], [25, 50, 75, "All"]],
            "serverSide": true, //Feature control DataTables' server-side processing mode
            // Load data for the table's content from an Ajax source
            "ajax": {
                "url": "<?php echo site_url('logistic/Quotation/list_quotation')?>",
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
  
$('#tbl_inquiry tbody').on('click', 'tr', function () {
            var tr = $(this).closest('tr');
            var row = tbl_inquiry.row(tr);
           //alert(row.data().id_header);
// Redirect if click
window.location.href = "<?php echo base_url();?>logistic/Inquiry/inquiry_detail/"+row.data().id_header;
			sidebarNonAktif();
			
     });
});
    function reload_tbl_inquiry()
    {
      tbl_inquiry.ajax.reload(null,false); //reload datatable ajax 
    }

  </script>

<div class="md-card uk-margin-medium-bottom">


 
 <div class="uk-grid">
 <div class="uk-width-medium-10-10">
                    <div class="md-card">
                        <div class="md-card-toolbar">
                            <div class="md-card-toolbar-actions">
                            
<button onclick="approveQuotation()"  type="button" class="md-btn md-btn-success md-btn-wave-light" data-uk-tooltip="{pos:'bottom'}" title="Approve Quotation">
 <i class="material-icons md-color-brown-50 ">check</i>
  <span>Approve</span>                                        
</button>

<button onclick="RejectQuotation()"  type="button" class="md-btn md-btn-danger md-btn-wave-light" data-uk-tooltip="{pos:'bottom'}" title="Approve Quotation">
 <i class="material-icons md-color-brown-50 ">close</i>
  <span>Reject</span>                                        
</button>






                            </div>
  <h3 class="md-card-toolbar-heading-text">
 <i class="md-list-addon-icon material-icons md-24">book</i> 
 
 DETAIL QUOTATION
                            </h3>
                        </div>
                        
                    </div>
                
	</div>
    
  <div class="uk-width-medium-5-10">
  <br />
  <div class="uk-grid" style="padding-left:9px">
        
<div class="uk-width-medium-1-2">
	<div class="md-input-wrapper md-input-filled">
    <label for="country">Quotation Number</label>
     <input type="text" name="telp3" required="" class="md-input"  id="telp3" value="45435" disabled="disabled">
      <span class="md-input-bar"></span></div>         
 </div>
       
<div class="uk-width-medium-1-2">
	<div class="md-input-wrapper md-input-filled">
    <label for="country"> Sales</label>
     <input type="text" name="telp3" required="" class="md-input"  id="telp3" value=" Haryanto" disabled>
      <span class="md-input-bar"></span></div>         
 </div>
</div>
  </div>
  
 <div class="uk-width-medium-4-10">
 <div class="uk-alert uk-alert-warning" data-uk-alert="">
                                <a href="#" class="uk-alert-close uk-close"></a>
  <i class="material-icons md-color-grey-50">info</i> 
  This Quotation will be Expired in 3 days later	. Please Send a Notification alert for reminder to Customer
		</div>
	</div>
	
</div>
                            
                            

                <div class="md-card-content">

<div class="md-card-content">
                    <div class="uk-grid" data-uk-grid-margin="">
                        <div class="uk-width-1-1 uk-row-first">
                            <ul class="uk-tab" data-uk-tab="{connect:'#tabs_1'}">
                                <li class="uk-active" aria-expanded="true"><a href="#"> Summary</a></li>
                                <li aria-expanded="false" class=""></li>

                            <li class="uk-tab-responsive uk-active uk-hidden" aria-haspopup="true" aria-expanded="false"><a>Active</a><div class="uk-dropdown uk-dropdown-small"><ul class="uk-nav uk-nav-dropdown"></ul><div></div></div></li></ul>
                            <ul id="tabs_1" class="uk-switcher uk-margin">
                                <li aria-hidden="false" class="uk-active">
 

     <?php $this->load->view('logistic/quotation/detail_quotation/summary');?>       
            

                                </li>
                                
                                <li aria-hidden="true" class="">
 <?php $this->load->view('logistic/quotation/detail_quotation/attachment');?>
                                </li>
                                <li aria-hidden="true" class="">
 <?php $this->load->view('logistic/quotation/detail_quotation/chat_inquiry');?>
                                </li>
                                <li aria-hidden="true" class="">
&nbsp;
                                </li>
                                 <li aria-hidden="true" class="">
 <?php $this->load->view('logistic/quotation/detail_quotation/chat_inquiry');?>
                                </li>
                                 <li aria-hidden="true" class="">
 <?php $this->load->view('logistic/quotation/detail_quotation/remarks');?>
                                </li>
                                 <li aria-hidden="true" class="">
 <?php $this->load->view('logistic/quotation/detail_quotation/history');?>
                                </li>
                             
                            </ul>
                        </div>
                    </div>
                </div>
                
                    
                </div>
  </div>
  
  
 <!-- MODAL ADD -->
 <form method="post" id="foramaddSales" enctype="multipart/form-data" data-parsley-validate="">
 
 <div id="modal_sales" class="uk-modal">
                                <div class="uk-modal-dialog">
                                    <button type="button" class="uk-modal-close uk-close"></button>
   <h2 class="heading_a">Remarks</h2>
                                    
                                    <div class="uk-overflow-container">
                                
<p>&nbsp;</p>
<div class="uk-grid" data-uk-grid-margin="">
  
  <div class="uk-width-medium-1-2">
	<div class="md-input-wrapper md-input-filled">
    <label for="country">Subject </label>
     <input type="text" name="salesname" required="" class="md-input validate valid" data-parsley-trigger="change" id="salesname" value="">
      <span class="md-input-bar"></span></div>         
 </div>
       

</div>




 
 
 <div class="uk-grid" data-uk-grid-margin="">
        
<div class="uk-width-medium-1-1">
	<div class="md-input-wrapper md-input-filled">
    <label for="remarksales">Remarks</label>
     
     <textarea name="remarksales" cols="20" rows="2" class="md-input" id="remarksales"></textarea>
                                
      <span class="md-input-bar"></span></div>         
 </div>
       

</div>   
                         
                             
                                    </div>
                                    
                                    
<div class="uk-modal-footer uk-text-right">
<button type="button" class="md-btn md-btn-danger md-btn-wave-light uk-modal-close">Close</button>
<button type="submit" class="md-btn md-btn-primary md-btn-wave-light">
 <i class="material-icons md-color-brown-50 ">save</i>
  <span>Save</span>                                        
</button>
                                  </div>
                                   
                                </div>
                            </div>
                            
                            </form>
 <!-- MODAL ADD -->
 
 
 
  
  <script>
var $jq = jQuery.noConflict();

function approveQuotation(){
	
    var modal = UIkit.modal("#modal_sales");
   			   modal.show();
	$(".heading_a").html('<i class="material-icons md-color-green-A400">check</i>Approve Quotation !');
}


function RejectQuotation(){
    var modal = UIkit.modal("#modal_sales");
   			   modal.show();
	$(".heading_a").html('<i class="material-icons md-color-red-600">close</i> Reject Quotation !');
 
}
function RejectQuotationnn(){
	var ask=UIkit.modal.confirm('Are you sure Reject data ?', 
	function(){
		
		if(ask==true){
			UIkit.modal.alert('Data Deleted!');
			
		} else {
				        // ajax delete data to database
			UIkit.modal.alert('Data Deleted!');
		}
		});
 
}



</script>