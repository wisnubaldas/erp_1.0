<script src="<?php echo base_url();?>asset/validation/jquery-2.1.3.js"></script>
<script src="<?php echo base_url();?>asset/validation/parsley.js"></script>

<script src="<?php echo base_url();?>asset/validation/materialize.min.js"></script>
    <!-- altair admin -->
<link rel="stylesheet" href="<?php echo base_url();?>asset/validation/materialize.min.css">
    <!-- altair admin -->
<link rel="stylesheet" href="<?php echo base_url();?>asset/validation/parsley.css">
 
 <link rel="stylesheet" href="<?php echo base_url();?>asset/validation/bootstrap.css">   
 



<!-- TOOLBAR -->   
<div class="md-card-toolbar">
                            <div class="md-card-toolbar-actions">
                                <ul class="uk-tab" data-uk-tab="{connect:'#card_tabs',animation:'slide-horizontal'}">
                                    
                    <li>
           <button  onclick="add_Sales()"  class="md-btn md-btn-primary md-btn-wave-light waves-effect waves-button waves-light">
                   <i class="material-icons md-color-grey-50">add_circle_outline</i>
        		    <span>New</span>
                    </button>
                </li>              
                <li>&nbsp;</li>
                
                                </ul>
                            </div>
                            <h3 class="md-card-toolbar-heading-text">
<i class="md-list-addon-icon material-icons md-24">people</i> SALES
                            </h3>
                        </div>
              <!-- TOOLBAR -->          
              

<div>
  
                            <ul class="md-list md-list-addon uk-margin-small-bottom uk-nestable" data-uk-nestable="{ maxDepth:2,handleClass:'md-list-content' }">
                               
                               <p>&nbsp;</p>
  <?php
  foreach($record as $rw){ 
	
 ?> 
                                <li class="uk-nestable-item md-card-warning">
                                    <div class="md-list-addon-element">
                                        
                                    </div>
                                    <div class="md-list-content">
  <a onclick="editDetailSales('<?php echo $rw->IdCustHeader;?>','<?php echo $rw->Id;?>')"  class="md-list-action"><i class="md-icon material-icons">edit</i></a>
  
  <a onclick="deleteDetailSales('<?php echo $rw->IdCustHeader;?>','<?php echo $rw->Id;?>')"  class="md-list-action"><i class="md-icon material-icons">&#xE872;</i></a>
     <span class="md-list-heading"><?php echo $rw->IdSales;?></span>
     <span class="md-list-heading"><?php echo $rw->nm_sevice;?></span>
    <span class="uk-text-small uk-text-muted">
    <?php echo $rw->Remarks;?>
    </span>
                                    </div>
                                </li>
<?php } ?>
                            </ul>
                            
                        </div>
                        
                        
                        
                       
 <!-- MODAL ADD -->
 <form method="post" id="foramaddSales" enctype="multipart/form-data" data-parsley-validate="">
 
 <div id="modal_sales" class="uk-modal">
                                <div class="uk-modal-dialog">
                                    <button type="button" class="uk-modal-close uk-close"></button>
   <h2 class="heading_a">Add Data</h2>
                                    
                                    <div class="uk-overflow-container">
                                
<p>&nbsp;</p>
<div class="uk-grid" data-uk-grid-margin="">
       				
<div class="uk-width-medium-1-2">
	<div class="md-input-wrapper md-input-filled">
    <label for="country">ID</label>
  <input type="text" name="iddetailsales" required="" class="md-input validate valid" data-parsley-trigger="change" id="iddetailsales" value="">
      <span class="md-input-bar"></span>
      <input type="hidden" name="idheadsales" id="idheadsales" />
	</div>         
 </div>
</div>

<div class="uk-grid" data-uk-grid-margin="">
       				
<div class="uk-width-medium-1-2">
	<div class="md-input-wrapper md-input-filled">
    <label for="country">Servis</label>
  <select name="servisname" class="md-input" id="servisname" data-parsley-trigger="change" required>
  <option value="">Select</option>
                </select>
      <span class="md-input-bar"></span></div>         
 </div>
</div>
<div class="uk-grid" data-uk-grid-margin="">
        
<div class="uk-width-medium-1-2">
	<div class="md-input-wrapper md-input-filled">
    <label for="country">Sales </label>
     <input type="text" name="salesname" required="" class="md-input validate valid" data-parsley-trigger="change" id="salesname" value="">
      <span class="md-input-bar"></span></div>         
 </div>
       

</div>




 
 
 <div class="uk-grid" data-uk-grid-margin="">
        
<div class="uk-width-medium-1-2">
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

 <!-- MODAL EDIT -->
 <form method="post"  enctype="multipart/form-data" id="formeditSales">
 <div id="modal_edit_sales" class="uk-modal">
                                <div class="uk-modal-dialog">
                                
                                    <button type="button" class="uk-modal-close uk-close"></button>
   <h2 class="heading_a">Edit Data</h2>
                                    
                                    <div class="uk-overflow-container">
                                
 <div class="md-card-content truncate-text is-truncated" style="word-wrap:break-word;height:260px">
  
  
 
                                    
                                    
