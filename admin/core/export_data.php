<?php
    include('../config/db_connect.php');
    $create_tb = "CREATE TEMPORARY TABLE summoney (
        total mediumint, or_date date)";
    mysqli_query($conn, $create_tb);
    $insert_data = "INSERT into summoney SELECT  sum(ors.or_total) as money, date(ors.or_date) as date_or FROM orders ors 
    where DATEDIFF(date(CURDATE()), date(ors.or_date))<=30 GROUP BY date(ors.or_date)";
    mysqli_query($conn, $insert_data) ;
    $sl_date = "with recursive all_dates(dt) as (
        -- anchor
        select date(curdate()-7) dt
            union all 
        -- recursion with stop condition
        select dt + interval 1 day from all_dates where dt + interval 1 day < curdate()
    )
    select d.dt date, coalesce(t.total, 0) total
    from all_dates d
    left join summoney t on t.or_date = d.dt
    order by d.dt";
    $data = mysqli_query($conn, $sl_date);
    echo gettype($data). "<br>";
    while($row = mysqli_fetch_assoc($data))
    {
        echo $row['date'];
        echo " ";
        echo $row['total'];
        echo "<br>";
    }
?>