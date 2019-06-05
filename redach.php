<meta charset="utf-8">
<form method="POST" action="form.php" enctype="multipart/form-data">
	<?php echo '<input name="id" type="hidden" value="'. $_POST['id'] .'">'; ?> 
	<?php echo '<input name="text" value="'. $_POST['text'] .'">'; ?> 
	<?php echo '<input name="cost" value="'. $_POST['cost'] .'">'; ?> 
	<?php echo '<input type="file" name="img">'; ?> 
	<button>редактировать</button>
</form>