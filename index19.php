<?php
  session_start();
   if(!isset($_SESSION['text'])){
     $_SESSION['text'] = 'test';
}else {
	echo $_SESSION['text']."<br>";
}
   if(!isset($_SESSION['count'])){
   	  $_SESSION['count'] = 0;
   }
   else{
   	  $_SESSION['count']++;
   }
   echo $_SESSION['count'];
   if(isset($_REQUEST['submit'])){
   	  $_SESSION['country'] = $_REQUEST['country'];
   }
   echo "<br>";
   if(isset($_REQUEST['email'])){
   	  $_SESSION['email'] = $_REQUEST['email'];
   }
   echo "<br>";
   var_dump($_SESSION); 
?>

<form method = 'GET' action =''>
	<p>Из какой вы страны? <br><input name = 'country'></p>
	<input type = 'submit' name = 'submit'>
</form>
<br>
<form method = 'GET' action =''>
	<p>Какой у вас e-mail?
		<br>
        <input name = 'email' value = '<?php if(isset($_SESSION['email'])) echo ($_SESSION['email']) ?>'>
</p>
</form>