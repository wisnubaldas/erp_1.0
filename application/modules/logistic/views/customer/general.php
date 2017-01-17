
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>asset/easyui/themes/default/easyui.css">
	<script type="text/javascript" src="<?php echo base_url();?>asset/easyui/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>asset/easyui/jquery.easyui.min.js"></script>
    
<style>
.uk-grid .md-input-wrapper{
	margin-bottom:10px;
	margin-top:10px;
}
.uk-width-medium-1-2 .easyui-combogrid{
	margin-bottom:20px;
	}
</style>
                        <div class="md-card-toolbar">
                            <div class="md-card-toolbar-actions">
                                <ul class="uk-tab" data-uk-tab="{connect:'#card_tabs',animation:'slide-horizontal'}">
                                    
                                    <li aria-expanded="true" class="uk-active">
           <button onclick="saveGeneral()" class="md-btn md-btn-primary md-btn-wave-light waves-effect waves-button waves-light">
                    <i class="material-icons md-color-brown-50 ">save</i>
        		    <span>Save</span>
                    </button>
                </li>
                <li>&nbsp;</li>
                
                        
                                </ul>
                            </div>
                            <h3 class="md-card-toolbar-heading-text">
 <i class="md-list-addon-icon material-icons md-24">bookmark</i> GENERAL
                            </h3>
                        </div>
                        <div class="md-card-content">
 <form method="post" action="#" enctype="multipart/form-data" id="formgeneral">  
  <?php
  foreach($record as $rw){ 
	$ischecked=($rw->isActive=='1')?'checked':'';
 ?>               
                    <div class="uk-grid" data-uk-grid-margin="">
                    <!-- LEFT COLOMN -->
                        <div class="uk-width-medium-1-2 uk-row-first">
  <h5 class="uk-badge md-bg-grey-900">General</h5>
                            <div class="uk-form-row">
                            
                                <div class="uk-grid">
 <div class="uk-width-medium-1-1">
			  <div class="md-input-wrapper md-input-filled">
                <label for="Name">Company Name</label>
                                        <input type="text" name="Name" required="" class="md-input" data-parsley-id="4" id="Name" value="<?php echo $rw->Name;?>">
                <span class="md-input-bar"></span></div>         
                                    </div>
                                    
                                    
                                
  <div class="uk-width-medium-1-2">
										<div class="md-input-wrapper md-input-filled">
                                        <label for="country">VATNo</label>
                                        <input type="text" name="vatno" required="" class="md-input" data-parsley-id="4" id="vatno" value="<?php echo $rw->VATNo;?>">
                                        <span class="md-input-bar"></span>
                                        <input type="hidden" name="idgeneral" id="idgeneral" value="<?php echo $rw->Id;?>"/>
										</div>         
                                    </div>                              
 <div class="uk-width-medium-1-2">
										<div class="md-input-wrapper md-input-filled">
                                        <label for="country">YearEst</label>
                                        <input name="yearst" type="text" class="md-input" id="uk_dp_1" data-uk-datepicker="{format:'YYYY-MM-DD'}" value="<?php echo $rw->YearEst;?>">
                                        <span class="md-input-bar"></span>
                                        </div>         
                                    </div>    
  
<div class="uk-width-medium-1-2">
			  <div class="md-input-wrapper md-input-filled">
                <label for="country">Total Employee</label>
                <input type="text" name="totalemployee" required="" class="md-input" data-parsley-id="4" id="totalemployee" value="<?php echo $rw->TotEmployee;?>">
                <span class="md-input-bar"></span>
                </div>         
                                    </div>
<div class="uk-width-medium-1-2">
			  <div class="md-input-wrapper md-input-filled">
                <label for="country">IdHolding</label>
                <input type="text" name="IdHolding" required="" class="md-input" data-parsley-id="4" id="IdHolding" value="<?php echo $rw->IdHolding;?>">
                <span class="md-input-bar"></span>
                </div>         
                                    </div>  
<div class="uk-width-medium-1-2">
										<div class="md-input-wrapper md-input-filled">
                                        <label for="country">Email</label>
                                        <input type="text" name="email" class="md-input" data-parsley-id="4" id="email" value="<?php echo $rw->Email;?>">
                                        <span class="md-input-bar"></span>
                                        </div>         
                                    </div>   
<div class="uk-width-medium-1-2">
										<div class="md-input-wrapper md-input-filled">
                                        <label for="country">Website</label>
                                        <input type="text" name="website" required="" class="md-input" data-parsley-id="4" id="website" value="<?php echo $rw->Website;?>">
                                        <span class="md-input-bar"></span>
                                        </div>         
                                    </div>                           
<div class="uk-width-medium-1-1">
										<div class="md-input-wrapper md-input-filled">
                                       <label>CompanyInf</label>
                                <textarea name="companyinf" cols="20" rows="2" class="md-input" id="companyinf"><?php echo $rw->CompanyInf;?>
                                </textarea>
 
                                        <span class="md-input-bar"></span>
                                        </div>         
                                    </div>                                
                                
                                </div>
                            </div>
                            
                            
                        </div>
                        
<!-- RIGHT COLOUMN -->
<div class="uk-width-medium-1-2 uk-row-first ">
<h5 class="uk-badge md-bg-grey-900">Others</h5>
<div class="uk-form-row">
                            
                                <div class="uk-grid">
                                    
                                  
  <div class="uk-width-medium-1-2">
										<div class="md-input-wrapper md-input-filled">
                                        <label for="uk_dp_1">ActiveDate</label>
                                        <input name="ActiveDate" type="text" class="md-input" id="uk_dp_1" data-uk-datepicker="{format:'YYYY-MM-DD'}" value="<?php echo $rw->ActiveDate;?>">
                                        <span class="md-input-bar"></span>
                                        </div>         
                                    </div>                              
 <div class="uk-width-medium-1-2">
			  <div class="md-input-wrapper md-input-filled">
                <label for="uk_dp_1">Status</label>
                <select name="status" class="md-input">
                <option value="<?php echo $rw->Status;?>"><?php echo $rw->Status;?></option>
                <option value="Customer">Customer</option>
                <option value="Prospect">Prospect</option>
                </select>
                <span class="md-input-bar"></span>
                </div>         
                                    </div>
<div class="uk-width-medium-1-2">
 <p for="country">Country</p>
    <select name="countryfield" class="easyui-combogrid" id="countryfield" style="width:100%">
    <option value="<?php echo $rw->IdCountry;?>"><?php echo $rw->IdCountry;?></option>
	</select>    
                     
 </div> 
 
<div class="uk-width-medium-1-2">
 <p for="country">City</p>
    <select name="cityfield" class="easyui-combogrid" id="cityfield" style="width:100%">
    <option value="<?php echo $rw->IdCity;?>"><?php echo $rw->IdCity;?></option>
	</select>                     
 </div>  
<div class="uk-width-medium-1-3">
<label>&nbsp;</label>
<p>Active status</p>
                            <input name="ischecked" class="md-input" type="checkbox" id="switch_demo_1" data-switchery <?php echo $ischecked;?> />
                            <label for="switch_demo_1" class="inline-label">Yes/No</label>
                           
                        </div>                                   
 
 <div class="uk-width-medium-1-1">
	<div class="md-input-wrapper md-input-filled">
 <p for="uk_dp_1">Photo</p> 
 <img src="<?php echo base_url();?>asset/images/customer/<?php echo $rw->LogoPic ;?>" id="view_gbr" width="100px" height="100px" style="float:left" />
  <a class="uk-form-file md-btn">
  <i class="material-icons md-color-grey-900">edit</i>Change Photo
  <input name="gbr" class="gbr" type="file" id="file_upload-select"></a>

</div>         
</div>
                                                                   
                                
                                </div>
                            </div>
                            
                            
                        </div>
<!-- RIGHT COLOMN -->



                    </div>
                    <?php } ?>
  </form>
                    
                </div>


                        </div>


        
