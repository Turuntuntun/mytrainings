<?php
$arr = [1,2,4,5,6,3,4];
echo count($arr)."<br>";
echo $arr[count($arr) -1 ]."<br>";
var_dump(in_array(3, $arr));
$arr2 = [1, 2, 3, 4, 5];
echo array_sum($arr2)."<br>";
echo array_product($arr2)."<br>";
$sum = array_sum($arr2);
$result = $sum / count($arr);
echo $result."<br>";
$arr1 = range(1,100);
var_dump($arr1);
echo "<br>";
$arr2 = range("a","z");
var_dump($arr2);
$arr3 = range(1,9);
$arr3 = implode("-", $arr3);
echo $arr3."<br>";
echo array_sum($arr1)."<br>";
echo array_product(range(1, 15))."<br>";
$arr4 = [1, 2, 3];
$arr5 = ['a', 'b', 'c'];
var_dump(array_merge($arr4,$arr5));
$arr6 = [1, 2, 3, 4, 5];
var_dump(array_slice($arr6, 1, 3));
$arr7 = [1, 2, 3, 4, 5];
array_splice($arr7, 1, 2);
echo "<br>";
var_dump($arr7);
$arr8 = [1, 2, 3, 4, 5];
$arr9 = array_splice($arr8, 1, 3);
echo "<br>";
var_dump($arr9);
$arr10 = [1, 2, 3, 4, 5];
array_splice($arr10, 2, 0 , ["a","b","c"]);
echo "<br>";
var_dump($arr10);
$arr11 = [1, 2, 3, 4, 5];
array_splice($arr11, 1, 0, ["a","b"]);
array_splice($arr11, 6, 0, ["c"]);
array_splice($arr11, 8, 0, ["e"]);
echo "<br>";
var_dump($arr11);
$arr12 = ['a'=>1, 'b'=>2, 'c'=>3];
$keys = array_keys($arr12);
$values = array_values($arr12);
echo "<br>";
var_dump($keys);
echo "<br>";
var_dump($values);
echo "<br>";
$arr13 = array_combine($keys, $values);
var_dump($arr13);
echo "<br>";
$arr14 = ['a'=>1, 'b'=>2, 'c'=>3];
$res = array_flip($arr14);
var_dump($res);
$arr15 = [1, 2, 3, 4, 5];
$reverse = array_reverse($arr15);
echo "<br>";
var_dump($reverse);
$arr16 =  ['a', '-', 'b', '-', 'c', '-', 'd'];
$del = array_search( "-", $arr16)."<br>";
array_splice( $arr16, $del,1);
var_dump($arr16);
echo "<br>";
$arr17 = ['a', 'b', 'c', 'd', 'e'];
$arr18 = array_replace($arr17, [0=>'!',3=>'!!']);
var_dump($arr18);
echo "<br>".array_rand($arr17)."<br>";
$arr19 = [1,4,5,6,2,3,4,5,6,7];
shuffle($arr19);
var_dump($arr19);
echo "<br>";
$arr20 = range(1,25);
shuffle($arr20);
var_dump($arr20);
echo "<br>";
$arr21 = range("a", "z");
shuffle($arr21);
var_dump($arr21);
$arr22  = ['a', 'b', 'c', 'b', 'a'];
$arr22 = array_unique($arr22);
echo "<br>";
var_dump($arr22);
$arr23 = [ 'a', 'b', 'c'];
$arr23 = array_pad($arr23, 5, "-");
echo "<br>";
var_dump($arr23);
$arr24 = array_fill(0, 10,"x");
echo "<br>";
var_dump($arr24);
$arr25  = range(1,20);
array_chunk($arr25, 4);
echo "<br>";
var_dump($arr25);
$arr26 = [ 'a', 'b', 'c', 'b', 'a'];
echo "<br>";
var_dump(array_count_values($arr26));
$arr27 = array_map('sqrt', $arr15);
echo "<br>";
var_dump($arr27);
$arr28 = ['<b>php</b>', '<i>html</i>'];
echo "<br>";
$res = array_map("strip_tags",$arr28);
var_dump($arr28);
$arr29 = [' a ', ' b ', ' с '];
$res = array_map('trim',$arr29);
echo "<br>";
var_dump($arr29);
$arr30 = [1, 2, 3, 4, 5];
$arr31 = [3, 4, 5, 6, 7];
$arr32 = array_intersect($arr30, $arr31);
echo "<br>";
var_dump($arr32);
$str = '1234567890';
$arr32 = str_split($str,1);
echo "<br>".array_sum($arr32)."<br>";
$arr33 = range(1,26);
$arr34 = range("a","z");
$arr35 = array_combine($arr34, $arr33);
var_dump($arr35);
$arr36 = [1, 2, 4, 5, 5];
$arr36 = array_unique($arr36);
rsort($arr36);
echo "<br>".$arr36[1];
?>