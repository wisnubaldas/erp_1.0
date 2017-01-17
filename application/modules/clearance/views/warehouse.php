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
							<span class="menu_title">Import</span>
						</a>
						<ul  style="display: none;" class="">
							<li title="List" onclick="reloadcontent('warehouse_import_breakdown','1')">
								<span class="menu_icon"><i class="material-icons">bookmark_border</i></span>
								<span class="menu_title">Breakdown</span>
							</li>                                                       
							<li title="List" onclick="reloadcontent('warehouse_import_labeling','1')">							
								<span class="menu_icon"><i class="material-icons">bookmark_border</i></span>
								<span class="menu_title">Labeling</span>
							</li>	
							<li title="List" onclick="reloadcontent('warehouse_import_location','1')">							
								<span class="menu_icon"><i class="material-icons">bookmark_border</i></span>
								<span class="menu_title">Location</span>
							</li>
							<li title="List" onclick="reloadcontent('warehouse_import_stockofname','1')">							
								<span class="menu_icon"><i class="material-icons">bookmark_border</i></span>
								<span class="menu_title">Stock Ofname</span>
							</li>
							<li title="List" onclick="reloadcontent('warehouse_import_delivery','1')">							
								<span class="menu_icon"><i class="material-icons">bookmark_border</i></span>
								<span class="menu_title">Delivery</span>
							</li>
							<li title="List" onclick="reloadcontent('warehouse_import_handover','1')">							
								<span class="menu_icon"><i class="material-icons">bookmark_border</i></span>
								<span class="menu_title">Hand Over</span>
							</li>
						</ul>
					</li>
					<li class="submenu_trigger">
						<a href="#">
							<span class="menu_icon"><i class="material-icons"></i></span>
							<span class="menu_title">Export</span>
						</a>
						<ul  style="display: none;" class="">
							<li title="List" onclick="reloadcontent('warehouse_export_handover','1')">
								<span class="menu_icon"><i class="material-icons">bookmark_border</i></span>
								<span class="menu_title">Hand Over</span>
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
			
				<?php echo $this->load->view('clearance/warehouse_import_breakdown');?>
		  
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
                url : "<?php echo base_url('clearance/warehouse/reloadBoxContent'); ?>",
                data: "mydata="+mydata,
				data:({mydata:mydata,myid:myid}),
                success: function(data){
					swal.close();
					$("#box-content-cust").html(data);
                }
            });
	
}
</script>
