<meta charset = 'utf-8'>
<?php 
for($i = 1; $i <= 100; $i++){
	echo $i."<br>";
}
echo "<br>";
for($i = 2; $i <= 100; $i += 2){
	echo $i."<br>";
}
echo "<br>";
$sum = 0;
for($i = 1; $i <= 100; $i++){
	$sum += $i;
}
echo $sum."<br><br>";
$sum = 0;
for($i = 1; $i <= 15; $i++){
	$sum += $i*$i;
}
echo $sum."<br><br>";
$sum = 0;
for($i = 1; $i <= 15; $i++){
	$sum += sqrt($i);
}
echo round($sum,2)."<br><br>";
$sum = 0;
for($i = 1; $i <= 100; $i++){
	if($i % 7 ==0 )	$sum += $i;
}
echo $sum."<br><br>";
$arr = [];
for($i = 0; $i <10;$i++){
	$arr[] = 'x';

}
var_dump($arr);
echo "<br><br>";
$arr1 = [];
for($i = 1; $i <= 10;$i++){
	$arr1[] = $i;

}
var_dump($arr1);
echo "<br><br>";
$arr2 = [];
for($i = 10; $i > 0;$i--){
	$arr2[] = $i;

}
var_dump($arr2);
echo "<br><br>";
$arr3 = [];
for($i = 1; $i <= 10;$i++){
	$arr3[] = mt_rand(1,10);

}
var_dump($arr3);
echo "<br><br>";
$arr4 = [];
for($i = 1; $i <= 6; $i++){
	$arr4[] = mt_rand(1,9);

}
echo implode('', $arr4);
echo "<br><br>";
$arr5 = [1,2,4,211,23,12,34];
$sum = 0;
foreach ($arr5 as $key => $value) {
	$sum += $value;
}
echo $sum."<br><br>";
$sum = 0;
foreach ($arr5 as $key => $value) {
	$sum += $value * $value;
}
echo $sum."<br><br>";
$sum = 0;
foreach ($arr5 as $key => $value) {
	$sum += $value*$value;
}
echo floor(sqrt($sum))."<br><br>";
$sum = 0;
foreach ($arr5 as $key => $value) {
	if($value > 0 and $value < 10) $sum += $value;
}
echo $sum."<br><br>";
$arr6 = [3,3,1,3,3,4,5,6];
$sum = 1;
foreach ($arr6 as $key => $value) {
	if($key != 0 and $arr6[$key - 1] == $value){
		$sum++;
	}else $sum = 1;
	if ($sum == 3) {
		echo "Есть<br><br>";
		break;
	}else{
		$sum == 1;
	}
}
if($sum == 1){
	echo "Нет<br><br>";
}
$zad = 12;
$str = '';
for($i = 1; $i <= $zad; $i++){
	for($j = 0;$j < $i; $j++){
		$str .= $i;
	}
}
echo $str."<br><br>";
$arr7 = [
		0=>['name'=>'Коля', 'salary'=>300],
		1=>['name'=>'Вася', 'salary'=>400],
		2=>['name'=>'Петя', 'salary'=>500],
	];
foreach ($arr7 as $key => $value) {
	echo $value['name']."-".$value['salary']."<br>";
}
$arr8 = [];
	for($i = 0; $i < 10; $i++){
		for($j = 0; $j < 10; $j++){
			$arr8[$i][] = mt_rand(1,10);
		}
	}
	var_dump($arr8);
	echo "<br><br>";
$str = 'dadada';
$arr9 = str_split($str,1);
$arr9[0] = strtoupper($arr9[0]);
$str = implode($arr9, '');
echo $str."<br><br>";
$arr9 = array_reverse($arr9);
$str2 = implode($arr9, '');
echo $str2."<br><br>";
$str3 = 'sSsafSwqWrDgSvS';
$arr10 = str_split($str3,1);
foreach ($arr10 as $key => $value) {
	if(ord($value) >= 97 and ord($value <= 122)){
          $arr10[$key] = strtoupper($arr10[$key]);
	}else{
		$arr10[$key] = strtolower($arr10[$key]);
	}
}
echo implode($arr10, '')."<br><br>";
$str4 = 'var_text_hello';
$arr11 = explode('_', $str4);
foreach ($arr11 as $key => $value) {
	if($key != 0){
		$arr11[$key] = ucfirst($arr11[$key]);
	}
}
echo implode($arr11, '')."<br><br>";
$str = '';
for($i = 1; $i <= 9; $i++){
    $str = str_repeat($i, $i);
    echo $str."<br><br>";
}
$str = 'xxxxxxxx';
while($str){
	echo $str."<br>";
	$str = substr($str, 1);
}
$arr12 = [1, 3, 2, 4];
$arr13 =[];
foreach ($arr12 as $key => $value) {
	for($i = 0; $i < $value; $i++ ){
       $arr13[] = $value;
	}
}
foreach ($arr13 as $key => $value) {
	echo $value.' ';
}
$arr14 =  [1, 2, 3, 4, 5, 6];
$arr15 = [];
foreach ($arr14 as $key => $value) {
	if($key % 2 != 0){
         $arr15[$value - 1] = $value;
	}
}
var_dump($arr15);
echo "<br><br>";
$str = 'sdsjdsjdjsa';
$newstr = '';
for($i = 0; $i < strlen($str); $i+=2){
	$newstr .= substr($str, $i, 1);
}
echo $newstr;
$str = "12345678";
$substr = array_reverse(str_split(strrev($str),2));
echo implode($substr, '')."<br><br>";
function un($arr)
	{
		$result = [];
		foreach ($arr as $elem) {
			if (in_array($elem, $result) == false) {
				$result[] = $elem;
			}
		}
		return $result;
	}
var_dump(un([1,2,4,1,2,4,5,2,3]));
echo "<br>";
function prost($value){
	if($value == 1) return "Никакое";
	if($value == 2) return "Простое";
	$fl = false;
	for($i = 2; $i < $value; $i++){
       if($value % $i == 0){
       	  $fl = true;
       	  break;
       }
	}
	if($fl){
		return "Составное";
	}else{
		return "Простое";
	}
}
for($i = 1; $i < 100; $i++ ){
	echo $i."-".prost($i)."<br>";
}
$arr20 = ['http://vk.com','https://saijsaisa.ru','http://yandex.ru','https://sss.ru','http://google.com'];
$arr21 = [];
foreach ($arr20 as $key => $value) {
	if(strpos($value, 'http://') !== false){
		$arr21[] = $value;
	}
}
var_dump($arr21);
echo "<br>";
?>