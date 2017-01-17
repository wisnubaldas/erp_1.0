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

    <title>Quick Inquiry</title>


    <!-- uikit -->
    <link rel="stylesheet" href="<?php echo base_url();?>asset/bower_components/uikit/css/uikit.almost-flat.min.css" media="all">
            <!-- altair admin -->
    <link rel="stylesheet" href="<?php echo base_url();?>asset/assets/css/main.min.css" media="all">

    <!-- common functions -->
    <script src="<?php echo base_url();?>asset/assets/js/common.min.js"></script>
    <!-- uikit functions -->
    <script src="<?php echo base_url();?>asset/assets/js/uikit_custom.min.js"></script>
    <!-- altair common functions/helpers -->
    <!-- uikit -->
    <link rel="stylesheet" href="bower_components/uikit/css/uikit.almost-flat.min.css" media="all">
        <!-- altair common functions/helpers -->
    <script src="<?php echo base_url();?>asset/assets/js/altair_admin_common.min.js"></script>

<style>
.loader {
  border: 16px solid #f3f3f3;
  border-radius: 50%;
  border-top: 16px solid black;
  border-bottom: 16px solid black;
  width: 60px;
  height: 60px;
  -webkit-animation: spin 2s linear infinite;
  animation: spin 2s linear infinite;
}

@-webkit-keyframes spin {
  0% { -webkit-transform: rotate(0deg); }
  100% { -webkit-transform: rotate(360deg); }
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}
</style>
</head>
<body style="background-color: white;">
<?php echo $this->load->view($view);?>
    <!-- google web fonts -->
    <script>
    
    function load_cmb_get($id,$url,$get_id){
        $($id).empty();
        $($id).append("<option value=''>wait.....</option>");
      // $($id).chosen({width:'100%'});
      $($id).prop('disabled', true);
       $.ajax({
           url: $url,
               dataType: "json",
               success: function(data){
                    $($id).empty();
                    $($id).append("<option value=''>no value.....</option>");
                     for (var i =0; i<data.length; i++){
                       var option = "<option value='"+data[i].id+"'>"+data[i].name+"</option>";
                          $($id).append(option);
                       }
                    // $($id).trigger("chosen:updated"); 
                    $($id).prop('disabled', false); 
               }
       }).done(function(){
                     //         $($id).val($get_id).trigger("chosen:updated");
                         }); 
    }
    
    function load_cmb($id,$url){
      $($id).empty();
      $($id).append("<option value=''>wait.....</option>");
      /// $($id).chosen({width:'100%'});
      $($id).prop('disabled', true);
       $.ajax({
           url: $url,
               dataType: "json",
               success: function(data){
                    $($id).empty();
                    $($id).append("<option value=''>no value.....</option>");
                     for (var i =0; i<data.length; i++){
                       var option = "<option value='"+data[i].id+"'>"+data[i].name+"</option>";
                          $($id).append(option);
                       }
                     //$($id).trigger("chosen:updated");
                     $($id).prop('disabled', false);  
               }
       }); 
    }
    
    
        WebFontConfig = {
            google: {
                families: [
                    'Source+Code+Pro:400,700:latin',
                    'Roboto:400,300,500,700,400italic:latin'
                ]
            }
        };
        (function() {
            var wf = document.createElement('script');
            wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
            '://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
            wf.type = 'text/javascript';
            wf.async = 'true';
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(wf, s);
        })();
    </script>
        
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
        
    <script src="<?php echo base_url();?>asset/assets/js/altair_admin_common.js"></script>
</body>
</html>