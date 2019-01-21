<?php
  $week = [1=>'пн','вт','ср','чт','пт','сб','вс'];
  $month = ['янв','фев','март','апр','май','июнь','июль','авг','сент','окт','нояб','дек'];
  echo "<meta charset = utf-8>";
  $date = mktime(23,59,59,12,31);
  $date++;
  echo "До нового года осталось:".floor(($date-time())/3600/24)." дней.";
?>
<form action = '' method = 'POST'>
	<input type = 'text' name = 'text'>
	<input type = "submit">
</form>
<?php
 if(isset($_REQUEST['text'])){
 	$value = 1*strip_tags($_REQUEST['text']);
 	if($value === 0){
 		echo '';
 	}else
 	if(($value % 400 == 0) or (($value % 4 == 0) and ($value % 100 != 0))){
 		echo "Високосный";
 	}else{
 		echo "Невисокосный";
 	}
 }
 
?>
<form action = '' method = 'POST'>
	<input type = 'text' name = 'date'>
	<input type = "submit">
</form>

<?php
  if(isset($_REQUEST['date'])){
  	  $date = $_REQUEST['date'];
  	  $arr = explode('.', $date);
  	  $date1 = mktime(0,0,0,$arr[1],$arr[0],$arr[2]);
  	  echo date("w",$date1)."<br>";
  }
  $date2 = time();
  echo date('d',$date2).' '.$month[date('m',$date2)].' '.date('Y',$date2).' года, '.$week[date('w',$date2)]."<br>";
?>

<form action = '' method = 'POST'>
	<input type = 'birthday' name = 'birth'>
	<input type = "submit">
</form>
<?php 
  
  if(isset($_REQUEST['birth'])){
  	  $datebirth = explode('.', strip_tags($_REQUEST['birth']));
  	  if($datebirth[1]<date('m',time())){
  	     $newyear = date('Y',time()) + 1;
  	}else  $newyear = date('Y',time());
  	  $time = time();
  	  $datebirth1 = mktime(0,0,0,$datebirth[1],$datebirth[0], $newyear);
  	 
  	  echo ceil(($datebirth1 - $time)/60/60/24);
  }
?>
<form action = '' method = 'POST'>
	<input type = 'birthday' name = 'znak'>
	<input type = "submit">
</form>
<?php
   function znak($date){
   	$value = explode('.',$date);
       if(($value[1] == 1 and $value[0] <= 19) or ($value[1] == 12 and $value[0] >= 22)){
            echo "Похоже вы козерог";
       }
       if(($value[1] == 2 and $value[0] <= 18) or ($value[1] == 1 and $value[0] >= 20)){
            echo "Хм, водолей?";
       }
       if(($value[1] == 3 and $value[0] <= 20) or ($value[1] == 2 and $value[0] >= 19)){
            echo "Вы любите плавать? Ох, да вы же рыбы.";
       }
       if(($value[1] == 4 and $value[0] <= 19) or ($value[1] == 3 and $value[0] >= 21)){
            echo "Да вы же милый барашек)";
       }
       if(($value[1] == 5 and $value[0] <= 20) or ($value[1] == 4 and $value[0] >= 20)){
            echo "Телец? Только не забадай меня!";
       }
       if(($value[1] == 6 and $value[0] <= 20) or ($value[1] == 5 and $value[0] >= 21)){
            echo "Возвращайся в доту 2, там ракам и место";
       }
       if(($value[1] == 7 and $value[0] <= 22) or ($value[1] == 6 and $value[0] >= 21)){
            echo "Вы близнецы, вас не отлечить";
       }
       if(($value[1] == 8 and $value[0] <= 22) or ($value[1] == 7 and $value[0] >= 23)){
            echo "Не рычи, не рычи, я и так знаю, что ты лев";
       }
       if(($value[1] == 9 and $value[0] <= 22) or ($value[1] == 8 and $value[0] >= 23)){
            echo "Прекрасная дева, ну или нет, вам лучше знать";
       }
       if(($value[1] == 10 and $value[0] <= 22) or ($value[1] == 9 and $value[0] >= 23)){
            echo "Взвесьте мне 300 грамм,ааа, вы не такие весы..";
       }
       if(($value[1] == 11 and $value[0] <= 21) or ($value[1] == 10 and $value[0] >= 22	)){
            echo "Ты скорпион? Удивительно!";
       }
       if(($value[1] == 12 and $value[0] <= 21) or ($value[1] == 11 and $value[0] >= 22)){
            echo "Не стреляй своим луком,я спокоен";
   }
}
   if(isset($_REQUEST['znak'])){
   	  znak($_REQUEST['znak']);
}
$prazd = ['28.05','22.02','19.09'];
$now = time();
$fl = false;
foreach ($prazd as $key => $value) {
	$arr = explode('.', $value);
	if($arr[0] == date('d',$now) and $arr[1] == date('m',$now)){
		$fl = true;
		break;
	}
}
if($fl){
	echo "С праздничком";
}else echo "Нет сегодня праздника.<br>"

?>