<!doctype html>
<!--[if lte IE 9]> <html class="lte-ie9" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html lang="en"> <!--<![endif]-->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0,maximum-scale=1.0,user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Remove Tap Highlight on Windows Phone IE -->
    <meta name="msapplication-tap-highlight" content="no"/>

<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
      
    <link rel="icon" type="image/png" href="<?php echo base_url();?>asset/assets/img/favicon-16x16.png" sizes="16x16">
    <link rel="icon" type="image/png" href="<?php echo base_url();?>asset/assets/img/favicon-32x32.png" sizes="32x32">

    <title>ERP System</title>

    <!-- uikit -->
    <link rel="stylesheet" href="<?php echo base_url();?>asset/bower_components/uikit/css/uikit.almost-flat.min.css" media="all">

    <!-- uikit -->
    <link rel="stylesheet" href="<?php echo base_url();?>asset/fontawesome/css/font-awesome.css">

    <!-- flag icons -->
    <link rel="stylesheet" href="<?php echo base_url();?>asset/assets/icons/flags/flags.min.css" media="all">

    <!-- altair admin -->
    <link rel="stylesheet" href="<?php echo base_url();?>asset/assets/css/main.css" media="all">
<!--    Dynamic include CSS file-->
    <?php
    if(isset($css) === FALSE)
    {
        echo '';
    }else{
        foreach($css as $i){ echo $i;}
    }
    ?>
    <!-- matchMedia polyfill for testing media queries in JS -->
    <!--[if lte IE 9]>
        <script type="text/javascript" src="bower_components/matchMedia/matchMedia.js"></script>
        <script type="text/javascript" src="bower_components/matchMedia/matchMedia.addListener.js"></script>
    <![endif]-->

   
    <!-- SWEET ALERT-->
  <script src="<?php echo base_url();?>asset/sweetalert/dist/sweetalert-dev.js"></script>
  <link rel="stylesheet" href="<?php echo base_url();?>asset/sweetalert/dist/sweetalert.css">
 <!--SWEET ALERT -->

 <style>
 .mybreadcrumb{ 
    background: #fafafa;
    border: 1px #fafafa solid;
    padding: 8px 0px 8px 10px;
    margin-bottom: -1px;
	margin-top:-20px;
	width:100%;
 }
  .mybreadcrumb a{
	  margin-left:10px;
 }
   .mybreadcrumb a:after{
	 content:'    > ';
 }
.my-mega-menu .uk-width-medium-1-4 label{
	color:#000;
}
.my-mega-menu .uk-width-medium-1-4 ul{
	margin-left:-11px;
	margin-top:5px;
}
.my-mega-menu .uk-width-medium-1-4 ul li{
	margin-top:2px;
}
#mega-menu-box{
    min-height:530px;
}
#sidebar_main .sidebar_main_header{
    background-image: none;
    background-color:#000;
    color: #FFF;
	
}
#sidebar_main .sidebar_main_header .sidebar_logo{
	    line-height: 73px;
		font-size:18px;
}
.md-btn span{
	text-transform:capitalize;
}
.uk-button-dropdown .md-btn{
	text-transform:capitalize;
}
#sidebar_main .sidebar_main_header{
	height:115px;
}
sup{
	color:red;
	margin-left:-9px;
}

div .uk-badge-circle{
	margin-bottom:20px;
	border-radius:100%;
	position:absolute;
}
/* for notification alert in all area */
.uk-notify-message-danger{
    border: 1px #ddd solid;
    background: #ffa000;
    color: #fafafa;
    font-weight: bold;
    box-shadow: 6px 4px 11px #ddd;
    border-left: 5px #e53935 solid;
    padding: 3px 0px 5px 10px;
    line-height: 40px;
    width: 78%;
    position: relative;
    left: 19%;
}
.uk-notify-message-danger div span:after{
	content:' X';
	right:20px;
	position:absolute;
}
.uk-notify-message-danger div p{
	margin-top:-20px;
	margin-left:40px;
	font-weight:normal;
}
 </style>    
