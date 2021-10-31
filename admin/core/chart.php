<?php
session_start();
if (!isset($_SESSION['u_id'])) {
    header('Location: login.php');
}
include('../config/db_connect.php');
$sql = "SELECT count FROM books";
$res = mysqli_query($conn, $sql);

$data = array();
while ($row = mysqli_fetch_assoc($res)) {
    $data[] = $row;
}
print json_encode($data);
