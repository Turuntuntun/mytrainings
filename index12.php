<meta charset ='utf-8'>
<form action = '' method = 'POST'>
	<textarea name = 'text'></textarea>
	<input type = 'submit'>
</form>
<?php
  if(isset($_REQUEST['text'])){
  	echo $_REQUEST['text']."<br>"	;
  	$a = (explode(' ', $_REQUEST['text']));
  	$res = 0;
  	foreach ($a as $key => $value) {
  		$res += strlen($value);
  	}
  	echo count($a)." Слов<br>";
  	echo strlen($_REQUEST['text'])." Символов<br>";
  	echo $res.' Символов без пробелов.<br>';
  }
?>

<form action = '' method = 'POST'>
	<textarea name = 'proc'></textarea>
	<input type = 'submit'>
</form>
<?php
  $pr = range('a','z');
  $res = array_fill(0, 26, 0);
  $scet = array_combine($pr, $res);
  $sum = 0;
  if(isset($_REQUEST['proc'])){
     $value = strip_tags($_REQUEST['proc']);
     echo $value."<br>";
     for($i = 0; $i < strlen($value); $i++){
     	$z = strtolower($value[$i]);
     	if($z != ' '){
     	     $scet[$z]++;
     	     $sum++;
     	 }
     }
    
    foreach ($scet as $key => $value) {
    	$zzzz = floor($value/$sum*100);
  	  echo $key."-".$zzzz."%<br>";
   }
  }
  $arr2 = ['hello','my','friend','my','name','lol','understand','monitor'];
  foreach ($arr2 as $key => $value) {
  	echo $value." ";
  }
?>
<form action = '' method = 'POST'>
	<input type = 'text' name = 'mas'>
	<input type = 'submit'>
</form>
<?php 
  if(isset($_REQUEST['mas'])){
  	 $val = explode(' ',$_REQUEST['mas']);
  	 foreach ($arr2 as $key => $value) {
  	     $fl = true;
  	     foreach ($val as $key1 => $value1) {
  	     	if(strpos($value, $value1) === false){
  	     		$fl = false;
  	     	}
  	     }
  	     if($fl) echo $value."<br>";
  	 }
  }

?>

<form action = '' method = 'POST'>
	<textarea name = 'bukv'></textarea>
	<input type = 'submit'>
</form>
<?php
  if(isset($_REQUEST['bukv'])){
  	$slov = explode(' ',strip_tags($_REQUEST['bukv']));
  	foreach ($slov as $key => $value) {
  		$bukv =  str_split(strtolower($value), 1);
  		$alf[$bukv[0]] = 0; 
  	}
  	ksort($alf);
  	foreach ($alf as $key1 => $value1) {
  		echo 'Слова на '.$key1." : ";
  	    foreach ($slov as $key => $value) {
  	    	$low = strtolower($value);
  		   if(strpos($value, $key1) === 0 or strpos($low, $key1) === 0){
              echo $value." ";
  		   }
  		}
  		echo "<br>";
  	}
  	var_dump($alf);
  }
?>
<form action = '' method = 'POST'>
	<input type = 'text' name = 'inp'>
	<input type = 'submit'>
</form>
<?php
   $rus = [];
   foreach (range(chr(192), chr(255)) as $b){
       $rus[] = iconv('CP1251', 'UTF-8', $b);
   }
   $eng = ["A","B","V","G","D","E","ZH","Z","I","J","K","L","M","N","O","P","R","S","T","U","F","H","C","CH","SH","SHCH","","Y","'","EH","YU","YA","a","b","v","g","d","e","zh","z","i","j","k","l","m","n","o","p","r","s","t","u","f","h","c","ch","sh","shch","","y","'","eh","yu","ya"];
   if(isset($_REQUEST['inp'])){
   	  $value = $_REQUEST['inp'];
   	  $value1 = str_replace($rus, $eng, $value);
   }
   echo $value1;
?>
<form action = '' method = 'POST'>
	<input type = 'text' name = 'inpi'>
	<p><input type = 'radio' name = 'knov' value = '1' checked>Транслит</p>
	<p><input type = 'radio' name = 'knov' value = '2'>Обратно</p>
	<input type = 'submit'>
</form>
<?php
   if(isset($_REQUEST['inpi'])){
   	 $value = $_REQUEST['inpi'];
   	 if($_REQUEST['knov'] == 1){
   	 	echo str_replace($rus, $eng, $value);
   	  }
   	  if($_REQUEST['knov'] == 2){
   	 	echo str_replace($eng, $rus, $value);
   	  }

   }


?>