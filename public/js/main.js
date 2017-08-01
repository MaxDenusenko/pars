// $('#search').click(
function curl() {
    var msg = $('#formx').serialize();
    $.ajax({
        type: 'get',
        url: '/pars',
        data: msg,
        success: function(data) {
            console.log(data);
            // var keys = Object.keys(data[0]);
            // for (let item of keys) {
            //     $('#results').find('thead').find('tr').append('<th>' + item + '</th>');
            // }

            // // $('#results > thead > tr').
            // var selector = $('#results').find('tbody');
            // var trs = []
            // for (var prx of data) {
            //     // let values = Object.values(proxy);
            //     // 
            //     let tds = []
            //     for (fld of keys) {
            //         tds.push('<td>' + prx[fld] + '</td>');

            //     }
            //     trs.push('<tr>' + tds.join('') + '</tr>')
            // }
            // selector.append(trs.join(''))
            // // $('#results').html(result);
            // // alert(result);
        },
        error: function(xhr, str, data) {
            alert('Возникла ошибка: ' + xhr.responseCode + data);
        },
        complete: function() {

        }
    });

}
// )

// jQuery(document).ready(function($) {
//     var $table = $('table'),
//         $header = $('#header'),
//         $leftColum = $('#leftColum'),
//         $twoColum = $('#twoColum'),
//         $thead = $('thead'),
//         $tbody = $('tbody');

//     $thead.find('th').each(function() {
//         var $newdiv = $('<li />', {
//             style: 'width:' + $(this).outerWidth() + 'px'

//         });
//         $newdiv.text($(this).text());
//         $header.append($newdiv);
//     });

//     $tbody.find('tr').find(':nth-child(1)').each(function() {
//         var $newcol = $('<div />', {
//             style: 'width:' + $(this).outerWidth() + 'px; ' + ' height:' + $(this).outerHeight() + 'px'

//         });

//         // var $twocol = $('<div />', {

//         // });
//         if ($(this).text().length > 0) {
//             $newcol.text($(this).text());
//             $leftColum.append($newcol);
//         }
//     });

//     $tbody.find('tr').find(':nth-child(2)').each(function() {
//         var $twcol = $('<div />', {
//             style: 'width:' + $(this).outerWidth() + 'px; ' + ' height:' + $(this).outerHeight() + 'px;'

//         });

//         if ($(this).text().length > 0) {
//             $twcol.text($(this).text());
//             $twoColum.append($twcol);
//         }
//     });








//     var $viewport = $('#result');

//     $viewport.scroll(function() {
//         $header.css({
//             left: -$(this).scrollLeft()
//         });

//         $leftColum.css({
//             top: -$(this).scrollTop()
//         });

//         $twoColum.css({
//             top: -$(this).scrollTop()
//         });

//         if ($(this).scrollLeft() == 0) {
//             $('#leftColum').removeClass("shadowbox_left_col left_col_bgr")
//             $('#twoColum').removeClass("shadowbox_left_col left_col_bgr_tw")
//         } else {
//             $('#leftColum').addClass("shadowbox_left_col left_col_bgr")
//             $('#twoColum').addClass("shadowbox_left_col left_col_bgr_tw")
//         }

//         if ($(this).scrollTop() == 0) {
//             $('#header').removeClass("shadowbox")
//         } else {
//             $('#header').addClass("shadowbox")
//         }
//     });
// });


var urlRe = /(https?:\/\/)?(www\.)?([-а-яa-z0-9_\.]{2,}\.)(рф|[a-z]{2,6})((\/[-а-яa-z0-9_]{1,})?\/?([a-z0-9_-]{2,}\.[a-z]{2,6})?(\?[a-z0-9_]{2,}=[-0-9]{1,})?((\&[a-z0-9_]{2,}=[-0-9]{1,}){1,})?)/i


new Vue({
    el: "#app",
    data: {
        logo: "(^^)",
        url: {
            path: '',
            // status : false,
        },
        table: {
            thead: {
                tr: {
                    width: 0,
                    height: 0,
                    ths: [
                        'th' = [
                            'text' = '',
                            'width' = 0,
                            'height' = 0,
                        ]
                    ]
                }
            },
            tbody: {
                tr: {
                    width: 0,
                    height: 0,
                    td: {
                        text: '',
                        width: 0,
                        height: 0,
                    }
                }
            },
            status: true
        },
    },
    computed: {
        validation: function() {
            return urlRe.test(this.url.path)
        },
        construct_table: function() {
            var $table = $('table')
                // $header = $('#header'),
                // $leftColum = $('#leftColum'),
                // $twoColum = $('#twoColum'),
            var width = []
            $table.find('thead').find('tr').find('th').each(function() {
                width = $(this).outerWidth()
                    // this.table.thead.tr.th.height = $(this).outerHeight()
            });

            this.table.thead.tr.ths[th][width] = width
        },
    },
    methods: {
        get_html_url: function() {
            // var msg = $('#formx').serialize();
            // $.ajax({
            //     type: 'get',
            //     url: '/pars',
            //     data: msg,
            //     success: function(data) {
            //         console.log(data);
            //         // var keys = Object.keys(data[0]);
            //         // for (let item of keys) {
            //         //     $('#results').find('thead').find('tr').append('<th>' + item + '</th>');
            //         // }

            //         // // $('#results > thead > tr').
            //         // var selector = $('#results').find('tbody');
            //         // var trs = []
            //         // for (var prx of data) {
            //         //     // let values = Object.values(proxy);
            //         //     // 
            //         //     let tds = []
            //         //     for (fld of keys) {
            //         //         tds.push('<td>' + prx[fld] + '</td>');

            //         //     }
            //         //     trs.push('<tr>' + tds.join('') + '</tr>')
            //         // }
            //         // selector.append(trs.join(''))
            //         // // $('#results').html(result);
            //         // // alert(result);
            //     },
            //     error: function(xhr, str, data) {
            //         alert('Возникла ошибка: ' + xhr.responseCode + data);
            //     },
            //     complete: function() {

            //     }
            // });

        }
    },
})