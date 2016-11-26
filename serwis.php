<?php

	session_start();
	
	if (!isset($_SESSION['zalogowany']))
	{
		header('Location: glowna.html');
		exit();
	}
	
?>
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
        <li><a href="#">Dodaj ogłoszenie</a></li>
        <li><a href="#">Moje ogłoszenia</a></li>
        <li><a href="#">Archiwum</a></li>
        <li><a href="logout.php">Wyloguj się!</a></li>
      </ul>
    </div>
  </div>
</nav>


    <div class="nox"></div>
<footer class="container-fluid bg-4 text-center">
  <p>Projekt wykonali: Hubert Firek i Adrian Krawczyk</p> 
</footer>
</body>

</html>