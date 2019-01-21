<meta charset = 'utf-8'>
<?php
  error_reporting(E_ALL);
  ini_set('display_errors', 'on');
  echo 'Привет'."<br>";
  var_dump($_SERVER['REQUEST_URI']);
  echo '<br>';
  var_dump($_GET['get']);
  include 'index2.php';
?>