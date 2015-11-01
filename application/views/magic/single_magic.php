<h2>Magic <?php $single_magic['magic']; ?> info</h2>

<?php 
echo "<ul>";
foreach ($single_magic as $value) {
echo "<li>".$value."</li>";
}
echo "<a href='".base_url()."index.php/magics/show_all_magics'>Back</a>";
echo "</ul>";

//
	
