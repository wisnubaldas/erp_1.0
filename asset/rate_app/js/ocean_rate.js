/**
 * Created by wisnubaldas on 1/19/17.
 */
// This article:
// http://stackoverflow.com/questions/21246818/how-to-get-the-base-url-in-javascript

var base_url = window.location.origin;
// "http://stackoverflow.com"
var host = window.location.host;
// stackoverflow.com
var pathArray = window.location.pathname.split( '/' );
// ["", "questions", "21246818", "how-to-get-the-base-url-in-javascript"]
// bikin fungsi text kapital...
function tocapital(str) {
    // var str = "hello world";
    str = str.toLowerCase().replace(/\b[a-z]/g, function(letter) {
        return letter.toUpperCase();
    });
    // alert(str); //Displays "Hello World"
    return str;
}

// global variable view buat select
function viewselectnya(portname,portcode,cityname,country) {
    var viewnya = '<li class="uk-animation-slide-right">'+
        '<a href="#" class="md-list-addon-element">'+
        '<i class="material-icons md-48 uk-text-primary">directions_boat</i>'+
        '</a>'+
        '<div class="md-list-content">'+
        '<span class="md-list-heading heading_b">'+portname+'('+portcode+')'+'</span>'+
        '<span class="uk-text-primary uk-text-muted sub-heading">+'+
        ' City : '+cityname+
        ', Country : '+country+
        '</span>'+
        '</div>'+
        '</li>' +
        '<br>';
    return viewnya;
}


// fungsi bikin header tab
function tabheader(id,name) {
    var tabHeader = '<li aria-expanded="false"><a href="#">'+name+'' +
        ' <sup class="uk-badge uk-badge-notification uk-badge-danger" id="sup-'+name+'" style="padding: 0px; margin: 0px;"></sup></a></li>';
    var tabContent = '<li aria-hidden="true" class="" id="'+name+'"></li>'
    return [tabHeader,tabContent];
}
function templatesearch() {
    // var PortCode,PortName,CityName,CouName;
    var template =
    '<div class="k-list-wrapper">' +
    '<span class="k-state-default k-list-wrapper-addon">' +
    '<p class="heading_b uk-text-primary uk-text-bold">#:data.PortCode#</p>' +
    '</span>' +
    '<span class="k-state-danger k-list-wrapper-content">' +
    '<p class="heading_c">#:data.PortName#<br>' +
    '<span class="uk-text-small">#:data.CityName# - #:data.CouName#</span></p>' +
    '</span>'+
    '</div>';
    return template;
}

$(function () {
    // patching data untuk buat tab
    $.ajax({
        type: 'GET',
        url: base_url+'/rate/ocean_rate/get_data_tab',
        success:function(data){
                // console.log(data);
            $.each(data,function (i,v) {

                //panggil fungsi bikin tab header
                var tabnya = tabheader(v.Id,v.Name);
                if (v.Name === 'FCL')
                {
                    $('.uk-tab').append(tabnya[0]);
                    $('#tabs_1').append(tabnya[1]);
                    $('.uk-tab > li').addClass('uk-active').attr('aria-expanded','true');
                    $('#tabs_1 > li').addClass('uk-active').attr('aria-hidden','false');

                }else {
                    $('.uk-tab').append(tabnya[0]);
                    $('#tabs_1').append(tabnya[1]);
                }
            })
        }
    });
})

// buat auto complete untuk origin
$(function () {
    // Autocomplete untuk set origin
    $('#origin').kendoAutoComplete({
        animation: {
            close: {
                effects: "zoom:out",
                duration: 300
            }
        },
        minLength: 3,
        placeholder: "city/country names",
        dataTextField: "PortGB",
        valueTextField: "portcode",
        filter: "PortGabung",
        template:templatesearch(),
        dataSource: {
            type: "odata",
            serverFiltering: true,
            transport: {
                read: {
                    dataType: "json",
                    url: base_url+'/rate/ocean_rate/ordes'
                }
            },
            group: { field: "CouName" },
            schema: {
                parse: function(response) {
                    $.each(response, function(idx, elem) {
                        // var PortGB;
                        elem.PortGB = tocapital(elem.PortName) +' ('+elem.PortCode+')';
                    });
                    return response;
                }
            }
        },
        select: function(e) {
            var dataItem = this.dataItem(e.item.index());
            // console.log(kendo.stringify(dataItem));
            // panggil fungsi ------>
            var viewnya = viewselectnya(dataItem.PortName,dataItem.PortCode,dataItem.CityName,dataItem.CouName);
            $('#viewOrigin ul').html(viewnya);
            // set hidden input value
            $('#org').val(dataItem.PortCode);
            //output selected dataItem
            // $("#result").html(kendo.stringify(dataItem));
        },
        height: 204
    }).data("kendoAutoComplete");
});

