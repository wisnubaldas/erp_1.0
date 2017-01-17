
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

 
 		 <div class="uk-width-medium-1-2">
            <h2 class="">
			 <i class="md-list-addon-icon material-icons md-36">list</i> 
			Detail Preshipment
             </h2>
         </div>
         
 		 
 

 </div>

                <div class="md-card-content">

<div class="md-card-content">
                    <div class="uk-grid" data-uk-grid-margin="">
                        <div class="uk-width-1-1 uk-row-first">
                            <ul class="uk-tab" data-uk-tab="{connect:'#tabs_1'}">
                                <li class="uk-active" aria-expanded="true"><a href="#"><i class="md-list-addon-icon material-icons md-24">info_outline</i> Summary</a></li>
                                <li aria-expanded="false" class=""><a href="#"><i class="md-list-addon-icon material-icons md-24">attach_file</i>Attachment</a></li>
                                <li aria-expanded="false" class=""><a href="#"><i class="md-list-addon-icon material-icons md-24">chat</i>Discussion</a></li>

                            <li class="uk-tab-responsive uk-active uk-hidden" aria-haspopup="true" aria-expanded="false"><a>Active</a><div class="uk-dropdown uk-dropdown-small"><ul class="uk-nav uk-nav-dropdown"></ul><div></div></div></li></ul>
                            <ul id="tabs_1" class="uk-switcher uk-margin">
                                <li aria-hidden="false" class="uk-active">
 
<div class="uk-grid uk-grid-width-medium-1-2" data-uk-grid-margin style="padding-bottom:30px;">
                <div>
                    <div class="md-card md-card-hover md-card-overlay">
                        <div class="md-card-content truncate-text">
                          <h2>Information</h2>
      				<hr style="border:1px rgba(255, 160, 0, 0.35) solid" />

<div class="uk-grid" data-uk-grid-margin="">
        
<div class="uk-width-medium-1-2">
	<div class="md-input-wrapper md-input-filled">
    <label for="country">Company Name <sup>*</sup></label>
     <input type="text" name="telp3" required="" class="md-input" data-parsley-id="4" id="telp3" value="">
      <span class="md-input-bar"></span></div>         
 </div>
       
<div class="uk-width-medium-1-2">
	<div class="md-input-wrapper md-input-filled">
    <label for="country"> Phone <sup>*</sup></label>
     <input type="text" name="fax1" required="" class="md-input" data-parsley-id="4" id="fax1" value="">
      <span class="md-input-bar"></span></div>         
 </div>
</div>

<div class="uk-grid" data-uk-grid-margin="">
        
<div class="uk-width-medium-1-2">
	<div class="md-input-wrapper md-input-filled">
    <label for="country">Mobil Phone <sup>*</sup></label>
     <input type="text" name="telp3" required="" class="md-input" data-parsley-id="4" id="telp3" value="">
      <span class="md-input-bar"></span></div>         
 </div>
       
<div class="uk-width-medium-1-2">
	<div class="md-input-wrapper md-input-filled">
    <label for="country">Pic <sup>*</sup></label>
     <input type="text" name="fax1" required="" class="md-input" data-parsley-id="4" id="fax1" value="">
      <span class="md-input-bar"></span></div>         
 </div>
</div>
<div class="uk-grid" data-uk-grid-margin="">
        
<div class="uk-width-medium-1-1">
	<div class="md-input-wrapper md-input-filled">
    <label for="country">Company Name <sup>*</sup></label>
    <textarea name="telp3" required="required" class="md-input" id="telp3" data-parsley-id="4"></textarea>
      <span class="md-input-bar"></span></div>         
 </div>
       

</div>

                        </div>
                        
                    </div>
                </div>
                <div>
                    <div class="md-card md-card-hover md-card-overlay">
                        <div class="md-card-content truncate-text">
                           <h2>Location</h2>
                           <hr style="border:1px rgba(255, 160, 0, 0.35) solid" />	
<div class="uk-grid" data-uk-grid-margin="">
        
<div class="uk-width-medium-1-2">
	<div class="md-input-wrapper md-input-filled">
    <label for="country">Country (Origin) <sup>*</sup></label>
     <select name="country" class="md-input" id="country">
  <option value="">Select </option>

                </select>
      <span class="md-input-bar"></span></div>         
 </div>
       
<div class="uk-width-medium-1-2">
	<div class="md-input-wrapper md-input-filled">
    <label for="country"> Country (Destination) <sup>*</sup></label>
     <select name="country" class="md-input" id="country">
  <option value="">Select </option>

                </select>
      <span class="md-input-bar"></span></div>         
 </div>
