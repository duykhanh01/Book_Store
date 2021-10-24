<?php

//connect to the database
$conn = mysqli_connect('localhost', 'khanh', 'Duykhanh2001', 'danhba');

// check connection
if (!$conn) {
	echo 'Connection error: ' . mysqli_connect_error();
}
