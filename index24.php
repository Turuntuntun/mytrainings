<?php
	error_reporting(E_ALL);
    ini_set('display_errors', 'on');

	$host = 'localhost';
	$user = 'root';
	$password = 'nfnmzyf40404';
	$dbName = 'my';

	$link = mysqli_connect($host,$user,$password,$dbName);
	mysqli_query($link,"SET NAMES 'utf-8'");
    $query = 'SELECT * FROM users WHERE id IN (1,2,3,5,14)';
    
    /*$result = mysqli_query($link,$query) or die(mysql_error($link));
    for( $date = []; $row = mysqli_fetch_assoc($result); $date[] = $row);
    foreach ($date as $key => $value) {
    	var_dump($value);
    	echo '<br>';
    }
    echo "<br>";
    $query = 'SELECT * FROM users WHERE login IN ("eee","bbb","zzz")';
    $result = mysqli_query($link,$query) or die(mysql_error($link));
    for( $date = []; $row = mysqli_fetch_assoc($result); $date[] = $row);
    foreach ($date as $key => $value) {
    	var_dump($value);
    	echo '<br>';
    }
    $query = 'SELECT * FROM users WHERE login IN ("admin","user","ivan") AND id IN (1,2,3,7,9)';
    $result = mysqli_query($link,$query) or die(mysql_error($link));
    for( $date = []; $row = mysqli_fetch_assoc($result); $date[] = $row);
    foreach ($date as $key => $value) {
    	var_dump($value);
    	echo '<br>';
    }
    echo '<br>';
    create_select('login',"('eee','bbb','zzz')",$link);
    create_select('id','(1,2,3,5,14)',$link);
    function create_select($field,$str,$link){
    	$query = "SELECT * FROM users WHERE $field IN $str";
	    $result = mysqli_query($link,$query) or die (mysql_error($link));
	    for( $date = []; $row = mysqli_fetch_assoc($result); $date[] = $row);
	    foreach ($date as $key => $value) {
	    	var_dump($value);
	    	echo '<br>';
	    }
	    echo "<br>";
    }
    
    $query = "SELECT * FROM users WHERE salary BETWEEN 100 and 1000";
    $result = mysqli_query($link,$query) or die (mysql_error($link));
	    for( $date = []; $row = mysqli_fetch_assoc($result); $date[] = $row);
	    foreach ($date as $key => $value) {
	    	var_dump($value);
	    	echo '<br>';
	    }
    echo "<br>";
    $query = "SELECT * FROM users WHERE salary BETWEEN 300 and 500 AND id BETWEEN 3 and 10";
    $result = mysqli_query($link,$query) or die (mysql_error($link));
	    for( $date = []; $row = mysqli_fetch_assoc($result); $date[] = $row);
	    foreach ($date as $key => $value) {
	    	var_dump($value);
	    	echo '<br>';
	    }
    echo "<br>";
    $query = "SELECT id as userid, login as userlogin, salary as userSalary FROM users";
    $result = mysqli_query($link,$query) or die (mysql_error($link));
	    for( $date = []; $row = mysqli_fetch_assoc($result); $date[] = $row);
	    foreach ($date as $key => $value) {
	    	var_dump($value);
	    	echo '<br>';
	    }
    echo "<br>";
    $query = "SELECT DISTINCT salary FROM users";
    $result = mysqli_query($link,$query) or die (mysql_error($link));
	    for( $date = []; $row = mysqli_fetch_assoc($result); $date[] = $row);
	    foreach ($date as $key => $value) {
	    	var_dump($value);
	    	echo '<br>';
	    }
    echo "<br>";
    $query = "SELECT DISTINCT val FROM users";
    $result = mysqli_query($link,$query) or die (mysql_error($link));
	    for( $date = []; $row = mysqli_fetch_assoc($result); $date[] = $row);
	    foreach ($date as $key => $value) {
	    	var_dump($value);
	    	echo '<br>';
	    }
    echo "<br>";
    $query = "SELECT MIN(salary) FROM users";
    $result = mysqli_query($link,$query) or die (mysql_error($link));
        for( $date = []; $row = mysqli_fetch_assoc($result); $date[] = $row);
        foreach ($date as $key => $value) {
            var_dump($value);
            echo '<br>';
        }
    echo "<br>";
    $query = "SELECT MAX(salary) FROM users";
    $result = mysqli_query($link,$query) or die (mysql_error($link));
        for( $date = []; $row = mysqli_fetch_assoc($result); $date[] = $row);
        foreach ($date as $key => $value) {
            var_dump($value);
            echo '<br>';
        }
    echo "<br>";
    $query = "SELECT SUM(salary) as sum FROM users WHERE val BETWEEN 21 and 25";
    $result = mysqli_query($link,$query) or die (mysql_error($link));
        for( $date = []; $row = mysqli_fetch_assoc($result); $date[] = $row);
        foreach ($date as $key => $value) {
            var_dump($value);
            echo '<br>';
        }
    echo "<br>";
    $query = "SELECT SUM(salary) as sum FROM users WHERE id IN (1,2,3,5)";
    $result = mysqli_query($link,$query) or die (mysql_error($link));
        for( $date = []; $row = mysqli_fetch_assoc($result); $date[] = $row);
        foreach ($date as $key => $value) {
            var_dump($value);
            echo '<br>';
        }
    echo "<br>";
    $query = "SELECT AVG(salary) as sum FROM users";
    $result = mysqli_query($link,$query) or die (mysql_error($link));
        for( $date = []; $row = mysqli_fetch_assoc($result); $date[] = $row);
        foreach ($date as $key => $value) {
            var_dump($value);
            echo '<br>';
        }
    echo "<br>";
    $query = "SELECT AVG(val) as sum FROM users";
    $result = mysqli_query($link,$query) or die (mysql_error($link));
        for( $date = []; $row = mysqli_fetch_assoc($result); $date[] = $row);
        foreach ($date as $key => $value) {
            var_dump($value);
            echo '<br>';
        }
    echo "<br>";
    $query = "SELECT * FROM users WHERE date > NOW()";
    $result = mysqli_query($link,$query) or die (mysql_error($link));
        for( $date = []; $row = mysqli_fetch_assoc($result); $date[] = $row);
        foreach ($date as $key => $value) {
            var_dump($value);
            echo '<br>';
        }
    echo "<br>";
    $query = "INSERT INTO users SET val = 22, date = NOW(), login = 'sa', salary = 500 ";
    $result = mysqli_query($link,$query) or die (mysql_error($link));
        for( $date = []; $row = mysqli_fetch_assoc($result); $date[] = $row);
        foreach ($date as $key => $value) {
            var_dump($value);
            echo '<br>';
        }
    echo "<br>";*/
    $query = "SELECT * FROM users WHERE YEAR(date) = 2019";
    $result = mysqli_query($link,$query) or die (mysql_error($link));
        for( $date = []; $row = mysqli_fetch_assoc($result); $date[] = $row);
        foreach ($date as $key => $value) {
            var_dump($value);
            echo '<br>';
        }
    echo "<br>";
    $query = "SELECT * FROM users WHERE MONTH(date) = 3";
    $result = mysqli_query($link,$query) or die (mysql_error($link));
        for( $date = []; $row = mysqli_fetch_assoc($result); $date[] = $row);
        foreach ($date as $key => $value) {
            var_dump($value);
            echo '<br>';
        }
    echo "<br>";
     $query = "SELECT * FROM users WHERE DAY(date) = 8";
    $result = mysqli_query($link,$query) or die (mysql_error($link));
        for( $date = []; $row = mysqli_fetch_assoc($result); $date[] = $row);
        foreach ($date as $key => $value) {
            var_dump($value);
            echo '<br>';
        }
    echo "<br>";
    $query = "SELECT * FROM users WHERE DAY(date) = 5 AND MONTH(date) = 4";
    $result = mysqli_query($link,$query) or die (mysql_error($link));
        for( $date = []; $row = mysqli_fetch_assoc($result); $date[] = $row);
        foreach ($date as $key => $value) {
            var_dump($value);
            echo '<br>';
        }
    echo "<br>";
    $query = "SELECT * FROM users WHERE DAY(date) IN (1, 7, 11, 12, 15, 19, 21, 29)";
    $result = mysqli_query($link,$query) or die (mysql_error($link));
        for( $date = []; $row = mysqli_fetch_assoc($result); $date[] = $row);
        foreach ($date as $key => $value) {
            var_dump($value);
            echo '<br>';
        }
    echo "<br>";
    $query = "SELECT * FROM users WHERE WEEKDAY(date) = 2";
    $result = mysqli_query($link,$query) or die (mysql_error($link));
        for( $date = []; $row = mysqli_fetch_assoc($result); $date[] = $row);
        foreach ($date as $key => $value) {
            var_dump($value);
            echo '<br>';
        }
    echo "<br>";
    $query = "SELECT * FROM users WHERE YEAR(date) = 2016 AND DAY(date) < 10";
    $result = mysqli_query($link,$query) or die (mysql_error($link));
        for( $date = []; $row = mysqli_fetch_assoc($result); $date[] = $row);
        foreach ($date as $key => $value) {
            var_dump($value);
            echo '<br>';
        }
    echo "<br>";
    $query = "SELECT * FROM users WHERE DAY(date) < MONTH(date)";
    $result = mysqli_query($link,$query) or die (mysql_error($link));
        for( $date = []; $row = mysqli_fetch_assoc($result); $date[] = $row);
        foreach ($date as $key => $value) {
            var_dump($value);
            echo '<br>';
        }
    echo "<br>";
    $query = "SELECT DAY(date) as day, MONTH(date) as month, YEAR(date) as year FROM users ";
    $result = mysqli_query($link,$query) or die (mysql_error($link));
        for( $date = []; $row = mysqli_fetch_assoc($result); $date[] = $row);
        foreach ($date as $key => $value) {
            var_dump($value);
            echo '<br>';
        }
    echo "<br>";
    $query = "SELECT WEEKDAY(date) as today FROM users";
    $result = mysqli_query($link,$query) or die (mysql_error($link));
        for( $date = []; $row = mysqli_fetch_assoc($result); $date[] = $row);
        foreach ($date as $key => $value) {
            var_dump($value);
            echo '<br>';
        }
    echo "<br>";
    $query = "SELECT EXTRACT(YEAR FROM date) as year, EXTRACT(MONTH FROM date) as month, EXTRACT(DAY FROM date) as day FROM users";
    $result = mysqli_query($link,$query) or die (mysql_error($link));
        for( $date = []; $row = mysqli_fetch_assoc($result); $date[] = $row);
        foreach ($date as $key => $value) {
            var_dump($value);
            echo '<br>';
        }
    echo "<br>";
    $query = "SELECT DATE(date) FROM users";
    $result = mysqli_query($link,$query) or die (mysql_error($link));
        for( $date = []; $row = mysqli_fetch_assoc($result); $date[] = $row);
        foreach ($date as $key => $value) {
            var_dump($value);
            echo '<br>';
        }
    echo "<br>";
    $query = "SELECT DATE_FORMAT(date, '%d.%m.%Y') as date_format FROM users";
    $result = mysqli_query($link,$query) or die (mysql_error($link));
        for( $date = []; $row = mysqli_fetch_assoc($result); $date[] = $row);
        foreach ($date as $key => $value) {
            var_dump($value);
            echo '<br>';
        }
    echo "<br>";
    $query = "SELECT DATE_FORMAT(date, '%Y%% %d.%m') as date_format FROM users";
    $result = mysqli_query($link,$query) or die (mysql_error($link));
        for( $date = []; $row = mysqli_fetch_assoc($result); $date[] = $row);
        foreach ($date as $key => $value) {
            var_dump($value);
            echo '<br>';
        }
    echo "<br>";
    $query = "SELECT  date + INTERVAL 1 DAY as new_date  FROM users";
    $result = mysqli_query($link,$query) or die (mysql_error($link));
        for( $date = []; $row = mysqli_fetch_assoc($result); $date[] = $row);
        foreach ($date as $key => $value) {
            var_dump($value);
            echo '<br>';
        }
    echo "<br>";
    $query = "SELECT  date - INTERVAL 1 DAY as new_date  FROM users";
    $result = mysqli_query($link,$query) or die (mysql_error($link));
        for( $date = []; $row = mysqli_fetch_assoc($result); $date[] = $row);
        foreach ($date as $key => $value) {
            var_dump($value);
            echo '<br>';
        }
    echo "<br>";
    $query = "SELECT  date + INTERVAL 1 DAY + INTERVAL 1 HOUR as new_date  FROM users";
    $result = mysqli_query($link,$query) or die (mysql_error($link));
        for( $date = []; $row = mysqli_fetch_assoc($result); $date[] = $row);
        foreach ($date as $key => $value) {
            var_dump($value);
            echo '<br>';
        }
    echo "<br>";
    $query = "SELECT  date + INTERVAL 1 YEAR + INTERVAL 2 MONTH as new_date  FROM users";
    $result = mysqli_query($link,$query) or die (mysql_error($link));
        for( $date = []; $row = mysqli_fetch_assoc($result); $date[] = $row);
        foreach ($date as $key => $value) {
            var_dump($value);
            echo '<br>';
        }
    echo "<br>";
    $query = "SELECT  date + INTERVAL 1 DAY + INTERVAL 2 HOUR + INTERVAL 3 MINUTE as new_date  FROM users";
    $result = mysqli_query($link,$query) or die (mysql_error($link));
        for( $date = []; $row = mysqli_fetch_assoc($result); $date[] = $row);
        foreach ($date as $key => $value) {
            var_dump($value);
            echo '<br>';
        }
    echo "<br>";
    $query = "SELECT  date + INTERVAL 1 DAY + INTERVAL 2 HOUR + INTERVAL 3 MINUTE + INTERVAL 4 SECOND as new_date  FROM users";
    $result = mysqli_query($link,$query) or die (mysql_error($link));
        for( $date = []; $row = mysqli_fetch_assoc($result); $date[] = $row);
        foreach ($date as $key => $value) {
            var_dump($value);
            echo '<br>';
        }
    echo "<br>";
    $query = "SELECT  date +  INTERVAL 2 HOUR + INTERVAL 3 MINUTE + INTERVAL 5 SECOND as new_date  FROM users";
    $result = mysqli_query($link,$query) or die (mysql_error($link));
        for( $date = []; $row = mysqli_fetch_assoc($result); $date[] = $row);
        foreach ($date as $key => $value) {
            var_dump($value);
            echo '<br>';
        }
    echo "<br>";
    $query = "SELECT  date +  INTERVAL 1 DAY - INTERVAL 2 HOUR as new_date  FROM users";
    $result = mysqli_query($link,$query) or die (mysql_error($link));
        for( $date = []; $row = mysqli_fetch_assoc($result); $date[] = $row);
        foreach ($date as $key => $value) {
            var_dump($value);
            echo '<br>';
        }
    echo "<br>";
    $query = "SELECT  date +  INTERVAL 1 DAY - INTERVAL 2 HOUR - INTERVAL 3 MINUTE as new_date  FROM users";
    $result = mysqli_query($link,$query) or die (mysql_error($link));
        for( $date = []; $row = mysqli_fetch_assoc($result); $date[] = $row);
        foreach ($date as $key => $value) {
            var_dump($value);
            echo '<br>';
        }
    echo "<br>";
    
?>
