<?php $connect = mysqli_connect('127.0.0.1', 'root', '', 'ghg');
$query = mysqli_query($connect, "INSERT INTO game1 (name, cost, img) VALUES ('". $_POST['name'] ."', '". $_POST['cost'] ."', '". $_FILES['img']['name'] ."')");
header("dsa/admin_loh.php")
 ?>