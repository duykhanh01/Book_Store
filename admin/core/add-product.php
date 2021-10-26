<?php
session_start();

include('../config/db_connect.php');
$errors = "";
$output = "";
if (isset($_POST)) {
    // if (empty($_POST['pr_name']) || empty($_POST['pr_code'])  || empty($_POST['auth_name']) || empty($_POST['pub_name']) || empty($_POST['pr_number']) || empty($_POST['pr_desc']) || empty($_POST['pr_category']) || empty($_POST['pr_price']) || empty($_POST['pr_discount']) || empty($_FILES['pr_images'])) echo $output = "errors";
    $pr_name =  $_POST['pr_name'];
    $pr_code = $_POST['pr_code'];
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
    $imagePath = '';
    foreach ($images["tmp_name"]  as $i => $tmp_name) {
        $ext = pathinfo($images['name'][$i], PATHINFO_EXTENSION);
        $string = randomString(8);
        if ($ext == 'jpg' || $ext == 'jpeg' || $ext == 'png' || $ext == 'gif') {

            $imagePath = 'img/' . $pr_code . '/' . $string . '.' . $ext;
            $imagePathTemp = '../img/' . $pr_code . '/' . $string . '.' . $ext;

            mkdir(dirname($imagePathTemp));
            move_uploaded_file($images['tmp_name'][$i], $imagePathTemp);
        } else {
            echo $output = "errors";
        }
    }
    $sql = "";
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
