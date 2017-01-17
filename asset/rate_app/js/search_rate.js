/**
 * Created by wisnubaldas on 12/28/16.
 */

/**
 * Created by wisnu on 22/11/16.
 */
// This article:
// http://stackoverflow.com/questions/21246818/how-to-get-the-base-url-in-javascript

var base_url = window.location.origin;
// "http://stackoverflow.com"
var host = window.location.host;
// stackoverflow.com
var pathArray = window.location.pathname.split( '/' );
// ["", "questions", "21246818", "how-to-get-the-base-url-in-javascript"]
// bikin koma pada nomer
function numberWithCommas(x) {
    return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
}

$(document).ready(function () {
// function genTag(elem,classnya = "",idnya = "",isi = "") {
//     var tag = '<'+elem+' class="'+classnya+' id="'+idnya+'>'+isi+'</'+elem+'>';
//     return tag;
// }
    // AutoComplete (custom template) untuk select airlines
    $('#airlines').kendoAutoComplete({
        animation: {
            close: {
                effects: "zoom:out",
                duration: 300
            }
        },
        minLength: 3,
        placeholder: "Airlines Names",
        dataTextField: "vendorname",
        valueTextField: "vendorid",
        filter: "msvendor_hdr.Name",
        template:
        '<div class="k-list-wrapper">'+
        '<span class="k-state-default k-list-wrapper-addon">' +
        '<h3 class="uk-text-upper" style="height: 100%">#:data.vendorid#</h3>' +
        '</span>' +
        '<span class="k-state-default k-list-wrapper-content" >' +
        '<p class="uk-text-large">#: data.vendorname #</p>' +
        '<span class="uk-text-muted text_prety">#: data.address #, #: data.cityname# (#: data.cityid#) #:data.countryname#</span>' +
        '</span>' +
        '</div>',
        dataSource: {
            type: "odata",
            serverFiltering: true,
            transport: {
                read: {
                    dataType: "json",
                    url: base_url+'/rate/fetching_data/get_airlines'
                }
            }
        },
        select: function (e) {
            var dataItem = this.dataItem(e.item.index());
            // console.log(dataItem);
            var viewnya = '<li class="uk-animation-slide-right">'+
                '<a href="#" class="md-list-addon-element">'+
                '<i class="material-icons md-48 uk-text-warning">flight takeoff</i>'+
                '</a>'+
                '<div class="md-list-content">'+
                '<span class="md-list-heading heading_b">'+dataItem.vendorname+'</span>'+
                '<span class="uk-text-primary uk-text-muted sub-heading uk-text-muted">+'+
                'Address :'+dataItem.address+
                ' City :'+dataItem.cityname+
                ' Id :'+dataItem.cityid+
                ' Country :'+dataItem.countryname+
                '</span>'+
                '</div>'+
                '</li>';
            $('#priview ul').html(viewnya);
        },
        height: 204
    }).data("kendoAutoComplete");

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
        dataTextField: "fullportname",
        valueTextField: "portcode",
        filter: "msport.Name",
        template:
        '<div class="k-list-wrapper">'+
        '<span class="k-state-default k-list-wrapper-addon">' +
        // '<img src=\"assets/img/avatars/avatar#:data.portid#.png\" alt=\"#:data.portid#\" />' +
        '<h3 class="uk-text-upper" style="height: 100%">#:data.portcode#</h3>' +
        '</span>' +
        '<span class="k-state-default k-list-wrapper-content" >' +
        '<p class="uk-text-large">#: data.portname #</p>' +
        '<span class="uk-text-muted text_prety">#: data.cityname #, #: data.countryname # </span>' +
        '</span>' +
        '</div>',
        dataSource: {
            type: "odata",
            serverFiltering: true,
            transport: {
                read: {
                    dataType: "json",
                    url: base_url+'/rate/fetching_data/get_port'
                }
            },
            group: { field: "countryname" },
            schema: {
                parse: function(response) {
                    $.each(response, function(idx, elem) {
                        var fullportname;
                        elem.fullportname = elem.portname +' ('+elem.portcode+')' + " - " + elem.cityname;
                    });
                    return response;
                }
            }
        },
        select: function(e) {
            var dataItem = this.dataItem(e.item.index());
            // console.log(dataItem);
            var viewnya = '<li class="uk-animation-slide-right">'+
                '<a href="#" class="md-list-addon-element">'+
                '<i class="material-icons md-48 uk-text-success">flight_takeoff</i>'+
                '</a>'+
                '<div class="md-list-content">'+
                '<span class="md-list-heading heading_b" style="text-transform: capitalize;">'+dataItem.portname+' ('+dataItem.portcode+')'+'</span>'+
                '<span class="uk-text-primary uk-text-muted sub-heading">+'+
                ' City : '+dataItem.cityname+
                ', Country : '+dataItem.countryname+
                // ', Service : '+dataItem.servicename+', Type : '+dataItem.servcategory+
                '</span>'+
                '</div>'+
                '</li>' +
                '<br>'
            $('#viewOrigin ul').html(viewnya);
            // set hidden input value
            $('#org').val(dataItem.portcode);
            //output selected dataItem
            // $("#result").html(kendo.stringify(dataItem));
        },
        height: 204
    }).data("kendoAutoComplete");
    // untuk destination
    $('#destination').kendoAutoComplete({
        animation: {
            close: {
                effects: "zoom:out",
                duration: 300
            }
        },
        minLength: 3,
        placeholder: "city/country names",
        dataTextField: "fullportname",
        valueTextField: "portcode",
        filter: "msport.Name",
        template:
        '<div class="k-list-wrapper">'+
        '<span class="k-state-default k-list-wrapper-addon">' +
        // '<img src=\"assets/img/avatars/avatar#:data.portid#.png\" alt=\"#:data.portid#\" />' +
        '<h3 class="uk-text-upper" style="height: 100%">#:data.portcode#</h3>' +
        '</span>' +
        '<span class="k-state-default k-list-wrapper-content" >' +
        '<p class="uk-text-large">#: data.portname #</p>' +
        '<span class="uk-text-muted text_prety">#: data.cityname #, #: data.countryname #</span>' +
        '</span>' +
        '</div>',
        dataSource: {
            type: "odata",
            serverFiltering: true,
            transport: {
                read: {
                    dataType: "json",
                    url: base_url+'/rate/fetching_data/get_port'
                }
            },
            schema: {
                parse: function(response) {
                    $.each(response, function(idx, elem) {
                        var crot;
                        elem.fullportname = elem.portname +' ('+elem.portcode+')' + " - " + elem.cityname;
                    });
                    return response;
                }
            },
            group: { field: "countryname" }
        },
        select: function(e) {
            var dataItem = this.dataItem(e.item.index());
            // console.log(dataItem);
            var viewnya = '<li class="uk-animation-slide-right">'+
                '<a href="#" class="md-list-addon-element">'+
                '<i class="material-icons md-48 uk-text-danger">flight_land</i>'+
                '</a>'+
                '<div class="md-list-content">'+
                '<span class="md-list-heading heading_b" style="text-transform: capitalize;">'+dataItem.portname+' ('+dataItem.portcode+')'+'</span>'+
                '<span class="uk-text-primary uk-text-muted sub-heading uk-text-muted">+'+
                ' City :'+dataItem.cityname+
                ' Country :'+dataItem.countryname+
                // ' Service :'+dataItem.servicename+' Type : '+dataItem.servcategory+
                '</span>'+
                '</div>'+
                '</li>' +
                '<br>' +
                '';
            $('#viewdest ul').html(viewnya);
            // set hidden input value
            $('#dst').val(dataItem.portcode);
            //output selected dataItem
            // $("#result").html(kendo.stringify(dataItem));
        },
        height: 204
    }).data("kendoAutoComplete");

    // add hidden atribut di rate view
    // $('#rateview').attr('hidden','true').fadeOut('slow');

    // tombol edit inputan
    $('#editsearch').click(function () {
                $('#formrate')[0].reset();
                $('#formrate').removeAttr('hidden','true').addClass('uk-animation-slide-right');
                $('#viewratenya').attr('hidden','true').addClass('uk-animation-slide-left');
                $('#tabs_1 > .statrate').empty();
                $("#priview ul, #viewOrigin ul, #viewdest ul").empty();
        });

    // ajax untuk buat tab menu
    $.ajax({
        type: 'GET',
        url: base_url+'/rate/fetching_data/get_data_tab',
        success:function (data) {
            $.each(data, function (i,v) {
                // console.log(v);
                $('.uk-tab').append('<li><a href="'+v.Id+'"  onclick="tabview('+"'"+v.Id+"'"+')">'+v.Name+'' +
                    ' <sup class="uk-badge uk-badge-notification uk-badge-danger" id="sup-'+v.Name+'" style="padding: 0px; margin: 0px;"></sup></a></li>');
                $('#tabs_1').append('<li id="'+v.Id+'" class="statrate">'+v.Name+'</li>');
            });

        }
    });

    // ajax submitnya...............
    $('#submit').click(function (e) {
        // resetErrors();
        e.preventDefault();
            var formnya = $('#formrate').serialize();
                bro.push(formnya);
            if ($('#org').val() === '' || $('#dst').val() === '')
            {
                UIkit.modal.alert('Origin or Destination must be fill....');
            }else {
                // ajax tombol submit
                $.ajax({
                    data: formnya,
                    type: 'POST',
                    url: base_url+'/rate/fetching_data/get_rate',
                    beforeSend:function () {
                        // set true untuk hidden atribut
                        $('#formrate').attr('hidden','true').fadeOut('slow');
                        $('#viewratenya').removeAttr('hidden').fadeIn('slow');
                        $('#hdrate').empty();

                    },
                    success: function (data) {
                        // hitung hasil query rate
                        var hitung = Object.keys(data).length;
                        if(hitung === 0)
                        {

                            // UIkit.modal.alert('Sorry no rate scheme.......');
                            UIkit.modal.blockUI('<div class="uk-text-center">Sorry no rate scheme....... :)<br> Please wait some refresh page, <br>' +
                                                '<div class="md-preloader">' +
                                                '<svg xmlns="http://www.w3.org/2000/svg" version="1.1" height="96" width="96" viewBox="0 0 75 75">' +
                                                '<circle cx="37.5" cy="37.5" r="33.5" stroke-width="8"/>' +
                                                '</svg>' +
                                                '</div>' +
                                                '</div>', setTimeout(function () {
                                                                    location.reload();
                                                            }, 5000));
                            // location.reload();
                            // window.location.origin;
                        }else {
                            // yang ini looping jumlah scheme nya
                            $.each(data[0].totalscm, function (i, v) {
                                // console.log(v);
                                if (v.Id === '001')
                                {
                                    $('#sup-001').html(v.jumlah);
                                }else {
                                    $("#sup-"+v.Name).html(v.jumlah);
                                }
                            });
                            $.each(data, function (i, v) {

                                // looping detailnya buat di tempel bro
                                var charge = []
                                var ratenya = []
                                $.each(v.detail, function (i,val) {
                                    if(Number.isInteger(val.charge)=== true)
                                    {
                                        char = '<th> +'+val.charge+'</th>';
                                        charge.push(char);
                                    }else {
                                        char = '<th class="heading_a md-color-indigo-900" style="font-weight: bolder;">'+val.charge+'</th>';
                                        charge.push(char);
                                    }
                                    // hitung final rate
                                    var finalrate = parseInt(val.rate) + parseInt(val.ratemarkup)
                                    rate = '<th>'+numberWithCommas(finalrate)+'</th>';
                                    ratenya.push(rate);
                                    // console.log(val);
                                });
                                var hdview =
                                    '<div class="uk-grid uk-grid-divider zebra">' +
                                    '<div class="uk-width-1-3">'+
                                    '<p class="heading_b uk-text-bold md-color-indigo-A700" style="font-weight:bolder;">'+v.carrier+'</p>'+
                                    '</div>'+
                                    '<div class="uk-width-1-4">'+
                                    '<p class="heading_b uk-text-bold md-color-indigo-A700">'+v.comodity+'</p>'+
                                    '</div>'+
                                    '<div class="uk-width-1-4">'+
                                    '<p class="uk-text-primary uk-text-small FontBig">Frequency :<span class="md-color-grey-900">'+v.frequency+'</span><br>'+
                                    '<span class="uk-text-primary">Lead Time <span class="md-color-grey-900">'+v.leadtime+' Day</span><br></span>'+
                                    '<span class="uk-text-primary">Valid Until <span class="md-color-grey-900">'+v.validuntil+'</span></span></p>'+
                                    '</div>' +
                                    '<div class="uk-width-1-1" id="tbl_dtl">' +
                                    '<table class="uk-table uk-table-nowrap uk-table-align-vertical">'+
                                    '<thead class="uk-text-bold">' +
                                    '<tr>' +charge.join("")+'</tr>' +
                                    '</thead>' +
                                    '<tbody>' +
                                    '<tr>' +ratenya.join("")+'</tr>' +
                                    '</tbody>' +
                                    '</table>' +
                                    '</div>' +
                                    '<div class="uk-width-1-1">' +
                                    '<div class="uk-accordion" data-uk-accordion>'+
                                    '<h3 class="uk-accordion-title" id="rem" onclick="bkn_according('+"'"+v.IDnya+"'"+')">Remark</h3>'+
                                    '<div class="uk-accordion-content uk-hidden"  id="hed-'+v.IDnya+'">'+
                                    '<p>'+v.remarkhdr+'</p>' +
                                    '</div>'+
                                    '</div>'+
                                    '</div>' +
                                    '</div>';
                                $('#orgview').html(v.origin);
                                $('#dstview').html(v.destination);
                                $(hdview).appendTo('#hdrate');

                            });

                            // $("h3[id][idnya$='rem']").click(function () {
                            //     $("div[id][idnya$='hed']").toggleClass('uk-hidden').fadeIn('slow');
                            // });
                            // buat zebra
                            $(".zebra:even").addClass("md-bg-teal-50").css('padding','1%');
                            $(".zebra:odd").addClass("md-bg-light-green-A100").css('padding','1%');
                            $(".uk-accordion h3:even").addClass("uk-accordion-title-primary uk-animation-slide-left");
                            $(".uk-accordion h3:odd").addClass("uk-accordion-title-success uk-animation-slide-right");
                        } // end else

                    }
                });
            }
    }); // end ajax submit
    // $('#rateview').removeAttr('hidden').fadeIn('slow');
    // $('#formcontent').attr('hidden','true').fadeOut('slow');
    // $('#formcontent').hide();
}); // end document ready

