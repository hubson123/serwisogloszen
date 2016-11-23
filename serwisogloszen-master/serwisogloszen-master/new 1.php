<?
session_start(); //rozpoczęcie sesji
$login=$_POST['user']; //odczytuje login z formularza
$has=crypt($_POST['pass'], 12); //szyfruje hasło
if(file_exists($login.'.pass')){ //jeżeli plik $login.pass istnieje...
$phaslo=$login.'.pass'; //przypisuje zmiennej phaslo nazwę pliku z hasłem
$haslo=fread(fopen($phaslo, "r"), filesize($phaslo)); /odczytuje hasło z pliku (chmod 666)
$ile=fread(fopen($login.'.ile', "r"), filesize($login.'.ile')); //odczytuje ilość logowań (chmod 666)
$ile = $ile+1; //dodaje 1 do $ile
fwrite(fopen($login.'.ile', "w"), $ile); //zapisuje zmienną $file do pliku z ilością logowań
$logi=fread(fopen("log.log", "r"), filesize("log.log")); //odczytuje logi ogólne
$logi .='
'.date("d-m-Y H:i").' - logowanie użytkownika '.$login; /* dopisuje do zmiennej $logi  logowanie użytkownika */
fwrite(fopen("log.log", "w"), $logi); //zapisuje $logi do pliku log.log (chmod 666)
}
else{ //jeżeli nie ma pliku $login.pass...
echo('Użytkownik nie istnieje<br>'); //... wyświetla napis
}
if($has == $haslo){ /* jeżeli hasło wprowadzone przez użytkownika zgadza się z tym z pliku... */
$_SESSION['user']=$_POST['user']; /* zapisuje do zmiennej sesji $user nazwę wprowadzoną przez usera */
$_SESSION['pass']=$_POST['pass']; /* jw. tylko zapisuje hasło do zmiennej $pass */
echo('Użytkownik <b>'.$login.'</b> został zalogowany.<br>'); //Wyswietla napis
echo('Sesja '.$session_id.' rozpoczęta.<br>');//Wyświetla ID sesji
echo('Logowałeś/aś się <b>'.$ile.'</b> razy<br>'); //Wyświetla ilość logowań
echo('<a href="http://www.smiechy.cba.pl/">Strona główna</a><br>'); /* Wyświetla link na stronę główną */
echo('W razie problemów z logowaniem, <a href="http://www.smiechy.cba.pl/kontakt.php?def=15">napisz do administracji strony</a>'); /* Wyświetla link kontaktowy */
 
 
}
else //Jeżeli haso się nie zgadza...
Echo('Złe hasło'); //Wyświetla napis
?>// koniec skryptu