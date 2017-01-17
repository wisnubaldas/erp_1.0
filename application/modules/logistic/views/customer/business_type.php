
<style>
.uk-grid-collapse .md-card-content{
	margin-bottom:10px;
	
}

</style>

<div class="md-card-toolbar">
                            <div class="md-card-toolbar-actions">
                                <ul class="uk-tab" data-uk-tab="{connect:'#card_tabs',animation:'slide-horizontal'}">
                                    
                    <li>
           <button href="#" onclick="add_address()"  class="md-btn md-btn-primary md-btn-wave-light waves-effect waves-button waves-light">
                   <i class="material-icons md-color-grey-50">add_circle_outline</i>
        		    <span>New</span>
                    </button>
                </li>              
                <li>&nbsp;</li>
                
                                </ul>
                            </div>
                            <h3 class="md-card-toolbar-heading-text">
 <i class="md-list-addon-icon material-icons md-24">import_contacts</i> ADDRESS
                            </h3>
                        </div>
                        
<div class="uk-grid uk-grid-collapse" data-uk-grid-margin="" data-uk-grid-match="{target:'.md-card'}">

 <?php
  foreach($record as $rw){ 
	
 ?> 
                <div class="uk-width-medium-1-3 uk-row-first">
                    <div class="md-card" style="min-height: 152px;">
                        <div class="md-card-content">
              <h3><?php echo $rw->nm_business_type;?></h3>
              <p><?php echo $rw->nm_business_type;?></p>
                        </div>
                    </div>
                </div>
<?php } ?>
                

                
            </div>