<style>
.boxaddress .mdcard{
	margin-bottom:15px;
}
</style>

                        <div class="md-card-toolbar">
                            <div class="md-card-toolbar-actions">
                                <ul class="uk-tab" data-uk-tab="{connect:'#card_tabs',animation:'slide-horizontal'}">
                                    
                    <li>
           <button href="#" onclick="add_address()"  class="md-btn md-btn-primary md-btn-wave-light waves-effect waves-button waves-light">
                   <i class="material-icons md-color-grey-50">add_circle_outline</i>
        		    <span>New</span>
                    </button>
                </li>              
                <li>&nbsp;</li>
                
                                </ul>
                            </div>
                            <h3 class="md-card-toolbar-heading-text">
 <i class="md-list-addon-icon material-icons md-24">import_contacts</i> ADDRESS
                            </h3>
                        </div>
                        
                        
                        <div class="md-card-content">


<div class="boxaddress">
<div class="uk-grid " data-uk-grid-margin="">
 <?php
  foreach($record as $rw){ 
	
 ?> 

                <div class="uk-width-medium-1-2 uk-row-first mdcard">
                
             

 <div class="md-card md-card-hover md-card-overlay">
  <div class="md-card-toolbar">
          <div class="md-card-toolbar-actions">                     
           <i class="md-icon material-icons md-color-light-blue-500" onclick="editAddress(<?php echo $rw->IdCustHeader;?>,<?php echo $rw->id_detail;?>)">edit</i>
                                
                                
            <i class="md-icon material-icons md-color-red-500" onclick="deleteAddress(<?php echo $rw->IdCustHeader;?>,<?php echo $rw->id_detail;?>)">delete</i>
            <span class="md-card-toolbar-heading-text"></span></div>
            <h3 class="md-card-toolbar-heading-text">
               <span><?php echo $rw->nm_type;?></span>
                  <span class="md-input-wrapper md-input-filled">
                                  <input type="hidden" name="id_detail_address" id="id_detail_address" value="<?php echo $rw->id_detail;?>"/>
            </span></h3>
          </div>
                               
       <div class="md-card-content truncate-text is-truncated" style="word-wrap:break-word;height:260px">
  <div class="uk-grid" data-uk-grid-margin="">
        <div class="uk-width-medium-1-2">
             <label class="md-color-grey-900">Postal</label>
              <p class="md-color-grey-600"><?php echo $rw->Postal;?></p>
        </div>
         <div class="uk-width-medium-1-2">
             <label class="md-color-grey-900">Telp1</label>
              <p class="md-color-grey-600"><?php echo $rw->Telp1;?></p>
        </div>
</div>
<div class="uk-grid" data-uk-grid-margin="">
        <div class="uk-width-medium-1-2">
             <label class="md-color-grey-900">Telp2</label>
              <p class="md-color-grey-600"><?php echo $rw->Telp2;?></p>
        </div>
         <div class="uk-width-medium-1-2">
             <label class="md-color-grey-900">Address</label>
              <p class="md-color-grey-600"><?php echo $rw->Address;?></p>
        </div>
</div>
<div class="uk-grid" data-uk-grid-margin="">
        <div class="uk-width-medium-1-2">
             <label class="md-color-grey-900">Fax</label>
              <p class="md-color-grey-600"><?php echo $rw->Fax;?></p>
        </div>
         <div class="uk-width-medium-1-2">
             <label class="md-color-grey-900">isDefault</label>
              <p class="md-color-grey-600"><?php echo $stat=($rw->isDefault=='1')?'YES':'NO';?></p>
        </div>
</div>
                                       
            </div>
                            
                            
<div class="md-card-overlay-content">
                            <div class="uk-clearfix md-card-overlay-header">
                                <i class="md-icon md-icon material-icons md-card-overlay-toggler">more_vert</i>
                                <h3>
                                    Remarks
                                </h3>
                            </div>
<div class="uk-grid" data-uk-grid-margin="">
        <div class="uk-width-medium-1-1">
          
              <p class="md-color-grey-600"><?php echo $rw->Remarks;?></p>
        </div>    
</div>
                        </div>
                    </div>
                   
                    
                </div>
                
                <?php } ?>
                
                
            </div>
 
