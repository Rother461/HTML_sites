<!DOCTYPE html>
<?php

session_start();
?>
<html lang="pl">
<head>
	<title>Lek Józef Hlawacz Medycyna Estetyczna i Regeneracyjna, Chirurgia Ogólna</title>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<meta name="description" content="Medycyna Estetyczna">
<meta name="keywords" content="Medycyna Estetyczna, Plasma Complex,Chirurgia Ogólna">
	<link rel="stylesheet" href="style.css">
	
	 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
   

    
</head>
<body>
<?php
if(!isset($_SESSION["zalogowany"])){$message = "Nie masz dostępu do tej witryny musisz sie zalogować. Przekierowanie nastąpi po 1 sec";
echo "<script>alert('$message');</script>";
	$URL="logowanie.php"; 
$sec=1; 

header("refresh: ".$sec.";URL=".$URL); exit();}
?>
	   <div class="wrapper">
      
        <nav id="sidebar">
            <div class="sidebar-header">
                <a href="index (1).php">
     <img src="logo.png" alt="Logo">
  </a>
                
            </div>

            <ul class="list-unstyled components">
               
                <li>
                    <a href="omnie.php">
                        <i class="fas fa-briefcase"></i>
                       O mnie
                    </a>
                     <a href="zabiegi.php">
                    <i class="fas fa-stethoscope"></i>
                       Zakres Usług
                    </a>
                </li>
                <li>
                    <a href="certyfikat.php">
                <i class="fas fa-images"></i>
                        Certyfikaty
                    </a>
                </li>
               
                <li>
                    <a href="kontakt.php">
                        <i class="fas fa-paper-plane"></i>
                        Kontakt
                    </a>
                </li>
				<li>
                    <a href="cennik.php">
                        <i class="fas fa-coins"></i>
                        Cennik
                    </a>
                </li>
            </ul>

          
        </nav>
        <div id="content">

          <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="btn btn-info">
                        <i class="fas fa-align-left"></i>
                        <span>MENU</span>
                    </button>
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">
					<?php
                          
					
					echo'<li class="nav-item"> <a class="nav-link" href="#">'.$_SESSION['login'].'</a></li>';
					
						
						echo '<li class="nav-item"><a class="nav-link" href="wizyta.php">Umów wizytę</a></li>';
					
					
					echo'<li class="nav-item">
						 <a class="nav-link" href="wyloguj.php">Wyloguj</a>
					</li>';
					
	
				?>
                            
                            
                        </ul>
                    </div>
                </div>
            </nav>
 <div class="tresc">
<div class="aktualnosci">
           <h2 id="h2">Aktualności</h2>
		   <h4>Plasma Complex - nowy wymiar terapii komórkowej✨</h4>
<p><a target="_blank" href="obrazek1.png"><img src="obrazek1.png" alt="obrazek promocyjny"></a>PLASMA COMPLEX to przełom w regeneracji i odnowie tkanek 
Terapia z wykorzystaniem własnych komórek macierzystych to jednen z najpopularniejszych zabiegów medycyny estetycznej✨ </p>
<hr style="width: 30%;float:left;">
 

<br>


<br><a class="znajdz" href ="http://plasmacomplex.pl/znajdz-klinike/"><i class="fas fa-search"></i>Znajdź klinikę</a><br>

<a class="znajdz" href ="http://plasmacomplex.pl/"><i class="fas fa-arrow-right"></i>Dowiedz się więcej</a>


</div>
<hr>

<div class="aktualnosci">
        
		   <h4>PLASMA COMPLEX | Naturalny efekt terapii komórkowej 🌿🌷🌿</h4>
<p>🌺
<a target="_blank" href="obrazek2.png"><img src="obrazek2.png" alt="obrazek promocyjny"></a>🌷 Wiosenne ODMŁODZENIE skóry w 3 krokach ✨✨✨<br>
1️⃣ STYMULACJA<br>
2️⃣ REGENERACJA<br>
3️⃣ ODMŁODZENIE<br>
Skoncentrowane CZYNNIKI WZROSTU i KOMÓRKI MACIERZYSTE ✨✨<br>
100% NATURALNIE▫️100% BEZPIECZNIE▫️100% AUTOLOGICZNIE </p>
<hr style="width: 30%;float:left;">
 

<br>


<br><a class="znajdz" href ="http://plasmacomplex.pl/znajdz-klinike/"><i class="fas fa-search"></i>Znajdź klinikę</a><br>

