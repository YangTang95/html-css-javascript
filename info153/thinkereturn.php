<!--
## Project:  converter
## By:  Yang Tang
## For:  Info 153
## Time:  Apr.17.2017
## Description: use php to get information from inpho api 
-->

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Answer</title>
</head>
<style>
body{
	border: 10px solid lightblue;
	line-height: 200px;
	margin: 0 auto;
	
	font: 100% Georgia;
	color: #00ff00;
	background: white;
	text-align: center;

}

<body>
</style>
<p>


<?php
$inphourl='';
$inpholabel='';
$tkerid=$_GET['name'];
## yt: get the name from html input
function searchinpho ($tkerid){
	$base="http://inpho.cogs.indiana.edu/thinker";
	## yt: the url for the api
	
	$tkerurl=$base.'/'.$tkerid.'.json';
	## yt: the url for the selected thinker id
	$tkerjson=@file_get_contents($tkerurl,o,null,null);
	# yt: get the data
	return $tkerjson ;

}
echo '<h1>Philosphoers</h1>';
# yt: header for the Philosphoers
$tkerjson =searchinpho ($tkerid);
$tkerarray  = json_decode($tkerjson);
# yt: call function and get json file


$inphourl=$tkerarray->url;
$inpholabel=$tkerarray->label;
echo '<a href=http://inpho.cogs.indiana.edu'.$inphourl.'><h3>'.$inpholabel.'</h3></a><hr>';
# yt: get url and label save for the link


echo '<table border="1">';

echo '<tr><th>name</th><th>value</th></tr>';
echo '<tr><td>' . 'wiki'.'</td><td>'.$tkerarray->wiki.'</td></tr>';
echo '<tr><td>' . 'death'.'</td><td>'.$tkerarray->death_string.'</td></tr>';
echo '<tr><td>' . 'birth'.'</td><td>'.$tkerarray->birth_string.'</td></tr>';

echo '</table>';
echo '<hr>';
# yt: use the json index to echo out the information
$relt='';
$relt=$tkerarray->related_thinkers;
$record1='';
echo '<h2>Related Thinker(Instead of related idea which is not working) </h2>';
foreach($relt as $pid){
	$record1=searchinpho ($pid);
	echo $pid.json_decode($record1)->label.'<br>';
}
# yt: use foreach to run all the id and get the json information

echo '<h3>Influenced by </h3>';
# yt: header for the second part
$influenced='';
$influenced =$tkerarray->influenced_by;
# get all the influenced by id.
$record2='';
foreach($influenced as $pid){
	$record2=searchinpho ($pid);
	echo json_decode($record2)->wiki.' ';
	echo 'Birth: '.json_decode($record2)->birth_string.' ';
	echo 'Death: '.json_decode($record2)->death_string.'<br>';
}
	# yt: use foreach to run all the id and get the json information
?>
</p> 
</body>
</html>