<?php

class dh {
    function dh(){
        $test = new connection;
        $conn = $test->connection();
        $sql="SELECT p.`id-product`, p.label, p.img, p.quantity, p.price, c.category FROM products p , category c where p.`id-category`=c.id;";
        $resultat = mysqli_query($conn,$sql);
        return $resultat;
    }
    function search($name){
        $test = new connection;
        $conn = $test->connection();
        $sql = "SELECT * from products WHERE label LIKE '%".$name."%'";
        $resultat = mysqli_query($conn,$sql);
        return $resultat;
    }
}