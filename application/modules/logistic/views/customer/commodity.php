<style>
.uk-grid .md-card{
	margin-bottom:10px;
}
</style>
<div class="md-card-toolbar">
                            <div class="md-card-toolbar-actions">
                                <ul class="uk-tab" data-uk-tab="{connect:'#card_tabs',animation:'slide-horizontal'}">
                                    
                    <li>
           <button  onclick="add_commodity()"  class="md-btn md-btn-primary md-btn-wave-light waves-effect waves-button waves-light">
                   <i class="material-icons md-color-grey-50">add_circle_outline</i>
        		    <span>New</span>
                    </button>
                </li>              
                <li>&nbsp;</li>
                
                                </ul>
                            </div>
                            <h3 class="md-card-toolbar-heading-text">
 <i class="md-list-addon-icon material-icons md-24">extension</i> COMMODITY
                            </h3>
                        </div>
                        
<div id="page_content_inner">

           

            

            <div class="uk-grid" data-uk-grid-margin="">
 <?php
  foreach($record as $rw){ 
	
 ?> 
                <div class="uk-width-medium-1-3 uk-row-first ">
                
            
                    <div class="md-card">
      <div class="md-card-toolbar-actions uk-text-right">                     
           <i class="md-icon material-icons md-color-light-blue-500" onclick="editDetailCommodity('<?php echo $rw->IdCustHeader;?>','<?php echo $rw->Id;?>')">edit</i>
                                
                                
            <i class="md-icon material-icons md-color-red-500" onclick="deleteDetailComm('<?php echo $rw->IdCustHeader;?>','<?php echo $rw->Id;?>')">delete</i>
            <span class="md-card-toolbar-heading-text"></span></div>
            
                        <div class="md-card-content">
              <h3><?php echo $rw->nm_commodity;?></h3>
              <p><?php echo $rw->Remarks;?></p>
              
                        </div>
                    </div>
                </div>
 <?php } ?>              
                
                
                
            </div>

            

  <h3 class="heading_b uk-margin-bottom">&nbsp;</h3>

            <h4 class="heading_c">&nbsp;</h4>

            

        </div>
        
        
        
 <!-- MODAL ADD -->
 <form method="post" id="foramaddComm" enctype="multipart/form-data" data-parsley-validate="">
 
 <div id="modal_add_comm" class="uk-modal">
                                <div class="uk-modal-dialog">
                                    <button type="button" class="uk-modal-close uk-close"></button>
   <h2 class="heading_a">Add Data</h2>
                                    
                                    <div class="uk-overflow-container">
                                
<p>&nbsp;</p>
<div class="uk-grid" data-uk-grid-margin="">
       				
<div class="uk-width-medium-1-2">
	<div class="md-input-wrapper md-input-filled">
    <label for="country">ID</label>
  <input type="text" name="iddetailcommodity" required="" class="md-input validate valid" data-parsley-trigger="change" id="iddetailcommodity" value="">
      <span class="md-input-bar"></span>
      <input type="hidden" name="idheadcomm" id="idheadcomm" />
	</div>         
 </div>
</div>

<div class="uk-grid" data-uk-grid-margin="">
       				
<div class="uk-width-medium-1-2">
	<div class="md-input-wrapper md-input-filled">
    <label for="country">Commodity</label>
  <select name="commodityname" class="md-input" id="commodityname" data-parsley-trigger="change" required>
  <option value="">Select</option>
                </select>
      <span class="md-input-bar"></span></div>         
 </div>
</div>
<div class="uk-grid" data-uk-grid-margin="">
  
  <div class="uk-width-medium-1-2">
	<div class="md-input-wrapper md-input-filled">
    <label for="remarkscommodity">Remarks</label>
     
     <textarea name="remarkscommodity" cols="20" rows="2" class="md-input" id="remarkscommodity"></textarea>
                                
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
 <form method="post"  enctype="multipart/form-data" id="formeditcommodity">
 <div id="modal_edit_commodity" class="uk-modal">
                                <div class="uk-modal-dialog">
                                
                                    <button type="button" class="uk-modal-close uk-close"></button>
   <h2 class="heading_a">Edit Data</h2>
                                    
                                    <div class="uk-overflow-container">
                                
 <div class="md-card-content truncate-text is-truncated" style="word-wrap:break-word;height:260px">
  
  
 
                                    
                                    
<div class="uk-grid" data-uk-grid-margin="">
        
<div class="uk-width-medium-1-2">
	<div class="md-input-wrapper md-input-filled">
    <label for="country">ID</label>
     <input type="text" name="iddetailcommodity2" required="" class="md-input" data-parsley-trigger="change" id="iddetailcommodity2" value="">
      <span class="md-input-bar"></span>
      <input type="hidden" name="idCommodity1" id="idCommodity1" />
	  <input type="hidden" name="idhead" id="idhead"/>
	</div>         
 </div>
       
