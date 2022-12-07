<?php
spl_autoload_register('myAutoLoader');

    function myAutoLoader ($className) {
    $path = "Models/";
    $extension = ".php";
    $fullPath = $path . $className . $extension;
    include_once $fullPath;
    }

    // $array_paths = array(
    //     'Models/',
    //     'Controllers/',
    //     'View/'
    // );
    // $parts = explode('\\',$className);
    // $name = array_pop($parts);
    // foreach($array_paths as $path){
    //     $file = sprintf($path."%s.php",$name);
    //         include($file);
 //   }