</head>
<body class=" sidebar_main_open sidebar_main_swipe">
    <!-- main header -->
    <header id="header_main">
        <div class="header_main_content">
            <nav class="uk-navbar">
                                
                <!-- main sidebar switch -->
                <a href="#" id="sidebar_main_toggle" class="sSwitch sSwitch_left">
                    <span class="sSwitchIcon"></span>
                </a>
                
                <span><?php //echo $this->load->view('template/mega-menu');?></span>
                <!-- secondary sidebar switch -->
                <a href="#" id="sidebar_secondary_toggle" class="sSwitch sSwitch_right sidebar_secondary_check">
                    <span class="sSwitchIcon"></span>
                </a>
               
                    <div id="menu_top_dropdown" class="uk-float-left">
                        <div class="uk-button-dropdown" data-uk-dropdown="{mode:'click'}">
    
     <a href="#" class="top_menu_toggle"><span>Modules</span> <i class="icondrop material-icons md-24">arrow_drop_down</i></a>
     
     
    <div class="uk-dropdown uk-dropdown-width-5 mega-menu" id="mega-menu-box">
                                <div class="uk-grid uk-dropdown-grid" data-uk-grid-margin>
                                    <div class="uk-width-3-3">
                                        <div class="uk-grid uk-grid-width-medium-1-1 uk-margin-top uk-margin-bottom uk-text-left" data-uk-grid-margin>
    
    <div class="uk-grid  my-mega-menu" data-uk-grid-margin="">
        <div class="uk-width-medium-1-4">
             <label class="label"><i class="material-icons">markunread_mailbox</i> WAREHOUSE</label>
              <ul>
              <li><a href="<?php echo base_url();?>warehouse/import">Import</a></li>
			  <li><a href="<?php echo base_url();?>warehouse/export">Export</a></li>
			  <li><a href="<?php echo base_url();?>warehouse/incoming">Incoming</a></li>
			  <li><a href="<?php echo base_url();?>warehouse/outgoing">Outgoing</a></li>
			  <li><a href="<?php echo base_url();?>warehouse/finance">Finance</a></li>
              <li><a href="<?php echo base_url();?>warehouse/custom">Custom</a></li>
			  <li><a href="<?php echo base_url();?>warehouse/cargo_imp">Cargo I.M.P</a></li>
			  <li><a href="<?php echo base_url();?>warehouse/master">Master</a></li>
			  
              
              </ul>
        </div>
		<div class="uk-width-medium-1-4">
             <label class="label"><i class="material-icons">markunread_mailbox</i> CLEARANCE</label>
              <ul>
              <li><a href="<?php echo base_url();?>clearance/shipment">Shipment</a></li>
			  <li><a href="<?php echo base_url();?>clearance/custom">Custom</a></li>
			  <li><a href="<?php echo base_url();?>clearance/warehouse">Warehouse</a></li>
			  <li><a href="<?php echo base_url();?>clearance/finance">Finance</a></li>
			  <li><a href="<?php echo base_url();?>clearance/customer_service">Customer Service</a></li>
              <li><a href="<?php echo base_url();?>clearance/master">Master</a></li>			  
              </ul>
        </div>
         <div class="uk-width-medium-1-4">
            <label class="label"><i class="material-icons">forum</i> FORWARDING</label>
              <ul>
              <li><a onClick="sidebarAktif()" href="<?php echo base_url();?>logistic/Forwarder1">FW 1</a></li>
              <label class="menu_subtitle md-color-grey-500">CRM</label>
              <li><a onClick="sidebarAktif()" href="<?php echo base_url();?>logistic/Forwarder">CRM for FWD</a></li>
              <li><a onClick="sidebarAktif()" href="<?php echo base_url();?>logistic/Forwarder">CRM for RWH</a></li>
              </ul>
        </div>
        
<div class="uk-width-medium-1-4">
         <label class="label"><i class="material-icons">group</i> HRIS</label>
              <ul>
              <li><a href="<?php echo base_url();?>customer/Customer">Customer</a></li>
              <li><a href="<?php echo base_url();?>customer/Inquiry">Inquiry</a></li>
              </ul>
        </div>
        
<div class="uk-width-medium-1-4">
          <label class="mdlabel"><i class="material-icons">location_city</i> ASSET</label>
              <ul>
              <li><a href="<?php echo base_url();?>customer/Customer">Customer</a></li>
              <li><a href="<?php echo base_url();?>customer/Inquiry">Inquiry</a></li>
              
              </ul>
        </div>
<div class="uk-width-medium-1-4">
          <label class="mdlabel"><i class="material-icons">assessment</i> ACCOUNTING</label>
              <ul>
              <li><a href="<?php echo base_url();?>customer/Customer">Customer</a></li>
              <li><a href="<?php echo base_url();?>customer/Inquiry">Inquiry</a></li>
              </ul>
        </div>
        <div class="uk-width-medium-1-4">
            <label class="mdlabel"><i class="material-icons">assessment</i> Rate</label>
            <ul>
                <li><a href="<?php echo base_url('rate/rate_search');?>">Search Rate</a></li>
            </ul>
        </div>
    </div>

                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                
                <div class="uk-navbar-flip">
<!--                    <ul class="uk-navbar-nav user_actions">-->
<!--                        <li><a data-uk-tooltip="{pos:'bottom'}" title="Full Screen Mode" href="#" id="full_screen_toggle" class="user_action_icon uk-visible-large"><i class="material-icons md-24 md-light">&#xE5D0;</i></a></li>-->
                        
