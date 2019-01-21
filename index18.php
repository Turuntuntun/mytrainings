<?php
  error_reporting(E_ALL);
  ini_set('display_errors', 'on');
  session_start();
  if(isset($_REQUEST['submit'])){
  	 $_SESSION['name'] = $_REQUEST['name'];
  	 $_SESSION['surname'] = $_REQUEST['surname'];
  	 var_dump($_SESSION);
  }
?>
<form action = '' method = 'GET'>
	<input name = 'name'>
	<br>
	<input name = 'surname'>
	<br>
	<input type = 'submit' name = 'submit'>
</form>