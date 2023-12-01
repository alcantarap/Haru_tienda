<?php 

$db = new mysqli("localhost", "root", "", "haru_tienda");

if ($db->connect_error) {
    die('Connection failed: ' . $db->connect_error);
}

?>