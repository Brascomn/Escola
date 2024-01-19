<?php
include  "database.php";
session_start();


$s = "delete from sub where SIC ={$_GET["id"]}";
$db->query($s);

echo "<script >window.open('addsub.php?mes= Subject Deleted.','_self');</script>";

?>