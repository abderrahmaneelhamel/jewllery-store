<?php

require("../../autoloader.php");

class delete {
    function delete(){
        $ID = $_GET['id-product'];
        echo $ID;
        $test = new connection;
        $conn = $test->connection();
        $sql="DELETE FROM `products` WHERE `id-product`=$ID";
        $resultat = mysqli_query($conn,$sql);
        if ($resultat) {
            header("Location:../../public/dachBoard");
        }
    }
}
$del= new delete;
$del->delete();