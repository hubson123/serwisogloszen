<?php

$name = $_POST['name'];

$email = $_POST['email'];

$message = $_POST['message'];

$odkogo = "stachujones.pl";

$dokogo = "hubert.firek@o2.pl";

$tytul = "Skargi zażalenia";

$wiadomosc = "";
$wiadomosc .= "Imie i nazwisko: " . $name . "\n";
$wiadomosc .= "Email: " . $email . "\n";
$wiadomosc .= "Wiadomość: " . $message . "\n";
$sukces = mail($dokogo, $tytul, $wiadomosc, "Od: <$odkogo>");
if ($sukces){
  echo "gites";
}
else{
  echo "nie gites";
}
?>
