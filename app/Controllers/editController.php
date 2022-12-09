<?php
require("../../autoloader.php");

class editController {
  function editController(){
    $ID=$_GET['id-product'];
    $test = new editController;
    $resultat = $test->listControl();
    if (isset($_POST['submit'])) {
        $nom = isset($_POST["name"]) ? $_POST["name"] : null;
        $price = isset($_POST["price"]) ? $_POST["price"] : null;
        $category = isset($_POST["category"]) ? $_POST["category"] : null;
        $qanti = isset($_POST["qte"]) ? $_POST["qte"] : null;

        $update = new edit;
        $resultat=$update->edit($nom,$price,$category,$qanti,$ID);
        if ($resultat) {
          header("Location:../../public/dachBoard");
      }
    }
  }
  function listControl(){
    $ID=$_GET['id-product'];
    $list = new edit;
    $resultat=$list->list($ID);
    $cat = new edit;
    $ret=$cat->category();
    require("../Views/editpage.php");
  }

}
$start = new editController;
$start->editController();

?>