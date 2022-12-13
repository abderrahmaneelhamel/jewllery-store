<?php
require_once '../app/Controllers/HomeController.php';
$home = new HomeController();
$pages = ['home', 'about', 'contact'];
$str1 = "editpage";
$str2 = "delete";
if(isset($_GET['page'])){
    if($_GET['page']==="jewellery"){
        $page = $_GET['page'];
        $home->jewellery($page);
    }elseif($_GET['page']==="dachBoard"){
        $page = $_GET['page'];
        $home->dh($page);
    }elseif($_GET['page']==="disconnect"){
        $home->disconnect();
    }elseif($_GET['page']==="signuppage"){
        $home->signup();
    }elseif($_GET['page']==="login"){
        $home->login();
    }elseif($_GET['page']==="addNew"){
        $home->addNew();
    }elseif($_GET['page']==="editpage" && strlen($_SERVER['REQUEST_URI']) == 27){
        header('location: dachBoard');
    }elseif($_GET['page']==="delete" && strlen($_SERVER['REQUEST_URI']) == 25){
        header('location: dachBoard');
    }elseif(strpos($_GET['page'], $str1) !== false){
        if(isset( $_SERVER['REQUEST_URI'][39]) && isset($_SERVER['REQUEST_URI'][40])){
            $ID = $_SERVER['REQUEST_URI'][39].$_SERVER['REQUEST_URI'][40];
            $home->edit($ID);
        }elseif(isset( $_SERVER['REQUEST_URI'][39])){
            $ID = $_SERVER['REQUEST_URI'][39];
            $home->edit($ID);
        }
    }elseif(strpos($_GET['page'], $str2) !== false){
        if(isset( $_SERVER['REQUEST_URI'][37]) && isset($_SERVER['REQUEST_URI'][38])){
            $ID = $_SERVER['REQUEST_URI'][37].$_SERVER['REQUEST_URI'][38];
            $home->delete($ID);
        }elseif(isset( $_SERVER['REQUEST_URI'][37])){
            $ID = $_SERVER['REQUEST_URI'][37];
            $home->delete($ID);
        }
    }
    elseif(in_array($_GET['page'],$pages)){
        $page = $_GET['page'];
        $home->index($page);
    }else{
        $home->index0('dachBoard');
    }
}else{
    $home->index0('dachBoard');
}
?>