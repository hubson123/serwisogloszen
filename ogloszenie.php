			<?php 
			session_start();
	
	if (!isset($_SESSION['zalogowany']))
	{
		header('Location: glowna.html');
		exit();
	} ?>
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

.login-zaloguj{
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
  <a class="navbar-brand" href="#"><?php  echo "<p>Witaj ".$_SESSION['login'].'!</p>';	 ?></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
          <li><a href="ogloszenie.php">Dodaj ogłoszenie</a></li>
        <li><a href="moje_ogloszenia.php">Moje ogłoszenia</a></li>
        <li><a href="#">Archiwum</a></li>
        <li><a href="logout.php">Wyloguj się!</a></li>
      </ul>
    </div>
  </div>
</nav>


    <div class="nox">
	<div class="row main">
	</br>
     <div class="main-login main-center">
	<form class="form-horizontal" action='' method='POST' enctype='multipart/form-data'>
	<div class="panel-heading">
	<center><h1 class="title">Dodaj ogłoszenie</h1></center>
	</div>
	<hr />
	<div class="form-group">
	<label for="tytul" class="cols-sm-2 control-label">Nazwa:</label>
	<div class="cols-sm-10">
	<div class="input-group">
	<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
  <input class="form-control" name="tytul" type="text">
  </div>
  </div>
  </div>
  <div class="form-group">
  <label for="kategoria" class="cols-sm-2 control-label">Kategoria:</label>
  <div class="cols-sm-10">
  <div class="input-group">
  <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
  <select class="form-control" name="kategoria" size="w">
	<option>Motoryzacja</option>
	<option>Dom</option>
	<option>Ubrania</option>
	<option>Gry</option>
</select>
  </div>
  </div>
  </div>
  <div class="form-group">
  <label for="cena" class="cols-sm-2 control-label">Cena:</label>
  <div class="cols-sm-10">
<div class="input-group"> 
<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
 <input class="form-control" type="number" name="cena" min="1">
 </div>
 </div>
 </div>
 <div class="form-group">
  <label for="data_dodania" class="cols-sm-2 control-label">Data:</label>
  <div class="cols-sm-10">
  <div class="input-group">
  <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
  <input class="form-control" type="text" name="data_dodania" value="<?= date('d-m-Y') ?>">
  </div>
  </div>
  </div>
  <div class="form-group">
  <label for="tresc" class="cols-sm-2 control-label">Opis:</label>
  <div class="cols-sm-10">
  <div class="input-group">
  <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
  <input class="form-control" type="text" name="tresc">
  </div>
  </div>
  </div>
  <div class="form-group">
  <label for="obraz" class="cols-sm-2 control-label">Obraz:</label>
  <div class="cols-sm-10">
  <div class="input-group">
  <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
  <input class="form-control" type="file" accept="image/*" name="obraz">
  </div>
  </div>
  </div>
  <input class="btn btn-primary btn-lg btn-block login-button" name="dodaj" value="dodaj" type="submit">
</form>
</div>

  
<?php
If (isset($_POST['dodaj'])){
        require ('db.php');
$tytul = $_POST['tytul'];
$kategoria = $_POST['kategoria'];
$cena = $_POST['cena'];
$data_dodania = $_POST['data_dodania'];
$tresc = $_POST['tresc'];
$path = 'zdjecia/moje/';
$ad_photo = $path.basename($_FILES['obraz']['name']);
if(move_uploaded_file($_FILES['obraz']['tmp_name'], $ad_photo)){
	$con = mysqli_connect('localhost','root','','serwis') or die ('Nie można nawiązaać połączenia');
    $wynik = mysqli_query($con,"INSERT INTO ogloszenie (tytul, kategoria, cena, obraz, data_dodania, tresc) VALUES('$tytul','$kategoria','$cena','$ad_photo','$data_dodania','$tresc')");
}
}
?>
</div>
    </div>
<footer class="container-fluid bg-4 text-center">
  <p>Projekt wykonali: Hubert Firek i Adrian Krawczyk</p> 
</footer>
</body>

</html>


