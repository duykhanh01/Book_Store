<?php
    $namebook = $_POST['namebook'];
    $nameauthor = $_POST['nameauthor'];
    $namepub = $_POST['namepub'];
    $prcode = $_POST['prcode'];
    $prnumber = $_POST['prnumber'];
    echo $prnumber;
    $desc = $_POST['desc'];
    $cate = $_POST['cate'];
    $price = $_POST['price'];
    $discount = $_POST['discount'];
    $nameimg = $_FILES['file_upload']['name'];
    #echo $_FILES['file_upload'];
    print_r($_FILES['file_upload']);
    include('../config/db_connect.php');
    $sql = "INSERT INTO `products`( `pr_name`, `pr_author`, `pr_pub`, `pr_category`, `pr_code`, `pr_number`, `pr_price`, `pr_discount`, `pr_desc`) 
    VALUES ('$namebook','$nameauthor','$namepub','$cate','$prcode','$prnumber','$price','$discount','$desc')";
    echo $sql;
    if(mysqli_query($conn, $sql))
    {
        echo "thafnh coong";
    }
    
?>