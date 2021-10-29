<?php
session_start();
    if(isset($_SESSION['id']))
    {
        if(isset($_POST['pr_id']) && isset($_POST['number']))
        {
            include('../admin/config/db_connect.php');
            $cus_id = $_SESSION['id'];
            $pr_id =  $_POST['pr_id'];
            $number = $_POST['number'];
            $update_number = "UPDATE `carts` SET `cart_quatity`='$number' WHERE carts.cus_id = '$cus_id' and carts.pr_id = '$pr_id'";
            if(mysqli_query($conn, $update_number))
            {
                header('location: ../cart.php');
            }
            else
            {
                header('location: ../index.php');
                //xử lí thêm các trường hợp hết hàng trong kho
            }
        }
        else{
            echo "lỗi 2";
        }
    }
    else{
        echo "lỗi 3";
    }
?>