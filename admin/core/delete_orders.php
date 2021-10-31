<?php
session_start();
if (!isset($_SESSION['u_id'])) {
    header('Location: login.php');
}
include('../config/db_connect.php');
if(isset($_GET['or_id']))
{
    $or_id = $_GET['or_id'];
    $sl_ors = "SELECT * from orders where or_id = '$or_id'";
    $res_ors = mysqli_query($conn, $sl_ors);
    if(mysqli_num_rows($res_ors)==0)
    {
        header('location: ../orders.php');
    }
    mysqli_query($conn, "DELETE FROM `orderdetail` WHERE or_id = '$or_id'");
    mysqli_query($conn, "DELETE FROM `orders` WHERE or_id = '$or_id'");
    header('location: ../orders.php');
}
else
{
    header('location: orders.php');
}

?>