<!--<li data-uk-dropdown="{mode:'click',pos:'bottom-right'}">-->
<!--                            <a data-uk-tooltip="{pos:'bottom'}" title="Your Private Message" href="#" class="user_action_icon"><i class="material-icons md-24 md-light">mail</i><span class="uk-badge md-bg-red-500">8</span></a>-->
<!--                            <div class="uk-dropdown ">-->
<!--                                <div class="md-card-content">-->
<!--                                    <ul class="uk-tab uk-tab-grid" data-uk-tab="{connect:'#header_alerts',animation:'slide-horizontal'}">-->
<!--                                        <li class="uk-width-1-1 uk-active"><a href="#" class="js-uk-prevent uk-text-small">Messages (18)</a></li>-->
<!--                                    </ul>-->
<!--                                    <ul id="header_alerts" class="uk-switcher uk-margin">-->
<!--                                        <li>-->
<!--                                            <ul class="md-list md-list-addon">-->
<!--                                                <li>-->
<!--                                                    <div class="md-list-addon-element">-->
<!--                                                        <span class="md-user-letters md-bg-cyan">mu</span>-->
<!--                                                    </div>-->
<!--                                                    <div class="md-list-content">-->
<!--                                                        <span class="md-list-heading"><a href="pages_mailbox.html">Minima illum.</a></span>-->
<!--                                                        <span class="uk-text-small uk-text-muted">Iusto deleniti quisquam exercitationem pariatur a sequi magnam aut qui aspernatur et.</span>-->
<!--                                                    </div>-->
<!--                                                </li>-->
<!--                                              	-->
<!--                                                <li>-->
<!--                                                    <div class="md-list-addon-element">-->
<!--                                                        <img class="md-user-image md-list-addon-avatar" src="assets/img/avatars/avatar_02_tn.png" alt=""/>-->
<!--                                                    </div>-->
<!--                                                    <div class="md-list-content">-->
<!--                                                        <span class="md-list-heading"><a href="pages_mailbox.html">Rerum aut.</a></span>-->
<!--                                                        <span class="uk-text-small uk-text-muted">Perspiciatis aliquid totam natus vel harum.</span>-->
<!--                                                    </div>-->
<!--                                                </li>-->
<!--                                            </ul>-->
<!--                                            <div class="uk-text-center uk-margin-top uk-margin-small-bottom">-->
<!--                                                <a href="page_mailbox.html" class="md-btn md-btn-flat md-btn-flat-primary js-uk-prevent">Show All</a>-->
<!--                                            </div>-->
<!--                                      </li>-->
<!--                                        <li>-->
<!--                                            -->
<!--                                        </li>-->
<!--                                  </ul>-->
<!--                              </div>-->
<!--                            </div>-->
<!--                        </li>-->
<!--<li data-uk-dropdown="{mode:'click',pos:'bottom-right'}">-->
<!--<a data-uk-tooltip="{pos:'bottom'}" title="Notification" href="#" class="user_action_icon"><i class="material-icons md-24 md-light">&#xE7F4;</i><span class="uk-badge md-bg-red-500">13</span></a>-->
<!--                            <div class="uk-dropdown ">-->
<!--                                <div class="md-card-content">-->
<!--                                    <ul class="uk-tab uk-tab-grid" data-uk-tab="{connect:'#header_alerts',animation:'slide-horizontal'}">-->
<!--                                        <li class="uk-width-1-1 uk-active"><a href="#" class="js-uk-prevent uk-text-small">Messages (18)</a></li>-->
<!--                                    </ul>-->
<!--                                    <ul id="header_alerts" class="uk-switcher uk-margin">-->
<!--                                        <li>-->
<!--                                            <ul class="md-list md-list-addon">-->
<!--                                                <li>-->
<!--                                                    <div class="md-list-addon-element">-->
<!--                                                        <span class="md-user-letters md-bg-cyan">mu</span>-->
<!--                                                    </div>-->
<!--                                                    <div class="md-list-content">-->
<!--                                                        <span class="md-list-heading"><a href="pages_mailbox.html">Minima illum.</a></span>-->
<!--                                                        <span class="uk-text-small uk-text-muted">Iusto deleniti quisquam exercitationem pariatur a sequi magnam aut qui aspernatur et.</span>-->
<!--                                                    </div>-->
<!--                                                </li>-->
<!--                                              	-->
<!--                                                <li>-->
<!--                                                    <div class="md-list-addon-element">-->
<!--                                                        <img class="md-user-image md-list-addon-avatar" src="assets/img/avatars/avatar_02_tn.png" alt=""/>-->
<!--                                                    </div>-->
<!--                                                    <div class="md-list-content">-->
<!--                                                        <span class="md-list-heading"><a href="pages_mailbox.html">Rerum aut.</a></span>-->
<!--                                                        <span class="uk-text-small uk-text-muted">Perspiciatis aliquid totam natus vel harum.</span>-->
<!--                                                    </div>-->
<!--                                                </li>-->
<!--                                            </ul>-->
<!--                                            <div class="uk-text-center uk-margin-top uk-margin-small-bottom">-->
<!--                                                <a href="page_mailbox.html" class="md-btn md-btn-flat md-btn-flat-primary js-uk-prevent">Show All</a>-->
<!--                                            </div>-->
<!--                                      </li>-->
<!--                                        <li>-->
<!--                                            -->
<!--                                        </li>-->
<!--                                  </ul>-->
<!--                              </div>-->
<!--                            </div>-->
<!--                        </li>-->
<!--                        <li data-uk-dropdown="{mode:'click',pos:'bottom-right'}">-->
<!-- <a data-uk-tooltip="{pos:'bottom'}" title="Task List" href="#" class="user_action_icon"><i class="material-icons md-24 md-light">assignment</i><span class="uk-badge md-bg-red-500">6</span></a>-->
<!--                            <div class="uk-dropdown ">-->
<!--                                <div class="md-card-content">-->
<!--                                    <ul class="uk-tab uk-tab-grid" data-uk-tab="{connect:'#header_alerts',animation:'slide-horizontal'}">-->
<!--                                        <li class="uk-width-1-1 uk-active"><a href="#" class="js-uk-prevent uk-text-small">Messages (6)</a></li>-->
<!--                                    </ul>-->
<!--                                    <ul id="header_alerts" class="uk-switcher uk-margin">-->
<!--                                        <li>-->
<!--                                            <ul class="md-list md-list-addon">-->
<!--                                                <li>-->
<!--                                                    <div class="md-list-addon-element">-->
<!--                                                        <span class="md-user-letters md-bg-cyan">mu</span>-->
<!--                                                    </div>-->
<!--                                                    <div class="md-list-content">-->
<!--                                                        <span class="md-list-heading"><a href="pages_mailbox.html">Minima illum.</a></span>-->
<!--                                                        <span class="uk-text-small uk-text-muted">Iusto deleniti quisquam exercitationem pariatur a sequi magnam aut qui aspernatur et.</span>-->
<!--                                                    </div>-->
<!--                                                </li>-->
<!--                                              	-->
<!--                                                <li>-->
<!--                                                    <div class="md-list-addon-element">-->
<!--                                                        <img class="md-user-image md-list-addon-avatar" src="assets/img/avatars/avatar_02_tn.png" alt=""/>-->
<!--                                                    </div>-->
<!--                                                    <div class="md-list-content">-->
<!--                                                        <span class="md-list-heading"><a href="pages_mailbox.html">Rerum aut.</a></span>-->
<!--                                                        <span class="uk-text-small uk-text-muted">Perspiciatis aliquid totam natus vel harum.</span>-->
<!--                                                    </div>-->
<!--                                                </li>-->
<!--                                            </ul>-->
<!--                                            <div class="uk-text-center uk-margin-top uk-margin-small-bottom">-->
<!--                                                <a href="page_mailbox.html" class="md-btn md-btn-flat md-btn-flat-primary js-uk-prevent">Show All</a>-->
<!--                                            </div>-->
<!--                                      </li>-->
<!--                                        <li>-->
<!--                                            -->
<!--                                        </li>-->
<!--                                  </ul>-->
<!--                              </div>-->
<!--                            </div>-->
<!--                        </li>-->
<!--<li data-uk-dropdown="{mode:'click',pos:'bottom-right'}">-->
<!-- <a data-uk-tooltip="{pos:'bottom'}" title="Urgent To Do !" href="#" class="user_action_icon"><i class="material-icons md-24 md-color-yellow-400">report_problem</i><span class="uk-badge md-bg-red-500">4</span></a>-->
<!--                            <div class="uk-dropdown ">-->
<!--                                <div class="md-card-content">-->
<!--                                    <ul class="uk-tab uk-tab-grid" data-uk-tab="{connect:'#header_alerts',animation:'slide-horizontal'}">-->
<!--                                        <li class="uk-width-1-1 uk-active"><a href="#" class="js-uk-prevent uk-text-small">Messages (4)</a></li>-->
<!--                                    </ul>-->
<!--                                    <ul id="header_alerts" class="uk-switcher uk-margin">-->
<!--                                        <li>-->
<!--                                            <ul class="md-list md-list-addon">-->
<!--                                                <li>-->
<!--                                                    <div class="md-list-addon-element">-->
<!--                                                        <span class="md-user-letters md-bg-cyan">mu</span>-->
<!--                                                    </div>-->
<!--                                                    <div class="md-list-content">-->
<!--                                                        <span class="md-list-heading"><a href="pages_mailbox.html">Minima illum.</a></span>-->
<!--                                                        <span class="uk-text-small uk-text-muted">Iusto deleniti quisquam exercitationem pariatur a sequi magnam aut qui aspernatur et.</span>-->
<!--                                                    </div>-->
<!--                                                </li>-->
<!--                                              	-->
<!--                                                <li>-->
<!--                                                    <div class="md-list-addon-element">-->
<!--                                                        <img class="md-user-image md-list-addon-avatar" src="assets/img/avatars/avatar_02_tn.png" alt=""/>-->
<!--                                                    </div>-->
<!--                                                    <div class="md-list-content">-->
<!--                                                        <span class="md-list-heading"><a href="pages_mailbox.html">Rerum aut.</a></span>-->
<!--                                                        <span class="uk-text-small uk-text-muted">Perspiciatis aliquid totam natus vel harum.</span>-->
<!--                                                    </div>-->
<!--                                                </li>-->
<!--                                            </ul>-->
<!--                                            <div class="uk-text-center uk-margin-top uk-margin-small-bottom">-->
<!--                                                <a href="page_mailbox.html" class="md-btn md-btn-flat md-btn-flat-primary js-uk-prevent">Show All</a>-->
<!--                                            </div>-->
<!--                                      </li>-->
<!--                                        <li>-->
<!--                                            -->
<!--                                        </li>-->
<!--                                  </ul>-->
<!--                              </div>-->
<!--                            </div>-->
<!--                        </li>                        -->
                        
                        
<!--                        <li data-uk-dropdown="{mode:'click',pos:'bottom-right'}">-->
<!--                            <a href="#" class="user_action_image"><img class="md-user-image" src="--><?php //echo base_url();?><!--asset/images/avatar.png" alt=""/></a>-->
<!--                            <div class="uk-dropdown uk-dropdown-small">-->
<!--                                <ul class="uk-nav js-uk-prevent">-->
<!--                                -->
<!--<li>--><?php //$stat=$this->session->userdata('usr_FullName');
//		if($stat==''){
//			echo '';
//		} else {
//			echo $stat;
//		}
//?><!--	-->
<!--</li>-->
<!--                                    <li><a href="--><?php //echo base_url();?><!--user_profiles/User_profile">-->
<!--                                    <i class="material-icons md-12">settings</i>-->
<!--                                    <span> My profile</span>-->
<!--                                    </a></li>-->
<!---->
<!--                                    <li><a href="--><?php //echo base_url();?><!--logistic/Forwarder/logout">-->
<!--                                   <i class="material-icons">power_settings_new</i>-->
<!--                                    <span> Log Out</span>-->
<!--                                    </a></li>-->
<!--                                </ul>-->
<!--                            </div>-->
<!--                        </li>-->
<!--                    </ul>-->
                </div>
            </nav>
        </div>
        
    </header><!-- main header end -->
    <!-- main sidebar -->
    <aside id="sidebar_main">
        
        <div class="sidebar_main_header">
            <div class="sidebar_logo">
                <i class="material-icons">layers</i>
                <span><strong><?php echo isset($modulname)?$modulname:'';?></strong></span>
            </div>
      <!-- Menu setting -->
            <div class="sidebar_actions" style="margin-top:3px">
             
