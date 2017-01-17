
 <script src="<?php echo base_url();?>asset/datatables/js/jquery-3.1.1.js"></script>
    <link rel="stylesheet" href="<?php echo base_url();?>asset/datatables/css/jquery.dataTables.min.css">
 
<style>
.md-card.md-card-overlay .md-card-content{
	height:auto;
	
}
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
.uk-width-medium-10-10 .md-icon{
	font-size:35px;
	padding:3px;
	margin-top:-4px;
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
<button onclick="assignment_customer()"  type="button" class="md-btn md-btn-primary md-btn-wave-light" data-uk-tooltip="{pos:'bottom'}" title="Assignment Inquiry to Sales">
 <i class="material-icons md-color-brown-50 ">assignment_ind</i>
  <span>Assignment to sales</span>                                        
</button>



<button onclick="RejectInquiry()"  type="button" class="md-btn md-btn-danger md-btn-wave-light" data-uk-tooltip="{pos:'bottom'}" title="Reject Inquiry">
 <i class="material-icons md-color-brown-50 ">refresh</i>
  <span>Cancel</span>                                        
</button>



                            </div>
  <h3 class="md-card-toolbar-heading-text">
 <i class="md-list-addon-icon material-icons md-24">book</i> 
 
 DETAIL INQUIRY
                            </h3>
                        </div>
                        
                    </div>
                
	</div>
    
  <div class="uk-width-medium-5-10">
  <br />
  <div class="uk-grid" style="padding-left:9px">
        
<div class="uk-width-medium-1-2">
	<div class="md-input-wrapper md-input-filled">
    <label for="country">Inquiry Number</label>
     <input type="text" name="telp3" required="" class="md-input"  id="telp3" value="45435" disabled="disabled">
      <span class="md-input-bar"></span></div>         
 </div>
       
<div class="uk-width-medium-1-2">
	<div class="md-input-wrapper md-input-filled">
    <label for="country"> Customers</label>
     <input type="text" name="telp3" required="" class="md-input"  id="telp3" value=" Haryanto" disabled>
      <span class="md-input-bar"></span></div>         
 </div>
</div>
  </div>
  
 <div class="uk-width-medium-4-10">
 <div class="uk-alert uk-alert-warning" data-uk-alert="">
                                <a href="#" class="uk-alert-close uk-close"></a>
  <i class="material-icons md-color-grey-50">info</i> 
  This Inquiry will be Expired in 3 days later	. Please Send a Notification alert for reminder to Customer
		</div>
	</div>
	
</div>
                            
                            

                <div class="md-card-content">

<div class="md-card-content">
                    <div class="uk-grid" data-uk-grid-margin="">
                        <div class="uk-width-1-1 uk-row-first">
                            <ul class="uk-tab" data-uk-tab="{connect:'#tabs_1'}">
                                <li class="uk-active" aria-expanded="true"><a href="#"><i class="md-list-addon-icon material-icons md-24">info_outline</i> Summary</a></li>
                                <li aria-expanded="false" class=""><a href="#"><i class="md-list-addon-icon material-icons md-24">attach_file</i><span>Attachment</span><sup class="uk-badge uk-badge-danger uk-badge-circle">5</sup></a></li>
                 
    <li aria-expanded="false" class=""><a href="#">
    &nbsp;<i class="md-list-addon-icon material-icons md-24">contact_mail</i><span> Cust Discuss</span><sup class="uk-badge uk-badge-danger uk-badge-circle">5</sup></a></li>
                                
  <li aria-expanded="false" class="uk-disabled">
  <a href="#"></a>
  </li>
                                
  <li aria-expanded="false"><a href="#"><i class="md-list-addon-icon material-icons md-24">chat</i><span> Internal Discuss</span><sup class="uk-badge uk-badge-danger uk-badge-circle">5</sup></a></li>
  
  <li aria-expanded="false"><a href="#"><i class="md-list-addon-icon material-icons md-24">book</i><span> Remarks</span></a></li>
  
  <li aria-expanded="false"><a href="#"><i class="md-list-addon-icon material-icons md-24">info_outline</i><span> Log History</span></a></li>

                            <li class="uk-tab-responsive uk-active uk-hidden" aria-haspopup="true" aria-expanded="false"><a>Active</a><div class="uk-dropdown uk-dropdown-small"><ul class="uk-nav uk-nav-dropdown"></ul><div></div></div></li></ul>
                            <ul id="tabs_1" class="uk-switcher uk-margin">
                                <li aria-hidden="false" class="uk-active">
 

     <?php $this->load->view('logistic/inquiry/detail_inquiry/summary');?>       
            

                                </li>
                                
                                <li aria-hidden="true" class="">
 <?php $this->load->view('logistic/inquiry/detail_inquiry/attachment');?>
                                </li>
                                <li aria-hidden="true" class="">
 <?php $this->load->view('logistic/inquiry/detail_inquiry/chat_inquiry');?>
                                </li>
                                <li aria-hidden="true" class="">
&nbsp;
                                </li>
                                 <li aria-hidden="true" class="">
 <?php $this->load->view('logistic/inquiry/detail_inquiry/chat_inquiry');?>
                                </li>
                                 <li aria-hidden="true" class="">
 <?php $this->load->view('logistic/inquiry/detail_inquiry/remarks');?>
                                </li>
                                 <li aria-hidden="true" class="">
 <?php $this->load->view('logistic/inquiry/detail_inquiry/history');?>
                                </li>
                             
                            </ul>
                        </div>
                    </div>
                </div>
                
                    
                </div>
  </div>
  
  
 <!-- MODAL ADD -->
 <form method="post" id="formassignment" enctype="multipart/form-data" data-parsley-validate="">
 
 <div id="modal_cust" class="uk-modal">
                                <div class="uk-modal-dialog">
                                    <button type="button" class="uk-modal-close uk-close"></button>
   <h2 class="heading_a">Load Employee</h2>
                                    
                                  <div class="uk-overflow-container">
                                
<p>&nbsp;</p>


<div class="uk-grid" data-uk-grid-margin="">
        
<div class="uk-width-medium-1-3">
	<div class="md-input-wrapper md-input-filled">
    <label for="country">Customer</label>
     <select name="country" class="md-input" id="country">
  <option value="">Select </option>
   <option value="Lorem">Lorem </option>
   <option value="Lorem">Ipsum </option>

              </select>
      <span class="md-input-bar"></span></div>         
 </div>
       
<div class="uk-width-medium-1-3">
	<div class="md-input-wrapper md-input-filled">
    <label for="country"> Phone</label>
     <input name="yearst" type="text" class="md-input" id="uk_dp_1" data-uk-datepicker="{format:'YYYY-MM-DD'}">
      <span class="md-input-bar"></span></div>         
 </div>
 
 <div class="uk-width-medium-1-3">
<button  class="md-btn md-btn-primary md-btn-wave-light waves-effect waves-button waves-light">
                    <i class="material-icons md-color-brown-50 ">done</i>
        		    <span>Insert</span>
                    </button>        
 </div>
 
</div>
                                    </div>
                                    
                                    

                                   
                                </div>
                            </div>
                            
                            </form>
 <!-- MODAL ADD -->
  
  <script>
var $jq = jQuery.noConflict();

function assignment_customer(){
	
    var modal = UIkit.modal("#modal_cust");
   			   modal.show();
}
function check_quotation(){
	
    var modal = UIkit.modal("#modal_cust");
   			   modal.hide();
}

function RejectInquiry(){
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
function AppInquiry(){
	var ask=UIkit.modal.confirm('Are you sure to APPROVE this Inquiry ?', 
	function(){
		
		if(ask==true){
			UIkit.modal.alert('Data Approved!');
			
		} else {
				        // ajax delete data to database
			UIkit.modal.alert('Data Approved!');
		}
		});
 
}


</script>