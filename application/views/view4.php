<?php 
ksort($states);
echo "<table border='1'>";

foreach ($states as $key => $value) {
echo "<tr>";
	echo "<td>" . $key. "</td><td>" . $value . "</td>";
	echo "</tr>";
	
}
echo "</table>";

?>