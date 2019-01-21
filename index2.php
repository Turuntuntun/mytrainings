<?php
$str = "php";
echo strtoupper($str)."<br>";
echo strtolower(strtoupper($str))."<br>";
$str1 = "london";
echo ucfirst($str1)."<br>";
$str2 = "London";
echo lcfirst($str2)."<br>";
$str3 = 'london is the capital of great britain';
echo ucwords($str3)."<br>";
$str4 = 'html css php';
echo strlen($str4)."<br>";
$password = "алатымыке";
if(strlen($password) > 5 and strlen($password) < 10){
	echo "Пароль подходит"."<br>";
}else{
	echo "Поменяйте пароль"."<br>";
}
$str5 = 'html css php';
$html = substr($str5, 0, 4);
$css = substr($str5, 5, 3);
$php =substr($str5, 9, 3);
echo $html."<br>".$css."<br>".$php."<br>";
$str6 = "jdnjgaj asjfna kasfjas";
echo substr($str6, -3)."<br>";
$str7 = "http://asfrasa";
$htp = substr($str7, 0, 7);
if($htp == "http://"){
	echo "да это так<br>";
}else{
	echo "нет это не так";
}
$str8 = "jdsjhq.png";
$png = substr($str8, -4);
if($png == ".png"){
	echo "да";
}else{
	echo "нет";
}
$str9 = "adsfasfs";
if(strlen($str9) > 5){
	$str9 = substr($str9, 0, 5)."...<br>";
}
echo $str9;
$str10 = '31.12.2013';
$str11 = str_replace( ".", "-",$str10)."<br>";
echo $str11;
$str12 = "aaabbbccbaab";
$str13 = str_replace(["a","b","c"],["1","2","3"], $str12);
echo $str13."<br>";
$str14 = '1a2b3c4b5d6e7f8g9h0';
$str14 = str_replace([1,2,3,4,5,6,7,8,9,0], '', $str14);
echo $str14."<br>";
$str15 = "aabbcccaabbcc";
$str15 = strtr($str15,["a"=>"1","b"=>"2","c"=>"3"]);
echo $str15."<br>";
$str16 = "adg1dd13fas";
$str16 = substr_replace($str16, "!!!", 3 , 5);
echo $str16."<br>";
$str17 = 'abc abc abc';
$res = strpos($str17, "b",3);
echo $res."<br>";
$str18 = 'aaa aaa aaa aaa aaa';
$first = strpos($str18, " ");
$second = strpos($str18, " ", $first + 1);
echo $second."<br>";
$str19 = 'html css php';
$arr = explode(" ", $str19);
var_dump($arr);
$str20 = implode(" ", $arr);
echo "<br>".$str20."<br>";
$date =  '2013-12-31';
$date1 = explode("-", $date);
$date2[0] = $date1[2];
$date2[1] = $date1[1];
$date2[2] = $date1[0];
$arr_date = implode(".", $date2);
echo $arr_date."<br>";
$str21 =  '1234567890';
$arr2 = str_split($str21, 2);
var_dump($arr2);
echo "<br>";
$arr3 = str_split($str21);
var_dump($arr3);
echo "<br>";
$str22 = '1234567890';
$arr4 = str_split($str22,2);
$str23 = implode("-", $arr4);
echo $str23."<br>";
$str24 = "    skfakaf   ";
echo trim($str24)."<br>";
$str25 = '/php/';
echo trim($str25, "/")."<br>";
?>