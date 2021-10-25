<?php
<<<<<<< HEAD

class Database
{
    private $host;
    private $user;
    private $pass;
    private $db;
    public $conn;

    public function __construct()
    {
        $this->host = 'localhost';
        $this->user = 'root';
        $this->pass = '';
        $this->db = 'db';
        $this->db_connect();
    }

    private function db_connect()
    {
        $this->conn = mysqli_connect($this->host, $this->user, $this->pass, $this->db);
    }
    public function getConn()
    {
        return $this->mysqli;
    }
    public function db_num($sql)
    {
        $result = $this->mysqli->query($sql);
        return $result->num_rows;
    }
}

$db = new Database();
$db->db_num("SELECT fields FROM YourTable");
=======
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
>>>>>>> 8143bcde757a5baa0894125896f1b0eb7d66ff53