// bikin tampilin accordingnya
function bkn_according(data) {
    $("#hed-"+data).toggleClass('uk-hidden');
}
// nyimpan array form untuk parameter get tab....
var bro = [];
function tabview(valnya) {
    formnya = bro;
    $.ajax({
        data: formnya+'&mscost_type='+valnya,
        type: 'GET',
        url: base_url+'/rate/fetching_data/get_rate_by_id',
        beforeSend:function () {
            $('#tabs_1 > #'+valnya).empty();
        },
        success:function (result) {
            $.each(result, function (i, v) {
                // get json object detail
                var charge = []
                var ratenya = []
                $.each(v.detail, function (i,val) {
                    if(Number.isInteger(val.charge)=== true)
                    {
                        char = '<th> +'+val.charge+'</th>';
                        charge.push(char);
                    }else {
                        char = '<th class="heading_a md-color-indigo-900">'+val.charge+'</th>';
                        charge.push(char);
                    }
                    // hitung final rate
                    var finalrate = parseInt(val.rate) + parseInt(val.ratemarkup)
                    rate = '<th>'+numberWithCommas(finalrate)+'</th>';
                    ratenya.push(rate);
                    // console.log(val);
                });
                // console.log(v);
                var hdview =
                    '<div class="uk-grid uk-grid-divider zebra">' +
                    '<div class="uk-width-1-3">'+
                    '<p class="heading_b uk-text-bold md-color-indigo-A700" style="font-weight:bolder;">'+v.carrier+'</p>'+
                    '</div>'+
                    '<div class="uk-width-1-4">'+
                    '<p class="heading_b uk-text-bold md-color-indigo-A700">'+v.comodity+'</p>'+
                    '</div>'+
                    '<div class="uk-width-1-4">'+
                    '<p class="uk-text-primary uk-text-small FontBig">Frequency :<span class="md-color-grey-900">'+v.frequency+'</span><br>'+
                    '<span class="uk-text-primary">Lead Time <span class="md-color-grey-900">'+v.leadtime+' Day</span><br></span>'+
                    '<span class="uk-text-primary">Valid Until <span class="md-color-grey-900">'+v.validuntil+'</span></span></p>'+
                    '</div>' +
                        '<div class="uk-width-1-1" id="tbl_dtl">' +
                            '<table class="uk-table uk-table">'+
                                '<thead class="uk-text-bold">' +
                                '<tr>' +charge.join("")+'</tr>' +
                                '</thead>' +
                                    '<tbody>' +
                                    '<tr>' +ratenya.join("")+'</tr>' +
                                    '</tbody>' +
                            '</table>' +
                        '</div>' +
                    '<div class="uk-width-1-1">' +
                    '<div class="uk-accordion" data-uk-accordion>'+
                        '<h3 class="uk-accordion-title"  onclick="bkn_according('+"'"+v.IDnya+"'"+')">Remark</h3>'+
                        '<div class="uk-accordion-content uk-hidden uk-animation-slide-top"  id="hed-'+v.IDnya+'">'+
                            '<p>'+v.remarkhdr+'</p>' +
                        '</div>'+
                    '</div>'+
                    '</div>' +
                    '</div>'; // end of zebra...
                $('#orgview').html(v.origin);
                $('#dstview').html(v.destination);
                $(hdview).appendTo('#tabs_1 > #'+valnya);

                // buat zebra uk-accordion-title-primary
                $(".zebra:even").addClass("md-bg-teal-50").css('padding','1%');
                $(".zebra:odd").addClass("md-bg-light-green-A100").css('padding','1%');
                $(".uk-accordion h3:even").addClass("uk-accordion-title-primary  uk-animation-slide-left");
                $(".uk-accordion h3:odd").addClass("uk-accordion-title-success uk-animation-slide-right");
            });
        }
    }); // end ajax
}// end tab view