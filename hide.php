<?php session_start();
      require_once('db.php');
?>
<html>
<head>
<title>Skrypt logowania z wykorzystaniem PHP i bazy MySQL</title>
</head>

<body>
  
  <?php if ($_SESSION['auth'] == TRUE) {
          echo 'UKRYTA TREŚĆ!<br />';
          echo '<a href="index.php?logout">Wyloguj się</a>';
  }
  else {
          echo '<meta http-equiv="refresh" content="1; URL=index.php">';
          echo '<p style="padding-top:10px;color:white";><strong>Próba nieautoryzowanego dostępu...</strong><br />trwa przenoszenie do formularza logowania</p>';
  }
  ?>
  
</body>
  
</html>