<a  class="znajdz"href  ="http://plasmacomplex.pl/"><i class="fas fa-arrow-right"></i>Dowiedz się więcej</a>


</div>
	<hr>
<div class="aktualnosci">
        
		   <h4>PLASMA COMPLEX | obszary zabiegowe 💉 I-PRF + S-PRF</h4>
<p><a target="_blank" href="obrazek3.png"><img src="obrazek3.png" alt="obrazek promocyjny"></a>Regeneracja i odbudowa skóry komórkami macierzystymi i czynnikami wzrostu 🧬<br>
100% NATURALNIE▫️100% BEZPIECZNIE▫️100% AUTOLOGICZNIE</p>
<hr style="width: 30%;float:left;">
 

<br>


<br><a class="znajdz" href ="http://plasmacomplex.pl/znajdz-klinike/"><i class="fas fa-search"></i>Znajdź klinikę</a><br>

<a class="znajdz" href ="http://plasmacomplex.pl/"><i class="fas fa-arrow-right"></i>Dowiedz się więcej</a>


</div>
<hr>	
<div class="aktualnosci">
        
		   <h4> Radiotermoliza Termocell</h4>
<p><a target="_blank" href="obrazek4.png"><img src="obrazek4.png" alt="obrazek promocyjny"></a>Miło nam poinformować, że dysponujemy urządzeniem Termocell,>które zdobyło wyróżnienie w prestiżowym konkursie Inspiracje Roku 2015 w kategorii "Urządzenia kosmetyczne na twarz i ciało" zorganizowanym przez magazyn BEAUTY Inspiration.</p>
<hr style="width: 30%;float:left;">
 

<br>


<br><a class="znajdz" href ="http://plasmacomplex.pl/znajdz-klinike/"><i class="fas fa-search"></i>Znajdź klinikę</a><br>

<a class="znajdz" href ="http://plasmacomplex.pl/"><i class="fas fa-arrow-right"></i>Dowiedz się więcej</a>


</div>

        </div>
		
		</div>
    </div>

<footer class="stopka">
<div class="row">
<div class="stopka_lewy">
<h5 style="color:white;">MENU</h5>


                   <a href="omnie.php">
                       
                       O mnie
                    </a><br>
					
                    <a href="zabiegi.php">
                       
                       Zakres Usług
                    </a><br>
				
				
                    <a href="certyfikat.php">
                       
                       Certyfikaty
                    </a><br>
			
		
                    <a href="kontakt.php">
                       
                       Kontakt
                    </a><br>
		
			
                    <a href="cennik.php">
                       
                      Cennik
                    </a><br>
		

		

</div>
<div class="stopka_prawy">
<h5 style="color:white;">Przychodnia lekarsko – stomatologiczna</h5>
<p><i class="fas fa-home"></i>Ul. Poniatowskiego 9,
32-090 Słomniki</p>
<p><i class="fas fa-phone"></i> 12 388 29 15</p>
<a class="mail" href ="mailto:kontakt@gmail.com" style="text-decoration:none;color:#5F5F5F;">
<i class="fas fa-envelope"></i>

kontakt@gmail.com</a><br>
<a href="https://www.facebook.com/JozefHlawaczMedycynaEstetycznaiRegeneracyjna">
    <img class="rounded-circle" src="facebook.png" alt="Facebook">
  </a>
  <a href="http://www.przychodnia-slomniki.pl/">
    <img class="rounded-circle" src="przychodnia.png" alt="Przychodnia">
  </a>
</div>
<div class="koniec">
<p>Wszelkie prawa zastrzeżone © 2020</p>
</div>
</div>

</footer>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
   
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
	 <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>

    <script>
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });
    </script>
	 <script>
 $(function(){
    var pokazane = false;
    $(window).scroll(function(){
       var wys_okna = 300;
       var scroll_top = $(document).scrollTop(); 
       if (scroll_top > wys_okna && !pokazane) {
          pokazane = true;
          $("#scroll-to-top").fadeIn();
       } else if (scroll_top < wys_okna && pokazane) {
          pokazane = false;
          $("#scroll-to-top").fadeOut();
       }
   });
   $("#scroll-to-top").click(function(e){
      e.preventDefault();
      $('html, body').animate({scrollTop:0}, 1500);
	  
    });
 });
 </script>

	<a href="#" title="Do góry!" id="scroll-to-top"><img src="scrollup.png" alt="strzałka do góry" /></a>
</body>
</html>