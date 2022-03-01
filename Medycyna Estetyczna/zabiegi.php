<!DOCTYPE html>
<?php

session_start();
?>
<html lang="pl">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Lek Józef Hlawacz Medycyna Estetyczna i Regeneracyjna, Chirurgia Ogólna</title>
		<meta name="description" content="Medycyna Estetyczna">
<meta name="keywords" content="Medycyna Estetyczna, Plasma Complex,Chirurgia Ogólna">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="style.css">
	 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

</head>
<body>

	   <div class="wrapper">
     
        <nav id="sidebar">
		<div class="sidebar-header">
             <a href="index.php">
    <img src="logo.png" alt="Logo">
  </a>
            </div>

            <ul class="list-unstyled components">
               
                <li>
                   <a href="omnie.php">
                        <i class="fas fa-briefcase"></i>
                       O mnie
                    </a>
					<hr>
                    <ul class="nav nav-tabs">
        <li >
            <a href="#a" data-toggle="tab">Konsultacje lekarskie</a>
        </li>
        <li >
            <a href="#b"  data-toggle="tab">Zabiegi z zakresu tzw. "małej chirurgii</a>
        </li>
        <li >
            <a href="#c" data-toggle="tab">Laseroterapia</a>
        </li>
		 <li >
            <a href="#d" data-toggle="tab">Zamykanie tzw. pajączków skórnych</a>
        </li>
		 <li >
            <a href="#e" data-toggle="tab">Nakłucia stawów</a>
        </li>
		 <li >
            <a href="#f" data-toggle="tab">Zabiegi z zakresu medycyny estetycznej</a>
        </li>
		 <li >
            <a href="#g" data-toggle="tab">Medycyna Regeneracyjna</a>
        </li>
		 <li >
            <a href="#h" data-toggle="tab">USG stawów</a>
        </li>
		 <li >
            <a href="#i" data-toggle="tab">Leczenie ran przewlekłych</a>
        </li>
	
    </ul>
	<hr>
					
                
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
                           if(isset($_SESSION["zalogowany"]))
						   {
					echo'<li class="nav-item"> <a class="nav-link" href="#">'.$_SESSION['login'].'</a></li>';
					
						
						echo '<li class="nav-item"><a class="nav-link" href="wizyta.php">Umów wizytę</a></li>';
					
					
					echo'<li class="nav-item">
						 <a class="nav-link" href="wyloguj.php">Wyloguj</a>
					</li>';
					
	}else
	{ echo'<li class="nav-item">
						  <a class="nav-link" href="logowanie.php">Umów wizytę</a>
					</li>';
		echo'<li class="nav-item">
						<a class="nav-link" href="logowanie.php">Zaloguj się</a>
					</li>';
					echo'<li class="nav-item">
						  <a class="nav-link" href="rejestracja.php">Rejestracja</a>
					</li>';
	}
				?>
                            
                        </ul>
                    </div>
                </div>
            </nav>
			<div class="tresc">
			<div class="tab-content">
           <article class="tab-pane fade show active"  id="a">
<h3>Konsultacje lekarskie</h3>
<p>Badanie lekarskie, badanie chiruriczne, kwalifikacje do zabiegów chirurgicznych, kwalifikacje do zabiegów medycyny estetycznej i regeneracyjnej.</p>

</article>
 <article class="tab-pane fade "  id="b">
<h3>Zabiegi z zakresu tzw. "małej chirurgii"</h3>
<p>Wycinanie zmian skórnych powierzchownych (znamiona, brodawki itp). <br>
Wycinanie zmian podskórnych (tłuszcaki, włókniaki, kaszaki, torbiele).<br>
Leczenie wrastających paznokci.
Elektrokoagulacja zmian skórnych.

</p>
</article>
 <article class="tab-pane fade "  id="c">
