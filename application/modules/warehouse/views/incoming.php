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
							<span class="menu_title">Checker</span>
						</a>
						<ul  style="display: none;" class="">
							<li title="List" onclick="reloadcontent('incoming_acceptance_breakdown','1')">
								<span class="menu_icon"><i class="material-icons">bookmark_border</i></span>
								<span class="menu_title">Breakdown</span>
							</li> 
							<li title="List" onclick="reloadcontent('incoming_acceptance_irregularities','1')">
								<span class="menu_icon"><i class="material-icons">bookmark_border</i></span>
								<span class="menu_title">Irregularities</span>
							</li>                                                       
							<li title="List" onclick="reloadcontent('incoming_acceptance_cargo_damage','1')">							
								<span class="menu_icon"><i class="material-icons">bookmark_border</i></span>
								<span class="menu_title">Cargo Demage</span>
							</li>
						</ul>
					</li>
					<li class="submenu_trigger">
						<a href="#">
							<span class="menu_icon"><i class="material-icons"></i></span>
							<span class="menu_title">Storage</span>
						</a>
						<ul  style="display: none;" class="">
							<li title="List" onclick="reloadcontent('incoming_storage_list_stockofname','1')">
								<span class="menu_icon"><i class="material-icons">bookmark_border</i></span>
								<span class="menu_title">StockOfname</span>
							</li>
							<li title="List" onclick="reloadcontent('incoming_storage_list_location','1')">
								<span class="menu_icon"><i class="material-icons">bookmark_border</i></span>
								<span class="menu_title">Location</span>
							</li>	
						</ul>
					</li>
					<li class="submenu_trigger">
						<a href="#">
							<span class="menu_icon"><i class="material-icons"></i></span>
							<span class="menu_title">Delivery</span>
						</a>
						<ul  style="display: none;" class="">
							<li title="List" onclick="reloadcontent('incoming_delivery_list_document_delivery','1')">
								<span class="menu_icon"><i class="material-icons">bookmark_border</i></span>
								<span class="menu_title">List D.O/Weighing</span>
							</li>
							<li title="List" onclick="reloadcontent('incoming_acceptance_weighing','1')">
								<span class="menu_icon"><i class="material-icons">bookmark_border</i></span>
								<span class="menu_title">Weighing</span>
							</li>                                                      
							<li title="List" onclick="reloadcontent('incoming_delivery_document_delivery','1')">							
								<span class="menu_icon"><i class="material-icons">bookmark_border</i></span>
								<span class="menu_title">Delivery Order</span>
							</li>
							<li title="List" onclick="reloadcontent('incoming_delivery_void_document_delivery','1')">							
								<span class="menu_icon"><i class="material-icons">bookmark_border</i></span>
								<span class="menu_title">Void Del.Order</span>
							</li>
							<li title="List" onclick="reloadcontent('incoming_acceptance_void_weighing','1')">							
								<span class="menu_icon"><i class="material-icons">bookmark_border</i></span>
								<span class="menu_title">Void Weighing</span>
							</li>
						</ul>
					</li>
					<li class="submenu_trigger">
						<a href="#">
							<span class="menu_icon"><i class="material-icons"></i></span>
							<span class="menu_title">Cashier</span>
						</a>
						<ul  style="display: none;" class="">
							<li title="List" onclick="reloadcontent('incoming_cashier_list_invoice','1')">
								<span class="menu_icon"><i class="material-icons">bookmark_border</i></span>
								<span class="menu_title">List Invoice</span>
							</li>
							<li title="List" onclick="reloadcontent('incoming_cashier_invoice','1')">
								<span class="menu_icon"><i class="material-icons">bookmark_border</i></span>
								<span class="menu_title">Invoice</span>
							</li>
							<li title="List" onclick="reloadcontent('incoming_cashier_Monitoring','1')">
								<span class="menu_icon"><i class="material-icons">bookmark_border</i></span>
								<span class="menu_title">Monitoring</span>
							</li>
							<li title="List" onclick="reloadcontent('incoming_cashier_void_invoice','1')">
								<span class="menu_icon"><i class="material-icons">bookmark_border</i></span>
								<span class="menu_title">Void</span>
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
			
				<?php echo $this->load->view('warehouse/incoming_acceptance_breakdown');?>
		  
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
