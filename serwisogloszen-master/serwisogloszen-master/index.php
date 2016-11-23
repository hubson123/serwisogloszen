<?php session_start();
      require_once('db.php');
?>
<html>
<head>
<title>Skrypt logowania z wykorzystaniem PHP i bazy MySQL</title>
</head>

<body>
  
  <?php
    if (!isset($_POST['login']) && !isset($_POST['password']) && $_SESSION['auth'] == FALSE) {
  ?>
  
      <form name="form-logowanie" action="index.php" method="post">
          Login: <input type="text" name="login" /><br />
          Hasło: <input type="password" name="password" />
          <input type="submit" name="zaloguj" value="Zaloguj" />
      </form>
 
  <?php
  }
	elseif (isset($_POST['login']) && isset($_POST['password']) && $_SESSION['auth'] == FALSE) {
      
		if (!empty($_POST['login']) && !empty($_POST['password'])) {
		$login = mysql_real_escape_string($_POST['login']);
		$password = mysql_real_escape_string($_POST['password']);

        $password = md5($password);
		$sql = mysql_num_rows(mysql_query("SELECT * FROM `user` WHERE `login` = '$login' AND `password` = '$password'"));
			if ($sql == 1) {
				$_SESSION['user'] = $login;
				$_SESSION['auth'] = TRUE;
				echo '<meta http-equiv="refresh" content="1; URL=hide.php">';
				echo '<p style="padding-top:10px";><strong>Proszę czekać...</strong><br />trwa logowanie i wczytywanie danych</p>';
			}
			else {
				echo '<p style="padding-top:10px;color:red";>Błąd podczas logowania do systemu<br />';
				echo '<a href="index.php">Wróć do formularza</a></p>';
			}
		}
		else {
			echo '<p style="padding-top:10px;color:red";>Błąd podczas logowania do systemu<br />';
			echo '<a href="index.php">Wróć do formularza</a></p>';	
		}
	}
	elseif ($_SESSION['auth'] == TRUE && !isset($_GET['logout'])) {
		echo '<meta http-equiv="refresh" content="1; URL=hide.php">';
		echo '<p style="padding-top:10px"><strong>Proszę czekać...</strong><br />trwa wczytywanie danych</p>';
	}
	elseif ($_SESSION['auth'] == TRUE && isset($_GET['logout'])) {
		$_SESSION['user'] = '';
		$_SESSION['auth'] = FALSE;
		echo '<meta http-equiv="refresh" content="1; URL=index.php">';
		echo '<p style="padding-top:10px"><strong>Proszę czekać...</strong><br />trwa wylogowywanie</p>';
	}
  ?>
  
</body>
  
</html>
