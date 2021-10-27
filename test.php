<?php
    include('config/db_connect.php');
    $sl_cart = "SELECT * FROM carts, products pr where carts.cus_id = 1 and carts.pr_id = pr.pr_id ";
	$res_cart = mysqli_query($conn, $sl_cart);
    $res = mysqli_fetch_all($res_cart);
    $sum = 0;
    foreach($res as $i)
    {
        $sum += $i[3];
    }
    echo $sum;
    
?>
