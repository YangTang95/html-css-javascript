<h1>Test Table</h1>
<table border = 1>
	<?php
                echo "<tr><th>ID</th><th>NAME</th><tr>";
                foreach($myTable as $row) {
                    echo "<tr><td>" . $row["testID"]. "</td><td>" . $row["testName"].
                           "</td><tr>";
                }
                foreach($myTable as $row) {
                    echo "<tr><td>" . $row["testID"]. "</td><td>" . $row["testName"].
                           "</td><tr>";
                }
	?>
</table>
