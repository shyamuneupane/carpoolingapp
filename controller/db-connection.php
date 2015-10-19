<?php
//$db = new PDO("mysql:dbname=todoappdb;host=localhost", "root", "");

$db = new PDO("mysql:dbname=carpoolingapp;host=localhost", "root", "");

$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

?>
