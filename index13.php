<meta charset = 'utf-8'>



<form action = '' method = "POST">
<?php
   $mass = ["Как дела?","Хорошо","Сколько лет вы учились?",'5'];
   $var = ['Хорошо','Плохо','5','7'];
   if(!isset($_REQUEST['vopr'])){
   	  for($i = 0; $i < count($mass); $i+=2){
          echo $mass[$i]."<br>";
          echo '<input type = "radio" name = "vopr'.$i.'" value = ""><br>';
          echo '<input type = "radio" name = "vopr'.$i.'" value = "" checked><br>';

   	  }
   	  echo "<input type = 'submit' name = 'vopr'>";
   }else{
   	  foreach ($mass as $key => $value) {
        $kod = 'vopr'.$key;
   	  	if($key % 2 == 0 ){
   	  		$value1 = $_REQUEST[$kod];
            echo $mass[$key]."<br>";
            echo 'Ваш ответ: '.$value1."<br>";
   	  	}else{
   	  	   if($value == $value1){
              echo "Верно<br>";
   	  	   }else
   	  	   echo 'Неверно, правильный ответ:'.$value."<br>";
   	  	}
   	  }
   }

?>
</form>
<form action = '' method = 'POST'>
	<input type = 'text' name = 'fak'>
	<input type = 'submit'>
</form>
<?php
 if(isset($_REQUEST['fak'])){
 	$fakt = 1;
    $value = $_REQUEST['fak'];
    while ($value > 0) {
    	$fakt *= $value;
    	$value -=1;
    }
    echo $fakt;
 }
 ?>
<form action = '' method = 'POST'>
	<input type = 'text' name = 'a'>
	<input type = 'text' name = 'b'>
	<input type = 'text' name = 'c'>
	<input type = 'submit' name = 'ph'>
</form>
<?php
   if(isset($_REQUEST['ph'])){
      $a = $_REQUEST['a'];
      $b = $_REQUEST['b'];
      $c = $_REQUEST['c'];
      
      $disc = $b * $b - 4 * $a * $c;
      if($disc > 0){
          $x1 = (-$b - sqrt($disc))/(2 * $a);
          $x2 = (-$b + sqrt($disc))/(2 * $a);
          echo "Корень 1: ".$x1."<br>Корень 2:".$x2."<br>";
       } else if($disc == 0 ){
       	  $x = (-$b / (2 * $a));
       	  echo "Корень: ".$x; 
       }else echo 'Комплексные корни.';
     
}

?>
<form action = '' method = 'POST'>
	<input type = 'text' name = 'ab'>
	<input type = 'text' name = 'bc'>
	<input type = 'text' name = 'cd'>
	<input type = 'submit' name = 'ph1'>
</form>

<?php
   if(isset($_REQUEST['ph1'])){
        $a = $_REQUEST['ab'];
        $b = $_REQUEST['bc'];
        $c = $_REQUEST['cd'];
        $arr = [$a,$b,$c];

        rsort($arr);
        if($arr[0]*$arr[0] == $arr[1]*$arr[1] + $arr[2]*$arr[2] ){
        	echo "Пифагорова тройка";
        }else echo 'Нет';
   }
?>
<form action = '' method = 'POST'>
	<input type = 'text' name = 'del'>
	<input type = 'submit'>
</form>
<?php
   if(isset($_REQUEST['del'])){
   	$z =  $_REQUEST['del'];
      for($i = 1; $i < $z;$i++){
      	 if($z % $i == 0){
      	 	echo $i."<br>";
      	 }
      }
   }
?>
<form action = '' method = 'POST'>
	<input type = 'text' name = 'prost'>
	<input type = 'submit'>
</form>
<?php
   function isprost($number){
   	
   	  if($number == 2) return true;
   	  for($i = 2; $i < $number; $i++){
   	  	 if($number % $i == 0) return false;
   	  }
   	  return true;
   }
   function del($number){
   	    $arr = [];
        for($i = 2; $i < $number; $i++){
        	if($number % $i == 0 and isprost($i)){
        		return $i;
        	}
        }
   }
if(isset($_REQUEST['prost'])){
	$z = 0;

   	$val = $_REQUEST['prost'];
   	echo $val.'<br>';
   	if($val == 1 or isprost($val)){
   		echo 'Нет простых делителей';
   	}else{
   		while(!isprost($val)){
            $s[] = del($val);
            $val = $val / $s[$z];
            $z++;
   		}
   		$s[] = $val;
   		var_dump($s);
   	}
   	
}
?>

<form action = '' method = 'POST'>
	<p>Введите первое число</p>
	<input type = 'text' name = 'chislo_1'>
	<p>Введите второе число</p>
	<input type = 'text' name = 'chislo_2'>
	<input type = 'submit'>
</form>
<?php
function delitel($number){
	$arr = [];
        for($i = 2; $i < $number; $i++){
        	if($number % $i == 0){
        		$arr[] = $i;
        	}
        }
        return $arr;
}
 if(isset($_REQUEST['chislo_1']) and isset($_REQUEST['chislo_2'])){
 	$chislo_1 = $_REQUEST['chislo_1'];
 	$chislo_2 = $_REQUEST['chislo_2'];
 	$del1 = delitel($chislo_1);
 	var_dump($del1);
 	$del2 = delitel($chislo_2);
 	echo '<br>';
 	var_dump($del2);
 	$res = array_intersect($del1, $del2);
 	echo '<br>';
 	var_dump($res);
 	echo '<br>'.$res[0];
 	echo '<br>'.$res[count($res)-1];
 }
?>
<form action = '' method = 'POST'>
   <select name = 'day'>
	<?php
	   for($i = 1; $i <= 31; $i++){
         echo '<option value = "'.$i.'">'.$i.'</option>';
	   }
	?>	
	</select>
	<select name  = 'month'>
	<?php
	   for($i = 1; $i <= 12; $i++){
         echo '<option value = "'.$i.'">'.$i.'</option>';
	   }
	?>	
	</select>
	<select name = 'year'>
	<?php
	   for($i = 1990; $i <= 2025; $i++){
         echo '<option value = "'.$i.'">'.$i.'</option>';
	   }
	?>	
	</select>
	<input type = 'submit' name = 'subm'>
</form>
<?php
$week = ['вс','пн','вт','ср','чт','пт','сб'];
if(isset($_REQUEST['subm'])){
   $day = $_REQUEST['day'];
   $month = $_REQUEST['month'];
   $year = $_REQUEST['year'];
   $date = mktime(0,0,0,$month,$day,$year);
   echo date('Y-m-d',$date)."<br>";
   echo $week[date('w',$date)];
}
?>