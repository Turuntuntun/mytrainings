<!DOCTYPE html>
<html>
<head>
	<meta charset = "utf-8">
</head>
<body>
	<?php
	$date = time();
	echo date("Y",$date)." ".date("m",$date)." ".date("d",$date)." ".date("H",$date)." ".date("i",$date)." ".date("s",$date)."<br>";
    echo date("Y-m-d",$date)."<br>";
    echo date("d.m.Y",$date)."<br>";
    echo date("d.m.y",$date)."<br>";
    echo date("H:i:s",$date)."<br>";		
    $date = mktime(0,0,0,2,12,2025);
    echo date("d.m.Y",$date)."<br>";
    $week = ['вс','пн','вт','ср','чт','пт','сб'];
    echo $week[date("w",time())]."<br>";
    $month = [1=>'янв','фев','март','апр','май','июнь','июль','авг','сент','окт','нояб','дек'];	
    echo $month[date('n')]."<br>";
    echo date('t')."<br>";	
    $date = '2025-12-31';
    $date1 = strtotime($date);
    echo date('d-m-Y',$date1);
	?>
	<form action = '' method = 'GET'>
       <input type = 'text' name = 'date'>
       <input type = 'submit'>
	</form>
    <?php
      if(isset($_REQUEST['date'])){
      	$date = $_REQUEST['date'];
      	$date1 = strtotime($date);
      	echo date('H:i:s d.m.Y',$date1)."<br>";
      }
      $date =  date_create('2025-12-31');
      date_modify($date,'2 day');
      echo date_format($date, 'd.m.Y')."<br>";
      date_modify($date,'1 month');
      echo date_format($date, 'd.m.Y')."<br>";
      date_modify($date,'3 day');
      echo date_format($date, 'd.m.Y')."<br>";
      date_modify($date,'1 year');
      echo date_format($date, 'd.m.Y')."<br>";

      //Последняя секунда 31-го декабря текущего года:
	$time = mktime(23, 59, 59, 12, 31);
	
	//Первая секунда нового года:
	$time = $time + 1;
	
	//Отнимем от этого момента текущий и преобразуем в дни:
	echo floor(($time - time()) / (60 * 60 * 24))."<br>";

    ?>
    <form action = "" method = 'GET'>
         <input type = 'text' name = 'year'>
         <input type = 'submit'>
    </form>
    <?php
     if(isset($_REQUEST['year'])){
     	$year = $_REQUEST['year'];
     	$arr = [];
     	for ($i = 1; $i <= 12; $i++){
     		$date = mktime(0, 0, 0, $i, 13 , $year);
     		if(date('w',$date) == 5){
     			echo date('Y-m-d',$date)."<br>";
     		}
     	}
     }
     $date2 = date_create();
     date_modify($date2,'-100 day');
     echo date_format($date2,'w');
    ?>
</body>
</html>