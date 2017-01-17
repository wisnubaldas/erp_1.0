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
.uk-width-medium-10-10 .md-btn{
	
	margin-top:-4px;
}

</style>
                        <div class="md-card">
                        <div class="md-card-content">
                      
 <div class="uk-grid">
 <div class="uk-width-medium-10-10">
                    <div class="md-card">
                        <div class="md-card-toolbar">
                            <div class="md-card-toolbar-actions">

 

	<a href="<?php echo site_url('logistic/Inquiry/create_inquiry')?>"><button class="md-btn md-btn-primary md-btn-wave-light waves-effect waves-button waves-light" data-uk-tooltip="{pos:'bottom'}" title="New Quotation">
                    <i class="material-icons md-color-brown-50 ">add</i>
        		    <span>New Quotation</span>
                    </button> </a>        
                            
     



                            </div>
  <h3 class="md-card-toolbar-heading-text">
 <i class="md-list-addon-icon material-icons md-24">cached</i> 
 
 MANAGE QUOTATION
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

<div class="uk-grid uk-width-medium-8-10">
        <table width="88%" border="0" class="uk-table uk-table-hoverr" style="margin-left:6%">
  <tr bgcolor="#CCCCCC">
    <td width="11%"><div align="center">Numb</div></td>
    <td width="11%">Date</td>
    <td width="17%">Quotation Number</td>
    <td width="21%">Status</td>
    <td width="26%">Description</td>
    <td width="14%">&nbsp;</td>
  </tr>
  <tr>
    <td height="28"><div align="center">1</div></td>
    <td>20-20-1016</td>
    <td>Quotation 01</td>
    <td><span class="uk-badge uk-badge-danger"><i class="material-icons md-color-grey-50">close</i> Reject by Manager</span></td>
    <td>lorem ipsum dolorsitamet</td>
    <td align="center">
 <button onclick="load_quotation()" class="md-btn md-btn-small"><i class="material-icons">remove_red_eye</i></button>
    </td>
  </tr>
  <tr>
    <td><div align="center">2</div></td>
    <td>20-20-1016</td>
    <td>Quotation 02</td>
    <td><span class="uk-badge uk-badge-success"><i class="material-icons md-color-grey-50">check</i> Approved by customer</span></td>
    <td>lorem ipsum dolorsitamet</td>
    <td align="center">
    <button onclick="load_quotation()" class="md-btn md-btn-small"><i class="material-icons">remove_red_eye</i>
    </button>
    </td>
  </tr>
</table>

</div>

<div class="uk-grid uk-width-medium-1-2">
        
<div class="uk-width-medium-6-10">
	<p>&nbsp;</p>       
 </div>
       

</div>
                        
                        </div>
                        </div>
                        
    
<!-- MODAL ADD -->
 <form method="post" id="foramaddSales" enctype="multipart/form-data" data-parsley-validate="">
 
 <div id="modal_add" class="uk-modal">
                                <div class="uk-modal-dialog">
                                    <button type="button" class="uk-modal-close uk-close"></button>
   <h2 class="heading_a">Detail Quotation</h2>
                                    
                                    <div class="uk-overflow-container">
                                
<p>&nbsp;</p>


<div class="uk-grid" data-uk-grid-margin="">
        
<div class="uk-width-medium-1-3">
	<div class="md-input-wrapper md-input-filled">
    <label for="country">Quotation Number</label>
     <input type="text" name="telp3" required="" class="md-input" data-parsley-id="4" id="telp3" value="0982867257">
      <span class="md-input-bar"></span></div>         
 </div>
 <div class="uk-width-medium-1-3">
	<div class="md-input-wrapper md-input-filled">
    <label for="country">Date</label>
     <input type="text" name="telp3" required="" class="md-input" data-parsley-id="4" id="telp3" value="2016-12-12">
      <span class="md-input-bar"></span></div>         
 </div>
 <div class="uk-width-medium-1-3">
   <div class="md-input-wrapper md-input-filled">
    <label for="country"> Valid Date</label>
     <input name="yearst" type="text" class="md-input" id="uk_dp_1" data-uk-datepicker="{format:'YYYY-MM-DD'}" value="2016-12-11">
      <span class="md-input-bar"></span></div>         
 </div>
 
<div class="uk-width-medium-1-2">
	<div class="md-input-wrapper md-input-filled">
    <label for="country">Subject</label>
    <textarea name="telp3" required="required" class="md-input" id="telp3" data-parsley-id="4">Lorem ipsum dollor site amet</textarea>
      <span class="md-input-bar"></span></div>         
 </div>
</div>

  
<div class="uk-grid" data-uk-grid-margin="">
      
<table width="99%" border="0" class="uk-table hover" id="load_quot">
  <tr>
    <td width="17%"><div align="center">Numb</div></td>
    <td width="58%">Item Carge</td>
    <td width="58%">Cost</td>
    </tr>
  <tr>
    <td><div align="center">1</div></td>
    <td>AB</td>
    <td>$ 5</td>
    </tr>
  <tr>
    <td><div align="center">2</div></td>
    <td>ABC</td>
    <td>$ 8</td>
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




