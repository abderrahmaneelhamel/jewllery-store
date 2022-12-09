<?php session_start()?>
<?php
    session_destroy();
    header("location: ../../public/login");
?>