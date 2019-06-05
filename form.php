<?php $connect = mysqli_connect('127.0.0.1', 'root', '', 'ghg'); 
if ($_FILES['img']['name']) {
	$query = mysqli_query($connect, "UPDATE game1 SET name = '" . $_POST['text'] . "', cost = '". $_POST['cost'] ."', img = '". $_FILES['img']['name'] ."' WHERE id='". $_POST['id'] ."'");
move_uploaded_file($_FILES['img']['tmp_name'], $_FILES['img']['name']);
header('Location: http://dsa/admin_loh.php'); 
} else {
	$query = mysqli_query($connect, "UPDATE game1 SET name = '" . $_POST['text'] . "', cost = '". $_POST['cost'] ."', img = '". $_FILES['img']['name'] ."' WHERE id='". $_POST['id'] ."'");
header('Location: http://dsa/admin_loh.php'); 
} ?>