<div class="uk-grid" data-uk-grid-margin="">
        
<div class="uk-width-medium-1-2">
	<div class="md-input-wrapper md-input-filled">
    <label for="country">ID</label>
     <input type="text" name="iddetailsales2" required="" class="md-input" data-parsley-trigger="change" id="iddetailsales2" value="">
      <span class="md-input-bar"></span>
      <input type="hidden" name="idSales1" id="idSales1" />
	  <input type="hidden" name="idhead" id="idhead"/>
	</div>         
 </div>
       
<div class="uk-width-medium-1-2">
	<div class="md-input-wrapper md-input-filled">
    <label for="country">Service</label>
     <select name="servisname2" class="md-input" id="servisname2" data-parsley-trigger="change" required>
  <option value="">Select</option>
  <?php 
  foreach($servis as $sv){
  ?>
                <option value="<?php echo $sv->Id;?>"><?php echo $sv->Name;?></option>
       <?php } ?>
                </select>
      <span class="md-input-bar"></span></div>         
 </div>
</div>
<div class="uk-grid" data-uk-grid-margin="">
  
  <div class="uk-width-medium-1-2">
	<div class="md-input-wrapper md-input-filled">
    <label for="country">Sales</label>
     <input type="text" name="salesname2" required="" class="md-input" data-parsley-id="4" id="salesname2" data-parsley-trigger="change">
      <span class="md-input-bar"></span></div>         
 </div>
</div>
 
 
 <div class="uk-grid" data-uk-grid-margin="">
        
<div class="uk-width-medium-1-2">
	<div class="md-input-wrapper md-input-filled">
    <label for="remarksales2">Remarks</label>
     
     <textarea name="remarksales2" cols="20" rows="2" class="md-input" id="remarksales2"></textarea>
                                
      <span class="md-input-bar"></span></div>         
 </div>
       

</div>                                   
                                    


                                   
                                </div>
                                
                            </div>
<div class="uk-modal-footer uk-text-right">
<button type="button" class="md-btn md-btn-danger md-btn-wave-light uk-modal-close">Close</button>
<button  type="submit" class="md-btn md-btn-primary md-btn-wave-light">
 <i class="material-icons md-color-brown-50 ">save</i>
  <span>Save</span>                                        
</button>
                                  </div>
                                  </div>
                                  </form>
 <!-- MODAL EDIT -->


<script>
var $jq = jQuery.noConflict();

function add_Sales(idheader,iddetail){
	
	var idheader=$("#idheadercompany").val();
	load_combo_service();
    var modal = UIkit.modal("#modal_sales");
   			   modal.show();
	
	$("#idheadsales").val(idheader);
	
}
function editDetailSales(idheader,id_detail){	
	var idheader=idheader;
	var id_detail=id_detail;
		
      $.ajax({
           url : "<?php  echo site_url('logistic/Customer/editDetailSales')?>",
           dataType: "JSON",
		   type: "POST",
		   data:({idheader:idheader,id_detail:id_detail}),
           success: function(data){;
		       var modal = UIkit.modal("#modal_edit_sales");
   			   modal.show();
                     for (var i =0; i<data.length; i++){
						 $("#idSales1").val(data[i].Id);
						 $("#iddetailsales2").val(data[i].Id);
						 $("#idhead").val(data[i].IdCustHeader);	
                          //$("#servisname2").val(data[i].Postal);	
						  $("#salesname2").val(data[i].IdSales);	
						  $("#remarksales2").val(data[i].Remarks);
						  
			var option="<option value='"+data[i].id_service+"'>"+data[i].nm_sevice+"</option>";
						  $("#servisname2").append(option);
						  
						 load_combo_service();
						  		
                       }
  
               }
       }); 
}
function load_combo_sales(){
       $.ajax({
           url : "<?php echo site_url('produk/Katalog/getCity')?>",
           dataType: "JSON",
		   type: "POST",
		  // data:({kode:kode}),
           success: function(data){
               $(".txt_origin").empty();
               $(".txt_origin").append("<option value=''>Select City</option>");
                     for (var i =0; i<data.length; i++){
                   var option = "<option value='"+data[i].cycode+"'>"+data[i].name+"</option>";
                          $(".txt_origin").append(option);
				
						  //load_state();
                       }
  
               }
       }); 
    }
function deleteDetailSales(idheader,id_det){
	
	var idHead=idheader;
	var id=id_det;
	var nmtable='trcust_dtlsales';
	var kolom='Id';
	
	var ask=UIkit.modal.confirm('Are you sure delete data ?', 
	function(){
		
		if(ask==true){
			alert('oke');
			
		} else {
				        // ajax delete data to database
          $.ajax({
            url : "<?php echo site_url('logistic/Customer/deleteData')?>",
            type: "POST",
            data:({id:id,nmtabel:nmtable,kolom:kolom}),
            dataType: "JSON",
            success: function(data)
            {
				UIkit.modal.alert('Data deleted!');
                reloadcontent('sales',idHead);
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error adding / update data');
            }
        });
		}
		
	});
 
}

