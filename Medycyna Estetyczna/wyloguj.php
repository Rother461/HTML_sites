<?php
session_start();

unset($_SESSION['zalogowany']);
session_destroy();
	header("Location:http://ux.up.krakow.pl/~piotr.hlawacz/php/zal/strona%20zal/index.php");
	?>