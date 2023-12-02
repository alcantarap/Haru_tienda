
<?php
//session_start();

include "db_chat.php";

$celular = $_SESSION["celular"];
$msg = $_GET["msg"];


$q = "SELECT * FROM `users` WHERE celular='$celular'";
if ($rq = mysqli_query($db, $q)) {
    if (mysqli_num_rows($rq) == 1) {

        $q = "INSERT INTO `msg`(`celular`, `msg`) VALUES ('$celular','$msg')";
        $rq = mysqli_query($db, $q);
    }
}


?>