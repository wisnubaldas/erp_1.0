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
							<span class="menu_title">Operation</span>
						</a>
						<ul  style="display: none;" class="">
							<li title="List" onclick="reloadcontent('master_operation_countrycode','1')">
								<span class="menu_icon"><i class="material-icons">bookmark_border</i></span>
								<span class="menu_title">Country Code</span>
							</li>                                                       
							<li title="List" onclick="reloadcontent('master_operation_placecode','1')">							
								<span class="menu_icon"><i class="material-icons">bookmark_border</i></span>
								<span class="menu_title">Place Code</span>
							</li>
							<li title="List" onclick="reloadcontent('master_operation_airport','1')">							
								<span class="menu_icon"><i class="material-icons">bookmark_border</i></span>
								<span class="menu_title">Airport</span>
							</li>
							<li title="List" onclick="reloadcontent('master_operation_warehousecode','1')">
							<span class="menu_icon"><i class="material-icons">bookmark_border</i></span>
							<span class="menu_title">Warehouse Operator</span>
							</li>
							<li title="List" onclick="reloadcontent('master_operation_route','1')">
							<span class="menu_icon"><i class="material-icons">bookmark_border</i></span>
							<span class="menu_title">Route</span>
							</li>
							<li title="List" onclick="reloadcontent('master_operation_airlines','1')">
							<span class="menu_icon"><i class="material-icons">bookmark_border</i></span>
							<span class="menu_title">Airlines</span>
							</li>
							<li title="List" onclick="reloadcontent('master_operation_flight','1')">
							<span class="menu_icon"><i class="material-icons">bookmark_border</i></span>
							<span class="menu_title">Flight</span>
							</li>
							<li title="List" onclick="reloadcontent('master_operation_harmonizecode','1')">
							<span class="menu_icon"><i class="material-icons">bookmark_border</i></span>
							<span class="menu_title">Harmonized Code</span>
							</li>
							<li title="List" onclick="reloadcontent('master_operation_location','1')">
							<span class="menu_icon"><i class="material-icons">bookmark_border</i></span>
							<span class="menu_title">Location</span> 
							</li>
						</ul>
					</li>
					<li class="submenu_trigger">
						<a href="#">
							<span class="menu_icon"><i class="material-icons"></i></span>
							<span class="menu_title">Finance</span>
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
								<span class="menu_title">Customer Detail</span>
							</li>
							<li title="List" onclick="reloadcontent('master_void_customer','1')">							
								<span class="menu_icon"><i class="material-icons">bookmark_border</i></span>
								<span class="menu_title">Void Customer</span>
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
			
				<?php echo $this->load->view('warehouse/master_operation_countrycode');?>
		  
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
