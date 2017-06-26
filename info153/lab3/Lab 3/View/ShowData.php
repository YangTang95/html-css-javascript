<h1>Employee Data</h1>
<table border = 1>
	<?php
                echo "<tr><th>Total; Margin of Error</th><th>Families with own children under 18 years</th><tr>";
                foreach($myTable as $row) {
                    echo "<tr><td>" . $row["HC01_MOE_VC01"]. "</td><td>" . $row["HC02_MOE_VC20"]."</td><tr>";
                }
                foreach($myTable2 as $row) {
                    echo "<tr><td>" . $row["HC01_MOE_VC01"]. "</td><td>" . $row["HC02_MOE_VC20"]."</td><tr>";
                }
	?>
</table>