<script>

function saveGenerallll(){
	
	swal({
		title:'<div class="md-preloader"><svg xmlns="http://www.w3.org/2000/svg" version="1.1" height="96" width="96" viewBox="0 0 75 75"><circle cx="37.5" cy="37.5" r="33.5" stroke-width="4"></circle></svg></div>',
		text:'<p>Loading Content.......</p>',
		showConfirmButton:false,
		//type:"success",
		html:true
		});
             // alert('hai' + idcnote);
				$.ajax({
                type: "POST",
                url : "<?php echo base_url('logistic/Customer/saveGeneral'); ?>",
                data: $('#formgeneral').serialize(),
                success: function(data){
					swal.close();
					$("#box-content-cust").html(data);
                }
            });
	
}

$('#countryfield').combogrid({
			panelWidth : 400,
			idField    : 'code',
			textField  : 'name',
            mode       : 'remote',
            loadMsg    : 'search',
			url        :"<?php echo base_url('logistic/Customer/getCountry'); ?>",
			columns    : [[
				{field:'code',title:'country Code',width:80},
				{field:'name',title:'country Name ',width:300},
			]],
			onSelect:function(rowIndex,rowData){
		//alert(rowData.code);
		 //$(".view_data").show();

			}
        });
$('#cityfield').combogrid({
			panelWidth : 400,
			idField    : 'code',
			textField  : 'name',
            mode       : 'remote',
            loadMsg    : 'search',
			url        : "<?php echo base_url('logistic/Customer/getCity'); ?>",
			columns    : [[
				{field:'code',title:'City Code',width:80},
				{field:'name',title:'City Name ',width:300},
			]],
			onSelect:function(rowIndex,rowData){
				//alert(rowData.code);
			}
        });

function saveGeneral()
    {
	swal({
		title:'<div class="md-preloader"><svg xmlns="http://www.w3.org/2000/svg" version="1.1" height="96" width="96" viewBox="0 0 75 75"><circle cx="37.5" cy="37.5" r="33.5" stroke-width="4"></circle></svg></div>',
		text:'<p>Loading Content.......</p>',
		showConfirmButton:false,
		//type:"success",
		html:true
	});
        url = "<?php echo site_url('logistic/Customer/saveGeneral')?>";
      
       // ajax adding data to database
          $.ajax({
            url : url,
            type: "POST",
            data: $('#formgeneral').serialize(),
            dataType: "JSON",
            success: function(data)
            {
               //if success close modal and reload ajax table
			   swal("Saved Succesfull ","Data saved" ,"success");
              // $('#modal_form_staff').modal('hide');
              // reload_table3();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error adding / update data');
            }
        });
	  
    }

function load_gbr(input){
	if(input.files && input.files[0]){
	var reader=new FileReader();
	reader.onload=function(e){
		$("#view_gbr").attr('src',e.target.result);
		$("#view_gbr2").attr('src',e.target.result);
		}
		reader.readAsDataURL(input.files[0]);
	}
	
}
$(".gbr").change(function(e) {
    load_gbr(this);
});
	
	
function cek(){
	var aa= $("input[name='countryfield']").val();
	alert(aa);
}
		
</script>