<h3>Laseroterapia</h3>
<p>Laser shr to następca lasera IPL/E-LIGHT. Laser shr wykazuje znacznie wyższą skuteczność w działaniu niż lasery IPL, E-LIGHT. Lasery SHR wykorzystują nową technologię In Motion, dzięki temu zabiegi są znacznie bezpieczniejsze, szybciej się je wykonuje i są znacznie skuteczniejsze.<br> SHR to rewolucyjna nowość w usuwaniu włosów:<br>
- szybsza praca niż laserem IPL, E-LIGHT: nawet 10-cio krotnie<br>
- skuteczniej niż laserem IPL, E-LIGHT: dzieki technologii SHR, która tylko częściowo wykorzystuje ścieżkę melaniny (40-50%) i połączeniu technologii In Motion, która delikatnie rozgrzewa skórę( maksymalnie do 45 stopni celsjusza) i pomaga wniknąć energii do mieszków włosowych<br>
- bezpieczniej niż laser IPL, E-LIGHT - dzięki technologii In Motion<br>
W związku z tym, za pomocą lasera SHR energia jest przekazywana przez tkanki wiele razy ( około 10 razy na sekundę ) w ciągłym  ruchu, przy niskim zużyciu energii, ale z dużą częstotliwością (do 3Hz, czyli 3 razy na sekundę) zamiast tradycyjnego , jednego, wysokoenergetycznego impulsu. W ten sposób melanina we włosach, jak również tkanka komórki macierzystej jest podgrzewana z niskim zużyciem energii, w wolnym tempie i przez dłuższy okres czasu w komfortowej temperaturze ok. 45° Celsjusza. </p><br><br>
<h5>URZĄDZENIE MA ZASTOSOWANIE DO NASTĘPUJĄCYCH ZABIEGÓW:</h5>
<p><a href="#owlosienie">· Usuwanie owłosienia.</a><br>
<a href="#foto">· Fotoodmładzanie skóry.</a><br>
<a href="#tradzik">· Usuwanie trądziku.</a><br>
<a href="#naczynia">· Terapia naczynkowa.</a><br>
<a href="#przebarwienia">· Terapia na przebarwienia.</a></p><br>

<br>
<h5 id="owlosienie">USUWANIE ZBĘDNEGO OWŁOSIENIA</h5><br>
<p>E-light to jedyna, opatentowana technologia, do skutecznego i bezinwazyjnego usuwania włosów (ciemnych, brązowych, jasnych, grubych, słabych) ze wszystkich typów skóry, włącznie ze skórą ciemną, opaloną. Ilość koniecznych zabiegów zależna jest od koloru włosów i typu skóry, oraz od obszaru na ciele pacjenta. Zwykle potrzebne jest 8 zabiegów.</p><br> 
<br>
<h5 id="naczynia">USUWANIE ZMIAN NACZYNIOWYCH</h5><br>
<p>Zasada działania przy usuwaniu zmian naczyniowych<br>
Zgodnie z teorią selektywnej termolizy, oddziaływanie światła na tkankę zależy od długości fali świetlnej, użytej energii oraz czasu naświetlania. Zmiana chorobowa zostaje wyeliminowana tylko wówczas, gdy całe naczynie osiąga temperaturę koagulacji. <br>

Absorpcja światła w melaninie jest wysoka. Z tego powodu uzyskanie dobrych efektów może być często przyczyną oparzeń. Ciepło wydzielane na skutek przepływu prądu RF powoduje  bowiem tylko podwyższenie temperatury naczynia (nie wydziela się w melaninie).</p> <br>
<h5>USUWANIE ZMIAN ZABURZENIA PIGMENTACJI</h5>
<p>Przebarwienia to zaburzenia barwnikowe powstające na skutek nadmiernej produkcji melaniny w skórze lub jej nierównomiernego rozłożenia. Objawiają się w postaci mniejszych bądź bardziej rozległych brązowych plam na twarzy, dekolcie, rękach i plecach. Zmiany ulegają nasileniu pod wpływem ekspozycji na promienie słoneczne.</p> <br><br>
<h5>WSKAZANIA DO ZABIEGU</h5>
<p>· piegi  <br>
· ostuda <br>
· plamy po słoneczne <br>
· plamy soczewicowe (starcze) <br>
· przebarwienia pozapalne, po trądzikowe <br>
<br>Przebarwienia mogą pojawić się ponownie ponieważ zabieg nie eliminuje tendencji do hiperpigmentacji , a jedynie usuwa jej skutki. Dlatego niezwykle ważnym punktem terapii jest profilaktyka oparta na unikaniu ekspozycji na promienie UV. Jeżeli zabiegowi poddana została duża powierzchnia, po zabiegu może pojawić się zasinienie lub obrzęk, jeśli coś taki wystąpi ustępuje zazwyczaj w przeciągu 10-14 dni. </p><br><br>
<h5 id="foto">FOTOODMłADZANIE</h5><br>
<p>Zabieg fotoodmładzania to unikalna procedura, pozwalająca na odmłodzenie skóry przy pomocy impulsowego źródła światła (IPL), bez konieczności rezygnacji z dotychczasowego trybu życia. Istnieje kilka metod oceny fotouszkodzeń skóry. Najprostszy podział, który stosujemy, definiuje wspólne cechy wewnętrznego i zewnętrznego starzenia się skóry. <br>
 Zabieg jest prowadzony na całej twarzy i w zależności od dominujących objawów, skórę naświetla się jedno- lub dwukrotnie w czasie jednego spotkania. <br>
 Usuwa rumień, wypieki, poszerzone naczynka i naczyniowe zmiany chorobowe, np. trądzik różowaty 
 Usuwa piegi, melanodermę oraz inne zaburzenia pigmentacji skóry spowodowane fotostarzeniem 
 Wygładza skórę, usuwa zmarszczki</p> <br><br>

