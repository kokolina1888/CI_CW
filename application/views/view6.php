<?php 

/*echo "<pre>";

var_dump($states);

echo "</pre>";*/

echo "<table border='1'>";

//column titles
echo "<tr><td></td>";
foreach ($states['USA'] as $key => $value) {
	echo '<td>' . $key . '</td>';
}
echo "</tr>";

//table body starting with state name
foreach ($states as $k => $stat) {
	echo "<tr><td>$k</td>";

//rest info

	foreach ($stat as $key=>$value) {
		echo "<td>" . $value . "</td>";
	}
	echo "</tr>";
}

echo "</table>";

?>
