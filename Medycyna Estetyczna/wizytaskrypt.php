<?php

$conn = mysqli_connect('localhost', 'p.hlawacz', '9sy1mn', 'p.hlawacz');
$dob='';
if(isset($_POST["wizyta"])){
	$imie=$_POST["imie"];
	$nazwisko=$_POST["nazwisko"];
	$pesel=$_POST["pesel"];
	$telefon=$_POST["telefon"];
	$dob=$_POST["data"];
	$czas=$_POST["czas"];
	$rez=explode('-',$dob);
	$data=$rez[2];
	$month=$rez[1];
	$year=$rez[0];
 $new=$year.'-'.$month.'-'.$data;
	$sql = "SELECT data,czas FROM wizyta WHERE data = '$new' AND czas = '$czas'";
	$result = mysqli_query($conn, $sql);
	if (strlen($telefon)!=9 || strlen($pesel)!=11   ) {
		
$message = "Podaj poprawny nr.telefonu lub nr.PESEL";
echo "<script >alert('$message');</script>";
$URL="wizyta.php"; 
$sec=1; 
header("refresh: ".$sec.";URL=".$URL);
}else{
	

	if (mysqli_num_rows($result)== 0) {
		$sql="INSERT INTO wizyta(imie,nazwisko,pesel,telefon,data,czas) VALUES('$imie','$nazwisko','$pesel','$telefon','$new','$czas')";	
		$result = mysqli_query($conn, $sql);
		$URL="index (1).php"; 
$sec=1; 
$message = "Zostałeś zarejestrowany! Przekierowanie na stronę logowania w ciągu 1 sec";
echo "<script type='text/javascript'>alert('$message');</script>";

header("refresh: ".$sec.";URL=".$URL);
	}
	else
	{
	$message = "Termin zajęty";
echo "<script>alert('$message');</script>";
	$URL="wizyta.php"; 
$sec=1; 
header("refresh: ".$sec.";URL=".$URL);
	}
}
}
mysqli_close($conn);

?>