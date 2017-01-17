<style>
li{
	list-style:none;
}
li:hover{
	cursor: pointer;
	
}
</style> 
 </div>
 <div class="uk-grid">
	<div class="uk-width-medium-1-5">
		<div class="md-card">
			<div class="md-card-content">
				<ul class="md-list">
					<li class="submenu_trigger">
						<a href="#">
							<span class="menu_icon"><i class="material-icons"></i></span>
							<span class="menu_title">DRSC</span>
						</a>
						<ul  style="display: none;" class="">
							<li title="List" onclick="reloadcontent('finance_import_list_invoice','1')">
								<span class="menu_icon"><i class="material-icons">bookmark_border</i></span>
								<span class="menu_title">Import</span>
							</li>                                                       
							<li title="List" onclick="reloadcontent('finance_export_list_invoice','1')">							
								<span class="menu_icon"><i class="material-icons">bookmark_border</i></span>
								<span class="menu_title">Export</span>
							</li>
							<li title="List" onclick="reloadcontent('finance_incoming_list_invoice','1')">							
								<span class="menu_icon"><i class="material-icons">bookmark_border</i></span>
								<span class="menu_title">Incoming</span>
							</li>
							<li title="List" onclick="reloadcontent('finance_outgoing_list_invoice','1')">
							<span class="menu_icon"><i class="material-icons">bookmark_border</i></span>
							<span class="menu_title">Outgoing</span>
							</li>
							<li title="List" onclick="reloadcontent('finance_outgoing_list_otherscharges','1')">
							<span class="menu_icon"><i class="material-icons">bookmark_border</i></span>
							<span class="menu_title">Other Charges</span>
							</li>
							<li title="List" onclick="reloadcontent('finance_void_drsc','1')">
							<span class="menu_icon"><i class="material-icons">bookmark_border</i></span>
							<span class="menu_title">Void DRSC</span>
							</li>
							<li title="List" onclick="reloadcontent('finance_deposit_list','1')">
							<span class="menu_icon"><i class="material-icons">bookmark_border</i></span>
							<span class="menu_title">Deposit Transaction</span>
							</li>
						</ul>
					</li>
					<li class="submenu_trigger">
						<a href="#">
							<span class="menu_icon"><i class="material-icons"></i></span>
							<span class="menu_title">Taxed</span>
						</a>
						<ul  style="display: none;" class="">
							<li title="List" onclick="reloadcontent('finance_taxed','1')">
								<span class="menu_icon"><i class="material-icons">bookmark_border</i></span>
								<span class="menu_title">Tax Number</span>
							</li>                                                       
							<li title="List" onclick="reloadcontent('finance_taxed_list','1')">							
								<span class="menu_icon"><i class="material-icons">bookmark_border</i></span>
								<span class="menu_title">All Invoice</span>
							</li>
							<li title="List" onclick="reloadcontent('finance_taxed_list','1')">							
								<span class="menu_icon"><i class="material-icons">bookmark_border</i></span>
								<span class="menu_title">NPWP Empty</span>
							</li>
							<li title="List" onclick="reloadcontent('finance_taxed_list','1')">							
								<span class="menu_icon"><i class="material-icons">bookmark_border</i></span>
								<span class="menu_title">By Aggrement</span>
							</li>
						</ul>
					</li>
					<li class="submenu_trigger">
						<a href="#">
							<span class="menu_icon"><i class="material-icons"></i></span>
							<span class="menu_title">Master</span>
						</a>
						<ul  style="display: none;" class="">
							<li title="List" onclick="reloadcontent('finance_rate_list','1')">
								<span class="menu_icon"><i class="material-icons">bookmark_border</i></span>
								<span class="menu_title">Basic Price</span>
							</li>                                                       
							<li title="List" onclick="reloadcontent('finance_rate_Aggrement','1')">							
								<span class="menu_icon"><i class="material-icons">bookmark_border</i></span>
								<span class="menu_title">Price Aggrement</span>
							</li>
							<li title="List" onclick="reloadcontent('master_finance_deposit','1')">							
								<span class="menu_icon"><i class="material-icons">bookmark_border</i></span>
								<span class="menu_title">Deposit</span>
							</li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
	</div>

	<div class="uk-width-medium-4-5">
		<div class="md-card"> 
			<div class="md-card-content" style="min-height:600px" id="box-content-cust">
			
				<?php echo $this->load->view('warehouse/finance_import_list_invoice');?>
		  
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
                url : "<?php echo base_url('warehouse/master/reloadBoxContent'); ?>",
                data: "mydata="+mydata,
				data:({mydata:mydata,myid:myid}),
                success: function(data){
					swal.close();
					$("#box-content-cust").html(data);
                }
            });
	
}
</script>
