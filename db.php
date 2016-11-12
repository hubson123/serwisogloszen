<?php
  $dbhost = 'localhost'; 	
  $dblogin = 'root';
  $dbpass = '';
  $dbselect = 'kursy';
  mysql_connect($dbhost,$dblogin,$dbpass);
  mysql_select_db($dbselect) or die("Błąd przy wyborze bazy danych");
  mysql_query("SET CHARACTER SET UTF8");
?>