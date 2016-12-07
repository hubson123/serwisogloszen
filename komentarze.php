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
    text-align: center; 
  
  background: radial-gradient(circle, grey, silver, grey);
}
.bg-4 { 
    background-color: #2f2f2f;
    color: #ffffff;
}
img {
width: 200px;
height: 100px;
}

    </style>
</head>

<body >
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
        <li><a href="archiwum.php">Archiwum</a></li>
        <li><a href="logout.php">Wyloguj się!</a></li>
      </ul>
    </div>
  </div>
</nav>


    <div class="nox">
 <form method="post" action="kontakt.php">
        
    <label>Imię i nazwisko</label>
    <input name="name" placeholder="Jan Kowalski">
            <br />
    <label>Email</label>
    <input name="email" type="email" placeholder="huhuhu@79huhu.pl">
            <br />
    <label>Wiadomość</label>
    <textarea name="message" placeholder="Napisz tu wiadomość"></textarea>
            <br />
    <input id="submit" name="submit" type="submit" value="Wyślij">
        
</form></div><?php 
3?>
       </div>
<footer class="container-fluid bg-4 text-center">
  <p>Projekt wykonali: Hubert Firek i Adrian Krawczyk</p> 
</footer>
</body>

</html>
