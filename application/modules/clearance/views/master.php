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
					<li title="List" onclick="reloadcontent('master_airlines','1')">
						<span class="menu_icon"><i class="material-icons">bookmark_border</i></span>
						<span class="menu_title">Airlines</span>
					</li>                                                       
					<li title="List" onclick="reloadcontent('master_flight','1')">							
						<span class="menu_icon"><i class="material-icons">bookmark_border</i></span>
						<span class="menu_title">Flight</span>
					</li>
					<li title="List" onclick="reloadcontent('master_route','1')">							
						<span class="menu_icon"><i class="material-icons">bookmark_border</i></span>
						<span class="menu_title">Route</span>
					</li>
					<li title="List" onclick="reloadcontent('master_IATA_rate','1')">							
						<span class="menu_icon"><i class="material-icons">bookmark_border</i></span>
						<span class="menu_title">IATA Rate</span>
					</li>
					<li title="List" onclick="reloadcontent('master_hs_code','1')">							
						<span class="menu_icon"><i class="material-icons">bookmark_border</i></span>
						<span class="menu_title">HS Code</span>
					</li>
					<li title="List" onclick="reloadcontent('master_lartas','1')">							
						<span class="menu_icon"><i class="material-icons">bookmark_border</i></span>
						<span class="menu_title">Lartas</span>
					</li>
					<li title="List" onclick="reloadcontent('master_currency_rate','1')">							
						<span class="menu_icon"><i class="material-icons">bookmark_border</i></span>
						<span class="menu_title">Currancy Rate</span>
					</li>
					<li title="List" onclick="reloadcontent('master_type_status','1')">							
						<span class="menu_icon"><i class="material-icons">bookmark_border</i></span>
						<span class="menu_title">Status Type</span>
					</li>
				</ul>
				<li class="submenu_trigger">
					<a href="#">
						<span class="menu_icon"><i class="material-icons"></i></span>
						<span class="menu_title">Customer</span>
					</a>
					<ul  style="display: none;" class="">
						<li title="List" onclick="reloadcontent('master_list_customer','1')">
							<span class="menu_icon"><i class="material-icons">bookmark_border</i></span>
							<span class="menu_title">List Customer</span>
						</li>
						<li title="List" onclick="reloadcontent('master_customer','1')">
							<span class="menu_icon"><i class="material-icons">bookmark_border</i></span>
							<span class="menu_title">Customer</span>
						</li>
					</ul>
				</li>
			</div>
		</div>
	</div>

	<div class="uk-width-medium-4-5">
		<div class="md-card"> 
			<div class="md-card-content" style="min-height:600px" id="box-content-cust">
			
				<?php echo $this->load->view('warehouse/cargo_imp_list_auth');?>
		  
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
                url : "<?php echo base_url('clearance/master/reloadBoxContent'); ?>",
                data: "mydata="+mydata,
				data:({mydata:mydata,myid:myid}),
                success: function(data){
					swal.close();
					$("#box-content-cust").html(data);
                }
            });
	
}
</script>
