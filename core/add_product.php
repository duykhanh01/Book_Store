<?php
    $namebook = $_POST['namebook'];
    $desc = $_POST['desc'];
    $cate = $_POST['cate'];
    $price = $_POST['price'];
    $discount = $_POST['discount'];
    $nameimg = $_FILES['file_upload']['name'];
    echo $namebook;
    #echo $_FILES['file_upload'];
    print_r($_FILES['file_upload']);
    include('../config/db_connect.php');
    $sql = "INSERT INTO `products`(`pr_name`, `pr_category`,  `pr_price`, `pr_discount`,`pr_desc`, `pr_img`) 
    VALUES ('$namebook','$cate','$price','$discount','$desc', '$nameimg')";
    echo $sql;
    mysqli_query($conn, $sql);
?>