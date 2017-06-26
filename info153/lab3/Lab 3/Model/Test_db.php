<?php
function get_table(){
	global $db;
	$query = "SELECT testID, testName FROM testtable LIMIT 3";
	$myTable = $db->query($query);
	return $myTable;
}
?>

