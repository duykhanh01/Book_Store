<?php
    include('config/db_connect.php');
    echo mysqli_num_rows($res_Category);
    while($row = mysqli_fetch_assoc($res_Category))
    {
        echo $row['id'];
        echo $row['c_name'];
    }
?>