<meta charset = "utf-8"> 
<?php
/* function mnoj($num,$var1,$var2,$var3){
    if(($num % 100 > 5 and $num % 100 <= 20) or ($num % 10 >= 5) or ($num % 10 == 0)){
    	return $var3;
    }else if($num % 10 == 1){
    	return $var1;
    }else return $var2;
}
    for($i = 1; $i < 100; $i++){
       echo $i."-".mnoj($i,'яблоко', 'яблока', 'яблок')."<br>";
}
 function bil($num){
 	if(strlen($num) < 6){
 		$raz = 6 - strlen($num);
 		for($i = 0; $i < $raz; $i++){
 			$num = '0'.$num;
 		}
 	}
 	$arr = str_split($num, 1);
 	$one = $arr[0] + $arr[1] + $arr[2];
 	$two = $arr[3] + $arr[4] + $arr[5];
 	if($one == $two) echo $num."<br>";
 }
 for($i = 1; $i < 1000000; $i++){
 	bil($i);
 }
  ini_set('max_execution_time', 0);
 function friend($num1,$num2){
 	$arr1 = del($num1);
 	$arr2 = del($num2);
 	if($arr1 == $num2 and $arr2 == $num1){
 		echo $num1."-".$num2."<br>";
 	}
 }
 function del($num){
 	$arr3 = [];
 	for($i = 1; $i <= ceil($num / 2)  ; $i++){
        if($num % $i == 0){
           $arr3[] = $i;	
        }
 	}

 	return array_sum($arr3);
 }
 for($i = 2;$i < 10; $i += 2){
 	for($j = ceil($i / 2); $j < $i; $j += 2){
 		friend($i,$j);
 	}
 }
 

 function cut($str,$num = 10){
 	return substr($str, 0, $num);
 }

 echo cut("sjsiajisjiasjai")."<br>";
 echo cut("asasasasasa",2);

 function lowNum($num)
	{   
		$arr = str_split($num);
		$result = array_sum($arr);
		if ($resullt > 9) {
			$result = lowNum($result);
		}
		return $result;
	}
	echo "<br>".lowNum(5523)."<br>";
?>

<form action = '' method = "POST">
  <p>html<input type = "checkbox" name = 'check[]' value = "html"></p>
  <p>css<input type = "checkbox" name = 'check[]' value = "css"></p>
  <p>php<input type = "checkbox" name = 'check[]' value = "php"></p>
  <p>js<input type = "checkbox" name = 'check[]' value = "js"></p>
  <input type = 'submit'>
</form>

<?php
 if(isset($_REQUEST['check'])){
 	echo implode(',', $_REQUEST['check']);
 }
  
?>
<form action = '' method = "POST">
  <p>Знаю<input type = "radio" name = 'rad' value = "1" checked></p>
  <p>Не знаю<input type = "radio" name = 'rad' value = "0"></p>
  <input type = 'submit'>
</form>
<?php 
 if(isset($_REQUEST['rad']) and $_REQUEST['rad'] == 1){
 	echo "Вы знаете";
 }
 if(isset($_REQUEST['rad']) and $_REQUEST['rad'] == 0){
 	echo "Вы не знаете";
 }



 ?>
<form action = '' method = "POST">
  <p> Сколько вам лет?</p>
  <p>20<input type = "radio" name = 'rad' value = "0" checked></p>
  <p>20-25<input type = "radio" name = 'rad' value = "1"></p>
  <p>25-30<input type = "radio" name = 'rad' value = "2"></p>
  <p>30+<input type = "radio" name = 'rad' value = "3"></p>
  <input type = 'submit'>
</form>
<?php 
 if(isset($_REQUEST['rad']) and $_REQUEST['rad'] == 1){
 	echo "Вам 20";
 }
 if(isset($_REQUEST['rad']) and $_REQUEST['rad'] == 0){
 	echo "Вам 20-25";
 }
 if(isset($_REQUEST['rad']) and $_REQUEST['rad'] == 2){
 	echo "Вы 25-30";
 }
 if(isset($_REQUEST['rad']) and $_REQUEST['rad'] == 3){
 	echo "Вам 30+";
 }
 ?>

 ?>
<form action = '' method = "POST">
	<select  multiple  name = 'rad[]'>
		<option disabled>Сколько вам лет?</option>
		<option value = "1">html</option>
		<option value = "2">css</option>
		<option value = "3">js</option>
		<option value = "4">php</option>
	</select>
    <input type = 'submit'>
</form>
<?php 
 $str = 'Вы знаете: ';
	foreach ($_REQUEST['rad'] as $elem) {
		if($elem == 1) {
			$str .= 'html, ';
		}
		if($elem == 2) {
			$str .= 'css, ';
		}
		if($elem == 3) {
			$str .= 'php, ';
		}
		if($elem == 4) {
			$str .= 'javascript.';
		}
	}
	echo $str;
 ?>

*/
 ?>
 <form action = '' method = 'POST'>
 	<?php
 function in($type,$name,$value){
 	if(isset($_REQUEST[$name])){
 		$value = $_REQUEST[$name];
 	}
   return "<input type =".$type." name = ".$name." value = ".$value.">";
}
function check($name){
	if(isset($_REQUEST[$name]) and $_REQUEST[$name] == 1){
		$value = "checked";
	}
	else $value = '';
	return "<input type = 'hidden' name = '".$name."' value = '0' ><input type = 'checkbox' name = '".$name."'value = '1' ".$value.">";
}

echo in("text","one","");
echo check("checkbox","lol");
  ?>
  <input type = "submit">
</form>



