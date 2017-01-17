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
$(document).ready(function () {
    // AutoComplete (custom template)
    $('#airlines').kendoAutoComplete({
        animation: {
            close: {
                effects: "zoom:out",
                duration: 300
            }
        },
        minLength: 3,
        dataTextField: "vendorid",
        valueTextField: "cityname",
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
        change: function(e) {
            var value = e.sender.dataSource._pristineData; // menampilkan data source dari hasil dropdown
            // Use the value of the widget
            console.log(value[0].vendorname);
            var viewnya = '<li>'+
                                '<a href="#" class="md-list-addon-element">'+
                                    '<i class="material-icons md-48 uk-text-warning">flight takeoff</i>'+
                                '</a>'+
                                '<div class="md-list-content">'+
                                    '<span class="md-list-heading heading_b">'+value[0].vendorname+'</span>'+
                                    '<span class="uk-text-primary uk-text-muted sub-heading uk-text-muted">+'+
                                        'Address :'+value[0].address+
                                        ' City :'+value[0].cityname+
                                        ' Id :'+value[0].cityid+
                                        ' Country :'+value[0].countryname+
                                    '</span>'+
                                '</div>'+
                                '</li>';
            $('#priview ul').html(viewnya);
            // console.log(e.sender.dataSource._pristineData);
        },
        height: 204
    }).data("kendoAutoComplete");

    $('#origin').kendoAutoComplete({
        animation: {
            close: {
                effects: "zoom:out",
                duration: 300
            }
        },
        minLength: 3,
        placeholder: "Port Names/City....",
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
        '<span class="uk-text-muted text_prety">#: data.cityname #, #: data.countryname # (#: data.countryid#), Service : #: data.servicename #</span>' +
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
            console.log(dataItem);
            var viewnya = '<li>'+
                '<a href="#" class="md-list-addon-element">'+
                '<i class="material-icons md-48 uk-text-success">flight_takeoff</i>'+
                '</a>'+
                '<div class="md-list-content">'+
                '<span class="md-list-heading heading_b" style="text-transform: capitalize;">'+dataItem.portname+' ('+dataItem.portcode+')'+'</span>'+
                '<span class="uk-text-primary uk-text-muted sub-heading">+'+
                ' City : '+dataItem.cityname+
                ', Country : '+dataItem.countryname+' ('+dataItem.countryid+')'+
                ', Service : '+dataItem.servicename+', Type : '+dataItem.servcategory+
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

    $('#destination').kendoAutoComplete({
        animation: {
            close: {
                effects: "zoom:out",
                duration: 300
            }
        },
        minLength: 3,
        placeholder: "Port Names/City....",
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
        '<span class="uk-text-muted text_prety">#: data.cityname #, #: data.countryname # (#: data.countryid#), Service : #: data.servicename #</span>' +
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
            console.log(dataItem);
            var viewnya = '<li>'+
                '<a href="#" class="md-list-addon-element">'+
                '<i class="material-icons md-48 uk-text-danger">flight_land</i>'+
                '</a>'+
                '<div class="md-list-content">'+
                '<span class="md-list-heading heading_b" style="text-transform: capitalize;">'+dataItem.portname+' ('+dataItem.portcode+')'+'</span>'+
                '<span class="uk-text-primary uk-text-muted sub-heading uk-text-muted">+'+

                ' City :'+dataItem.cityname+
                ' Country :'+dataItem.countryname+'('+dataItem.countryid+')'+
                ' Service :'+dataItem.servicename+' Type : '+dataItem.servcategory+
                '</span>'+
                '</div>'+
                '</li>' +
                '<br>' +
                '<a class="md-btn md-btn-primary md-btn-wave-light waves-effect waves-button waves-light" onclick="submitdata()" href="#" id="submit">Submit</a>';
            $('#viewdest ul').html(viewnya);
            // set hidden input value
            $('#dst').val(dataItem.portcode);
            //output selected dataItem
            // $("#result").html(kendo.stringify(dataItem));
        },
        height: 204
    }).data("kendoAutoComplete");

$('#editsearch').click(function () {
    $('#formcontent').removeAttr('hidden','true').fadeIn('slow');
    $('#rateview').attr('hidden','true').fadeOut('slow');
})
}); // end document ready

function submitdata() {
    var formnya = $('#formrate').serialize();
    $.ajax({
            data: formnya,
            type: 'POST',
            url: base_url+'/erp_1/rate/fetching_data/get_rate',
            success: function(result){
                $.each(result, function (i,v) {
                    var ratenya = []
                    $.each(v.detail, function (i,val) {
                        var data =
                            '<tr>'+
                            '<th>'+val.charge+'</th>'+
                            '<th>'+val.rate+'</th>'+
                            '<th>'+val.remark+'</th>' +
                            '</tr>';
                        ratenya.push(data);

                    });
                    console.log(ratenya.join(","));
                    var hdview =
                        '<div class="uk-grid uk-grid-divider">'+
                        '<div class="uk-width-1-4">'+
                        '<p class="heading_b uk-text-primary">Alias <span class="uk-text-large md-color-grey-900">'+v.IDnya+'</span></p>'+
                        '<p class="heading_b uk-text-primary">Carrier <span class="uk-text-large md-color-grey-900">'+v.carrier+'</span></p>'+
                        '</div>'+
                        '<div class="uk-width-1-4">'+
                        '<p class="heading_b uk-text-primary">Origin <span class="uk-text-large md-color-grey-900">'+v.origin+'</span></p>'+
                        '<p class="heading_b uk-text-primary">Destination <span class="uk-text-large md-color-grey-900">'+v.destination+'</span></p>'+
                        '</div>'+
                        '<div class="uk-width-1-4">'+
                        '<p class="heading_b uk-text-primary">Frekuensi <span class="uk-text-large md-color-grey-900">'+v.frequency+'</span></p>'+
                        '<p class="heading_b uk-text-primary">Commodity <span class="uk-text-large md-color-grey-900">'+v.comodity+'</span></p>'+
                        '</div>'+
                        '<div class="uk-width-1-4">'+
                        '<p class="heading_b uk-text-primary">Lead Time <span class="uk-text-large md-color-grey-900">'+v.leadtime+' Day</span></p>'+
                        '<p class="heading_b uk-text-primary">Valid Until <span class="uk-text-large md-color-grey-900">'+v.validuntil+'</span></p>'+
                        '</div>' +
                        '</div>' +
                        '<div class="uk-width-1-2">' +
                        '<table id="tablenya" class="uk-table uk-width-1-2 uk-table uk-table-striped">' +
                        '<thead class="md-bg-yellow-A100">' +
                        '<tr>' +
                        '<th>Charges</th>' +
                        '<th>Rate</th>' +
                        '<th>Remark</th>' +
                        '</tr>' +
                        '</thead>' +
                        '<tbody>' +
                        ratenya.join("")+
                        '</tbody>' +
                        '</table>' +
                        '</div>' +
                        '<hr class="uk-grid-divider">';
                        $(hdview).appendTo(".viewheader");



                })
            }
            });
    
    $('#rateview').removeAttr('hidden').fadeIn('slow');
    $('#formcontent').attr('hidden','true').fadeOut('slow');
    // $('#formcontent').hide();
}
