$(document).ready(function() {
    // huỷ sự kiện tự lên đầu trang của thẻ a
    $(".add_cart").click(function(event) {
        event.preventDefault();
    });

    // ajax thêm vào giỏ hàng
    $(".add_cart").click(function() {
        var values = $(this).attr("value");
        $.ajax({
            url: "core/add_cart.php",
            type: "POST",
            data: {
                id: values,
            },
            success: function(data) {
                // $("#body-table").html(data);
                if (data == "done") {
                    //alert("Đã thêm vào giỏ hàng");
                    // $(".toast-body").html("Bạn đã thêm thành công sản phẩm vào giỏ hàng");
                    // $(".toast").toast({ delay: 1000 });
                    // $(".toast").toast("show");
                    alert("Đã đặt hàng thành công")
                } else if (data == "erro1") {
                    alert("Hết hàng");

                } else alert("Đăng nhập để thêm");
            },
        });
    });
    $("#orders").click(function() {
        var sum_money = $("#sum_money").html();
        var money_ship = $("#money_ship").html();
        $.ajax({
            url: "core/process_orders.php",
            type: "POST",
            data: {
                sum_money: sum_money,
                money_ship: money_ship,
            },
            success: function(data) {
                // $("#body-table").html(data);
                alert(data);
                location.reload();
            },
        });
    });
    $("#add_to_cart").click(function() {
        var values = $(this).attr("value");
        var number = $("#get_number").val();
        $.ajax({
            url: "core/add_to_cart.php",
            type: "POST",
            data: {
                id: values,
                quatity: number,
            },
            success: function(data) {
                // $("#body-table").html(data);
                if (data == "done") {
                    // $(".toast").toast(option);
                    alert("Đặt hàng thành công");
                }
                // alert("Đăng nhập để thêm");
                else alert(data);
            },
        });
    });
    $(".cart_quatity").change(function() {
        var number = $(this).val();
        var id = $(this).attr("id_pr");
        //alert($(this).attr("id_pr"));
        $.ajax({
            url: "core/update_number_product.php",
            type: "POST",
            data: {
                pr_id: id,
                number: number,
            },
            success: function(data) {
                if (data == "erro1") {
                    alert("số lượng chọn phải lớn hơn 0");
                } else if (data == "erro2") {
                    alert("số lượng trong kho không đủ");
                } else {
                    alert("Cập nhật thành công");
                }
                location.reload();
            },
        });
    });

    // ========================= Live-search ==================================
    $("#search-input").keyup(function() {
        var pr_key = $("#search-input").val();

        // var dataform = new FormData();
        // dataform.append('pr_key', pr_key);
        $.ajax({
            url: "core/live-search.php",
            method: "POST",
            // data: dataform,
            data: { pr_key: pr_key },

            success: function(response) {
                if (response == "none") {
                    $(".search-display").removeClass("d-block");
                    $(".search-display").addClass("d-none");
                } else {
                    $(".search-display").html(response);
                    $(".search-display").addClass("d-block");
                    $(".search-display").removeClass("d-none");
                    $(window).click(function() {
                        $(".search-display").removeClass("d-block");
                        $(".search-display").addClass("d-none");
                    });
                }
            },
        });
    });
});