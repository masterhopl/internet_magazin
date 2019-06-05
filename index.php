<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<style type="text/css">
	.w {
		height: 100px;
	}
	</style>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
	<title></title>
</head>
<body>
	<?php $connect = mysqli_connect('127.0.0.1', 'root', '', 'ghg');
	$query = mysqli_query($connect, 'SELECT * FROM game1 ORDER BY id DESC'); ?>

<div class="w container-fluid bg-info">
	<form method="POST" action="admin_loh.php">
		<button class="d-flex align-items-center">
			<h2 class="mt2">Админ панель</h2>
		</button>
	</form>
</div>

	<?php for($i = 0; $i < $query->num_rows; $i++) { ?>

	<div class="game col-sm-6">
		<div>
			<?php $logo = $query->fetch_assoc(); echo '<img src="' . $logo['img'] . '">';?>
		</div>
		<div>
			<?php  echo '<h5 class="font-weight-normal">' . $logo['name'] . '</h5>'; ?>
		</div>
		<div>
			<?php  echo '<h5 class="font-weight-light">' . $logo['cost'] . '</h5>'; ?>
		</div>
	</div>

	
		
	<?php } ?>
</body>
</html>