</div>
<div class="uk-grid" data-uk-grid-margin="">
        
<div class="uk-width-medium-1-2">
	<div class="md-input-wrapper md-input-filled">
    <label for="country">City (Origin) <sup>*</sup></label>
     <select name="country" class="md-input" id="country">
  <option value="">Select </option>

                </select>
      <span class="md-input-bar"></span></div>         
 </div>
       
<div class="uk-width-medium-1-2">
	<div class="md-input-wrapper md-input-filled">
    <label for="country"> City (Destination) <sup>*</sup></label>
     <select name="country" class="md-input" id="country">
  <option value="">Select </option>

                </select>
      <span class="md-input-bar"></span></div>         
 </div>
</div>
<div class="uk-grid" data-uk-grid-margin="">
        
<div class="uk-width-medium-1-2">
	<div class="md-input-wrapper md-input-filled">
    <label for="country">Addres (Origin) <sup>*</sup></label>
     <input type="text" name="telp3" required="" class="md-input" data-parsley-id="4" id="telp3" value="">
      <span class="md-input-bar"></span></div>         
 </div>
       
<div class="uk-width-medium-1-2">
	<div class="md-input-wrapper md-input-filled">
    <label for="country"> Address (Destination) <sup>*</sup></label>
     <input type="text" name="fax1" required="" class="md-input" data-parsley-id="4" id="fax1" value="">
      <span class="md-input-bar"></span></div>         
 </div>
</div>
<div class="uk-grid" data-uk-grid-margin="">
        
<div class="uk-width-medium-1-2">
	<div class="md-input-wrapper md-input-filled">
    <label for="country">ZipCode (Origin) <sup>*</sup></label>
     <input type="text" name="telp3" required="" class="md-input" data-parsley-id="4" id="telp3" value="">
      <span class="md-input-bar"></span></div>         
 </div>
       
<div class="uk-width-medium-1-2">
	<div class="md-input-wrapper md-input-filled">
    <label for="country"> ZipCOde (Destination <sup>*</sup>)</label>
     <input type="text" name="fax1" required="" class="md-input" data-parsley-id="4" id="fax1" value="">
      <span class="md-input-bar"></span></div>         
 </div>
</div>
                        </div>
                        
                    </div>
                </div>
                <div>
                    <div class="md-card md-card-hover md-card-overlay">
                        <div class="md-card-content truncate-text">
                       
                          <h2>Package</h2>
                          <hr style="border:1px rgba(255, 160, 0, 0.35) solid" />
<div class="uk-grid" data-uk-grid-margin="">
        
<div class="uk-width-medium-1-2">
	<div class="md-input-wrapper md-input-filled">
    <label for="country">Moda of Service <sup>*</sup></label>
     <select name="country" class="md-input" id="country">
  <option value="">Select </option>

                </select>
      <span class="md-input-bar"></span></div>         
 </div>
       
<div class="uk-width-medium-1-2">
	<div class="md-input-wrapper md-input-filled">
    <label for="country"> Loading Type <sup>*</sup></label>
     <select name="country" class="md-input" id="country">
  <option value="">Select </option>

                </select>
      <span class="md-input-bar"></span></div>         
 </div>
</div>
<div class="uk-grid" data-uk-grid-margin="">
        
<div class="uk-width-medium-1-2">
	<div class="md-input-wrapper md-input-filled">
    <label for="country">Incoterms <sup>*</sup></label>
     <select name="country" class="md-input" id="country">
  <option value="">Select </option>

                </select>
      <span class="md-input-bar"></span></div>         
 </div>
       
<div class="uk-width-medium-1-2">
	<div class="md-input-wrapper md-input-filled">
    <label for="country"> Service of Type <sup>*</sup></label>
     <select name="country" class="md-input" id="country">
  <option value="">Select </option>

                </select>
      <span class="md-input-bar"></span></div>         
 </div>
</div>
<div class="uk-grid" data-uk-grid-margin="">
        
<div class="uk-width-medium-1-1">
	<div class="md-input-wrapper md-input-filled">
    <label for="country">Other Requirements <sup>*</sup></label>
    <textarea name="telp3" required="required" class="md-input" id="telp3" data-parsley-id="4"></textarea>
      <span class="md-input-bar"></span></div>         
 </div>
       

</div>

                        </div>
                        
                    </div>
                </div>

<div>
                    <div class="md-card md-card-hover md-card-overlay">
                        <div class="md-card-content truncate-text">
                           <h2>Service</h2>
                          <hr style="border:1px rgba(255, 160, 0, 0.35) solid" />
