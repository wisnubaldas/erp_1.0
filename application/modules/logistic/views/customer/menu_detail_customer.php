<div class="menu_section">
            <ul>   
 <?php
  foreach($idcust as $hdr){ 
 ?>             
<li title="Dashboard">
     <a  onclick="reloadcontent('general','<?php echo $hdr->id_header;?>')">
    <span class="menu_icon"><i class="material-icons">bookmark_border</i></span>
    <span class="menu_title">General</span>
     </a>
     </li>            
     <li title="List">
     <a  onclick="reloadcontent('sales','<?php echo $hdr->id_header;?>')">
     <span class="menu_icon"><i class="material-icons">local_atm</i></span>
     <span class="menu_title">Sales</span>
     </a>
     </li>
     <li title="List">
     <a  onclick="reloadcontent('address','<?php echo $hdr->id_header;?>')">
     <span class="menu_icon"><i class="material-icons">import_contacts</i></span>
     <span class="menu_title">Address</span>
     </a>
     </li>
     <li title="List">
     <a  onclick="reloadcontent('commodity','<?php echo $hdr->id_header;?>')">
     <span class="menu_icon"><i class="material-icons">extension</i></span>
     <span class="menu_title">Commodity</span>
     </a>
     </li>
     <li title="List">
     <a  onclick="reloadcontent('service','<?php echo $hdr->id_header;?>')">
     <span class="menu_icon"><i class="material-icons">accessibility</i></span>
     <span class="menu_title">Service</span>
     </a>
     </li>
     <li title="List">
     <a  onclick="reloadcontent('billing','<?php echo $hdr->id_header;?>')">
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
            
            <?php } ?>
        </div>
                
