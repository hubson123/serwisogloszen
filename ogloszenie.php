<!DOCTYPE HTML>
<html lang="pl">
<head>
    <meta charset="utf8">
	        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Projekt zaliczeniowy</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
.navbar {
    padding-top: 15px;
    padding-bottom: 15px;
    border: 0;
    border-radius: 0;
    margin-bottom: 0;
    font-size: 16px;
    letter-spacing: 2px;
    font-family: Times New Roman;
   
}
.navbar-nav li a:hover {
    color: #1abc9c !important;
}
.nox{
    height:800px;
  background: radial-gradient(circle, grey, silver, grey);
}
.bg-4 { 
    background-color: #2f2f2f;
    color: #ffffff;
}
.main{
 	margin-top: 70px;
}

h1.title { 
	font-size: 50px;
	font-family: 'Passion One', cursive; 
	font-weight: 400; 
}

hr{
	width: 10%;
	color: #fff;
}

.form-group{
	margin-bottom: 15px;
}

label{
	margin-bottom: 15px;
}

input,
input::-webkit-input-placeholder {
    font-size: 11px;
    padding-top: 3px;
}

.main-login{
 	background-color: #fff;
    /* shadows and rounded borders */
    -moz-border-radius: 2px;
    -webkit-border-radius: 2px;
    border-radius: 2px;
    -moz-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    -webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);

}

.main-center{
 	margin-top: 30px;
 	margin: 0 auto;
 	max-width: 330px;
    padding: 40px 40px;
text-align: center;
}

.login-button{
	margin-top: 5px;
}

.login-register{
	font-size: 11px;
	text-align: center;
}
    </style>
</head>

<body>
  <nav class="navbar navbar-default">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
  
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
          <li><a href="dodaj_kategorie.php">Dodaj ogĹ‚oszenie</a></li>
        <li><a href="ogloszenie.php">Moje ogĹ‚oszenia</a></li>
        <li><a href="#">Archiwum</a></li>
        <li><a href="logout.php">Wyloguj siÄ™!</a></li>
      </ul>
    </div>
  </div>
</nav>


    <div class="nox">
        
	<form action='' method='POST' enctype='multipart/form-data'>
  Tytul: <input name="tytul" type="text">
  Kategoria: <input type="text" name="kategoria">
  Cena: <input type="number" name="cena">
  Data dodania: <input type="date" name="data_dodania">
  Opis: <input type="text" name="tresc">
  Obraz: <input type="file" accept="image/*" name="fad_photo">
  <input name="dodaj" value="dodaj" type="submit">
</form>
<?php
If (isset($_POST['dodaj'])){
        require ('db.php');
$tytul = $_POST['tytul'];
$kategoria = $_POST['kategoria'];
$cena = $_POST['cena'];
$data_dodania = $_POST['data_dodania'];
$tresc = $_POST['tresc'];
$path = 'zdjecia/moje/';
$ad_photo = $path.basename($_FILES['fad_photo']['name']);
if(move_uploaded_file($_FILES['fad_photo']['tmp_name'], $ad_photo)){
	$con = mysqli_connect('localhost','root','','serwis') or die ('Nie moĹĽna nawiÄ…zaÄ‡ poĹ‚Ä…czenia');
    $wynik = mysqli_query($con,"INSERT INTO ogloszenie (tytul, kategoria, cena, obraz, data_dodania, tresc) VALUES('$tytul','$kategoria','$cena','$ad_photo','$data_dodania','$tresc')");
}
}
?>
    </div>
<footer class="container-fluid bg-4 text-center">
  <p>Projekt wykonali: Hubert Firek i Adrian Krawczyk</p> 
</footer>
</body>

</html>


