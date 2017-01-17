    <!-- altair common functions/helpers -->
    <script src="<?php echo base_url();?>asset/assets/js/altair_admin_common.min.js"></script>

    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <!-- Optional Bootstrap theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

    <!-- Include SmartWizard CSS -->
    <link href="<?php echo base_url();?>asset/assets/SmartWizard/css/smart_wizard.min.css" rel="stylesheet" type="text/css" />
    
    <!-- Optional SmartWizard theme -->
    <link href="<?php echo base_url();?>asset/assets/SmartWizard/css/smart_wizard_theme_dots.min.css" rel="stylesheet" type="text/css" /> 
          
    <script src="<?php echo base_url();?>asset/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="stylesheet" href="<?php echo base_url();?>asset/sweetalert/dist/sweetalert.css"/>
  
<div class="uk-container uk-container-center uk-margin-top uk-margin-large-bottom">
    <div class="uk-grid">
        <div class="uk-width-1-1">
            Logo 
        </div>
    </div>
        <form action="#" id="myForm" role="form" data-toggle="validator" method="post" accept-charset="utf-8">
                    
        <!-- SmartWizard html -->
        <div id="smartwizard">
            <ul>
                <li><a href="#step-1"><small>Start</small></a></li>
                <li><a href="#step-2"><small>Verivication</small></a></li>
                <li><a href="#step-3"><small>Information</small></a></li>
                <li><a href="#step-4"><small>Location</small></a></li>
                <li><a href="#step-5"><small>Service</small></a></li>
                <li><a href="#step-6"><small>Package</small></a></li>
                <li><a href="#step-7"><small>Finish</small></a></li>
            </ul>
            
            <div>
                <div id="step-1" class="">
                    <h2>Start</h2>
                    <p>Please fill in your data</p>
                    <hr class="uk-article-divider" />
                    <div  id="form-step-0" role="form" data-toggle="validator">
                        <div class="form-group">
                            <label for="email">Name:</label>
                            <input type="text" class="form-control" name="nama" id="nama" placeholder="" required>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <label for="email">Email address:</label>
                            <input type="email" class="form-control" name="email" id="email" placeholder="Write your email address" required>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <div id="capcha"></div>
                            <div id="loader"><div class="loader"></div>loading capcha</div>
                        </div>
                    <div class="form-group">
                            <label for="email">Input Capcha</label>
                            <input type="text" class="form-control" name="text_capcha" id="text_capcha" required>
                            <div class="help-block with-errors"></div>
                    </div>
                    <div id="alert" class="alert alert-danger">
                      <strong>Your Captcha Is Wrong</strong> .
                    </div>
                    <br />
                    <br />
                    <br />
                    <br />
                    </div>
                    
                </div>
                <div id="step-2" class="">
                    <h2>Verification</h2>
                    <p>Verification code has been sent to your email, pls check your email and insert the verification code</p>
                    <hr class="uk-article-divider" />
                    <div id="form-step-1" role="form" data-toggle="validator">
                        <div class="form-group">
                            <label for="name">Code:</label>
                            <input type="text" class="form-control" name="code_ver" id="code_ver" placeholder="Write your name" required>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div id="alert_code" class="alert alert-danger">
                            <strong>Your Code Is Wrong</strong> .
                        </div>
                        <br />
                        <br />
                        <br />
                        <br />
                        <br />
                        <br />
                    </div>
                </div>
                <div id="step-3" class="">
                    <h2>Information</h2>
                    <p>Thank you for your verification, please input detail information below</p>
                    <hr class="uk-article-divider" />
                    <div id="form-step-2" role="form" data-toggle="validator">
                        <div class="form-group">
                            <label for="company">Company Name</label>
                            <input type="text" class="form-control" name="company" id="company" placeholder="Write your Company" required>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <label for="address">Address</label>
                            <textarea class="form-control" name="address" id="address" required></textarea>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <label for="address">Phone No</label>
                            <input type="text" class="form-control" name="phone" id="phone" placeholder="Write your Phone No" required>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <label for="address">Mobile Phone No</label>
                            <input type="text" class="form-control" name="mphone" id="mphone" placeholder="Write your Mobile Phone No" required>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <label for="address">PIC</label>
                            <input type="text" class="form-control" name="pic" id="pic" required>
                            <div class="help-block with-errors"></div>
                        </div>
                        <br />
                        <br />
                    </div>
                </div>
                <div id="step-4" class="">
                    <h2>Location</h2>
                    <p>Please Input detail location</p>
                      <div id="form-step-3" role="form" data-toggle="validator">
                        <div class="form-group">
                            <label for="address">Origin (Country)</label>
                            <select class="form-control" id="origin_country" name="origin_country" onchange="get_oricity(this.value)" required>
                            <option value="">wait.....</option>                            
                            </select>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <label for="address">Origin (City)</label>
                            <select class="form-control" id="origin_city" name="origin_city" required>
                            <option value="">wait.....</option>                            
                            </select>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <label for="address">Address</label>
                            <textarea class="form-control" name="origin_address" id="origin_address" required></textarea>
                            <div class="help-block with-errors"></div>
                        </div>
                    
                        <div class="form-group">
                            <label for="address">Zip Code)</label>
                            <input type="text" class="form-control" name="origin_zip" id="origin_zip" placeholder="Write Origin Zip Code " required>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <label for="address">Destination (Country)</label>
                            <select class="form-control" name="destination_country" id="destination_country" onchange="get_descity(this.value)" required>
                            <option value="">Wait.....</option>
                            </select>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <label for="address">Destination (City)</label>
                            <select class="form-control" name="destination_city" id="destination_city" required>
                            <option value="">wait...</option>
                            </select>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <label for="address">Address</label>
                            <textarea class="form-control" name="destination_address" id="destination_address" required></textarea>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <label for="address">Zip Code</label>
                            <input type="text" class="form-control" name="destination_zip" id="destination_zip" placeholder="Write your Destination Zip Code" required>
                            <div class="help-block with-errors"></div>
                        </div>
               </div>
                <br />
                <br />
                <br />
                <br />
                <br />
                <br />
                <br />
                <br />                       
            </div>
            <div id="step-5" class="">
                    <h2>Service</h2>
                    <p>Please Input detail of service</p>
                      <div id="form-step-4" role="form" data-toggle="validator">
                        <div class="form-group">
                            <label for="address">Moda Of Service</label>
                            <select class="form-control" name="mos" id="mos" onchange="getmos(this.value)" required>
                            <option value="">wait...</option>
                            </select>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group" id="Lt">
                            <label for="address">Loading Type</label>
                            <select class="form-control" name="loading_type" id="loading_type" >
                            <option value="">...</option>
                            <option value="LCL">LCL</option>
                            <option value="FCL">FCL</option>
                            </select>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <label for="address">Incoterm</label>
                            <select class="form-control" name="incoterm" id="incoterm" onchange="gtos(this.value)" required>
                            <option value="">...</option>
                            <option value="EXW">Ex Works</option>
                            <option value="FCA">Free Carrier</option>
                            <option value="FAS">Free Alongside Ship</option>
                            <option value="FOB">Free Onboard Vassel</option>
                            <option value="CRF">Cost And Freight</option>
                            <option value="CIF">Cost Isurance And Freight</option>
                            <option value="CPT">Carriage Paid To</option>
                            <option value="CIP">Carriage Isurance Paid To</option>
                            <option value="DAF">Delivered At Frontier</option>
                            <option value="DES">Delivered Ex Ship</option>
                            <option value="DEQ">Delivered Ex Quai Duty Paid</option>
                            <option value="DDU">Delivered Duty Unpaid</option>
                            <option value="DDP">Delivered Duty Paid</option>
                            </select>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <label for="address">Type Of Service</label>
                            <select class="form-control" name="tos" id="tos" required>
                            <option value="">...</option>
                            </select>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <label for="address">Other requirements</label>
                            <input type="text" class="form-control" name="other" id="other" required>
                            <div class="help-block with-errors"></div>
                        </div>
               </div>
                <br />
                <br />
                <br />
                <br />
                <br />
                <br />
                <br />
                <br />                       
            </div>
            <div id="step-6">
                    <h2>Package</h2>
                    <p>Please input detail information of package</p>
                      <div id="form-step-5" role="form" data-toggle="validator" class="uk-grid">
                       <div class="form-group uk-width-1-5">
                            <label for="address">Date Of Availability</label>
                            <input type="text" class="form-control" name="doa" id="doa" required>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group uk-width-1-5">
                            <label for="address">Commodity</label>
                            <select class="form-control" name="commodity" id="commodity" required>
                            <option value="">wait...</option>
                            </select>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group uk-width-1-1">
                            <label for="address">Description Of Good</label>
                            <input type="text" class="form-control" name="dog" id="dog"  required>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group uk-width-1-6">
                            <label for="address">Quantity</label>
                            <input type="text" class="form-control" name="qty" id="qty"  required>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group uk-width-1-3">
                            <label for="address">Unit</label>
                            <select class="form-control" name="unit" id="unit" required>
                            <option value="">...</option>
                            <option value="pieces">Pieces</option>
                            <option value="carton">Carton</option>
                            </select>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group uk-width-1-1"><hr class="uk-article-divider" /></div>
                        <div class="form-group uk-width-1-6">
                            <label for="address">Weight</label>
                            <input type="text" class="form-control uk-width-1-6" name="w" id="w"  required>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group uk-width-1-1"><hr class="uk-article-divider" /></div>
                        <div class="form-group">
                            <label for="address">Length(P)</label>
                            <input type="text" class="form-control" name="p" id="p"  >
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <label for="address">Width(L)</label>
                            <input type="text" class="form-control" name="l" id="l" >
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <label for="address">Height(T)</label>
                            <input type="text" class="form-control" name="t" id="t" >
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group uk-width-1-1">
                            <label for="address">additional information</label>
                            <input type="text" class="form-control" name="addinf" id="addinf"  required>
                            <div class="help-block with-errors"></div>
                        </div>
                        </form>
                        <div class="form-group uk-width-1-1">
                            <label for="address">Upload additional information</label>
                            <input onchange="readURL(this)" id="userfile" name="userfile" value="" type="file" class="file"/>
                            <div class="help-block with-errors"></div>
                        </div>
               </div>
                <br />
                <br />
                <br />
                <br />
                <br />
                <br />
                <br />
                <br />                       
            </div>
            <div id="step-7" class="">  
            <span id="finish_inquery"> 
             <h2>Finish</h2>                   
                    <p>We are summary of your quick inquery, click finish to proceed</p>
                    <style>
                    td,th{
                        padding: 3px;
                    }
                    </style>
                    <table border="0" cellpadding="10" cellspacing="10">
                      <tr>
                        <td colspan="3"><center><b>INQUIRY SUMMARY</b></br><b id="tgl"></b></center>&nbsp;</td>
                      </tr>
                      <tr>
                        <td>COMPANY</td>
                        <td>:</td>
                        <td id="sumcompany">&nbsp;</td>
                      </tr>
                      <tr>
                        <td>ADDRESS</td>
                        <td>:</td>
                        <td id="sumaddress">&nbsp;</td>
                      </tr>
                      <tr>
                        <td>PHONE</td>
                        <td>:</td>
                        <td id="sumphone">&nbsp;</td>
                      </tr>
                      <tr>
                        <td>MOBILE PHONE</td>
                        <td>:</td>
                        <td id="summobile">&nbsp;</td>
                      </tr>
                      <tr>
                        <td>PIC</td>
                        <td>:</td>
                        <td id="sumpic">&nbsp;</td>
                      </tr>
                      <tr>
                        <td valign="top">ORIGIN / DESTINATION</td>
                        <td valign="top">:</td>
                        <td id="sumorides">&nbsp;</td>
                      </tr>
                      <tr>
                        <td>ADDRESS OF ORIGIN</td>
                        <td>:</td>
                        <td id="sumadori">&nbsp;</td>
                      </tr>
                      <tr>
                        <td>ADDRESS OF DESTINATION</td>
                        <td>:</td>
                        <td id="sumaddes">&nbsp;</td>
                      </tr>
                      <tr>
                        <td>MODA OF SERVICE</td>
                        <td>:</td>
                        <td id="summos">&nbsp;</td>
                      </tr>
                      <tr>
                        <td>INCOTERM</td>
                        <td>:</td>
                        <td id="sumincoterm">&nbsp;</td>
                      </tr>
                      <tr>
                        <td>TYPE OF SERVICE</td>
                        <td>:</td>
                        <td id="sumtof">&nbsp;</td>
                      </tr>
                      <tr>
                        <td>OTHER REQUIREMENT</td>
                        <td>:</td>
                        <td id="sumother">&nbsp;</td>
                      </tr>
                      <tr>
                        <td>COMMODITY</td>
                        <td>:</td>
                        <td id="sumcomm">&nbsp;</td>
                      </tr>
                      <tr>
                        <td>DESCRIPTION OF GOODS</td>
                        <td>:</td>
                        <td id="sumdog">&nbsp;</td>
                      </tr>
                      <tr>
                        <td>QUANTITY / UNIT</td>
                        <td>:</td>
                        <td id="sumqtyunit">&nbsp;</td>
                      </tr>
                      <tr>
                        <td>WEIGHT</td>
                        <td>:</td>
                        <td id="sumw">&nbsp;</td>
                      </tr>
                      <tr>
                        <td>VOLUME (P x L x T)</td>
                        <td>:</td>
                        <td id="sumv">&nbsp;</td>
                      </tr>
                      <tr>
                        <td>CARGO AVAILIBITY</td>
                        <td>:</td>
                        <td id="sumcarav">&nbsp;</td>
                      </tr>
                      <tr>
                        <td>ADDITIONAL INFORMATION</td>
                        <td>:</td>
                        <td id="sumaddinfo">&nbsp;</td>
                      </tr>
                    </table>
            </span>
            <span id="sucses_inquery">
            <h2>Finish</h2>
                <p>Thank you for your inquery. the summary of inquery has been sent to your email and our team will proceed this inquery.</br>
                Please don't hesitate to contact our team at 021xxx or info@swadaya.co.id
                </p>
                <p>
                <a href="javascript:void(0)" onclick="addagain();">Add</a>
                </p>
                <p>
                <a href="javascript:void(0)">Back To Home</a>
                </p>
            </span>                    
                <br />
                <br />
                <br />
                <br />
                <br />
                <br />
                <br />
                <br />                       
            </div>
        </div>
        </div>

    </div>
    
    <!-- Include jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include jQuery Validator plugin -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.5/validator.min.js"></script>
    

    <!-- Include SmartWizard JavaScript source -->
    <script type="text/javascript" src="<?php echo base_url();?>asset/assets/SmartWizard/js/jquery.smartWizard.min.js"></script>
    
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  
    <script type="text/javascript">
    var cp = '';
    var xx= '';
    var zz= 0;
    var noid='';
        $(document).ready(function(){
        //swal({title: "Prosesing...!",text: '<center><div class="proses_loader"></div></center>',html: true,showConfirmButton: false});
        $('#doa').datepicker({
            dateFormat: 'yy-mm-dd'
        });
            
        $('#userfile').on('change', function(evt){
            var sizefile= this.files[0].size;
        });
            $('html, body').animate({ scrollTop: 0 }, 'fast');
            capcha();
            load_cmb('#origin_country','<?php echo base_url();?>front/cwizard/cmbCountry');
            load_cmb('#origin_city','<?php echo base_url();?>front/cwizard/cmbCity');
            load_cmb('#destination_country','<?php echo base_url();?>front/cwizard/cmbCountry');
            load_cmb('#destination_city','<?php echo base_url();?>front/cwizard/cmbCity');
            load_cmb('#commodity','<?php echo base_url();?>front/cwizard/cmbCom');
            load_cmb('#mos','<?php echo base_url();?>front/cwizard/mos');
            $('#Lt').hide();
            $('#alert').hide();
            $('#alert_code').hide();
            $('#sucses_inquery').hide();
            document.getElementById("loading_type").required = false;
            
            $('#smartwizard').smartWizard({
                    selected: 0, 
                    theme: 'dots',
                    transitionEffect:'fade',
                    toolbarSettings: {toolbarPosition: 'bottom',
                                      toolbarExtraButtons: [
                                            {label: 'Finish', css: 'btn-info disabled btn-finish hidden', onClick: function(){ 
                                                    if( !$(this).hasClass('disabled')){ 
                                                         
                                                        var elmForm = $("#myForm");
                                                        if(elmForm){
                                                            elmForm.validator('validate'); 
                                                            var elmErr = elmForm.find('.has-error');
                                                            if(elmErr && elmErr.length > 0){
                                                                swal("Oops we still have error in the form! ", "", "error");
                                                                return false;    
                                                            }else{
                                                                //alert('Great! we are ready to submit form');
                                                                //elmForm.submit();
                                                                //var t = JSON.stringify($('#myForm').serialize());
                                                                    //alert(t);
                                                                    //if(zz==0){
                                                                    //swal({title: "Prosesing...!",text: '<center><div class="proses_loader"></div></center>',html: true,showConfirmButton: false});
                                                                     $.ajax({
                                                                        url : "<?php echo base_url();?>front/cwizard/svinquery",
                                                                        type: "POST",
                                                                        data: $('#myForm').serialize(),
                                                                        dataType: "JSON",
                                                                        success: function(data)
                                                                        {
                                                                            //swal("Data Berhasil Tersimpan...!", "", "success");
                                                                            zz=1;
                                                                           //swal("Data Saved...!", "", "success");
                                                                           $('#finish_inquery').hide();
                                                                           $('#sucses_inquery').show();
                                                                           $('.btn-finish').addClass('hidden');
                                                                           $('.btn').addClass('hidden');     
                                                                           $('.nav').addClass('hidden'); 
                                                                           $('html, body').animate({ scrollTop: 0 }, 'fast');                                                                                                                                                                                                                           
                                                                        },
                                                                        error: function (jqXHR, textStatus, errorThrown)
                                                                        {
                                                                            alert('Something went wrong!');                                                                            
                                                                           // swal("Oops... Something went wrong! ", "", "error");
                                                                           //swal("Oops... Something went wrong!", "Please Call IT Programer!", "error");
                                                                        }
                                                                     });
                                                                    //}
                                                                    
                                                                return false;
                                                            }
                                                        }
                                                    }
                                                } 
                                            },
                                            {label: 'Cancel', css: 'btn-danger hidden', onClick: function(){ $('#smartwizard').smartWizard("reset"); $('#myForm').find("input, textarea").val(""); }}
                                        ]
                                    }
               });
            
            $("#smartwizard").on("leaveStep", function(e, anchorObject, stepNumber) {
                getsummary();
                var c = $("#text_capcha").val();
                var txtver = $("#code_ver").val();
                var elmForm = $("#form-step-" + stepNumber);
                if(elmForm){
                    elmForm.validator('validate'); 
                    var elmErr = elmForm.children('.has-error');
                    if(elmErr && elmErr.length > 0){
                        // Error found
                        return false;    
                    }else{
                        // cek validasi capha 
                        if(stepNumber==0){
                            if(cp!=c){
                                $('#alert').show();    
                                return false;
                            }else{
                                $('#alert').hide();
                                $.ajax({
                                       url: "<?php echo base_url();?>front/cwizard/crver",
                                       dataType:'json',
                                           success: function(data){
                                                xx=data.qwaszx;
                                           }
                                   });   
                            }
                        }
                        if(stepNumber==1){
                            //alert(xx);
                            if(txtver!=xx){
                                $('#alert_code').show();
                                return false;
                            }else{
                                $.ajax({
                                       url: "<?php echo base_url();?>front/cwizard/crverxxx",
                                       dataType:'json',
                                           success: function(data){
                                           }
                                });
                                $('#alert_code').hide();
                            }                           
                        }
                        if(stepNumber==5){
                            getsummary();
                        }
                    }
                }    
                return true;
            });
            
            $("#smartwizard").on("showStep", function(e, anchorObject, stepNumber) {
                if(stepNumber == 6){ 
                    $('.btn-finish').removeClass('disabled');  
                    $('.btn-finish').removeClass('hidden');  
                }else{
                    $('.btn-finish').addClass('disabled');
                }
            });                               
            
        }); 
        
        function get_oricity(id){
            load_cmb('#origin_city','<?php echo base_url();?>front/cwizard/cmbCity'+'/'+id);
        }  
        function get_descity(id){
            load_cmb('#destination_city','<?php echo base_url();?>front/cwizard/cmbCity'+'/'+id);
        }
        function getmos(mos){
           if(mos=='006'){ 
            $('#Lt').show();
            document.getElementById("loading_type").required = true;
            }else{
            $('#Lt').hide();    
            document.getElementById("loading_type").required = false;
            }
        }
        function gtos(tos){
            $('#tos').empty();
            $('#tos').append("<option value=''>...</option>");
            var origin = $('#origin_country').val();
            if(origin=='ID'){
                if(tos=='FCA' || tos=='FAS' || tos=='FOB'){
                    $('#tos').append("<option value='P2P'>Port To Port</option>"); 
                    $('#tos').append("<option value='P2D'>Port To Door</option>");  
                }else if(tos=='CPT' || tos=='CFR' || tos=='CIF' || tos=='CIP'){
                    $('#tos').append("<option value='P2P'>Port To Port</option>"); 
                    $('#tos').append("<option value='D2P'>Door To Port</option>");
                }else{
                     $('#tos').append("<option value='D2P'>Door To Door</option>");
                }
            }else{
                if(tos=='FCA' || tos=='FAS' || tos=='FOB'){
                    $('#tos').append("<option value='P2P'>Port To Port</option>"); 
                    $('#tos').append("<option value='P2D'>Port To Door</option>");  
                }else if(tos=='CPT' || tos=='CFR' || tos=='CIF' || tos=='CIP'){
                    $('#tos').append("<option value='P2P'>Port To Port</option>"); 
                    $('#tos').append("<option value='D2P'>Door To Port</option>");
                }else{
                     $('#tos').append("<option value='D2P'>Door To Door</option>");
                }        
            }
        }
        function capcha(){
            $('#loader').show();
            $('#capcha').html('');
            $.ajax({
               url: "<?php echo base_url();?>front/cwizard/capcha",
               dataType:'json',
                   success: function(data){
                        $('#capcha').html(data.imgcap+'<a href="javascript:void(0)" onclick="capcha();">Reload Captcha</a>');
                        $('#loader').hide();
                        cp = data.imgtxt;
                   }
           }); 
        }
        function getsummary(){
 //variable
            var nama =$('#nama').val();
            var email =$('#email').val();
            var company =$('#company').val();
            var address =$('#address').val();
            var phone =$('#phone').val();
            var mphone =$('#mphone').val();
            var pic =$('#pic').val();
            var kd_origin_country =$("#origin_country").val();
            var kd_origin_city =$('#origin_city').val();
            var origin_country =$("#origin_country option:selected").text();
            var origin_city =$('#origin_city option:selected').text();
            var origin_address =$('#origin_address').val();
            var origin_zip =$('#origin_zip').val();
            var kd_destination_country =$("#destination_country").val();
            var kd_destination_city =$('#destination_city ').val();
            var destination_country =$("#destination_country option:selected").text();
            var destination_city =$('#destination_city option:selected').text();
            var destination_address =$('#destination_address').val();
            var destination_zip =$('#destination_zip').val();
            var mos =$('#mos option:selected').text();
            var loading_type =$('#loading_type option:selected').text();
            var incoterm =$('#incoterm option:selected').text();
            var tos =$('#tos option:selected').text();
            var other =$('#other').val();
            var doa =$('#doa').val();
            var commodity =$('#commodity option:selected').text();
            var dog =$('#dog').val();
            var qty =$('#qty').val();
            var unit =$('#unit option:selected').text();
            var w =$('#w').val();
            var p =$('#p').val();
            var l =$('#l').val();
            var t =$('#t').val();
            var addinf =$('#addinf').val();
//set sum  
            $('#tgl').html('<?php echo date('d-m-Y');?>');        
            $('#sumcompany').html(company);  
            $('#sumaddress').html(address); 
            $('#sumphone').html(phone); 
            $('#summobile').html(mphone); 
            $('#sumpic').html(pic); 
            $('#sumorides').html(kd_origin_city+', '+origin_city+' - '+origin_country+'</br>'+kd_destination_city+', '+destination_city+' - '+destination_country); 
            $('#sumadori').html(origin_address); 
            $('#sumaddes').html(destination_address); 
            $('#summos').html(mos); 
            $('#sumincoterm').html(incoterm); 
            $('#sumtof').html(tos); 
            $('#sumother').html(other); 
            $('#sumcomm').html(commodity); 
            $('#sumdog').html(dog); 
            $('#sumqtyunit').html(qty+' '+unit); 
            $('#sumw').html(w);
            $('#sumv').html((p*l*t)+'('+p+'x'+l+'x'+t+')'); 
            $('#sumcarav').html(doa); 
            $('#sumaddinfo').html(addinf);  
             
        }
        function addagain(){
            $('#doa').val('');
            $('#commodity').val('');
            $('#dog').val('');
            $('#qty').val('');
            $('#unit').val('');
            $('#w').val('');
            $('#p').val('');
            $('#l').val('');
            $('#t').val('');
            $('#addinf').val('');
            $('#finish_inquery').show();
            $('#sucses_inquery').hide();
            $('.btn').removeClass('hidden'); 
            $('.btn-finish').addClass('hidden');    
            $('.nav').removeClass('hidden');
            $('.btn-danger').addClass('hidden');
            $("#smartwizard").smartWizard('goToStep', 5);
        }
    </script>  