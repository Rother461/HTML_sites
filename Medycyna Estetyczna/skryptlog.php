<?php
session_start();
$conn = mysqli_connect('localhost', 'p.hlawacz', '9sy1mn', 'p.hlawacz');


if(isset($_POST["logowanie"])){
	$login=$_POST["login"];
	$haslo=$_POST["haslo"];
	$URL="logowanie.php"; 
$sec=1; 	

	
	$sql = "select * from user where login ='$login' AND haslo='$haslo'";
	$result = mysqli_query($conn, $sql);



	if (mysqli_num_rows($result)== 1 && $login=='admin' && $haslo=='adminadmin') {
		
         
			 $_SESSION["login"]=$login;
			 $_SESSION['admin']=1;
			 $_SESSION['zalogowany']=1;
			 
 	  header('Location: http://ux.up.krakow.pl/~piotr.hlawacz/php/zal/strona%20zal/admin.php');
	}
      else
	  {

	if (mysqli_num_rows($result)== 1)
	{
		$_SESSION["login"]=$login;
		$_SESSION['zalogowany']=1;

	      header('Location: http://ux.up.krakow.pl/~piotr.hlawacz/php/zal/strona%20zal/index.php');

	}
	  }
if (mysqli_num_rows($result)== 0)
	{
	
	$message = "Błędny login lub hasło. Przekierowanie nastąpi po 1 sec";
echo "<script type='text/javascript'>alert('$message');</script>";
	header("refresh: ".$sec.";URL=".$URL);
	}
	}


mysqli_close($conn);
?>
