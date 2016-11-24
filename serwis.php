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
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>Serwis ogłoszeń</title>
</head>

<body>
	
<?php

	echo "<p>Witaj ".$_SESSION['login'].'! [ <a href="logout.php">Wyloguj się!</a> ]</p>';	
?>

</body>
</html>