//==================RELOAD BOX CONTENT FOR REFRESH=================//
function reloadcontent(mycontent,myid){
	swal({
		title:'<div class="md-preloader"><svg xmlns="http://www.w3.org/2000/svg" version="1.1" height="96" width="96" viewBox="0 0 75 75"><circle cx="37.5" cy="37.5" r="33.5" stroke-width="4"></circle></svg></div>',
		text:'<p>Loading Content.......</p>',
		showConfirmButton:false,
		//type:"success",
		html:true
		});
	var mydata=mycontent;
	var myid=myid;
				$.ajax({
                type: "POST",
                url : "<?php echo base_url('logistic/Customer/reloadBoxContent'); ?>",
                data: "mydata="+mydata,
				data:({mydata:mydata,myid:myid}),
                success: function(data){
					swal.close();
					$("#box-content-cust").html(data);
                }
            });
	
}
//==============GET DATA ON COMBOBOX================//
function load_combo_sales(){
       $.ajax({
           url : "<?php echo site_url('transaction/getChargeOptional')?>",
           dataType: "json",
           success: function(data){
               $("#charge").empty();
               $("#charge").append("<option value=''>Select charge</option>");
                     for (var i =0; i<data.length; i++){
                   var option = "<option value='"+data[i].ChargeCode+"_"+data[i].ChargeName+"_"+data[i].Reff_Account+"'>"+data[i].ChargeName+"</option>";
                          $("#charge").append(option);
				
						  //load_state();
                       }
  
               }
       }); 
    }
//==============GET DATA ON COMBOBOX================//
function load_combo_service(){
       $.ajax({
           url : "<?php echo site_url('logistic/Customer/load_combo_service')?>",
           dataType: "json",
           success: function(data){
               $("#servisname").empty();
               $("#servisname").append("<option value=''>Select Service</option>");
                     for (var i =0; i<data.length; i++){
                   var option = "<option value='"+data[i].Id+"'>"+data[i].Name+"</option>";
                          $("#servisname").append(option);
						  $("#servisname2").append(option);
				
						  //load_state();
                       }
  
               }
       }); 
    }
//====================SAVE UPDATE DATA===============//
$jq('#formeditSales').parsley().on('field:validated', function() {
    var ok = $jq('.parsley-error-list').length === 0;
    $jq('.bs-callout-info').toggleClass('hidden', !ok);
    $jq('.bs-callout-warning').toggleClass('hidden', ok);
  })
  
  //execution if pasased input
  .on('form:submit', function() {
   var idHead=$("#idhead").val();
		
	swal({
		title:'<div class="md-preloader"><svg xmlns="http://www.w3.org/2000/svg" version="1.1" height="96" width="96" viewBox="0 0 75 75"><circle cx="37.5" cy="37.5" r="33.5" stroke-width="4"></circle></svg></div>',
		text:'<p>Loading Content.......</p>',
		showConfirmButton:false,
		//type:"success",
		html:true
	});
        url = "<?php echo site_url('logistic/Customer/UpdateEditSales')?>";
      
       // ajax adding data to database
          $.ajax({
            url : url,
            type: "POST",
            data: $('#formeditSales').serialize(),
            dataType: "JSON",
            success: function(data)
            {
               //if success close modal and reload ajax table
			   //swal("Update Succesfull ","Update saved" ,"success");
			    var modal = UIkit.modal("#modal_edit_sales");
   				modal.hide();
				UIkit.modal.alert('Data Updated!');
				reloadcontent('sales',idHead);
              // reload_table3();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error adding / update data');
            }
        }); 
	
	return false;
});


//========================SAVE NEW DATA ===================//
$jq('#foramaddSales').parsley().on('field:validated', function() {
    var ok = $jq('.parsley-error-list').length === 0;
    $jq('.bs-callout-info').toggleClass('hidden', !ok);
    $jq('.bs-callout-warning').toggleClass('hidden', ok);
  })
  
  //execution if pasased input
  .on('form:submit', function() {
    var idhead=$("#idheadsales").val();
		
	swal({
		title:'<div class="md-preloader"><svg xmlns="http://www.w3.org/2000/svg" version="1.1" height="96" width="96" viewBox="0 0 75 75"><circle cx="37.5" cy="37.5" r="33.5" stroke-width="4"></circle></svg></div>',
		text:'<p>Loading Content.......</p>',
		showConfirmButton:false,
		//type:"success",
		html:true
	});
        url = "<?php echo site_url('logistic/Customer/saveSalesDetail')?>";
      
       // ajax adding data to database
          $.ajax({
            url : url,
            type: "POST",
            data: $('#foramaddSales').serialize(),
            dataType: "JSON",
            success: function(data)
            {
               //if success close modal and reload ajax table
			    var modal = UIkit.modal("#modal_sales");
   				modal.hide();
				reloadcontent('sales',idhead);
				UIkit.modal.alert('Data saved!');
              // reload_table3();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error adding / update data');
            }
        });
	return false;
});


</script>