<?php
$conn = mysqli_connect('localhost', 'p.hlawacz', '9sy1mn', 'p.hlawacz');
$usun_rekord = $_POST['usun_rekord'];

$sql = 'DELETE FROM `wizyta` WHERE`id` = '.$usun_rekord;
$zapytanie = mysqli_query($conn, $sql);
	
 header('Location: http://ux.up.krakow.pl/~piotr.hlawacz/php/zal/strona%20zal/admin.php');
?>