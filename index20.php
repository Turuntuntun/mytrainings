<?php
/*  setcookie('test',123);
  setcookie('test', '', time()-100); 
  echo $_COOKIE['test'];
  if (!isset($_COOKIE['Ind_Counter'])) $_COOKIE['Ind_Counter'] = 0;
     $_COOKIE['Ind_Counter']++;
     SetCookie('Ind_Counter', $_COOKIE['Ind_Counter'], 0x6FFFFFFF);
     echo "Посещений сайта - " . $_COOKIE['Ind_Counter'].'<br>';*/
   
      if(isset($_REQUEST['date_birth'])){
   	      $str = $_REQUEST['date_birth'];
   	      $arr = explode('-', $str);
     	  $date_birthday = mktime(0,0,0,$arr[1],$arr[0]);
   	      $z = floor((abs(time() - $date_birthday))/3600/24);
   	      SetCookie('date_birthday', $z);
   }
if(isset($_COOKIE['date_birthday'])){
	echo $_COOKIE['date_birthday'];
}
?>
<form action = '' method = 'GET'>
	<p>Введите вашу дату рождения</p>
	<input type = 'text' name = 'date_birth'>
</form>