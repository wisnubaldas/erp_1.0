<style>
.gallery_grid_item .file{
	height:80px;
	width:50%;
	text-align:center;
}
</style>
       <div class="uk-grid"> 
  <?php
/*  $data=array('file_icon.png','b','c');*/
  foreach($attach as $row){
	
	$data_file=$row->PathPhoto; 
	
	$cek_file=substr($data_file, -3); 
	if($cek_file=='jpg'|| $cek_file=='jpeg'){
		$pic=$row->PathPhoto;
		$action=base_url().'asset/images/inquiry/'.$data_file;
		$lightbox='data-uk-lightbox="{group:"gallery"}"';
	} else {
		$pic='file_icon.png';
		$action='#';
		$lightbox='onclick="modalPDF()"';
	}
  ?>    
      
        <div class="uk-width-medium-2-10">
                    
                        <div class="gallery_grid_item md-card-content">
                            <a href="<?php echo $action;?>" <?php echo $lightbox;?>>
   <img src="<?php echo base_url();?>asset/images/inquiry/<?php echo $pic ;?>" class="file" style="margin-left:18%">
                            </a>
                            <div class="gallery_grid_image_caption">
                                <div class="gallery_grid_image_menu" data-uk-dropdown="{pos:'top-right'}">
                                    <i class="md-icon material-icons">&#xE5D4;</i>
                                    <div class="uk-dropdown uk-dropdown-small">
                                        <ul class="uk-nav">
                                            <li><a href="#"><i class="material-icons uk-margin-small-right">cloud_download</i> download</a></li>
                                            <li><a href="#"><i class="material-icons uk-margin-small-right">remove_red_eye</i> view</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <span class="gallery_image_title">
                <?php echo $row->Remarks;?>
                </span>
        <p>1 Jun 2016, 22KB</p>
                            </div>
                        </div>
                   </div>
              
        <?php  } ?>      
              
              </div>
              


 
 <!-- MODAL ADD -->
 <form method="post" id="formfile" enctype="multipart/form-data" data-parsley-validate="">
 
 <div id="modal_description" class="uk-modal">
                                <div class="uk-modal-dialog">
                                    <button type="button" class="uk-modal-close uk-close"></button>
   <h2 class="heading_a">Overview Attachment</h2>
                                    
  <div id="md-card" style="width:100%; max-height:500px;height:500px">
  
<object data="<?php echo base_url();?>asset/images/inquiry/myfile.pdf" type="application/pdf" style="width:100%; max-height:500px;height:500px">
  <p>Alternative text - include a link <a href="myfile.pdf">to the PDF!</a></p>
</object>


   
     
     </div>
                                    
                                    

                                   
                                </div>
                            </div>
                            
                            </form>
 <!-- MODAL ADD -->
  
   <script>
var $jq = jQuery.noConflict();

function modalPDF(){
	
    var modal = UIkit.modal("#modal_description");
   			   modal.show();
}


</script>   

     
