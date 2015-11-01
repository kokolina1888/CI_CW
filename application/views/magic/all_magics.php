<h2>All Magics</h2>

<table border="1">
	<?php 
	foreach ($all_magics as $magic) {
		echo "<tr>";
		//$count = count($magic);
		foreach ($magic as $value) {
			echo "<td>".$value."</td>";
		}
		echo '<td><a href="show_single_magic/'.$magic['id'].'">show info</a></td>';
		echo '<td><a href="show_update_magic/'.$magic['id'].'">show info</a></td>';
		echo "</tr>";
		
	}

	echo "</table>";