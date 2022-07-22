<?php 
function db_conn()
{
    $servername = "127.0.0.1";
    $username = "root";
    $password = "";
    $dbname = "product_db";
    $conn = "";
    try {
        $conn = new PDO('mysql:host='.$servername.';dbname='.$dbname.';charset=utf8', $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $conn->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        echo "connected\n";
        // var_dump($conn) ;
    } catch (PDOException $e) {
        die("something went wrong\n");
        echo $e->getMessage();
    }
    return $conn;
}
