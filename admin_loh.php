<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<style type="text/css">
	button{
		margin: 3px;
	}

	</style>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
	<title></title>
</head>
<body>
	<?php $connect = mysqli_connect('127.0.0.1', 'root', '', 'ghg');
	$query = mysqli_query($connect, 'SELECT * FROM game1 ORDER BY id DESC'); ?>


<form method="POST" action="insert.php" enctype="multipart/form-data">
			<button>
				новый товар
			</button>
			<input placeholder="название" name="name">
			<input placeholder="цена" name="cost">
			<input placeholder="картинка" type="file" name="img">
		</form>
	<?php for($i = 0; $i < $query->num_rows; $i++) { ?>
	<div>
		<div>
			<?php $logo = $query->fetch_assoc(); echo '<img src="' . $logo['img'] . '">';?>
		</div>
		<div>
			<?php  echo '<h5>' . $logo['name'] . '</h5>'; ?>
		</div>
		<div>
			<?php  echo '<h5>' . $logo['cost'] . '</h5>'; ?>
		</div>
	<div>
		<form method="GET" action="delete.php" >
			<?php echo '<input name="id" value="' . $logo['id'] . ' " style="display: none " >'; ?>
			<button class="btn btn-danger">удалить</button>
		</form>
		<form method="POST" action="redach.php" >
	<?php echo '<input  type=""hidden name="id" value="' . $logo['id'] . '"">'; ?>
								<?php echo '<input name="text" value="' . $logo['text'] . '" style="display: none">'; ?>
			<button class="btn btn-primary">редактировать</button>
		</form>
	</div>
	</div>	
	<?php } ?>
</body>
</html>
