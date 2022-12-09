<?php
require("../../autoloader.php");

class addNewController {
    function addNewController(){
        $cat = new edit;
        $ret=$cat->category();
        require("../Views/addNew.php");
        if (isset($_POST['submit'])) {
            $nom = isset($_POST["name"]) ? $_POST["name"] : null;
            $price = isset($_POST["price"]) ? $_POST["price"] : null;
            $category = isset($_POST["category"]) ? $_POST["category"] : null;
            $qanti = isset($_POST["qte"]) ? $_POST["qte"] : null;
        
            $target_dir = "../Views/uploads/";
            $target_file = $target_dir . basename($_FILES["image"]["name"]);
            $uploadOk = 1;
            $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        
            // Check if image file is a actual image or fake image
            if (isset($_POST["submit"])) {
                $check = getimagesize($_FILES["image"]["tmp_name"]);
                if ($check !== false) {
                    echo "File is an image - " . $check["mime"] . ".";
                    $uploadOk = 1;
                } else {
                    echo "File is not an image.";
                    $uploadOk = 0;
                }
            }
        
            if (
                $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                && $imageFileType != "gif"
            ) {
                echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                $uploadOk = 0;
            }
        
            // Check if $uploadOk is set to 0 by an error
            if ($uploadOk == 0) {
                echo "Sorry, your file was not uploaded.";
                echo "<a href='../../public/dachBoard'>return to dachBoard</a>";
                // if everything is ok, try to upload file
            } else {
                if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
                    echo "The file " . htmlspecialchars(basename($_FILES["image"]["name"])) . " has been uploaded.";
        
                    $image = "../Views/uploads/" . $_FILES["image"]["name"];
                    $add = new addNew;
                    $add->addNew($nom,$qanti,$price,$image,$category);
                } else {
                    echo "<span style:'color: black;'>Sorry, there was an error uploading your file.</span><br>";
                    echo "<a href='../../public/dachBoard'>return to dachBoard</a>";
                }
            }
        }
    }

}
$start = new addNewController;
$start->addNewController();

?>