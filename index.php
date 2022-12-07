<?php
require_once 'Controllers/HomeController.php';
$home = new HomeController();
$pages = ['home', 'about', 'contact', 'dachboard','login','jewllery','signuppage','editpage'];


if(isset($_GET['page'])){
    if(in_array($_GET['page'],$pages)){
        $page = $_GET['page'];
        $home->index($page);
    }
    else{
    include('view/includes/404.php');
    }
}else{
    $home->index('home');
}
?>