<div class="uk-grid" data-uk-grid-margin="">
        
<div class="uk-width-medium-1-2">
	<div class="md-input-wrapper md-input-filled">
    <label for="country">Date of Availability <sup>*</sup></label>
     <select name="country" class="md-input" id="country">
  <option value="">Select </option>

                </select>
      <span class="md-input-bar"></span></div>         
 </div>
       
<div class="uk-width-medium-1-2">
	<div class="md-input-wrapper md-input-filled">
    <label for="country">Commodity <sup>*</sup></label>
     <select name="country" class="md-input" id="country">
  <option value="">Select </option>

                </select>
      <span class="md-input-bar"></span></div>         
 </div>
</div>
<div class="uk-grid" data-uk-grid-margin="">
        
<div class="uk-width-medium-1-2">
	<div class="md-input-wrapper md-input-filled">
    <label for="country">Quantity <sup>*</sup></label>
     <select name="country" class="md-input" id="country">
  <option value="">Select </option>

                </select>
      <span class="md-input-bar"></span></div>         
 </div>
       
<div class="uk-width-medium-1-2">
	<div class="md-input-wrapper md-input-filled">
    <label for="country"> Unit <sup>*</sup></label>
     <select name="country" class="md-input" id="country">
  <option value="">Select </option>

                </select>
      <span class="md-input-bar"></span></div>         
 </div>
</div>
<div class="uk-grid" data-uk-grid-margin="">
        
<div class="uk-width-medium-1-2">
	<div class="md-input-wrapper md-input-filled">
    <label for="country">Weight <sup>*</sup></label>
     <input type="text" name="telp3" required="" class="md-input" data-parsley-id="4" id="telp3" value="">
      <span class="md-input-bar"></span></div>         
 </div>
       
<div class="uk-width-medium-1-2">
	<div class="md-input-wrapper md-input-filled">
    <label for="country"> Length <sup>*</sup></label>
     <input type="text" name="fax1" required="" class="md-input" data-parsley-id="4" id="fax1" value="">
      <span class="md-input-bar"></span></div>         
 </div>
</div>
<div class="uk-grid" data-uk-grid-margin="">
        
<div class="uk-width-medium-1-2">
	<div class="md-input-wrapper md-input-filled">
    <label for="country">Width <sup>*</sup></label>
     <input type="text" name="telp3" required="" class="md-input" data-parsley-id="4" id="telp3" value="">
      <span class="md-input-bar"></span></div>         
 </div>
       
<div class="uk-width-medium-1-2">
	<div class="md-input-wrapper md-input-filled">
    <label for="country"> Height <sup>*</sup></label>
     <input type="text" name="fax1" required="" class="md-input" data-parsley-id="4" id="fax1" value="">
      <span class="md-input-bar"></span></div>         
 </div>
</div>
<div class="uk-grid" data-uk-grid-margin="">  
<div class="uk-width-medium-1-1">
	<div class="md-input-wrapper md-input-filled">
    <label for="country">Description of Goods <sup>*</sup></label>
     <textarea name="telp3" required="required" class="md-input" id="telp3" data-parsley-id="4"></textarea>
      <span class="md-input-bar"></span></div>         
 </div>
</div>

<div class="uk-grid" data-uk-grid-margin="">  
<div class="uk-width-medium-1-1">
	<div class="md-input-wrapper md-input-filled">
    <label for="country">Additional Information</label>
     <textarea name="telp3" required="required" class="md-input" id="telp3" data-parsley-id="4"></textarea>
      <span class="md-input-bar"></span></div>         
 </div>
</div>
                        </div>
                        
                    </div>
                </div>
            </div>
            
            
    <!-- FOOTER -->
    <div class="uk-grid">  
<div class="uk-width-medium-2-10">
Assigned To :
</div>
<div class="uk-width-medium-7-10">
<p><i class="material-icons md-24">person</i> Rafles Nainggolan</p>
<p><i class="material-icons md-24">person</i>Budi</p>
<p><i class="material-icons md-24">person</i>Suherman</p>
<p> <i class="material-icons md-36">add_box</i></p>
</div>
</div>
    <!-- end of footer -->
                                </li>
                                
                                <li aria-hidden="true" class="">
 <?php $this->load->view('logistic/inquiry/attachment');?>
                                </li>
                                <li aria-hidden="true" class="">
 <?php $this->load->view('logistic/inquiry/chat_inquiry');?>
                                </li>
                             
                            </ul>
                        </div>
                    </div>
                </div>
                
                    
                </div>
  </div>
  
  