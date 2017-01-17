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
							<li title="List" onclick="reloadcontent('custom_grouping_data','1')">
								<span class="menu_icon"><i class="material-icons">bookmark_border</i></span>
								<span class="menu_title">Grouping Data</span>
							</li>  
							<li title="List" onclick="reloadcontent('custom_pecah_pos','1')">							
								<span class="menu_icon"><i class="material-icons">bookmark_border</i></span>
								<span class="menu_title">Pecah Pos</span>
							</li>
							<li title="List" onclick="reloadcontent('custom_import_document','1')">
								<span class="menu_icon"><i class="material-icons">bookmark_border</i></span>
								<span class="menu_title">Document</span>
							</li>
							<li title="List" onclick="reloadcontent('custom_import_deminimus','1')">
								<span class="menu_icon"><i class="material-icons">bookmark_border</i></span>
								<span class="menu_title">Deminimus</span>
							</li>
							<li title="List" onclick="reloadcontent('custom_import_pibk','1')">
								<span class="menu_icon"><i class="material-icons">bookmark_border</i></span>
								<span class="menu_title">P.I.B.K</span>
							</li>
							<li title="List" onclick="reloadcontent('custom_import_bc23p20','1')">
								<span class="menu_icon"><i class="material-icons">bookmark_border</i></span>
								<span class="menu_title">BC 2.3 P 20</span>
							</li>
							<li title="List" onclick="reloadcontent('custom_import_bc23p35','1')">
								<span class="menu_icon"><i class="material-icons">bookmark_border</i></span>
								<span class="menu_title">BC 2.3 P 35</span>
							</li>
							<li title="List" onclick="reloadcontent('custom_import_pib','1')">
								<span class="menu_icon"><i class="material-icons">bookmark_border</i></span>
								<span class="menu_title">P.I.B</span>
							</li>
							<li title="List" onclick="reloadcontent('custom_import_suspect','1')">							
								<span class="menu_icon"><i class="material-icons">bookmark_border</i></span>
								<span class="menu_title">suspect</span>
							</li>
						</ul>
					</li>
					<li class="submenu_trigger">
						<a href="#">
							<span class="menu_icon"><i class="material-icons"></i></span>
							<span class="menu_title">Export</span>
						</a>
						<ul  style="display: none;" class="">
							<li title="List" onclick="reloadcontent('custom_export_document','1')">
								<span class="menu_icon"><i class="material-icons">bookmark_border</i></span>
								<span class="menu_title">Document</span>
							</li>
							<li title="List" onclick="reloadcontent('custom_export_deminimus','1')">
								<span class="menu_icon"><i class="material-icons">bookmark_border</i></span>
								<span class="menu_title">Deminimus</span>
							</li>
							<li title="List" onclick="reloadcontent('custom_export_peb','1')">
								<span class="menu_icon"><i class="material-icons">bookmark_border</i></span>
								<span class="menu_title">P.E.B</span>
							</li>
							<li title="List" onclick="reloadcontent('custom_grouping_data','1')">
								<span class="menu_icon"><i class="material-icons">bookmark_border</i></span>
								<span class="menu_title">Grouping Data</span>
							</li> 
						</ul>
					</li>
					<li title="List">
						<a onclick="reloadcontent('custom_update_status','1')">							
						<span class="menu_icon"><i class="material-icons">bookmark_border</i></span>
						<span class="menu_title">Update Status</span></a>
					</li>
					<li title="List">
						<a onclick="reloadcontent('custom_void_sppb','1')">							
						<span class="menu_icon"><i class="material-icons">bookmark_border</i></span>
						<span class="menu_title">Void SPPB</span></a>
					</li>
				</ul>
			</div>
		</div>
	</div>

	<div class="uk-width-medium-4-5">
		<div class="md-card"> 
			<div class="md-card-content" style="min-height:600px" id="box-content-cust">
			
				<?php echo $this->load->view('clearance/custom_grouping_data');?>
		  
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
                url : "<?php echo base_url('clearance/custom/reloadBoxContent'); ?>",
                data: "mydata="+mydata,
				data:({mydata:mydata,myid:myid}),
                success: function(data){
					swal.close();
					$("#box-content-cust").html(data);
                }
            });
	
}
</script>
