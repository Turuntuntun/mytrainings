<meta charset = "utf-8">
<?php
  function kvad($param){
  	return $param * $param;
  }
  function sum($a,$b){
  	return $a+$b;
  }
  echo kvad(5);
  echo sum(3,6);
  $arr = [1,2,3,4,5,6,7,5];
  $flag = false;
  foreach ($arr as $key => $value) {
  	if($value == 5){
  		$flag = true;
  	}
  }
  if($flag){
  	echo "есть<br>";
  }else echo "нет<br>";
  $flag = false;
  $chislo = 31;
  for($i = 2; $i < $chislo; $i++){
       if($chislo % $i == 0){
       	$flag = true;
       }
  }
  if($flag){
  	echo "Не простое<br>";
  }else echo "Простое<br>";
  $arr3 = [1,2,4,5,6,2,1,2];
  $flag = false;
  foreach ($arr3 as $key => $value) {
  	if($key > 0 and $arr3[$key-1] == $value){
  		$flag = true;
  	}
  }
  if($flag){
  	echo "Есть<br>";
  }else echo "Нет<br>";
  function srav($a,$b){
  	return $a == $b;
  }
  echo srav(4,4)."<br>";
  $str = '';
  for ($i = 1; $i <= 9; $i++ ){
      $str .= '-'.$i;
  }
  echo $str."-<br>";
  $str = '';
  for($i = 1;$i <= 20; $i++ ){
  	 $str .= 'x';
  	 echo $str."<br>";
  }
  $str = '';
  for($i = 1; $i <= 9; $i++ ){
  	for($j = 0; $j < $i; $j++){
  		$str .= $i;
  	}
  	echo $str."<br>";
  	$str = '';
  }
  $arr5 = [];
  $str = '';
  for ($i = 1; $i < 10; $i++ ){
       $str .= 'x';
       $arr5[] = $str;
  }
  var_dump($arr5);
  echo "<br>";
  $arr6 = [];
  $str = '';
  for ($i = 1; $i < 10; $i++ ){
  	for ($j = 0; $j < $i; $j++ ){
       $str .= $i;
       
   }
    $arr6[] = $str;
    $str = '';
  }
  var_dump($arr6);
  echo "<br>";
  function arrayFill($val,$len){
    $arr2 = [];
    for($i = 0; $i < $len; $i++){
      $arr2[] = $val;
    }
    return $arr2;
  }
  $arr8 = arrayFill("24fa",7);
  var_dump($arr8);
  $arr1 = [3,2,5,3,4,2,1,3,4,5,2,3];
  $res = 0;
  $i = 0;
  foreach ($arr1 as $key => $value) {
  	$res += $value;
  	if($res > 10){
        $res = $key + 1;
        break;
  	}
  }
  echo "<br>".$res;
  $arr7 = [[1, 2, 3], [4, 5], [6]];
  $sum = 0;
  foreach ($arr7 as $key => $value) {
  	foreach ($value as $key1 => $num) {
  		 $sum += $num;
  	}
  	
  }
  echo "<br>".$sum;
  $sum = 0;
  $arr4 = [[[1, 2], [3, 4]], [[5, 6], [7, 8]]];
  foreach ($arr4 as  $value) {
  	foreach ($value as  $num1) {
  		foreach ($num1 as  $num){
  		 $sum += $num;
  		}
  	}
  }
  	echo "<br>".$sum;
  	$s = 0;
  for($i = 0; $i < 3; $i++){
  	for($j = 0; $j < 3; $j++){
  		$s++;
  		$arr10[$i][$j] = $s;
  	}
  }
  echo "<br>";
  var_dump($arr10);
  $rus = ['а','б','в','г','д','е','ё','ж','з','и','й','к','л','м','н','о','п','р','c','т','у','ф','х','ц','ч','ш','щ','ъ','ы','ь','э','ю','я'];
  $eng = ['a','b','v','g','d','e','e','zh','z','i','i','k','l','m','n','o','p','r','s','t','u','f','kh','ts','ch','sh','shch','y','ie','"','e','yu','ya'];
  $fraze = 'привет всем';
  $fraze1 = 'как дела?';
  $fraze2 = 'история, которую мы хотим рассказать, не опирается на факты: она настолько невероятна, что в неё просто нельзя не поверить. Приключилась она в то замечательное время, когда мужчины владели шпагой лучше, чем грамотой, и шли бесстрашно не только в бой, но и под венец; когда женщины умели ценить бескорыстную любовь и вознаграждали её приданым; когда наряды были такими красивыми, а фигуры такими стройными, что первое было не стыдно надевать на второе.';
  echo "<br>".str_replace($rus, $eng, $fraze);
  echo "<br>".str_replace($rus, $eng, $fraze1);
  echo "<br>".str_replace($rus, $eng, $fraze2);
  echo count($rus);
  function  isNumberInRange($num){
  	 if($num > 0 and $num < 10) return true;
  	   return false;
  }
  $arr11 = [1,4,5,1,23,12,-3,4,-2,4,5,12];
  $arr12 = [];
  foreach ($arr11 as $key => $value) {
  	if(isNumberInRange($value)){
  		$arr12[] = $value;
  	}
  }
  echo "<br>";
  var_dump($arr12);
  function getDigitsSum($num){
  	return array_sum(str_split($num,1));
  }
  echo "<br>".getDigitsSum(2431);
  function getYearSum($num){
  	 if(getDigitsSum($num) == 13){
  	 	echo $num."<br>";
  	 } 
  }
  for($i = 0; $i < 2018; $i++){
  	getYearSum($i);
  }
  function isEven($num){
  	if($num%2 == 0){
  		return true;
  	}
  	else return false;
  	}
  	$arrChet = [1,3,2,5,3,2,6,3,2];
  	foreach ($arrChet as $key => $value) {
  		if(isEven($value)){
  			array_splice($arrChet, $key, 1);
  		}
  	}
  	echo "<br>";
  	var_dump($arrChet);
  	
  	function  getDivisors($num){
  		$del1 = [];
         for($i = 1; $i <= $num; $i++){
         	
         	if($num % $i == 0){
         		$del1[] = $i;
         		echo $del1[$i];
         	}
         }
         return $del1;
  	}
  	$f = getDivisors(15);
  	var_dump($f);
    echo "<br>";
    function getCommonDivisors($num1,$num2){
    	$arrr1 = getDivisors($num1);
    	$arrr2 = getDivisors($num2);
    	return array_intersect($arrr1, $arrr2);
    }
    $res = getCommonDivisors(45,90);
    var_dump($res);
?>