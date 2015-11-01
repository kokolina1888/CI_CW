

<form method="post" action="<?php echo base_url(); ?>index.php/magics/update_magic">
	<input type="text" name="magic" value="<?php echo $single_magic['magic'] ?>">
	<input type="text" name="words" value="<?php echo $single_magic['words'] ?>">
	<input type="hidden" name="id" value="<?php echo $single_magic['id'] ?>">
	<input type="submit" name="submit" value="update magic">
</form>