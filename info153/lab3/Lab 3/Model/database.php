<?php
$server = '127.0.0.1';
$user = "root";
$db = new PDO('mysql:host=localhost;dbname=test', $user);
//$pass = 'myPass';
$dbname = 'test';
$con = mysql_connect($server, $user) or die("Can't connect");
mysql_select_db($dbname);
//'mysql:host=localhost;dbname=info153_mysql', 
?>