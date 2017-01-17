<div class="uk-grid">
	<div class="uk-width-medium-10-10" style="margin-bottom:5px; margin-top:-15px;">
		<div class="md-card">
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
						
						
						
						</ul>
					</div>
				</div>
			</div>
			<div class="uk-width-medium-8-10">
				<div class="md-card-content" style="min-height:600px" id="box-content-cust">
					<link rel="stylesheet" type="text/css" href="http://localhost/erp/asset/easyui/themes/default/easyui.css">
					<script type="text/javascript" src="http://localhost/erp/asset/easyui/jquery.min.js"></script>
					<script type="text/javascript" src="http://localhost/erp/asset/easyui/jquery.easyui.min.js"></script>
					
					<style>
					.uk-grid .md-input-wrapper{
						margin-bottom:10px;
						margin-top:10px;
					}
					.uk-width-medium-1-2 .easyui-combogrid{
						margin-bottom:20px;
						}
					</style>
					<div class="md-card-toolbar">
						<div class="md-card-toolbar-actions">
							<ul class="uk-tab" data-uk-tab="{connect:'#card_tabs',animation:'slide-horizontal'}">
								<li aria-expanded="true" class="uk-active">
									<button onclick="saveGeneral()" class="md-btn md-btn-primary md-btn-wave-light waves-effect waves-button waves-light">
										<i class="material-icons md-color-brown-50 ">A</i><span>AWD</span>        		    
									</button>
								</li>
								<li aria-expanded="true" class="uk-active">
									<button onclick="saveGeneral()" class="md-btn md-btn-primary md-btn-wave-light waves-effect waves-button waves-light">
										<i class="material-icons md-color-brown-50 ">Print</i><span>Print</span>
									</button>
								</li>
								<li aria-expanded="true" class="uk-active">
									<button onclick="saveGeneral()" class="md-btn md-btn-primary md-btn-wave-light waves-effect waves-button waves-light">
										<i class="material-icons md-color-brown-50 ">save</i><span>Save</span>
									</button>
								</li>
								<li aria-expanded="true" class="uk-active">
									<button onclick="saveGeneral()" class="md-btn md-btn-primary md-btn-wave-light waves-effect waves-button waves-light">
										<i class="material-icons md-color-brown-50 ">Refresh</i><span>Refresh</span>
									</button>
								</li>
								<li aria-expanded="false">&nbsp;</li>               
									 
								<li class="uk-tab-responsive uk-active uk-hidden" aria-haspopup="true" aria-expanded="false"><a>
										save
										Save
								</a><div class="uk-dropdown uk-dropdown-small"><ul class="uk-nav uk-nav-dropdown"></ul></div></li></ul>
						</div>
												
												
						<h3 class="md-card-toolbar-heading-text"><i class="md-list-addon-icon material-icons md-24">bookmark</i>DELIVERY</h3>
					</div>
										
					<div class="md-card-content">
						<form method="post" action="#" enctype="multipart/form-data" id="formgeneral">
							<div class="md-card">
								<div class="uk-grid" data-uk-grid-margin="">
									<div class="uk-width-medium-1-1 uk-row-first">
									<h5 class="uk-badge md-bg-grey-900">Delivery Order</h5>
										<div class="uk-form-row"> 
											<div class="uk-grid">
												<div class="uk-width-medium-1-2">
													<div class="md-input-wrapper md-input-filled">
														<label for="Name">Company Name</label>
														<input name="Name" required="" class="md-input" data-parsley-id="4" id="Name" value="PT. ATT Group Company" type="text">
														<span class="md-input-bar"></span>
													</div>	
													<div class="md-input-wrapper md-input-filled">
														<label for="Name">Company Address</label>
														<input name="Name" required="" class="md-input" data-parsley-id="4" id="Name" value="Jalan Palem Ruko Galaksy" type="text">
														<span class="md-input-bar"></span>
													</div>
													<div class="md-input-wrapper md-input-filled">
														<label for="Name">Ext. Address</label>
														<input name="Name" required="" class="md-input" data-parsley-id="4" id="Name" value="Kamal Ring roud Cengkareng" type="text">
														<span class="md-input-bar"></span>
													</div>
												</div>
												<div class="uk-width-medium-1-2">
													<div class="uk-grid">
														<div class="uk-width-medium-3-6">
															<div class="md-input-wrapper md-input-filled">
																<label for="country">P.I.C</label>
																<input name="vatno" required="" class="md-input" data-parsley-id="4" id="vatno" value="Artha R" type="text">
																<span class="md-input-bar"></span>											
															</div>										 	
														</div>
														<div class="uk-width-medium-2-6">
															<div class="md-input-wrapper md-input-filled">
																<label for="country">Mobile Number</label>
																<input name="vatno" required="" class="md-input" data-parsley-id="4" id="vatno" value="0811 9292534" type="text">
																<span class="md-input-bar"></span>											
															</div>         
														</div>
														<div class="uk-width-medium-3-6">
															<div class="md-input-wrapper md-input-filled">
																<label for="country">City</label>
																<input name="vatno" required="" class="md-input" data-parsley-id="4" id="vatno" value="Jakarta" type="text">
																<span class="md-input-bar"></span>											
															</div>
														</div>
														<div class="uk-width-medium-2-6">
															<div class="md-input-wrapper md-input-filled">
																<label for="country">Postal Code</label>
																<input name="vatno" required="" class="md-input" data-parsley-id="4" id="vatno" value="12340" type="text">
																<span class="md-input-bar"></span>											
															</div>
														</div>
														<div class="uk-width-medium-1-4">
															<div class="md-input-wrapper md-input-filled">
															<label for="country">Company Number</label>
															<input name="email" class="md-input" data-parsley-id="4" id="email" value="021 55981234" type="text">
															<span class="md-input-bar"></span>										
															</div>         
														</div>
														<div class="uk-width-medium-1-4">
															<div class="md-input-wrapper md-input-filled">
															<label for="country">Company Fax</label>
															<input name="email" class="md-input" data-parsley-id="4" id="email" value="021 55981233" type="text">
															<span class="md-input-bar"></span>										
															</div>         
														</div>						
														<div class="uk-width-medium-2-6">
															<div class="md-input-wrapper md-input-filled">
															<label for="country">Email</label>
															<input name="website" required="" class="md-input" data-parsley-id="4" id="website" value="artharosinta@gmail.com" type="text">
															<span class="md-input-bar"></span></div>         
														</div>  
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>	
							<div class="md-card">		
								<div class="uk-grid" data-uk-grid-margin="">
									<div class="uk-width-medium-1-1 uk-row-first">
									<h5 class="uk-badge md-bg-grey-900">Detail Delivery Order</h5>                 
										<div class="uk-form-row">                            
											<div class="uk-grid">
												<div class="uk-width-medium-1-6">
													<div class="uk-grid">																	
														<div class="uk-width-medium-7-10">
															<div class="md-input-wrapper md-input-filled">
															<label for="uk_dp_1">Master-AWB/CN</label>
															<input name="ActiveDate" class="md-input" id="uk_dp_1" value="126-12345678" type="text">
															<span class="md-input-bar"></span>
															</div>
														</div>
														<div class="uk-width-medium-3-10">
															<div class="md-input-wrapper md-input-filled">
																<label for="uk_dp_1">Parsial</label>
																<input name="ActiveDate" class="md-input" id="parsial" value="0" type="text">
																<span class="md-input-bar"></span>
															</div>
														</div>
													</div>	
												</div>
												<div class="uk-width-medium-2-5">
													<div class="uk-grid">
														<div class="uk-width-medium-2-6">
															<div class="md-input-wrapper md-input-filled">
																<label for="uk_dp_1">H-AWB</label>
																<input name="ActiveDate" class="md-input" id="awb" value="KHY-2312390JUI8" type="text">
																<span class="md-input-bar"></span>
															</div>						
														</div>
														<div class="uk-width-medium-1-6">
															<div class="md-input-wrapper md-input-filled">
																<label for="uk_dp_1">Pieces</label>
																<input name="ActiveDate" class="md-input" id="pieces" value="SIN" type="text">
																<span class="md-input-bar"></span>
															</div>						
														</div>
														<div class="uk-width-medium-1-6">
															<div class="md-input-wrapper md-input-filled">
																<label for="uk_dp_1">Weight</label>
																<input name="ActiveDate" class="md-input" id="weight" value="CX01234" type="text">
																<span class="md-input-bar"></span>
															</div>						
														</div>
														<div class="uk-width-medium-1-6">
															<div class="md-input-wrapper md-input-filled">
																<label for="uk_dp_1">Volume</label>
																<input name="ActiveDate" class="md-input" id="volume" value="2016-10-12" type="text">
																<span class="md-input-bar"></span>
															</div>						
														</div>
														<div class="uk-width-medium-1-6">
															<div class="md-input-wrapper md-input-filled">
																<label for="uk_dp_1">Origin</label>
																<input name="ActiveDate" class="md-input" id="origin" value="SIN" type="text">
																<span class="md-input-bar"></span>
															</div>						
														</div>	
													</div>
												</div>
												<div class="uk-width-medium-1-5">
													<div class="uk-grid">										
														<div class="uk-width-medium-2-6">
															<div class="md-input-wrapper md-input-filled">
																<label for="uk_dp_1">Flight</label>
																<input name="ActiveDate" class="md-input" id="flight" value="CX0123" type="text">
																<span class="md-input-bar"></span>
															</div>						
														</div>	
														<div class="uk-width-medium-4-6">
															<div class="md-input-wrapper md-input-filled">
																<label for="uk_dp_1">Nature Of Good</label>
																<input name="ActiveDate" class="md-input" id="nature" value="CONSOLIDATION" type="text">
																<span class="md-input-bar"></span>
															</div>						
														</div>	
													</div>
												</div>
												<div class="uk-width-medium-1-5">
													<div class="uk-grid">									
														<div class="uk-width-medium-4-10">
															<div class="md-input-wrapper md-input-filled">
																<label for="uk_dp_1">Break.Dt</label>
																<input name="ActiveDate" class="md-input" id="break_date" value="2016-10-12" type="text">
																<span class="md-input-bar"></span>
															</div>						
														</div>
														<div class="uk-width-medium-3-10">
															<div class="md-input-wrapper md-input-filled">
																<label for="uk_dp_1">Storage</label>
																<input name="ActiveDate" class="md-input" id="storage" value="CR" type="text">
																<span class="md-input-bar"></span>
															</div>						
														</div>
														<div class="uk-width-medium-3-10">
															<div class="md-input-wrapper md-input-filled">
																<label for="uk_dp_1">Location</label>
																<input name="ActiveDate" class="md-input" id="location" value="R-001" type="text">
																<span class="md-input-bar"></span>
															</div>						
														</div>
													</div>
												</div>	
											</div>
										</div>
									</div>
								</div>
							</div>	
						</form>
					</div>                    
				</div>              
			</div>
		</div>
	</div>
</div>          