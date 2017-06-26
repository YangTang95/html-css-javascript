<?php
function get_table(){
	global $db;
        //example query
	$query = "SELECT HC01_MOE_VC01, HC02_MOE_VC20 FROM `table 1` LIMIT 20";
        //$query = "SELECT testID, testName FROM testtable LIMIT 3";
	$myTable = $db->query($query);
	return $myTable;
}
?>
