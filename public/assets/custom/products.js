var productsGrid;
var products = function () {

    var init = function () {
        $.extend(config);
        handleRecords();
    };

    var handleRecords = function () {
        productsGrid = $('.dataTable').dataTable({
            "processing": true,
            "serverSide": true,
            "sDom": "<t><'row'<p i>>",
            "destroy": true,
            "scrollCollapse": true,
            "oLanguage": {
                "sLengthMenu": "_MENU_ ",
                "sInfo": "Showing <b>_START_ to _END_</b> of _TOTAL_ entries"
            },
            "iDisplayLength": 5,
            "ajax": {
                "url": config.url + "/products/data",
                "type": "GET",
            },
            "columns": [
                {"data": "title",},
                {"data": "text"},
                {"data": "category"},
                {"data": "publish"},
                {"data": "updated_at"},
                {"data": 'options', orderable: false, searchable: false}
            ],
            "order" : [[4, "desc"]],
        });
    }

    return {
        init: function () {
            init();
        },

    };

}();

$(document).ready(function(){
    products.init();
})