<style>
#load_quot .material-icons{
	cursor:pointer;
}
#load_quot .material-icons:hover{
	color:#33F;
}
</style>

<div class="md-card " style="padding:20px 10px 20px 10px">

<h2>Create Quotation</h2>
<div class="uk-grid uk-width-medium-1-1">
        
<div class="uk-width-medium-1-2">
	<div class="md-input-wrapper md-input-filled">
    <label for="country">Quotation Number <sup>*</sup></label>
     <input type="text" name="telp3" required="" class="md-input" data-parsley-id="4" id="telp3" value="">
      <span class="md-input-bar"></span></div>         
 </div>
       
<div class="uk-width-medium-1-2">
	<div class="md-input-wrapper md-input-filled">
    <label for="country"> Date <sup>*</sup></label>
    <span class="md-input-bar"></span>
    <input name="yearst" type="text" class="md-input" id="uk_dp_1" data-uk-datepicker="{format:'YYYY-MM-DD'}">
	</div>         
 </div>
</div>

<div class="uk-grid uk-width-medium-1-1">
        
<div class="uk-width-medium-1-2">
	<div class="md-input-wrapper md-input-filled">
    <label for="country">Subject <sup>*</sup></label>
     <input type="text" name="telp3" required="" class="md-input" data-parsley-id="4" id="telp3" value="">
      <span class="md-input-bar"></span></div>         
 </div>
       
<div class="uk-width-medium-1-2">
	<div class="md-input-wrapper md-input-filled">
    <label for="country"> Valid Date Until <sup>*</sup></label>
     <input name="yearst" type="text" class="md-input" id="uk_dp_1" data-uk-datepicker="{format:'YYYY-MM-DD'}">
      <span class="md-input-bar"></span></div>         
 </div>
</div>
<div class="uk-grid uk-width-medium-1-1">
        
<div class="uk-width-medium-1-2">
	<div class="md-input-wrapper md-input-filled">
    
     
           <button onclick="load_quotation()" class="md-btn md-btn-warning md-btn-wave-light waves-effect waves-button waves-light">
                    <i class="material-icons md-color-brown-50 ">refresh</i>
        		    <span>Load Quotation from anothers</span>
                    </button>
                
      <span class="md-input-bar"></span></div>         
 </div>
       

</div>


        



            <textarea id="wysiwyg_ckeditor" cols="30" rows="20">

<h1>Quotation for Customers</h1>

<div id="box-table">
<table border="0" cellpadding="1" cellspacing="1" class="uk-table hover" style="width:500px">
	<tbody>
		<tr>
			<td>NO</td>
			<td>Item Charges</td>
			<td>Cost</td>
		</tr>
		<tr>
			<td>1</td>
			<td>AB</td>
			<td>1200</td>
		</tr>
	</tbody>
</table>
</div>
            </textarea>


<div class="uk-grid uk-width-medium-1-1">
        
<div class="uk-width-medium-1-2">
	<p>&nbsp;</p>       
 </div>
       
<div class="uk-width-medium-1-2">
	<button  class="md-btn md-btn-primary md-btn-wave-light waves-effect waves-button waves-light">
                    <i class="material-icons md-color-brown-50 ">save</i>
        		    <span>Save Quotation</span>
                    </button>         
 </div>
</div>
     
   </div>     
   
 <!-- MODAL ADD -->
 <form method="post" id="foramaddSales" enctype="multipart/form-data" data-parsley-validate="">
 
 <div id="modal_add" class="uk-modal">
                                <div class="uk-modal-dialog">
                                    <button type="button" class="uk-modal-close uk-close"></button>
   <h2 class="heading_a">Load Quotation</h2>
                                    
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
    <label for="country">Inquiry</label>
     <select name="country" class="md-input" id="country">
  <option value="">Select </option>
   <option value="Lorem">Lorem </option>
   <option value="Lorem">Ipsum </option>
                </select>
      <span class="md-input-bar"></span></div>         
 </div>      
<div class="uk-width-medium-1-3">
	<div class="md-input-wrapper md-input-filled">
    <label for="country"> Valid Date</label>
     <input name="yearst" type="text" class="md-input" id="uk_dp_1" data-uk-datepicker="{format:'YYYY-MM-DD'}">
      <span class="md-input-bar"></span></div>         
 </div>
</div>

<hr style="border:1px #F93 dashed" />  
<div class="uk-grid" data-uk-grid-margin="">
      
<table width="99%" border="0" class="uk-table hover" id="load_quot">
  <tr>
    <td width="17%"><div align="center">Numb</div></td>
    <td width="58%">Item Carge</td>
    <td width="25%"><div align="center">Action</div></td>
  </tr>
  <tr>
    <td><div align="center">1</div></td>
    <td>AB</td>
    <td align="center"><i onclick="check_quotation()" class="md-list-addon-icon material-icons md-24">file_download</i></td>
  </tr>
  <tr>
    <td><div align="center">2</div></td>
    <td>ABC</td>
    <td align="center"><i onclick="check_quotation()" class="md-list-addon-icon material-icons md-24">file_download</i></td>
  </tr>
  </table>

       

</div>




 
 
    
                         
                             
                                    </div>
                                    
                                    

                                   
                                </div>
                            </div>
                            
                            </form>
 <!-- MODAL ADD -->
     
<script>
var $jq = jQuery.noConflict();

function load_quotation(){
	
    var modal = UIkit.modal("#modal_add");
   			   modal.show();
}
function check_quotation(){
	
    var modal = UIkit.modal("#modal_add");
   			   modal.hide();
}


</script>