</div>
                        </div>
                        
                        
 <!-- MODAL ADD -->
 <form method="post" action="#" enctype="multipart/form-data" id="foramaddaddress">
 <div id="modal_add" class="uk-modal">
                                <div class="uk-modal-dialog">
                                    <button type="button" class="uk-modal-close uk-close"></button>
   <h2 class="heading_a">Add Data</h2>
                                    
                                    <div class="uk-overflow-container">
                                
<p>&nbsp;</p>
<div class="uk-grid" data-uk-grid-margin="">
       				
<div class="uk-width-medium-1-2">
	<div class="md-input-wrapper md-input-filled">
    <label for="country">ID</label>
  <input type="text" name="idaddress2" required="" class="md-input" data-parsley-id="4" id="idaddress2" value="">
      <span class="md-input-bar"></span></div>         
 </div>
</div>

<div class="uk-grid" data-uk-grid-margin="">
       				
<div class="uk-width-medium-1-2">
	<div class="md-input-wrapper md-input-filled">
    <label for="country">Type address</label>
  <select name="type2" class="md-input" id="type2">
  <option value="">Select</option>
  <?php 
  foreach($type as $ty){
  ?>
                <option value="<?php echo $ty->Id;?>"><?php echo $ty->Name;?></option>
       <?php } ?>
                </select>
      <span class="md-input-bar"></span>
      <input type="hidden" name="idhead2" id="idhead2"/>
	</div>         
 </div>
</div>
<div class="uk-grid" data-uk-grid-margin="">
        
<div class="uk-width-medium-1-2">
	<div class="md-input-wrapper md-input-filled">
    <label for="country">Postal</label>
     <input type="text" name="postal2" required="" class="md-input" data-parsley-id="4" id="postal2" value="">
      <span class="md-input-bar"></span></div>         
 </div>
       
<div class="uk-width-medium-1-2">
	<div class="md-input-wrapper md-input-filled">
    <label for="country">Telp1</label>
     <input type="text" name="telp2" required="" class="md-input" data-parsley-id="4" id="telp2" value="">
      <span class="md-input-bar"></span></div>         
 </div>
</div>

<div class="uk-grid" data-uk-grid-margin="">
        
<div class="uk-width-medium-1-2">
	<div class="md-input-wrapper md-input-filled">
    <label for="country">Telp2</label>
     <input type="text" name="telp4" required="" class="md-input" data-parsley-id="4" id="telp4" value="">
      <span class="md-input-bar"></span></div>         
 </div>
       
<div class="uk-width-medium-1-2">
	<div class="md-input-wrapper md-input-filled">
    <label for="country">Fax</label>
     <input type="text" name="fax2" required="" class="md-input" data-parsley-id="4" id="fax2" value="">
      <span class="md-input-bar"></span></div>         
 </div>
</div>

<div class="uk-grid" data-uk-grid-margin="">
               
<div class="uk-width-medium-1-2">
	<div class="md-input-wrapper md-input-filled">
    <label for="country">Address</label>
     <input type="text" name="address2" required="" class="md-input" data-parsley-id="4" id="address2" value="">
      <span class="md-input-bar"></span></div>         
 </div>
 
 <div class="uk-width-medium-1-2">
	<div class="md-input-wrapper md-input-filled">
    <p>isDefault</p>
     <input name="isdefault2" type="checkbox" class="switch_demo_1" id="isdefault2" data-switchery="" checked="">
      <span class="md-input-bar"></span></div>         
 </div>
 
</div>
 
 
 <div class="uk-grid" data-uk-grid-margin="">
        
<div class="uk-width-medium-1-2">
	<div class="md-input-wrapper md-input-filled">
    <label for="remarks2">Remarks</label>
     
     <textarea name="remarks2" cols="20" rows="2" class="md-input" id="remarks2"></textarea>
                                
      <span class="md-input-bar"></span></div>         
 </div>
       

</div>   
                         
                             
                                    </div>
                                    
                                    
<div class="uk-modal-footer uk-text-right">
<button type="button" class="md-btn md-btn-danger md-btn-wave-light uk-modal-close">Close</button>
<button onclick="saveAddressType()" type="button" class="md-btn md-btn-primary md-btn-wave-light">
 <i class="material-icons md-color-brown-50 ">save</i>
  <span>Save</span>                                        