<div class="uk-button-dropdown" data-uk-dropdown>
                                
<span class="md-color-green-A400">
<?php 
	   $usrnm=$this->session->userdata('usr_FullName');
		if($usrnm==''){
			echo '';
		} else {
			echo substr($usrnm,0,18);	
		}
?></span><i class="material-icons md-color-grey-50 md-24">expand_more</i>


                                <div class="uk-dropdown">
                                    <ul class="uk-nav uk-nav-dropdown">
                                        <li><a href="<?php echo base_url();?>user_profiles/User_profile">
    </span><i class="material-icons">settings</i> Setting</a></li>
                                        <li><a href="<?php echo base_url();?>logistic/Forwarder/logout">
   </span><i class="material-icons">settings_power</i> Log Out</a></li>
                                    </ul>
                                </div>
                            </div>
   <p style=" margin-top:-1px;border-top:1px #2196f3 solid;text-transform:capitalize">
   <?php 
	 $grup=$this->session->userdata('GroupId');
	 $GroupName=$this->session->userdata('GroupName');
	   if($GroupName!='')
	   echo $GroupName;
	   ?>
   </p>             
                        
                        </div>
              <!-- end of Menu settings -->
            
        </div>
        
        <div class="menu_section" style="padding-bottomsidebar_main:50px">
            <ul>
            <?php
			if($grup=='1'){
				$menu_user='logistic/menu_forwarder';
			} elseif($grup=='2'){
				$menu_user='logistic/menu_mngr_sales';
			}elseif($grup=='3'){
				$menu_user='logistic/menu_sales';
			}elseif($grup=='4'){
				$menu_user='logistic/menu_mngr_ops';
			}elseif($grup=='5'){
				$menu_user='logistic/menu_ops';
			}
			
				//echo isset($menu_user)?$this->load->view($menu_user):'';
				echo isset($view2)?$this->load->view($view2):'';
				?>
			</ul>
		</div>
    </aside><!-- main sidebar end -->

