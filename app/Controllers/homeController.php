<?php 

class HomeController{
     function __construct ()
    {
        session_start();
        require "../autoloader.php";
    }
    public function index($page){
        include('../app/Views/'.$page.'.php');
    }
    public function jewellery($page){
        if($_SESSION['user']==null){
            header("location: login");
        }
          $prod = new product;
          $resultat=$prod->list();
          include('../app/Views/'.$page.'.php');
    }
    public function noAccess($page){
        if($_SESSION['admin']==null){
            header("location: login");
        }
        $cat = new edit;
        $ret=$cat->category();
        include('../app/Views/noAccess.php');
    }
    public function dh($page){
        if($_SESSION['admin']==null){
            header("location: login");
        }
        require("../app/Models/dh.php");
        $test = new dh;
        $resultat = $test->dh();
        include('../app/Views/'.$page.'.php');
    }
}
?>