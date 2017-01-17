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
							<span class="menu_title">Acceptance</span>
						</a>
						<ul  style="display: none;" class="">
							<li title="List" onclick="reloadcontent('export_acceptance_booking','1')">								
								<span class="menu_icon"><i class="material-icons">bookmark_border</i></span>
								<span class="menu_title">Booking Status</span>
							</li>                                                       
							<li title="List" onclick="reloadcontent('export_acceptance_approval','1')">							
								<span class="menu_icon"><i class="material-icons">bookmark_border</i></span>
								<span class="menu_title">Acceptance Approval</span>
							</li>
							<li title="List" onclick="reloadcontent('export_acceptance_list_weighing','1')">
							<span class="menu_icon"><i class="material-icons">bookmark_border</i></span>
							<span class="menu_title">Cargo Weighing Proof</span>
							</li>
							<li title="List" onclick="reloadcontent('export_acceptance_rcs','1')">
							<span class="menu_icon"><i class="material-icons">bookmark_border</i></span>
							<span class="menu_title">R.C.S</span>
							</li>
							<li title="List" onclick="reloadcontent('export_acceptance_void_weighing','1')">
							<span class="menu_icon"><i class="material-icons">bookmark_border</i></span>
							<span class="menu_title">Weighing Void</span>
							</li>
							<li title="List" onclick="reloadcontent('export_acceptance_labeling','1')">
							<span class="menu_icon"><i class="material-icons">bookmark_border</i></span>
							<span class="menu_title">Labeling</span>
							</li>	
						</ul>
					</li>
					<li class="submenu_trigger">
						<a href="#">
							<span class="menu_icon"><i class="material-icons"></i></span>
							<span class="menu_title">Cashier</span>
						</a>
						<ul  style="display: none;" class="">	
							<li title="List" onclick="reloadcontent('export_cashier_list_invoice','1')">
								<span class="menu_icon"><i class="material-icons">bookmark_border</i></span>
								<span class="menu_title">Invoice</span>
							</li>
							<li title="List" onclick="reloadcontent('export_cashier_list_taxed','1')">
								<span class="menu_icon"><i class="material-icons">bookmark_border</i></span>
								<span class="menu_title">Taxed</span>
							</li>
							<li title="List" onclick="reloadcontent('export_cashier_list_overstay','1')">
								<span class="menu_icon"><i class="material-icons">bookmark_border</i></span>
								<span class="menu_title">Over Stay</span>
							</li>
							<li title="List" onclick="reloadcontent('export_cashier_list_monitoring','1')">
								<span class="menu_icon"><i class="material-icons">bookmark_border</i></span>
								<span class="menu_title">Monitoring CWP</span>
							</li>
							<li title="List" onclick="reloadcontent('export_cashier_void_invoice','1')">
								<span class="menu_icon"><i class="material-icons">bookmark_border</i></span>
								<span class="menu_title">Invoice Void</span>
							</li>
						</ul>
					</li>
					<li class="submenu_trigger">
						<a href="#">
							<span class="menu_icon"><i class="material-icons"></i></span>
							<span class="menu_title">Storage</span>
						</a>
						<ul  style="display: none;" class="">
							<li title="List" onclick="reloadcontent('export_storage_list_stockofname','1')">
								<span class="menu_icon"><i class="material-icons">bookmark_border</i></span>
								<span class="menu_title">Stock Ofname</span>
							</li>
							<li title="List" onclick="reloadcontent('export_storage_fhl','1')">
								<span class="menu_icon"><i class="material-icons">bookmark_border</i></span>
								<span class="menu_title">F.H.L</span>
							</li>
							<li title="List" onclick="reloadcontent('export_storage_fwb','1')">
								<span class="menu_icon"><i class="material-icons">bookmark_border</i></span>
								<span class="menu_title">F.W.B</span>
							</li>
						</ul>
					</li>
					<li class="submenu_trigger">
						<a href="#">
							<span class="menu_icon"><i class="material-icons"></i></span>
							<span class="menu_title">Checker</span>
						</a>
						<ul  style="display: none;" class="">	
							<li title="List" onclick="reloadcontent('export_buildup_list','1')">
								<span class="menu_icon"><i class="material-icons">bookmark_border</i></span>
								<span class="menu_title">BuildUp</span>
							</li>
							<li title="List" onclick="reloadcontent('export_buildup_monitoring','1')">
								<span class="menu_icon"><i class="material-icons">bookmark_border</i></span>
								<span class="menu_title">BuildUp Monitoring</span>
							</li>
							<li title="List" onclick="reloadcontent('export_buildup_uld','1')">
								<span class="menu_icon"><i class="material-icons">bookmark_border</i></span>
								<span class="menu_title">ULD Labeling</span>
							</li>
							<li title="List" onclick="reloadcontent('export_buildup_ffm','1')">
								<span class="menu_icon"><i class="material-icons">bookmark_border</i></span>
								<span class="menu_title">F.F.M</span>
							</li>
							<li title="List" onclick="reloadcontent('export_buildup_offLoad','1')">
								<span class="menu_icon"><i class="material-icons">bookmark_border</i></span>
								<span class="menu_title">Cargo OverLoad</span>
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
			
				<?php echo $this->load->view('warehouse/export_acceptance_booking');?>
		  
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
                url : "<?php echo base_url('warehouse/export/reloadBoxContent'); ?>",
                data: "mydata="+mydata,
				data:({mydata:mydata,myid:myid}),
                success: function(data){
					swal.close();
					$("#box-content-cust").html(data);
                }
            });
	
}
</script>