<div id="page_content">
    <div id="page_content_inner">

     <nav>
    <div class="nav-wrapper">
      <div class="col s12 mybreadcrumb">
			<a href="<?php echo base_url();?>" class="breadcrumb">Home</a>
			<?php echo isset($scrumb)?$scrumb:'';?>
      </div>
    </div>
  </nav>

<!--        <div class="md-card" style=" background-color:transparent; border-bottom:1px red">-->
            <?php echo $this->load->view($view);?>
<!--        </div>-->

    </div>
    
    
</div>

    
    <!-- common functions -->
    <script src="<?php echo base_url();?>asset/assets/js/common.min.js"></script>
    <!-- uikit functions -->
    <script src="<?php echo base_url();?>asset/assets/js/uikit_custom.min.js"></script>
    <!-- altair common functions/helpers -->
    <script src="<?php echo base_url();?>asset/assets/js/altair_admin_common.min.js"></script>

    <!-- page specific plugins -->
    <!-- dragula.js -->
    <script src="<?php echo base_url();?>asset/bower_components/dragula.js/dist/dragula.js"></script>

    <!--  scrum board functions -->
    <script src="<?php echo base_url();?>asset/assets/js/pages/page_scrum_board.min.js"></script>
     <!--  forms advanced functions -->
<!--    <script src="<?php echo base_url();?>asset/assets/js/pages/forms_advanced.min.js"></script>
-->
    
