<DOCTYPE html>
<html>
<head>
	<meta charset = "utf-8";
</head>
<body>
	<?php
$str = 'слова слова слова.';
echo trim($str,".").".<br>";
$str2 = '12345';
echo strrev($str2)."<br>";
$arr = ["madam", "otto", "kayak", "nun", "level","vovka","ogurec"];
foreach ($arr as $key => $value) {
	if(strrev($value)==$value){
		echo $value." -da<br>";
	}
	else echo $value." -net<br>";
}
$str3 = "sasafadad";
echo str_shuffle($str3)."<br>";
$str4 = "qwertyuiopasdfghjklzxvbnm";
$new = str_shuffle($str4);
echo substr($new, 0, 6)."<br>";
$str5 = '12345678';
echo number_format($str5, 0, " ", " ");
for($i = 0; $i <= 9; $i++){
	echo str_repeat("x", $i)."<br>";
}
for($i = 0; $i <= 9; $i++){
	echo str_repeat($i, $i)."<br>";
}
$str6 =  'html, <b>php</b>, js';
echo strip_tags($str6)."<br>";
echo htmlspecialchars('html, <b>php</b>, js')."<br>";
echo ord('a')." ".ord('b')." ".ord("c")." ".ord(" ")."<br>";
echo chr(33)."<br>";
$str7 = chr(rand(65, 90));
echo $str7."<br>";
$len = 7;
$str8 = "";
for($i = 0; $i < $len; $i++){
     $str8 .= chr(mt_rand(97, 122));
} 
echo $str8;
$str9 = 'var_test_text';
$arr5 = explode("_", $str9);
$str10 = "";
foreach ($arr5 as $key => $value) {
	if($key != 0){
		$str10 .= ucfirst($value);
	}
	else $str10 .= $value;
}
echo $str10."<br>";

$str11 =  '12345 67890';
$arr1 = explode(" ", $str11);
foreach ($arr1 as $key => $value) {
	$arr1[$key] = strrev($value);
}
$str2 = implode(" ", $arr1);
echo $str2."<br>";
$arr2 = [132,234,22,17,13,48,131];
foreach ($arr2 as $key => $value) {
	if(strpos($value, "3") != false){
		echo $value."<br>";
	}
}
?>

</body>
</html>
