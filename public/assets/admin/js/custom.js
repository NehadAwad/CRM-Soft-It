//USER STATUS CHANGE - BAN or ACTIVE
$(document).on('click', '#changeUserStatus', function(e) {
    e.preventDefault();
    let userId = $(this).data('user-Id');
    let userStatus = $(this).data('status');
    $.ajax({
        url: "change-user-status/"+userId+"/"+userStatus,
        type: "GET",
        dataType: 'html',
        success:function (response){
            toastr.info('User status changed successfully', 'Status Changed!', {"positionClass" : "toast-top-right"});
            $('.table').load(location.href + ' .table');
            console.log(response);
        },
        error: function(error) {
            console.log(error);
        }
    });
});


$(document).on('click', '#viewBtn', function(e) {
    e.preventDefault();
    let sellerId = $(this).data('sellerid');

    $.ajax({
        url: "/seller-view/"+sellerId,
        type: "GET",
        dataType: 'html',
        success:function (response){
            const data = JSON.parse(response);
            const title = data.name+' ( Status: '+data.status+')';
            const nid = data.nid ? data.nid : 'Not added';
            const trade_lisc = data.trade_lisc ? data.trade_lisc : 'Not added';
            const address = data.address ? data.address : 'Not added';
            const area = data.area ? data.area : 'Not added';
            const city = data.city ? data.city : 'Not added';
            //$('.table').load(location.href + ' .table');
            // $('.modal-body').html(data);
            $('.modal-title').text(title);
            $('.address').text(address);
            $('.area').text(area);
            $('.city').text(city);
            $('.nid').text(nid);
            $('.trade').text(trade_lisc);
            jQuery("#sellerModal").modal('toggle');
        },
        error: function(error) {
            console.log(error);
        }
    });
});


$(document).on('click', '#changeStatus', function (e){
    let orderId = $(this).data('orderid');
    $.ajax({
        url: "/order-list-status/"+orderId,
        type: "GET",
        dataType: 'html',
        success:function (response){
            const data = JSON.parse(response);
            const order_status = data.order_status ? data.order_status : 'Null';
            $('.test').text(order_status);
            jQuery("#sellerModal").modal('toggle');
        },
        error: function(error) {
            console.log(error);
        }
    });
});


$('#statusUpdateForm').on('submit', function(event){
    event.preventDefault();
    $.ajax({
        url:"/order-list-status",
        method:"POST",
        data:new FormData(this),
        dataType:'JSON',
        contentType: false,
        cache: false,
        processData: false,
        success:function(response)
        {
            $('#sellerModal').modal('hide')
            swal("প্রোডাক্ট যুক্ত হয়েছে!", 'আপনার প্রোডাক্ট কাপড়পট্টির যাচাই এর পর এভেইলেবল হবে', "success");
        },
        error: function (e) {
            console.log(e);
            // $("#productform")[0].reset();
            swal("দুঃখিত !"+e, 'আপনার প্রোডাক্টের তথ্য সম্পূর্ণভাবে দিন', "warning");
        }
    })
});

$(".save-data").click(function(event){
    event.preventDefault();

    let orderStatus = $("input[name=orderStatus]").val();
    let paymentStatus = $("input[name=paymentStatus]").val();
    let _token   = $('meta[name="csrf-token"]').attr('content');
    alert(orderStatus)
    $.ajax({
        url: "/order-list-status",
        type:"POST",
        data:{
            orderStatus:orderStatus,
            paymentStatus:paymentStatus,
            _token: _token
        },
        success:function(response){
            console.log(response);
            if(response) {
                $('.success').text(response.success);
                $("#ajaxform")[0].reset();
            }
        },
        error: function(error) {
            console.log(error);
        }
    });
});

