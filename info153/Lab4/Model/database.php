<?php
//$server = '127.0.0.1';
//$user = "root";
//$db = new PDO('mysql:host=localhost;dbname=info153_mysql', 'root');
include("../Model/GetTweets.php");
//echo $TweetType1;
$connect=mysqli_connect("localhost","root","","info153_mysql");
//$pass = 'myPass';
//$dbname = 'info153_mysql';
//$con = mysql_connect($server, $user) or die("Can't connect");
//mysql_select_db($dbname);
//'mysql:host=localhost;dbname=info153_mysql', 
//$jsondata=file_get_contents($TweetType1);
$dataa=json_decode($TweetType1);
//$stmt=$db->prepare("insert into json values(?,?,?)");

foreach($dataa as $row)
{
	$sql="INSERT INTO json(User_name,Tweer,Follower_count) VALUES('".$row["User Name"]."','".$row["Tweet"]."','".$row["Follower Count"]."')";
	mysqli_query($connect, $sql);
}


//echo "inserted";
?>
