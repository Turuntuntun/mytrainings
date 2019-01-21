<meta charset = 'utf-8'>
<?php
/*
 $x = file_get_contents('files/test.txt');
 $res = $x*$x;
 echo file_put_contents('files/test.txt', $res).'<br>';
 $count = file_get_contents('files/count.txt');
 $count++;
 file_put_contents('files/count.txt', $count);
 echo file_get_contents('files/count.txt')."<br>";
 */
 $arr = ['files/1.txt', 'files/2.txt', 'files/3.txt'];
 /*
 $res1 = '';
 foreach ($arr as $key => $value) {
 	$res1 .= file_get_contents($value);
}
file_put_contents('files/new.txt', $res1);
foreach ($arr as $key => $value) {
	$x = file_get_contents($value);
	file_put_contents($value, $x.'!');
}
rename('files/text.txt','dir/text.txt');
rename('dir2/text.php','dir2/text.txt');
copy('files/count.txt','files/count2.txt');

copy('text.txt','dir/text.txt');

unlink('text.txt');

foreach ($arr as $key => $value) {
	unlink($value);
}

if(file_exists('files/test.txt')){
	unlink('files/test.txt');
}else{
	file_put_contents('files/test.txt','');

foreach ($arr as $key => $value) {
	if(file_exists($value)){
		echo $value.' - СУЩ<br>';
	}else{
		 echo $value.' - НЕСУЩ<br>';
	}
}
echo ceil(filesize('index8.php')/1024).' кб<br>';
echo ceil(filesize('pict.jpg')/1024).' кб<br>';
$text = file_get_contents('test.txt');
$arr1 = explode(PHP_EOL, $text);
array_pop($arr1);
var_dump($arr1);
$sum = array_sum($arr1);
file_put_contents('sum.txt', $sum);
foreach ($arr as $key => $value) {
	$result .= $value.PHP_EOL;
}
file_put_contents('textt.txt', $result);
}
$arr2 = file('test.txt');
var_dump($arr2);
$sum = array_sum($arr2);
$str = file_get_contents('test.txt');
file_put_contents('test.txt', $str.PHP_EOL.$sum);

mkdir('dir5');
$arr3 = ['folder1','folder2','folder3'];
foreach ($arr3 as $key => $value) {
	mkdir($value);
}

mkdir('test');
for($i = 1; $i < 4; $i++){
	file_put_contents('test/'.$i.'.txt', '');
}
rename('old','new');

//$arr4 = scandir('dir');
$arr4 = array_diff(scandir('dir'),['..','.']);
foreach ($arr4 as $key => $value) {
	$x = file_get_contents('dir/'.$value);
	echo $value.' - '.$x.'<br>';
	file_put_contents('dir/'.$value, $x.'!');
}
$arr5 = array_diff(scandir('dir'),['..','.']);
foreach ($arr5 as $key => $value) {
	if(is_dir('dir/'.$value)){
		echo $value.' - Папка<br>';
	}
	if(is_file('dir/'.$value)){
		echo $value.' - Файл<br>';
	}
	}
copy('index.php', 'source.php');

getFiles('dir');
function getFiles($dir){
	$subdir = array_diff(scandir($dir),['..','.']);
	foreach ($subdir as $key => $value) {
		$path = $dir.'/'.$value;
		if(is_dir($path)){
			getFiles($path);
		}else{
		   $x = file_get_contents($path);
		   file_put_contents($path, $x.'!');
		}
	}
}
*/
removeFiles('dir2');
function removeFiles($dir){
	$subdir = array_diff(scandir($dir),['..','.']);
	foreach ($subdir as $key => $value) {
		$path = $dir.'/'.$value;
		if(is_dir($path)){
			removeFiles($path);
		}else{
		   unlink($path);
		}
	}
	rmdir($dir);
}
var_dump(glob('files/*.txt'));
?>