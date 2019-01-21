<meta charset = 'utf-8'>
<?php
   $name = 'Иван';
   echo 'Привет '.$name.'<br>';
   $arr =  ['name'=>'Иван', 'age'=>30];
   echo 'Привет '.$arr['name'].'! Тебе '.$arr['age'].' лет';
   $text = '!!!';
   echo '<p>'.$text.'</p>';
   $href = 'index.html';
   echo '<a href = "'.$href.'">Привет ребят</a>';
   $arr = ['привет', 'мой' , 'друг', 'рад', 'что' , 'ты' , 'зашел'];
   foreach ($arr as $key => $value) {
   	  echo '<p>'.$value.'</p>';
   }
   echo '<ul>';
    foreach ($arr as $key => $value) {
   	  echo '<li>'.$value.'</li>';
   }
   echo '</ul>';
   $arr1 = [
		['href'=>'1.html', 'text'=>'ссылка 1'],
		['href'=>'2.html', 'text'=>'ссылка 2'],
		['href'=>'3.html', 'text'=>'ссылка 3'],
	];
	echo '<ul>';
	foreach ($arr1 as $key => $value) {
		echo '<li><a href = "'.$arr1[$key]['href'].'">'.$arr1[$key]['text'].'</a></li>';
	}
	echo '</ul>';
	$arr2 = [
		['name'=>'Коля', 'age'=>30, 'salary'=>500],
		['name'=>'Вася', 'age'=>31, 'salary'=>600],
		['name'=>'Петя', 'age'=>32, 'salary'=>700],
	];
	echo '<table>';
	echo '<tr>';
	foreach ($arr2 as $key => $value) {
		echo '<tr>';
		foreach ($value as $key1 => $value1) {
			echo '<td>'.$value1.'</td>';
		}
		echo '</tr>';
	}
	echo '</tr>';
	echo '</table>';
    
?>
<table>
	<tr>
		<tr>
			<td>Коля</td>
			<td>30</td>
			<td>500</td>
		</tr>
		<tr>
			<td>Вася</td>
			<td>31</td>
			<td>600</td>
		</tr>
		<tr>
			<td>Петя</td>
			<td>32</td>
			<td>700</td>
		</tr>
	</tr>
</table>
<?php
  echo $_GET['get1']*$_GET['get1']."<br>";
  echo $_GET['get1']+$_GET['get2'];
  if($_GET['get1'] == 1){
  	echo 'Привет';
  }else echo 'Пока';
  $arr3 = [2,1,4,3,6,5];
  if(isset($arr3[$_GET['get1']])){
  	echo $arr3[$_GET['get1']];
  }
?>
<br>
<a href = '?get=1'>Ссылка 1</a>
<a href = '?get=2'>Ссылка 2</a>
<a href = '?get=3'>Ссылка 3</a>
<?php
  echo $_GET['get'];
  echo '<ul>';
  for($i = 0; $i < 6; $i++){
  	echo '<li><a href = "?get1='.$i.'">Ссылка</a></li>';
  }
  echo '</ul>';
  echo '<br>'.$_GET['get1'];
  echo $arr3[$_GET['get1']]."<br>";
  echo preg_replace('#a\+x#', '!', 'a+x ax aax aaax');
?>