<h5 id="tradzik">LECZENIE OBJAWÓW TRĄDZIKA</h5><br>
<p>Energia prądu RF powoduje radiotermolizę i atrofię gruczołów łojowych. W następstwie czego zmniejsza się ich wydzielanie.</p> <br>
<h5>PRZECIWWSKAZANIA</h5>
 <p>· Ciąża <br>
 · Przyjmowanie leków, przy których przeciwwskazana jest ekspozycja na promieniowanie o długości fali 420- 1200 nm. <br>
 · Opalenizna, oparzenia słoneczne, opalenizna sztuczna (solarium) <br>
 · Bliznowce<br> 
 · Zażywanie leków i ziół fotouczulających (retinol i pochodne, dziurawiec, nagietek) <br>
 · Pacjenci z implantowanym rozrusznikiem serca <br>
 · Cukrzyca <br>
 · Blizny lub infekcja naświetlanego obszaru (odleżyny, łuszczyca, wypryski) <br>
 · Krucha skóra <br>
 · Głęboki peeling chemiczny w ciągu ostatnich 3 miesięcy <br>
 · Metalowe implanty (w obszarze leczenia)<br> 
 · Nowotworowe lub przednowotworowe zmiany barwnikowe <br>
 · Głęboki peeling chemiczny w ciągu ostatnich 3 miesięcy </p><br><br>
<h5>MOŻLIWE EFEKTY UBOCZNE</h5><br>
<p>Występowanie efektów ubocznych jest rzadkie i są one przemijające. Każda niepożądana reakcja powinna być natychmiast zgłoszona lekarzowi. Efekty uboczne mogą wystąpić w czasie zabiegu lub bezpośrednio po nim. Są to: <br>
 · Ból <br>
 · Zaczerwienienie skóry (erytema) <br>
 · Uszkodzenie naturalnej struktury skóry (strup, pęcherz, oparzenie) <br>
 · Zmiana pigmentacji ( hiper- lub hipo- pigmentacja)<br> 
 · Blizna <br>
 · Opuchlizna (Edema) <br>
 · Siniaki </p><br><br>
<h5>LASER ND YAG Q-SWITCH</h5><br>
<p>Laser neodymowo-yagowy Q-Switch (Nd-YAG) jest jednym z najnowocześniejszych urządzeń, który znalazł swoje zastosowanie zarówno w salonach kosmetycznych, gabinetach odnowy biologicznej i gabinetach lekarskich. <br>
Laser Q-switch Nd-YAG cechuje się bardzo krótkim czasem trwania impulsu liczonym w ns (nanosekunda 10-9 s) i o bardzo wielkiej energii - rzędu kilku MW. Laser emituje falę o długości 532/1064 nm. <br>Jedna fala532 nm mieści się w zakresie światła widzialnego i dlatego widoczna jest zielona barwa tego światła.<br> Istotą oddziaływania każdego lasera jest pochłonięcie jego światła przez określone substancje i w ten sposób następuje uwolnienie zawartej w tym świetle energii. Najlepiej falę o długości 532 nm pochłania hemoglobina, która jest barwnikiem krwi i melanina – brązowy barwnik w skórze. Dlatego laser doskonale sprawdza się w usuwaniu zmian naczyniowych i zmian zawierających ciemny barwnik.</p><br><br>
<h5>FUNKCJE:</h5>
<p>· Usuuwanie tatuaży(również kolorowych)<br>
· Redukcja przebarwień<br>
· Peeling węglowy<br><br></p>
<h5>PRZYGOTOWANIE SKÓRY DO ZABIEGU</h5><br>
<p> Przed wykonaniem zabiegu skórę należy oczyścić, najlepiej ciepłą wodą bez użycia kosmetyków. <br>
 Skóra przed zabiegiem powinna zostać pozbawiona włosów. <br>
 Nie można wykonywać zabiegów na skórze opalonej.</p><br><br>
