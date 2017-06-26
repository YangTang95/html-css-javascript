<!--
## Project:  converter
## By:  Yang Tang
## For:  Info 153
## Time:  Apr.17.2017
## Description: use php to calculate c2f or f2c
-->

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Answer</title>
</head>
<body>
<p>The answer is: 

<?php
$outputv='';
$scale = $_POST['convertType'];
## yt: use post to get the convertion type
$degree= $_POST['valueConvert'];
## yt: use post to get the number
if (isset($degree)==true && empty($degree)==false){
	## yt: check the input if its empty or not assigned
	if($scale == 'celsius'){
		## yt: if the user select celsius run the calculation below 
		$f2c = ($degree-32)*5/9;
		## yt: f2c calculation
	    $outputv = $f2c;
	    ## yt: output the f2c result
	  }
	    else{
	    	$c2f = $degree*9/5+32;
	    	## yt: if no select or select fahrenheit calculate c2f
		    $outputv =$c2f;
		    ## yt: out the c2f result
		}

}
	elseif (isset($degree)==false || empty($degree)==true){
		print("No input, please put something");
		## yt: if there is no input for the number show the text to ask user to input some value
		
	}

echo $outputv;
## yt: print the result

?>

</p> 
</body>
</html>