<!-- DATATABLES -->
    <script src="<?php echo base_url();?>asset/bower_components/datatables/media/js/jquery.dataTables.min.js"></script>
    <!-- datatables colVis-->
    <!--<script src="<?php echo base_url();?>asset/bower_components/datatables-colvis/js/dataTables.colVis.js"></script>-->
    <!-- datatables tableTools-->
    <script src="<?php echo base_url();?>asset/bower_components/datatables-tabletools/js/dataTables.tableTools.js"></script>
    <!-- datatables custom integration -->
    <script src="<?php echo base_url();?>asset/assets/js/custom/datatables_uikit.min.js"></script>
    <!--  datatables functions -->
    <script src="<?php echo base_url();?>asset/assets/js/pages/plugins_datatables.min.js"></script>
<!-- DATATABLES -->


<!-- DASHBOARD ->
  <!-- page specific plugins -->
        <!-- d3 -->
        <script src="<?php echo base_url();?>asset/bower_components/d3/d3.min.js"></script>
        <!-- metrics graphics (charts) -->
        <script src="<?php echo base_url();?>asset/bower_components/metrics-graphics/dist/metricsgraphics.min.js"></script>
        <!-- chartist (charts) -->
        <script src="<?php echo base_url();?>asset/bower_components/chartist/dist/chartist.min.js"></script>
        <!-- maplace (google maps) -->
        <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
        <script src="bower_components/maplace-js/dist/maplace.min.js"></script>
        <!-- peity (small charts) -->
        <script src="<?php echo base_url();?>asset/bower_components/peity/jquery.peity.min.js"></script>
        <!-- easy-pie-chart (circular statistics) -->
        <script src="<?php echo base_url();?>asset/bower_components/jquery.easy-pie-chart/dist/jquery.easypiechart.min.js"></script>
        <!-- countUp -->
        <script src="<?php echo base_url();?>asset/bower_components/countUp.js/countUp.min.js"></script>
        <!-- handlebars.js -->
        <script src="<?php echo base_url();?>asset/bower_components/handlebars/handlebars.min.js"></script>
        <script src="<?php echo base_url();?>asset/assets/js/custom/handlebars_helpers.min.js"></script>
        <!-- CLNDR -->
        <script src="<?php echo base_url();?>asset/bower_components/clndr/src/clndr.js"></script>
        <!-- fitvids -->
        <script src="<?php echo base_url();?>asset/bower_components/fitvids/jquery.fitvids.js"></script>

        <!--  dashbord functions -->
        <script src="<?php echo base_url();?>asset/assets/js/pages/dashboard.min.js"></script>
