<?php
function get_boston(){
	global $db;
        //example query
	$query = "SELECT HC01_MOE_VC01, HC02_MOE_VC20 
			FROM `table 1` 
			Where GEO.display-label='Boston, MA--NH--RI Urbanized Area (2010)'";
        //$query = "SELECT testID, testName FROM testtable LIMIT 3";
	$myTable2 = $db->query($query);
	return $myTable2;
}
?>