<div class="uk-width-medium-1-2">
	<div class="md-input-wrapper md-input-filled">
    <label for="country">Commodity</label>
     <select name="commodityname2" class="md-input" id="commodityname2" data-parsley-trigger="change" required>
  
                </select>
      <span class="md-input-bar"></span></div>         
 </div>
</div>

 
 
 <div class="uk-grid" data-uk-grid-margin="">
        
<div class="uk-width-medium-1-2">
	<div class="md-input-wrapper md-input-filled">
    <label for="remarkscommodity2">Remarks</label>
     
     <textarea name="remarkscommodity2" cols="20" rows="2" class="md-input" id="remarkscommodity2"></textarea>
                                
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

function add_commodity(idheader,iddetail){
	
	var idheader=$("#idheadercompany").val();
	load_combo_commodity();
    var modal = UIkit.modal("#modal_add_comm");
   			   modal.show();
	
	$("#idheadcomm").val(idheader);
	
}
function editDetailCommodity(idheader,id_detail){	
	var idheader=idheader;
	var id_detail=id_detail;
      $.ajax({
           url : "<?php  echo site_url('logistic/Customer/editDetailCommodity')?>",
           dataType: "JSON",
		   type: "POST",
		   data:({idheader:idheader,id_detail:id_detail}),
           success: function(data){;
		       var modal = UIkit.modal("#modal_edit_commodity");
   			   modal.show();
                     for (var i =0; i<data.length; i++){
						 $("#iddetailcommodity2").val(data[i].Id);
						 $("#idCommodity1").val(data[i].Id);
						 $("#idhead").val(data[i].IdCustHeader);
						 $("#commodityname2").val(data[i].nm_commodity);
						  $("#remarkscommodity2").val(data[i].Remarks);	
						  
			//var option="<option value='"+data[i].id_service+"'>"+data[i].nm_sevice+"</option>";
						  //$("#servisname2").append(option);
						  
						 load_combo_commodity();
						  		
                       }
  
               }
       }); 
}
function load_combo_saless(){
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
function deleteDetailComm(idheader,id_det){
	
	var idHead=idheader;
	var id=id_det;
	var nmtable='trcust_dtlcomm';
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
                reloadcontent('commodity',idHead);
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
function load_combo_commodity(){
       $.ajax({
           url : "<?php echo site_url('logistic/Customer/load_combo_commodity')?>",
           dataType: "json",
           success: function(data){
               $("#commodityname2").empty();
               $("#commodityname2").append("<option value=''>Select Commodity</option>");
                     for (var i =0; i<data.length; i++){
                   var option = "<option value='"+data[i].Id+"'>"+data[i].Name+"</option>";
                          $("#commodityname").append(option);
						  $("#commodityname2").append(option);
				
						  //load_state();
                       }
  
               }
       }); 
    }
//====================SAVE UPDATE DATA===============//
$jq('#formeditcommodity').parsley().on('field:validated', function() {
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
        url = "<?php echo site_url('logistic/Customer/UpdateDetailCommodity')?>";
      
       // ajax adding data to database
          $.ajax({
            url : url,
            type: "POST",
            data: $('#formeditcommodity').serialize(),
            dataType: "JSON",
            success: function(data)
            {
               //if success close modal and reload ajax table
			   //swal("Update Succesfull ","Update saved" ,"success");
			    var modal = UIkit.modal("#modal_edit_commodity");
   				modal.hide();
				UIkit.modal.alert('Data Updated!');
				reloadcontent('commodity',idHead);
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
$jq('#foramaddComm').parsley().on('field:validated', function() {
    var ok = $jq('.parsley-error-list').length === 0;
    $jq('.bs-callout-info').toggleClass('hidden', !ok);
    $jq('.bs-callout-warning').toggleClass('hidden', ok);
  })
  
  //execution if pasased input
  .on('form:submit', function() {
    var idhead=$("#idheadcomm").val();
		
	swal({
		title:'<div class="md-preloader"><svg xmlns="http://www.w3.org/2000/svg" version="1.1" height="96" width="96" viewBox="0 0 75 75"><circle cx="37.5" cy="37.5" r="33.5" stroke-width="4"></circle></svg></div>',
		text:'<p>Loading Content.......</p>',
		showConfirmButton:false,
		//type:"success",
		html:true
	});
        url = "<?php echo site_url('logistic/Customer/saveCommDetail')?>";
      
       // ajax adding data to database
          $.ajax({
            url : url,
            type: "POST",
            data: $('#foramaddComm').serialize(),
            dataType: "JSON",
            success: function(data)
            {
               //if success close modal and reload ajax table
			    var modal = UIkit.modal("#modal_add_comm");
   				modal.hide();
				reloadcontent('commodity',idhead);
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