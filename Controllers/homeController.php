<?php 

class HomeController{
    public function index($page){
        include('view/'.$page.'.php');
    }
}
?>