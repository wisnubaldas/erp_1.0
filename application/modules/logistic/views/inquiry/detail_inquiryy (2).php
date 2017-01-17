
    </div>

<div class="uk-grid">
 
 <?php
  foreach($idcust as $hdr){ 
  $isactive=($hdr->isActive=='1')?'<span class="md-color-indigo-600">YES</span>':'<span class="md-color-red-600">NO</span>';
  $status=($hdr->Status=='Prospect')?'<span class="uk-badge uk-badge-warning">'.$hdr->Status.'</span>':'<span class="uk-badge uk-badge-success">'.$hdr->Status.'</span>';
 ?>
 <div class="uk-width-medium-10-10" style="margin-bottom:5px; margin-top:-15px;">
  <div class="md-card">  
                <div class="md-card-content">
                    <h3 class="heading_a">
					<i class="material-icons md-24">business</i>
					<span><?php echo $hdr->companyname;?></span>
                    <input type="hidden" name="idheadercompany" id="idheadercompany" value="<?php echo $hdr->id_header;?>" />
                    </h3>
                    <div class="uk-grid" data-uk-grid-margin="">
                        <div class="uk-width-medium-1-1 uk-row-first">
                            <div class="uk-form-row">
                                <div class="uk-grid">
                                    <div class="uk-width-medium-1-5">
                                        <div class="md-input-wrapper md-input-filled">
                                        <label class="md-color-teal-400">Country / City</label>
                                        <input type="text" class="md-input" value="<?php echo $hdr->country.' / '.$hdr->city;?>" disabled>
                                        </div>
                                        
                                    </div>
                                    <div class="uk-width-medium-1-5">
                                         <div class="md-input-wrapper md-input-filled">
                                         <label class="md-color-teal-400">Total Employee</label>
                                         <p><?php echo $hdr->TotEmployee;?></p>
                                         </div>
                                        
                                    </div>
                                <div class="uk-width-medium-1-5">
                                         <div class="md-input-wrapper md-input-filled">
                                         <label class="md-color-teal-400">Email</label>
                                         <p><?php echo $hdr->Email;?></p>
                                         </div>
                                        
                                    </div>
                             <div class="uk-width-medium-1-5">
                                         <div class="md-input-wrapper md-input-filled">
                                         <label class="md-color-teal-400">Website</label>
                                         <p><?php echo $hdr->Website;?></p>
                                         </div>
                                        
                                    </div>
                              <div class="uk-width-medium-1-10">
                                         <div class="md-input-wrapper md-input-filled">
                                         <label class="md-color-teal-400">Status</label>
                                         <p><?php echo $status;?></p>
                                         </div>
                                        
                                    </div>
                             <div class="uk-width-medium-1-10">
                                         <div class="md-input-wrapper md-input-filled">
                                         <label class="md-color-teal-400">isActive</label>
                                         <p><?php echo $isactive;?></p>
                                         </div>
                                        
                                    </div>
                                </div>
                            </div>
                            
                            
                        </div>
                        
                    </div>
                    
                </div>
            </div>
  </div>
<?php } ?>               
              
<div class="uk-width-medium-2-10">
    <div class="md-card">
        <div class="md-card-content">
 			<ul class="md-list">
    <li title="Dashboard">
     <a  onclick="reloadcontent('general',<?php echo $hdr->id_header;?>)">
    <span class="menu_icon"><i class="material-icons">bookmark_border</i></span>
    <span class="menu_title">General</span>
     </a>
     </li>            
     <li title="List">
     <a  onclick="reloadcontent('sales',<?php echo $hdr->id_header;?>)">
     <span class="menu_icon"><i class="material-icons">local_atm</i></span>
     <span class="menu_title">Sales</span>
     </a>
     </li>
     <li title="List">
     <a  onclick="reloadcontent('address',<?php echo $hdr->id_header;?>)">
     <span class="menu_icon"><i class="material-icons">import_contacts</i></span>
     <span class="menu_title">Address</span>
     </a>
     </li>
     <li title="List">
     <a  onclick="reloadcontent('commodity',<?php echo $hdr->id_header;?>)">
     <span class="menu_icon"><i class="material-icons">extension</i></span>
     <span class="menu_title">Commodity</span>
     </a>
     </li>
     <li title="List">
     <a  onclick="reloadcontent('service',<?php echo $hdr->id_header;?>)">
     <span class="menu_icon"><i class="material-icons">accessibility</i></span>
     <span class="menu_title">Service</span>
     </a>
     </li>
     <li title="List">
     <a  onclick="reloadcontent('billing',<?php echo $hdr->id_header;?>)">
     <span class="menu_icon"><i class="material-icons">payment</i></span>
     <span class="menu_title">Billing</span>
     </a>
     </li>
     <li title="List">
     <a href="<?php echo base_url();?>Customer">
     <span class="menu_icon"><i class="material-icons">compare_arrows</i></span>
     <span class="menu_title">Compatitor</span>
     </a>
     </li>
     <li title="List">
     <a href="<?php echo base_url();?>Customer">
     <span class="menu_icon"><i class="material-icons">assessment</i></span>
     <span class="menu_title">Accounting</span>
     </a>
     </li>
     <li title="List">
     <a href="<?php echo base_url();?>Customer">
     <span class="menu_icon"><i class="material-icons">camera_alt</i></span>
     <span class="menu_title">Photos</span>
     </a>
     </li>
     <li title="List">
     <a href="#" onclick="reloadcontent('business_type',<?php echo $hdr->id_header;?>)">
     <span class="menu_icon"><i class="material-icons">account_balance</i></span>
     <span class="menu_title">Business Type</span>
     </a>
     </li>     
     
</ul>
       </div>
    </div>
</div>
                
                
<div class="uk-width-medium-8-10">

    <div class="md-card">
    
        <div class="md-card-content" style="min-height:600px" id="box-content-cust">
        
            <?php echo $this->load->view('logistic/customer/general');?>
      
       </div>
    </div>
  </div>
                
</div>

<script>

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
</script>



            

      
