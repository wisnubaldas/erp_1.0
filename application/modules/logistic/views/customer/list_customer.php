 <script src="<?php echo base_url();?>asset/datatables/js/jquery-3.1.1.js"></script>
    <link rel="stylesheet" href="<?php echo base_url();?>asset/datatables/css/jquery.dataTables.min.css">

<style>
#tbl_customer tr td:hover{
	cursor:pointer;
}
/*====TOOL TIPS =====*/
.mytooltip {
    position: relative;
    display: inline-block;
    border-bottom: 1px thin black;
}

/*==toltips arrow====*/
.mytooltip .mytooltiptext::after {
    content: "";
    position: absolute;
	bottom:100%;
    left: 40%;
    margin-left: -5px;
    border-width: 8px;
    border-style: solid;
    border-color: transparent transparent #336633 transparent   ;
}

.mytooltip .mytooltiptext {
   
	display:none;
    width: 200px;
    background-color:#336633;
    color: #fff;
	top:25px;
    text-align: center;
    border-radius: 6px;
    padding: 5px 0;
	opacity:0;
    transition: opacity 2s;

    /* Position the tooltip */
    position: absolute;
    z-index: 1;
}
.mytooltip:hover .mytooltiptext {
	display:block;
	opacity:1;
}

</style>

  <script type="text/javascript"> 

  
    var tbl_customer;
 
 $(document).ready(function() {    
    
          tbl_customer = $('#tbl_customer').DataTable({ 
            "processing": true, //Feature control the processing indicator.
			"bInfo": true,
			"bFilter":false,
			//"order":[[4,"desc"],[3,"desc"],[1,"asc"]],
 "lengthMenu": [[25, 50, 75, -1], [25, 50, 75, "All"]],
            "serverSide": true, //Feature control DataTables' server-side processing mode
            // Load data for the table's content from an Ajax source
            "ajax": {
                "url": "<?php echo site_url('logistic/Customer/list_customer')?>",
                "type": "POST",
            },
            "columns": [
            { "data": "no","orderable":false,"visible":true },
			{ "data": "id_header","orderable":false,"visible":false },
            { "data": "Name" },
			{ "data": "city" },
            { "data": "country"},
            { "data": "Email"},
			{ "data": "TotEmployee"},
			{ "data": "isActive"},
			{ "data": "Status"}
			//{ "data": "Status","orderable":false,"visible":true}
            ]
          });  
    
$('#tbl_customer tbody').on('dblclick', 'tr', function () {
            var tr = $(this).closest('tr');
            var row = tbl_customer.row(tr);
// Redirect if click
window.location.href = "<?php echo base_url();?>logistic/Customer/customer_detail/"+row.data().id_header;
			sidebarNonAktif();

      });
});

function reload_tbl_customer()
    {
      tbl_customer.ajax.reload(null,false); //reload datatable ajax 
    }

function klik(){
document.getElementById("klik_kanan").innerHTML="<div class='menu'>File</div>";
}

  </script>

<div class="md-card uk-margin-medium-bottom">



                <div class="md-card-content" id="box-customer">
 <div class="uk-grid">

 
 		 <div class="uk-width-medium-1-2">
            <h2 class="">
			 <i class="md-list-addon-icon material-icons md-36">people</i> 
			List Customers
             </h2>
         </div>
         
 		 <div class="uk-width-medium-1-2">
          <div class="uk-grid">
          	   <div class="uk-width-medium-1-2">
          <select id="select_demo_1" data-md-selectize>
                   <option value="">Select Category</option>
                                
                  <option value="a">Item A</option>
                  <option value="b">Item B</option>
                <option value="c">Item C</option>
                           
          </select>
               </div>
          	   <div class="uk-width-medium-1-2">
<select id="select_demo_1" data-md-selectize>
                                <option value="">Select Criteria</option>
                                
                                    <option value="a">Start With</option>
                                    <option value="b">End With</option>
                                    <option value="c">Equals</option>
                                    <option value="d">Not Equals</option>
                                    <option value="e">Contains</option>
                                    <option value="f">Not Contains</option>
                            </select>
               </div>
 <div class="uk-width-medium-8-10 uk-text-right">
 <input type="text" name="iddetailsales" required="" class="md-input validate valid" data-parsley-trigger="change" id="iddetailsales" placeholder="Type your search"  onkeyup="return getNilai(this)">
 </div>
          </div>
          

         </div>
 

 </div>

 
              
                    <table id="tbl_customer" class="uk-table hover" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                              <th width="2%">No</th>
                                <th width="1%">Id</th>
                                <th width="30%">Customer Name</th>
                                <th width="13%">City</th>
                                <th width="14%">Country</th>
                                <th width="10%">Email</th>
                                <th width="3%">Employee</th>
                                <th width="5%">isActive</th>
                                <th width="9%">Status</th>
                            </tr>
                        </thead>
                        <tfoot>
                        <tr>
                          <th>No</th>
                            <th>Id</th>
                            <th>Customer Name</th>
                            <th>City</th>
                            <th>Country</th>
                            <th>Email</th>
                            <th>TotEmployee</th>
                            <th>isActive</th>
                            <th>Status</th>
                        </tr>
                        </tfoot>

                        <tbody>
                        </tbody>
                    </table>
                    
                    
                    
                </div>
  </div>
  
  
  <script type="text/javascript">

function changeCategory(inputan){
	
	alert('asafsfsdfsfsdfsdf');
}
function changeCategoryyyyyyyy(inputan){
    var tg1=$("#start2").val();
    var tg2=$("#end2").val();
    var pisah1=tg1.split('-');
    var pisah2=tg2.split('-');
    var obj_tgl=new Date();
    
    var tgl1_leave=obj_tgl.setFullYear(pisah1[0],pisah1[1],pisah1[2]);
    var tgl2_leave=obj_tgl.setFullYear(pisah2[0],pisah2[1],pisah2[2]);
    var hasil=(tgl2_leave-tgl1_leave)/(60*60*24*1000);
    
    if(hasil >=8 || hasil < 0){
        
        alert('Jumlah Rentang waktu Pencarian Maksimal 7 Hari !');
        return false;
    } else {
        
    var start2=$("#start2").val();
    var end2=$("#end2").val();
    var kategori=$("#kategori").val();
    var kriteria=$("#kriteria").val();
    var txtsearch=$("#txtsearch").val();
    
    var inputan=start2+"_"+end2+"_"+kategori+"_"+kriteria+"_"+txtsearch;

    if(txtsearch !=''){
tableclosed.ajax.url('<?php echo site_url()?>outgoing_house/filter_list_closed/'+inputan).load();
    } else {
	reload_tbl_customer();  
tbl_customer.ajax.url('<?php echo site_url()?>logistic/Customer/list_customer').load();		
     
    }
}

    
}
  </script>