</button>
                                  </div>
                                   
                                </div>
                            </div>
                            
                            </form>
 <!-- MODAL ADD -->

 <!-- MODAL EDIT -->
 <form method="post" action="#" enctype="multipart/form-data" id="formeditaddress">
 <div id="modal_edit" class="uk-modal">
                                <div class="uk-modal-dialog">
                                
                                    <button type="button" class="uk-modal-close uk-close"></button>
   <h2 class="heading_a">Edit Data</h2>
                                    
                                    <div class="uk-overflow-container">
                                
 <div class="md-card-content truncate-text is-truncated" style="word-wrap:break-word;height:260px">
  
  
 
                                    
                                    
<div class="uk-grid" data-uk-grid-margin="">
        
<div class="uk-width-medium-1-2">
	<div class="md-input-wrapper md-input-filled">
    <label for="country">Postal</label>
     <input type="text" name="postal1" required="" class="md-input" data-parsley-id="4" id="postal1" value="">
      <span class="md-input-bar"></span>
      <input type="hidden" name="idaddress1" id="idaddress1" />
	  <input type="hidden" name="idhead" id="idhead" value="23"/>
	</div>         
 </div>
       
<div class="uk-width-medium-1-2">
	<div class="md-input-wrapper md-input-filled">
    <label for="country">Telp1</label>
     <input type="text" name="telp1" required="" class="md-input" data-parsley-id="4" id="telp1" value="">
      <span class="md-input-bar"></span></div>         
 </div>
</div>

<div class="uk-grid" data-uk-grid-margin="">
        
<div class="uk-width-medium-1-2">
	<div class="md-input-wrapper md-input-filled">
    <label for="country">Telp2</label>
     <input type="text" name="telp3" required="" class="md-input" data-parsley-id="4" id="telp3" value="">
      <span class="md-input-bar"></span></div>         
 </div>
       
<div class="uk-width-medium-1-2">
	<div class="md-input-wrapper md-input-filled">
    <label for="country">Fax</label>
     <input type="text" name="fax1" required="" class="md-input" data-parsley-id="4" id="fax1" value="">
      <span class="md-input-bar"></span></div>         
 </div>
</div>

<div class="uk-grid" data-uk-grid-margin="">
               
<div class="uk-width-medium-1-2">
	<div class="md-input-wrapper md-input-filled">
    <label for="country">Address</label>
     <input type="text" name="address1" required="" class="md-input" data-parsley-id="4" id="address1" value="">
      <span class="md-input-bar"></span></div>         
 </div>
 
 <div class="uk-width-medium-1-2">
	<div class="md-input-wrapper md-input-filled">
    <p>isDefault</p>
     <input name="isdefault1" type="checkbox" class="switch_demo_1" id="isdefault1" data-switchery="" checked="">
      <span class="md-input-bar"></span></div>         
 </div>
 
</div>
 
 
 <div class="uk-grid" data-uk-grid-margin="">
        
<div class="uk-width-medium-1-2">
	<div class="md-input-wrapper md-input-filled">
    <label for="remarks2">Remarks</label>
     
     <textarea name="remarks1" cols="20" rows="2" class="md-input" id="remarks1"></textarea>
                                
      <span class="md-input-bar"></span></div>         
 </div>
       

</div>                                   
                                    


                                   
                                </div>
                                
                            </div>
<div class="uk-modal-footer uk-text-right">
<button type="button" class="md-btn md-btn-danger md-btn-wave-light uk-modal-close">Close</button>
<button onclick="UpdateEditAddress()" type="button" class="md-btn md-btn-primary md-btn-wave-light">
 <i class="material-icons md-color-brown-50 ">save</i>
  <span>Save</span>                                        
</button>
                                  </div>
                                  </div>
                                  </form>
 <!-- MODAL EDIT -->


<script>

