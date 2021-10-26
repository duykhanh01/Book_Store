$(document).ready(function() {
    $('.add_cart').click(function() {
        var values = $(this).attr('value');
        $.ajax({
            url: "core/add_cart.php",
            type: "POST",
            data: {
                'id': values
            },
            success: function(data) {
                // $("#body-table").html(data);
                if (data == "done")
                    alert('Đã thêm vào giỏ hàng');
                else
                    alert("Đăng nhập để thêm");
            },
        });
    });
    $('#orders').click(function() {
        var sum_money = $("#sum_money").html();
        var money_ship = $("#money_ship").html();
        $.ajax({
            url: "core/process_orders.php",
            type: "POST",
            data: {
                'sum_money': sum_money,
                'money_ship': money_ship
            },
            success: function(data) {
                // $("#body-table").html(data);
                alert(data);
                location.reload();
            },
        });
    });

});