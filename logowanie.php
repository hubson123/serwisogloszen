<?php
	session_start();
  
	if ((isset($_POST['udanarejestracja'])))
	{
		echo 'jej';
	}
	
	if ((!isset($_POST['login'])) || (!isset($_POST['haslo'])))
	{
		header('Location: glowna.html');
		exit();
	}
	require_once "db.php";
	mysqli_report(MYSQLI_REPORT_STRICT);
		
	try 
	{
		$polaczenie = new mysqli($dbhost, $dblogin, $dbhaslo, $dbselect);
		
		if ($polaczenie->connect_errno!=0)
		{
			throw new Exception(mysqli_connect_errno());
		}
		else
		{
			$login = $_POST['login'];
			$haslo = $_POST['haslo'];
			
			$login = htmlentities($login, ENT_QUOTES, "UTF-8");
		
			if ($rezultat = $polaczenie->query(
			sprintf("SELECT * FROM uzytkownicy WHERE login='%s'",
			mysqli_real_escape_string($polaczenie,$login))))
			{
				$ilu_loginow = $rezultat->num_rows;
				if($ilu_loginow>0)
				{
					$wiersz = $rezultat->fetch_assoc();
					
					if (password_verify($haslo, $wiersz['pass']))
					{
						$_SESSION['zalogowany'] = true;
						$_SESSION['id'] = $wiersz['id'];
						$_SESSION['login'] = $wiersz['login'];
                                                $_SESSION['haslo'] = $wiersz['haslo'];
                                                $_SESSION['email'] = $wiersz['email'];
					
						
						unset($_SESSION['blad']);
						$rezultat->free_result();
						
					}
					else 
					{
						$_SESSION['blad'] = '<span style="color:red">Nieprawidłowy login lub hasło!</span>';
						header('Location: glowna.html');
					}
					
				} else {
					
					$_SESSION['blad'] = '<span style="color:red">Nieprawidłowy login lub hasło!</span>';
					header('Location: glowna.html');
					
				}
				
			}
			else
			{
				throw new Exception($polaczenie->error);
			}
			
			$polaczenie->close();
		}
	}
	catch(Exception $e)
	{
		echo '<span style="color:red;">Błąd serwera! Przepraszamy za niedogodności i prosimy o wizytę w innym terminie!</span>';
		echo '<br />Informacja developerska: '.$e;
	}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Projekt zaliczeniowy</title>
 <link rel="stylesheet" href="css/bootstrap.css" />
<link rel="stylesheet" href="css/bootstrap-theme.css" />
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
<script src="js/bootstrap.js"></script>
<style>
    #naglowek{
border-top: red solid 3px;
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

<body><div id="naglowek">
    <p>Serwis ogłoszeń</p></div>
    	<form method="post">
	
		Login: <br /> <input type="text" name="login" /> <br />
		HasĹ‚o: <br /> <input type="password" name="haslo" /> <br /><br />
		<input type="submit" value="Zaloguj" />
	
	</form>
</body>

</html>
                