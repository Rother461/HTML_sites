<?php

$conn = mysqli_connect('localhost', 'p.hlawacz', '9sy1mn', 'p.hlawacz');


if(isset($_POST["rejestracja"])){
	$login=$_POST["login"];
	$haslo=$_POST["haslo"];
	$email=$_POST["email"];
	$sql = "select*from user where login ='$login' AND email='$email'";
	$result = mysqli_query($conn, $sql);



	if (mysqli_num_rows($result)== 0) {
		$sql="insert into user(login,haslo,email) values('$login','$haslo','$email')";	
		$result = mysqli_query($conn, $sql);
	$URL="logowanie.php"; 
$sec=1; 
$message = "Zostałeś zarejestrowany!. Przekierowanie na strone logowania nastąpi po 1 sec";
echo "<script>alert('$message');</script>";

header("refresh: ".$sec.";URL=".$URL);
		
		
		
	}
	else
	{
	$message = "Podany login lub email jest zajęty. Przekierowanie nastąpi po 1 sec";
echo "<script>alert('$message');</script>";
	$URL="rejestracja.php"; 
$sec=1; 

header("refresh: ".$sec.";URL=".$URL);
	}
}
mysqli_close($conn);
?>