// buat autocomplete untuk destination
$(function () {
    // Autocomplete untuk set destination
    $('#destination').kendoAutoComplete({
        animation: {
            close: {
                effects: "zoom:out",
                duration: 300
            }
        },
        minLength: 3,
        placeholder: "city/country names",
        dataTextField: "PortGB",
        valueTextField: "portcode",
        filter: "PortGabung",
        template:templatesearch(),
        dataSource: {
            type: "odata",
            serverFiltering: true,
            transport: {
                read: {
                    dataType: "json",
                    url: base_url+'/rate/ocean_rate/ordes'
                }
            },
            group: { field: "CouName" },
            schema: {
                parse: function(response) {
                    $.each(response, function(idx, elem) {
                        // var PortGB;
                        elem.PortGB = tocapital(elem.PortName) +' ('+elem.PortCode+')';
                    });
                    return response;
                }
            }
        },
        select: function(e) {
            var dataItem = this.dataItem(e.item.index());
            // console.log(kendo.stringify(dataItem));
            // panggil fungsi ------>
            var viewnya = viewselectnya(dataItem.PortName,dataItem.PortCode,dataItem.CityName,dataItem.CouName);
            $('#viewdest ul').html(viewnya).find('.material-icons').addClass('uk-text-danger');
            // set hidden input value
            $('#dst').val(dataItem.PortCode);
            //output selected dataItem
            // $("#result").html(kendo.stringify(dataItem));
        },
        height: 204
    }).data("kendoAutoComplete");
});
// bikin auto complete untuk portnamenya
$(function () {
    // Autocomplete untuk set destination
    $('#portname').kendoAutoComplete({
        animation: {
            close: {
                effects: "zoom:out",
                duration: 300
            }
        },
        minLength: 3,
        placeholder: "Port Name",
        dataTextField: "PortGB",
        valueTextField: "vendorid",
        filter: "msvendor_hdr.Name",
        template:'<div class="k-list-wrapper">' +
        '<span class="k-state-default k-list-wrapper-addon">' +
        '<p class="heading_b uk-text-primary uk-text-bold">#:data.vendorid#</p>' +
        '</span>' +
        '<span class="k-state-danger k-list-wrapper-content">' +
        '<p class="heading_c">#:data.vendorname#<br>' +
        '<span class="uk-text-small">#:data.cityname# - #:data.countryname#</span></p>' +
        '</span>'+
        '</div>',
        dataSource: {
            type: "odata",
            serverFiltering: true,
            transport: {
                read: {
                    dataType: "json",
                    url: base_url+'/rate/ocean_rate/port'
                }
            },
            group: { field: "countryname" },
            schema: {
                parse: function(response) {
                    $.each(response, function(idx, elem) {
                        // var PortGB;
                        elem.PortGB = tocapital(elem.vendorname)+'('+elem.vendorid+')';
                    });
                    return response;
                }
            }
        },
        select: function(e) {
            var dataItem = this.dataItem(e.item.index());
            // console.log(kendo.stringify(dataItem));
            // panggil fungsi ------>
            var viewnya = viewselectnya(dataItem.vendorname,dataItem.vendorid,dataItem.address,dataItem.countryname);
            $('#priview ul').html(viewnya).find('.material-icons').addClass('uk-text-warning');
            // set hidden input value
            $('#prt').val(dataItem.vendorid);
            //output selected dataItem
            // $("#result").html(kendo.stringify(dataItem));
        },
        height: 204
    }).data("kendoAutoComplete");
});

