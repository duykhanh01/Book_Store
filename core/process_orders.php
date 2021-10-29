<?php
    session_start();
    if(isset($_POST['sum_money']) && isset($_POST['money_ship']) && $_POST['sum_money']>0)
    {
        include('../config/db_connect.php');
        $or_total =  $_POST['sum_money'];
        $or_ship = $_POST['money_ship'];
        $or_id = "";
        $or_id = rand(10000,10000000);
        $cus_id = $_SESSION['id'];//dang test mac dinh 1 sau lay o session
        $or_pay = "ship code";
        $insert_order = "INSERT INTO `orders`(`or_id`, `cus_id`, `or_pay`, `or_total`, `or_ship`) 
        VALUES ('$or_id','$cus_id','$or_pay','$or_total','$or_ship')";
        mysqli_query($conn,$insert_order);

        //insert vào order detail
        $sl_cart = "SELECT * FROM carts, products pr where carts.cus_id = '$cus_id' and carts.pr_id = pr.pr_id ";
        $res_cart = mysqli_query($conn, $sl_cart);

        while($row_cart = mysqli_fetch_assoc($res_cart))
        {
            $pr_id = $row_cart['pr_id'];
            $od_quatity = $row_cart['cart_quatity'];
            $od_price = $row_cart['cart_price'];
            $od_total = $row_cart['cart_price']*$row_cart['cart_quatity'];
            $insert_orderDetail = "INSERT INTO `orderdetail`(`or_id`, `pr_id`, `od_price`, `od_quatity`, `od_total`) 
            VALUES ('$or_id','$pr_id','$od_price','$od_quatity','$od_total')";
            if(mysqli_query($conn,$insert_orderDetail))
            {
                $del_cart = "DELETE from carts";
                mysqli_query($conn, $del_cart);
            }
        }
        echo "Đã đặt hàng thành công";
    }
    else
    {
        echo "Không có sản phẩm nào được chọn";
    }
    
?>