<?php session_start();

require("../../autoloader.php");
class data{
    function data(){
        $test = new connection;
        $conn = $test->connection();
        $sql = "SELECT p.`id-product` as id, p.img ,p.label as name ,p.price, p.quantity,c.category FROM `products` p , `category` c  WHERE c.id = p.`id-category`;";
        $result = $conn->query($sql);
        header("Content-Type: application/json");
        echo json_encode($result->fetch_all(MYSQLI_ASSOC));
    }
}
$start = new data;
$start->data();