<!-- DASBOARD -->

    <!-- page specific plugins -->
    <!-- ckeditor -->
    <script src="<?php echo base_url();?>asset/bower_components/ckeditor/ckeditor.js"></script>
    <script src="<?php echo base_url();?>asset/bower_components/ckeditor/adapters/jquery.js"></script>

    <!--  wysiwyg editors functions -->
    <script src="<?php echo base_url();?>asset/assets/js/pages/forms_wysiwyg.min.js"></script>

  <!--  notifications functions -->
    <script src="<?php echo base_url();?>asset/assets/js/pages/components_notifications.min.js"></script>
<!--    Dynamic link JS file-->
    <?php
    if(isset($js) === FALSE)
    {
        echo '';
    }else{
        foreach($js as $i){ echo $i;}
    }
    ?>
        
    <script>
        $(function() {
            // enable hires images
            altair_helpers.retina_images();
            // fastClick (touch devices)
            if(Modernizr.touch) {
                FastClick.attach(document.body);
            }
        });
    </script>


    <div id="style_switcher" style="visibility:hidden">
        <div id="style_switcher_toggle"><i class="material-icons">&#xE8B8;</i></div>
        <div class="uk-margin-medium-bottom">
            <h4 class="heading_c uk-margin-bottom">Colors</h4>
            <ul class="switcher_app_themes" id="theme_switcher">
                <li class="app_style_default active_theme" data-app-theme="">
                    <span class="app_color_main"></span>
                    <span class="app_color_accent"></span>
                </li>
                <li class="switcher_theme_a" data-app-theme="app_theme_a">
                    <span class="app_color_main"></span>
                    <span class="app_color_accent"></span>
                </li>
                <li class="switcher_theme_b" data-app-theme="app_theme_b">
                    <span class="app_color_main"></span>
                    <span class="app_color_accent"></span>
                </li>
                <li class="switcher_theme_c" data-app-theme="app_theme_c">
                    <span class="app_color_main"></span>
                    <span class="app_color_accent"></span>
                </li>
                <li class="switcher_theme_d" data-app-theme="app_theme_d">
                    <span class="app_color_main"></span>
                    <span class="app_color_accent"></span>
                </li>
                <li class="switcher_theme_e" data-app-theme="app_theme_e">
                    <span class="app_color_main"></span>
                    <span class="app_color_accent"></span>
                </li>
                <li class="switcher_theme_f" data-app-theme="app_theme_f">
                    <span class="app_color_main"></span>
                    <span class="app_color_accent"></span>
                </li>
                <li class="switcher_theme_g" data-app-theme="app_theme_g">
                    <span class="app_color_main"></span>
                    <span class="app_color_accent"></span>
                </li>
                <li class="switcher_theme_h" data-app-theme="app_theme_h">
                    <span class="app_color_main"></span>
                    <span class="app_color_accent"></span>
                </li>
                <li class="switcher_theme_i" data-app-theme="app_theme_i">
                    <span class="app_color_main"></span>
                    <span class="app_color_accent"></span>
                </li>
            </ul>
        </div>
        <div class="uk-visible-large uk-margin-medium-bottom">
            <h4 class="heading_c">Sidebar</h4>
            <p>
                <input type="checkbox" name="style_sidebar_mini" id="style_sidebar_mini" data-md-icheck />
                <label for="style_sidebar_mini" class="inline-label">Mini Sidebar</label>
            </p>
        </div>
        <div class="uk-visible-large uk-margin-medium-bottom">
            <h4 class="heading_c">Layout</h4>
            <p>
                <input type="checkbox" name="style_layout_boxed" id="style_layout_boxed" data-md-icheck />
                <label for="style_layout_boxed" class="inline-label">Boxed layout</label>
            </p>
        </div>
        <div class="uk-visible-large">
            <h4 class="heading_c">Main menu accordion</h4>
            <p>
                <input type="checkbox" name="accordion_mode_main_menu" id="accordion_mode_main_menu" data-md-icheck />
                <label for="accordion_mode_main_menu" class="inline-label">Accordion mode</label>
            </p>
        </div>
    </div>

    <script>
$(document).ready(function(e) {
       //hide_mysidebar();
	   getStatusSidebar();
	   alertnotif();
    });

function hide_mysidebar(){
	 altair_main_sidebar.hide_sidebar();
}	
function show_mysidebar(){
	altair_main_sidebar.show_sidebar();
}

/*  fungsi untuk menampilkan sidebar terbuka atau tidak
  jika function sidebaraktif di jalankan maka sidebar dimunculkan jika tdk maka sembunyikan
  dengan membuat fungsi getStatusSidebar*/
