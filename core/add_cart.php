<?php
    if(isset($_POST['id']))
    {
        $id = $_POST['id'];
        include('../config/db_connect.php');
        $sl_pr = "select * from products pr, category c where pr.pr_category = c.c_id and pr.pr_id = '$id'";
        $res_pr = mysqli_fetch_assoc(mysqli_query($conn, $sl_pr));
        $pr_id = $res_pr['pr_id'];
        $cart_price = $res_pr['pr_price'] - $res_pr['pr_discount'];
        $insert_cart = "INSERT INTO `carts`(`pr_id`, `cus_id`, `cart_price`) VALUES ('$pr_id','1','$cart_price')";
        mysqli_query($conn, $insert_cart);
    }
    

    echo "done";

?>