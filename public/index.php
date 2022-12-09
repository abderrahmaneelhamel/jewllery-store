<?php
require_once '../app/Controllers/HomeController.php';
$home = new HomeController();
$pages = ['home', 'about', 'contact', 'login', 'signuppage', 'addNew'];


if(isset($_GET['page'])){
    if($_GET['page']==="jewellery"){
        $page = $_GET['page'];
        $home->jewellery($page);
    }elseif($_GET['page']==="dachBoard"){
        $page = $_GET['page'];
        $home->dh($page);
    }
    elseif($_GET['page']==="editpage"){
        $page = $_GET['page'];
        $home->noAccess("dachBoard");
    }elseif(in_array($_GET['page'],$pages)){
        $page = $_GET['page'];
        $home->index($page);
    }else{
        header("location:dachBoard");
        $home->index('dachBoard');
    }
}else{
    header("location:dachBoard");
    $home->index('dachBoard');
}
?>