function sidebarAktif() {		
	localStorage.setItem('statusSidebar','aktif');
} 
// fungsi untuk menghapus localstorage browser
function sidebarNonAktif() {
	localStorage.removeItem('statusSidebar');
}
// cek status sidebar jika aktif munculkan jika tdk hilangkan
function getStatusSidebar() {
	var status = localStorage.getItem('statusSidebar');
	if (status) {
		show_mysidebar();
	} else {
		hide_mysidebar();
	}
}


        $(function() {
            var $switcher = $('#style_switcher'),
                $switcher_toggle = $('#style_switcher_toggle'),
                $theme_switcher = $('#theme_switcher'),
                $mini_sidebar_toggle = $('#style_sidebar_mini'),
                $boxed_layout_toggle = $('#style_layout_boxed'),
                $accordion_mode_toggle = $('#accordion_mode_main_menu'),
                $body = $('body');


            $switcher_toggle.click(function(e) {
                e.preventDefault();
                $switcher.toggleClass('switcher_active');
            });

            $theme_switcher.children('li').click(function(e) {
                e.preventDefault();
                var $this = $(this),
                    this_theme = $this.attr('data-app-theme');

                $theme_switcher.children('li').removeClass('active_theme');
                $(this).addClass('active_theme');
                $body
                    .removeClass('app_theme_a app_theme_b app_theme_c app_theme_d app_theme_e app_theme_f app_theme_g app_theme_h app_theme_i')
                    .addClass(this_theme);

                if(this_theme == '') {
                    localStorage.removeItem('altair_theme');
                } else {
                    localStorage.setItem("altair_theme", this_theme);
                }

            });

            // hide style switcher
            $document.on('click keyup', function(e) {
                if( $switcher.hasClass('switcher_active') ) {
                    if (
                        ( !$(e.target).closest($switcher).length )
                        || ( e.keyCode == 27 )
                    ) {
                        $switcher.removeClass('switcher_active');
                    }
                }
            });

            // get theme from local storage
            if(localStorage.getItem("altair_theme") !== null) {
                $theme_switcher.children('li[data-app-theme='+localStorage.getItem("altair_theme")+']').click();
            }


        // toggle mini sidebar

            // change input's state to checked if mini sidebar is active
            if((localStorage.getItem("altair_sidebar_mini") !== null && localStorage.getItem("altair_sidebar_mini") == '1') || $body.hasClass('sidebar_mini')) {
                $mini_sidebar_toggle.iCheck('check');
            }

            $mini_sidebar_toggle
                .on('ifChecked', function(event){
                    $switcher.removeClass('switcher_active');
                    localStorage.setItem("altair_sidebar_mini", '1');
                    location.reload(true);
                })
                .on('ifUnchecked', function(event){
                    $switcher.removeClass('switcher_active');
                    localStorage.removeItem('altair_sidebar_mini');
                    location.reload(true);
                });


        // toggle boxed layout

            if((localStorage.getItem("altair_layout") !== null && localStorage.getItem("altair_layout") == 'boxed') || $body.hasClass('boxed_layout')) {
                $boxed_layout_toggle.iCheck('check');
                $body.addClass('boxed_layout');
                $(window).resize();
            }

            $boxed_layout_toggle
                .on('ifChecked', function(event){
                    $switcher.removeClass('switcher_active');
                    localStorage.setItem("altair_layout", 'boxed');
                    location.reload(true);
                })
                .on('ifUnchecked', function(event){
                    $switcher.removeClass('switcher_active');
                    localStorage.removeItem('altair_layout');
                    location.reload(true);
                });

        // main menu accordion mode
            if($sidebar_main.hasClass('accordion_mode')) {
                $accordion_mode_toggle.iCheck('check');
            }

            $accordion_mode_toggle
                .on('ifChecked', function(){
                    $sidebar_main.addClass('accordion_mode');
                })
                .on('ifUnchecked', function(){
                    //$sidebar_main.removeClass('accordion_mode');
					$sidebar_main.addClass('accordion_mode');
                });


        });
		
<!-- MENU MODULS EVENT CLICK -->
$(".top_menu_toggle").click(function(e) {
	var icon=$(".icondrop").html();
	if(icon=='arrow_drop_down')
    $(".icondrop").html('chevron_right');
	else
	$(".icondrop").html('arrow_drop_down');
});


/* FOR ALERT N NOTIFICATION */
//function alertnotif(){
//	$.UIkit.notify({
//                  message : '<i class="material-icons md-36 md-color-grey-50">email</i> <span> New Notification !</span><p> You Have 2 Email in your Inbox</p>',
//                  timeout : false,
//				  position : 'top',
//                  status  : 'danger'
//              });
//}

    </script>
</body>
</html>