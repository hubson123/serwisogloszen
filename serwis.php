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
	        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Projekt zaliczeniowy</title>
 <link rel="stylesheet" href="css/bootstrap.css" />
<link rel="stylesheet" href="css/bootstrap-theme.css" />
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
<script src="js/bootstrap.js"></script>
<style>
        #naglowek{

	background-image: url(gielda.png);
	color: red;
	border: 4px solid yellow;
	text-align:center;
        font-size: 60px;
       font-style: italic;
       font-family: Arial Black;
       
    }
    body{
        background:yellow;
    }
    #buttony{
        text-align: right;
        
        
    }
    </style>
</head>

<body> <div id="naglowek">Serwis ogłoszeń</div>
	
<?php

	echo "<p>Witaj ".$_SESSION['login'].'! [ <a href="logout.php">Wyloguj się!</a> ]</p>';	
?>
    Mój panel:
    <button>Dodaj ogłoszenie</button>

</body>
</html>