$(function () {
   $('#submit').click(function (e) {
       var frm = $('#formrate').serialize();
       $.ajax({
                data: frm,
                type: 'POST',
                url: base_url+'/rate/ocean_rate/ocean_rate',
                beforeSend: function () {
                    $('#formrate').attr('hidden','true').addClass('uk-animation-scale-down');
                    $('#viewratenya').removeAttr('hidden').addClass('uk-animation-slide-top');
                    $('#hdrate').empty();
                    $('#tabs_1').find('li').empty();
                },
                success:function (data) {
                    // bingun ngitungnya
                    var hitung, hasil;
                    hitung = [];
                    // console.log(data[0].detail)
                        $.each(data, function (i,v) {
                            hitung.push(v.costtype);
                                // org dan dst header nya
                                var org = tocapital(v.origin[0].PortName) +'-'+ tocapital(v.origin[0].CityName)+'('+v.origin[0].PortCode+')';
                                var dst = tocapital(v.destination[0].PortName) +'-'+ tocapital(v.destination[0].CityName)+'('+v.destination[0].PortCode+')';
                                $('#orgview').html(org);
                                $('#dstview').html(dst);

                            var arr = [v.vendor[0].Name,v.comodity[0].Id,v.Frequency,v.leadtime,v.valid];
                            // buat label dulu
                            ocean.DataDTL = v.detail;
                            if(v.costtype === 'FCL')
                            {
                                var HD = ocean.Header(arr);
                                var DT = ocean.FCL();
                                var remark = ocean.Remark(v.remark);
                                var result = '<div class="uk-grid uk-grid-divider uk-grid-collapse">'+HD+'<div class="uk-width-1-2">'+DT+'</div><div class="uk-width-1-2">'+remark+'</div></div>';
                                $('#tabs_1').find('li#'+v.costtype).html(result);
                            }
                            if (v.costtype === 'LCL')
                            {

                                var HD = ocean.Header(arr);
                                var LCL = ocean.LCL();
                                var remark = ocean.Remark(v.remark);
                                // console.log(LCL);
                                var result = '<div class="uk-grid uk-grid-divider uk-grid-collapse zebra md-card-content">'+HD+
                                                '<div class="uk-width-1-1">'+
                                                            LCL+
                                                '</div>'+
                                                    '<div class="uk-width-1-1">'+remark+'</div>' +
                                            '</div>';
                                $('#tabs_1').find('li#'+v.costtype).html(result);

                                // $(".zebra:even").addClass("md-bg-teal-50").css('padding','1%');
                                // $(".zebra:odd").addClass("md-bg-light-green-A100").css('padding','1%');
                                $(".uk-accordion h3:even").addClass("uk-accordion-title-primary  uk-animation-slide-left");
                                $(".uk-accordion h3:odd").addClass("uk-accordion-title-success uk-animation-slide-right");
                            }

                        });
                    hasil = ocean.HitngTab(hitung)
                    // console.log(Object.keys(hasil[0]).length)
                    /// hitung junlah tab, masukan kedalam sup tab
                    if (!Object.is(hasil[0]))
                    {
                        $('#sup-FCL').text(Object.keys(hasil[0]).length)
                    }else {
                        $('#sup-FCL').text('0')
                    }
                    if (!Object.is(hasil[1]))
                    {
                        $('#sup-LCL').text(Object.keys(hasil[1]).length)
                    }else {
                        $('#sup-LCL').text('0')
                    }
                },
                   error: function(XMLHttpRequest, textStatus, errorThrown) {
                       // console.log(XMLHttpRequest.status);
                       /// tangkep error ajax buat validasi formnya
                       $('#formrate')[0].reset();
                       UIkit.modal.alert('Origin or Destination must be fill.... Status : '+XMLHttpRequest.status);
                       $('#formrate').removeAttr('hidden').addClass('uk-animation-scale-down');
                       $('#viewratenya').attr('hidden','true').addClass('uk-animation-slide-top');
                       $('#hdrate').empty();
                       $('#priview,#viewOrigin,#viewdest').find('ul').empty();
                   }
       });
       e.preventDefault()
   });

});

$(function () {
    $('#editsearch').click(function () {
        $('#formrate').removeAttr('hidden').addClass('uk-animation-scale-down');
        $('#formrate')[0].reset();
        $('#viewratenya').attr('hidden','true').addClass('uk-animation-slide-top');
        $('#priview,#viewOrigin,#viewdest').find('ul').empty();

    })
})

//     // looping pengelompokan data freight
//     var resultDetail = {};
//     var dataDetail = [];
//     for (var i = 0; i < v.detail.length; i++) {
//         var idDetail = v.detail[i].IdSubCostName;
//         dataDetail.push(v.detail[i]);
//
//         if (idDetail == 'OceanFreight') {
//             resultDetail[idDetail] = dataDetail;
//             dataDetail = [];
//         }
//
//         if (idDetail == 'OceanFreight2') {
//             resultDetail[idDetail] = dataDetail;
//             dataDetail = [];
//         }
//         if (idDetail == 'OceanFreight3') {
//             resultDetail[idDetail] = dataDetail;
//             dataDetail = [];
//         }
//             console.log(resultDetail)
//     }