function add_address(idheader,iddetail){
		var idheader=$("#idheadercompany").val();
		       var modal = UIkit.modal("#modal_add");
   			   modal.show();
			   $("#idhead2").val(idheader);
	
}
function editAddress(idheader,iddetail){
	
	var idheader=idheader;
	var iddetail=iddetail;
			
				
      $.ajax({
           url : "<?php  echo site_url('customer/Customer/editAddress')?>",
           dataType: "JSON",
		   type: "POST",
		   data:({idheader:idheader,iddetail:iddetail}),
           success: function(data){;
		       var modal = UIkit.modal("#modal_edit");
   			   modal.show();
                     for (var i =0; i<data.length; i++){
						 $("#idhead").val(data[i].IdCustHeader);	
						 $("#idaddress1").val(data[i].Id);	
                          $("#postal1").val(data[i].Postal);	
						  $("#telp1").val(data[i].Telp1);	
						  $("#telp3").val(data[i].Telp2);
						  $("#fax1").val(data[i].Fax);
						  $("#address1").val(data[i].Address);	
						  $("#isdefault1").val(data[i].isDefault);	
						  $("#remarks1").val(data[i].Remarks);			
                       }
  
               }
       }); 
}

function deleteAddress(idheader,id_det){
	
	var idHead=idheader;
	var id=id_det;
	var nmtable='trcust_dtladdress';
	var kolom='Id';
	
	var ask=UIkit.modal.confirm('Are you sure delete data ?', 
	function(){
		
		if(ask==true){
			alert('oke');
			
		} else {
				        // ajax delete data to database
          $.ajax({
            url : "<?php echo site_url('customer/Customer/deleteData')?>",
            type: "POST",
            data:({id:id,nmtabel:nmtable,kolom:kolom}),
            dataType: "JSON",
            success: function(data)
            {
				UIkit.modal.alert('Data deleted!');
                reloadcontent('address',idHead);
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error adding / update data');
            }
        });
		}
		
	});
 
}

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
                url : "<?php echo base_url('customer/Customer/reloadBoxContent'); ?>",
                data: "mydata="+mydata,
				data:({mydata:mydata,myid:myid}),
                success: function(data){
					swal.close();
					$("#box-content-cust").html(data);
                }
            });
	
}
function UpdateEditAddress()
    {
		var idHead=$("#idhead").val();
		
	swal({
		title:'<div class="md-preloader"><svg xmlns="http://www.w3.org/2000/svg" version="1.1" height="96" width="96" viewBox="0 0 75 75"><circle cx="37.5" cy="37.5" r="33.5" stroke-width="4"></circle></svg></div>',
		text:'<p>Loading Content.......</p>',
		showConfirmButton:false,
		//type:"success",
		html:true
	});
        url = "<?php echo site_url('customer/Customer/UpdateEditAddress')?>";
      
       // ajax adding data to database
          $.ajax({
            url : url,
            type: "POST",
            data: $('#formeditaddress').serialize(),
            dataType: "JSON",
            success: function(data)
            {
               //if success close modal and reload ajax table
			   //swal("Update Succesfull ","Update saved" ,"success");
			    var modal = UIkit.modal("#modal_edit");
   				modal.hide();
				UIkit.modal.alert('Data Updated!');
				reloadcontent('address',idHead);
              // reload_table3();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error adding / update data');
            }
        });
	  
    }
function saveAddressType()
    {
		var idHead=$("#idheadercompany").val();
		
	swal({
		title:'<div class="md-preloader"><svg xmlns="http://www.w3.org/2000/svg" version="1.1" height="96" width="96" viewBox="0 0 75 75"><circle cx="37.5" cy="37.5" r="33.5" stroke-width="4"></circle></svg></div>',
		text:'<p>Loading Content.......</p>',
		showConfirmButton:false,
		//type:"success",
		html:true
	});
        url = "<?php echo site_url('customer/Customer/saveAddressType')?>";
      
       // ajax adding data to database
          $.ajax({
            url : url,
            type: "POST",
            data: $('#foramaddaddress').serialize(),
            dataType: "JSON",
            success: function(data)
            {
               //if success close modal and reload ajax table
			   swal("Update Succesfull ","Update saved" ,"success");
			    var modal = UIkit.modal("#modal_add");
   				modal.hide();
				reloadcontent('address',idHead);
              // reload_table3();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error adding / update data');
            }
        });
	  
    }

</script>