<h5>USUWANIE TATUAŻU</h5><br>

<p>W celu zwiększenia komfortu pacjenta zabieg usunięcia tatuażu wykonywany jest w znieczuleniu miejscowym. W przypadku tatuaży o bardzo dużych rozmiarach zabieg może zostać przeprowadzony w kilku etapach, każdy na innej części tatuażu.</p><br>
<h5>PO ZABIEGU</h5><br>
<p> Najważniejszą rzeczą jest to, aby nie odrywać strupków powstałych po usunięciu tatuażu, grozi to powstaniem blizn. Nie można również drapać ranki, która może swędzieć. <br>
 Miejsce na skórze należy chronić przed słońcem i solarium co najmniej 6 tygodni. Dobrze jest stosować krem z wysokim filtrem, który dodatkowo zabezpieczy skórę.<br> Jeżeli pacjentowi przynosi to ulgę można schładza miejsce zabiegu. <br>
 Nie należy w miejscu zabiegów stosować makijażu i unikać sytuacji narażających skórę na urazy oraz nie korzystać z sauny, klubów fitness i solarium. W przypadku zaobserwowania jakichkolwiek zmian należy bezzwłocznie skontaktować się z lekarzem.</p> <br>
<h5>RYZYKO PODCZAS ZABIEGU</h5><br>
 <p>Każdy zabieg nawet najmniejszy niesie za sobą ryzyko wystąpienia powikłań. Po usunięciu tatuażu laserem może wystąpić czasowe rozjaśnienie bądź przebarwienie skóry.<br> Bardzo rzadko pojawić się mogą niewielkie blizny. <br>
Mogą wystąpić: zaczerwienienie, lekka opuchlizna czy małe pęcherzyki na powierzchni objętej zabiegiem. Aby obniżyć ewentualny dyskomfort zabiegu chłodzimy skórę przy pomocy stosownych środków (kremy, żele czy zimne okłady).</p><br>
<h5>PRZECIWWSKAZANIA</h5>
<p> · ciemny odcień skóry<br>
 · skłonność do powstawania blizn<br>
 · bardzo duża powierzchnia tatuażu<br>
 · choroby tkanki łącznej<br>
 · zażywanie doustnych retinoidów oraz okres 3 miesięcy od zakończenia stosowania</p><br>
 
<h5 id="przebarwienia">USUWANIE PRZEBARWIEŃ</h5>
<p>Wysoka absorpcja promieni lasera w melaninie pozwala na likwidację przebarwień o różnych lokalizacjach. Konieczne jest powtórzenie kilku zabiegów w serii w odstępie od 3 do 4 tygodni.<br>Przebarwienia ulegają rozjaśnieniu bądź zniknięciu. Po zabiegu konieczne jest stosowanie filtrów z wysokim faktorem>50.</p><br><br>
<h5>USUWANIE NACZYNEK</h5><br>
<p>Laser penetruje płytko położone naczynia na twarzy i kończynach. Pochłonięte zielone światło (stąd „laser zielony”) przez hemoglobinę powoduje mikrowybuch i powstanie odczynu zapalnego w naczyniu i otoczeniu.<br> W następstwie dochodzi do zamknięcia naczynia, które jest trwałe. Zamknięte naczynie się nie otworzy.<br> Niektóre naczynka zamykają się natychmiast, inne wymagają dłuższego czasu – około 3-4 tygodni. Jeden zabieg laserowy pozwala nam na zamknięcie od 20% do 35% naczyń. <br>Dlatego konieczne jest powtórzenie zabiegów w odstępach 3-4 tygodni. Dla typowych zmian zlokalizowanych na twarzy wystarcza od 3 do 5 zabiegów. <br> Po zabiegu może powstać obrzęk, zwłaszcza w okolicach oka, niewielkie zaczerwienie utrzymujące się do kilku godzin.<br> Czasami mogą powstać mikrostrupki, które odpadają do 4 tygodni. Nie przeszkadza to w normalnym funkcjonowaniu i w życiu zawodowym.<br> Zwykle wykonujemy zabieg trwający 15 do 30 minut w 1 sesji.</p> <br><br>
<h5>LASEROWY PEELING WĘGLOWY</h5><br>
<p>Spectra Peel jest nowym rodzajem peelingu laserowego. Do wykonania Spectra Peel-u stosuje się laser Nd:YAG (neodymowo-yagowy) z tzw. Q-switch-em. W przeciwieństwie do resurfacingu laserami CO2 i Er:YAG laser nie odparowywuje tkanki, a tym samym nie powstają żadne długo gojące się rany.<br>
Spectra Peel jest bezinwazyjny i praktycznie bezbolesny, a rezultaty pozbawione dramatyzmu. Można powrócić do życia codziennego bezpośrednio po zabiegu. <br>Spectrapeel jest również pozbawiony ryzyka powikłań i skutków ubocznych, a spodziewane rezultaty po prostu lepszym i trwałym rozwiązaniem.<br>
</p>

