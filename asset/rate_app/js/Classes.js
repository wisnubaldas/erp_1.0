/**
 * Created by wisnubaldas on 27/01/17.
 */
var ocean = {
    DataDTL: '',
    Header:function (data) {
        var atas =
            '<div class="uk-width-1-3">'+
            '<p class="heading_b uk-text-bold md-color-indigo-A700" style="font-weight:bolder;">'+data[0]+'</p>'+
            '</div>'+
            '<div class="uk-width-1-4">'+
            '<p class="heading_b uk-text-bold md-color-indigo-A700">Comodity '+data[1]+'</p>'+
            '</div>'+
            '<div class="uk-width-1-4">'+
            '<p class="uk-text-primary uk-text-small FontBig">Frequency :<span class="md-color-grey-900">'+data[2]+'</span><br>'+
            '<span class="uk-text-primary">Lead Time <span class="md-color-grey-900">'+data[3]+'</span><br></span>'+
            '<span class="uk-text-primary">Valid Until <span class="md-color-grey-900">'+data[4]+'</span></span></p>'+
            '</div>' ;
        // console.log(data)
        return atas;
    },
    LCL:function () {
        var data = this.DataDTL;
        var costname = [];
        var ammount = [];

        for (var x in data.sort()) {
            var xxx = '<th style="font-weight: bold; text-align: center;" class="md-color-grey-900">' + data[x].IdSubCostName + '</th>';
            costname.push(xxx);
            if(data[x].IdCur === 'USD')
            {
                var yyy = '<td style="text-align: center;">$ ' +data[x].Amount+'</td>';
                ammount.push(yyy);
            }
            if (data[x].IdCur === 'IDR')
            {
                var yyy = '<td style="text-align: center;">Rp ' +data[x].Amount+'</td>';
                ammount.push(yyy);
            }

        }
        var tblView = '<table class="uk-table uk-table">'+
            '<thead class="uk-text-bold">' +
            '<tr >'+costname.join("")+'</tr>' +
            '</thead>' +
            '<tbody>' +
            '<tr>'+ammount.join("")+'</tr>' +
            '</tbody>' +
            '</table>';
        return tblView;
    },
    FCL:function () {
        var data = this.DataDTL;
        // var lbl = this.Label();
        // var i = 0;
        // var trHead = "";
        var FT = [];
        var FT40 = [];
        var HCUBE = [];
        for (var x in data.sort()) {
            var ft20 = data[x].labelcon;
            var cost = data[x].IdSubCostName;
            var amount = data[x].Amount;
            if( ft20 === '20FT')
            {
                if(data[x].IdCur === 'USD')
                {
                    secondFT = '<tr><td>'+cost+'</td><td>$ '+amount+'</td></tr>';
                    FT.push(secondFT)
                }
                if(data[x].IdCur === 'IDR')
                {
                    secondFT = '<tr><td>'+cost+'</td><td>Rp '+amount+'</td></tr>';
                    FT.push(secondFT)
                }

            }
            if( ft20 === '40FT')
            {
                if(data[x].IdCur === 'USD')
                {
                    secondFT = '<tr><td>'+cost+'</td><td>$ '+amount+'</td></tr>';
                    FT40.push(secondFT)
                }
                if(data[x].IdCur === 'IDR')
                {
                    secondFT = '<tr><td>'+cost+'</td><td>Rp '+amount+'</td></tr>';
                    FT40.push(secondFT)
                }

            }
            if( ft20 === 'HCUBE')
            {
                if(data[x].IdCur === 'USD')
                {
                    secondFT = '<tr><td>'+cost+'</td><td>$ '+amount+'</td></tr>';
                    HCUBE.push(secondFT)
                }
                if(data[x].IdCur === 'IDR')
                {
                    secondFT = '<tr><td>'+cost+'</td><td>Rp '+amount+'</td></tr>';
                    HCUBE.push(secondFT)
                }

            }
        }
        var tbl = '<table class="uk-table uk-table-hover dataTable" style="width: 100%">' +
                    '<tr class="md-bg-light-blue-50 uk-text-center">' +
                        '<th colspan="2" style="text-align: center">20FT</th>' +
                    '</tr>'+
                        FT.sort().join("")+
                    '<tr class="md-bg-light-blue-50 uk-text-center">' +
                        '<th colspan="2" style="text-align: center">40FT</th>' +
                    '</tr>'+
                        FT40.sort().join("")+
                        '<tr class="md-bg-light-blue-50 uk-text-center" >' +
                            '<th colspan="2" class="uk-text-center">HCUBE</th>' +
                    '</tr>'+
                        HCUBE.sort().join("")+'</table>';
        return tbl;
    },
    Label:function () {
        // ambil label buat data label yang sama di merge
        var elem = []
        for (var key in this.DataDTL) {
            if (this.DataDTL.hasOwnProperty(key)) {
                // console.log(key + " -> " + data[key]);
                elem.push(this.DataDTL[key].labelcon)
            }
        }
        uniqelem = elem.filter(function(elem, index, self) {
            return index == self.indexOf(elem);
        })
        return uniqelem;
    },
    HitngTab:function (data) {
        var i,FCL,LCL
        for (i = 0; i < data.length; i++) {
            if (data[i] === "FCL")
            {
                FCL = {"FCL":data[i]}
            }
            if (data[i] === "LCL")
            {
                LCL = {"LCL":data[i]}
            }
        }
        return [FCL,LCL]
    },
    Remark:function (data) {
        var x = '<table style="width:100%" class="uk-table uk-table-hover"><tr><td class="md-bg-light-blue-50 uk-text-center">Remark</td></tr><tr><td>'+data+'</td></tr></table>';
        return x
    }

}// end class detailnya