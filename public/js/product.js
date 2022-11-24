$(document).ready(function () {
    $('#ptable').DataTable({
        ajax:{
            url:"/api/products/all",
            dataSrc: ""
        },
        dom:'Bfrtip',
        buttons:[
            'pdf',
            'excel',
            {
                text:'Add item',
                className: 'btn btn-primary',
                action: function(e, dt, node, config){
                    $("#pform").trigger("reset");
                    $('#productModal').modal('show');
                }
            }
        ],
        columns: [
        
            {data: 'id'},
            {data: 'brand'},
            {   data:null,
                render: function (data, type, row){
                    console.log(data.product_image)
                    return '<img src="public/images/${data.product_image}" width="50" height="60">';
                }
            },
            {data: 'description'},
            {data: 'cost_price'},
            {data: 'sell_price'},

            {data: null,
                render: function (data, type, row) {
                    return "<a href='#' class = 'editBtn' id='editbtn' data-id=" + data.id + "><i class='fa-solid fa-pen-to-square' aria-hidden='true' style='font-size:24px' ></i></a><a href='#' class='deletebtn' data-id=" + data.id + "><i class='fa-sharp fa-solid fa-trash' style='font-size:24px; color:red'></a></i>";
                },
            },
        ],
        
    })

});