</article>
 <article class="tab-pane fade "  id="d">
<h3>Zamykanie tzw. pajączków skórnych</h3>
<p>Zabieg zamykania poszerzonych naczyń skórnych za pomocą zjawiska radiotermolizy:<br>
Urzadzenie Termocell, które zdobyło wyróżnienie w prestiżowym konkursie Inspiracje Roku 2015 w kategorii "Urządzenia kosmetyczne na twarz i ciało" zorganizowanym przez magazyn BEAUTY Inspiration.<br><br></p>
<h5>CHARAKTERYSTYKA URZĄDZENIA</h5> 
    <p>Radiotermoliza Termocell wykorzystuje prądy o częstotliwości radiowej, które gwarantują bardzo wysoką skuteczność w walce z problemami naczyniowymi. <br>
    Podczas zabiegów dochodzi do całkowitej koagulacji naczyń, często już podczas pierwszego zabiegu.<br>
    Bardzo wysoka jakość wykonania pozwala na precyzyjne dotarcie do struktur docelowych.<br>
    Specjalistyczne głowice zapobiegają uszkodzeniom naskórka. <br>
    Sterylna sonda gwarantuje bezinwazyjne i nie pozostawiające żadnych śladów zabiegi.<br>
    Metoda nie wymaga wkłuwania igły w skórę.</p><br>
	
<h5>	ZASTOSOWANIE:</h5> 
   <p>· zamykanie popękanych naczyń krwionośnych.<br>
   · obkurczanie trwale rozszerzonych naczyń krwionośnych.<br>
   · zamykania naczyniaka wiśniowego(Plamki Campbell de Morgana)<br>
   · Usuwanie włókniaków.<br>
   </p>
   
</article>
 <article class="tab-pane fade "  id="e">
<h3>Nakłucia stawów</h3>
<p>Punkcje stawów z odbarczeniem plynu.<br>
Podawanie dostawowe leków.<br></p>

</article>
 <article class="tab-pane fade "  id="f">
<h3>Zabiegi z zakresu medycyny estetycznej</h3>
<p>
·Peelingi lekarskie<br>
·Usuwanie zmarszczek mimicznych za pomocą toksyny botulinowej.<br>
·Leczenie nadpotliwości za pomocą toksyny botulinowej.<br>
·Zabiegi redermalizacji (mezoterapia igłowa) skóry twarzy, szyji, dekoltu.<br>
·Rewitalizacja skóry twarzy z wykorzystaniem osocza bogatopłytkowego lub fibryny bogatokomórkowej.<br>
·Leczenie łysienia.<br>
·Zabieg Plasma Complex.<br>
·Volumetria twarzy(kwas hialuronowy).<br>
·Rewitalizacja skóry powiek i poprawa wyglądu ust.<br>
</p>

</article>
 <article class="tab-pane fade "  id="g">
<h3>Medycyna Regeneracyjna</h3>
<p>Zabieg Plasma Complex.</p>
<h5>ZABIEGI Z WYKORZYSTANIEM FIBRYNY BOGATOKOMÓRKOWEJ:</h5>
<p>
· Blizny zanikowe<br>
· Zapalenie ścięgien i przyczepów mieśniowych.<br>
· Choroba zwyrodnieniowa stawów.<br>
· Stany po urazach stawów i mięśni.<br> </p>

</article>
 <article class="tab-pane fade "  id="h">
<h3>USG stawów</h3>
<p>Badanie USG stawów kolanowych i barkowych</p>

</article>
 <article class="tab-pane fade "  id="i">
<h3>Leczenie ran przewlekłych</h3>
<p>· Leczenie owrzodzeń żylnych.<br>
· Stopa cukrzycowa.<br>
· Trudno gojące sięe rany.<br>
· Zabiegi z wykorzystaniem metod autologicznych(fibryna bogatokomórkowa i fibryna strukturalna w trudno gojących się ranach)</p>
</article>
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
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
    
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