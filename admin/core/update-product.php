<?php

if (!isset($_GET['id'])) header('Location: ../404.php');
$id = $_GET['id'];
foreach ($_REQUEST as $name => $value) {
    if ($value == "") {
        echo "errors";
    }
}

$pr_name =  $_POST['pr_name'];
$pr_code = $_POST['pr_code'];
$auth_name =  $_POST['auth_name'];
$pub_name =  $_POST['pub_name'];
$pr_number =  $_POST['pr_number'];
$pr_desc =  $_POST['pr_desc'];
$pr_category = $_POST['pr_category'];
$pr_price = $_POST['pr_price'];
$pr_discount = $_POST['pr_discount'];
$pr_images = $_POST['pr_images'];
$images = $_FILES["pr_images"];
$pr_status = $_POST["pr_status"];

foreach ($images["tmp_name"]  as $i => $tmp_name) {
    $ext = pathinfo($images['name'][$i], PATHINFO_EXTENSION);
    if ($ext == 'jpg' or $ext == 'jpeg' or $ext == 'png' or $ext == 'gif') {
        $string = randomString(8);

        $imagePath .= 'img/' . $pr_code . '/' . $string . '.' . $ext . ',';
        $imagePathTemp = '../img/' . $pr_code . '/' . $string . '.' . $ext;

        mkdir(dirname($imagePathTemp));
        move_uploaded_file($images['tmp_name'][$i], $imagePathTemp);
    } else {
        echo $output = "errors";
        exit;
    }
}


$sql = "UPDATE `products` SET `pr_name`='$pr_name',`pr_author`='$auth_name',`pr_pub`='$pub_name',
`pr_status`='$pr_status',`pr_category`='$pr_category',`pr_code`='$pr_code',`pr_number`='$pr_number',`pr_price`='$pr_price',
`pr_discount`='$pr_discount',`pr_img`='$imagePath',`pr_desc`='pr_desc' WHERE pr_id = '$id'";

$res = mysqli_query($conn, $sql);
if ($res) {
    header('Location: ../product-details.php');
}


function randomString($n)
{
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $str = '';
    for ($i = 0; $i < $n; $i++) {
        # code...
        $index = rand(0, strlen($characters) - 1);
        $str .= $characters[$index];
    }
    return $str;
}
