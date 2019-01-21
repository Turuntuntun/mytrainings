<?php
   //Устанавливаем доступы к базе данных:
		$host = 'localhost'; //имя хоста, на локальном компьютере это localhost
		$user = 'root'; //имя пользователя, по умолчанию это root
		$password = 'nfnmzyf40404'; //пароль, по умолчанию пустой
		$db_name = 'test'; //имя базы данных

	//Соединяемся с базой данных используя наши доступы:
		$link = mysqli_connect($host, $user, $password, $db_name);

	//Устанавливаем кодировку (не обязательно, но поможет избежать проблем):
		mysqli_query($link, "SET NAMES 'utf8'");
/*
	//Формируем тестовый запрос:
    //	$query = "SELECT * FROM workers WHERE id > 0";
    //  $query = "INSERT INTO workers SET name='Гена', age=30, salary=1000";
	//	$query = "DELETE FROM workers WHERE id=8";
	//	$query = "SELECT * FROM workers WHERE age = 23";
	//	$query = "SELECT * FROM workers WHERE salary > 400";
	//	$query = "SELECT * FROM workers WHERE salary >= 500";
	//	$query = "SELECT * FROM workers WHERE salary != 500";
	//	$query = "SELECT * FROM workers WHERE salary <= 900";
	//  $query = "SELECT * FROM workers WHERE name = 'Вася'";
	//	$query = "SELECT * FROM workers WHERE age > 25 and age <= 28";
    //  $query = "SELECT * FROM workers WHERE name = 'Петя' or name = 'Вася'";       
    //  $query = "SELECT * FROM workers WHERE name != 'Петя'";   
    //  $query = "SELECT * FROM workers WHERE name = 'Петя' or name = 'Вася'";  
    //  $query = "SELECT * FROM workers WHERE name != 'Петя'";    	
	//	$query = "SELECT * FROM workers WHERE age = 27 or salary = 1000";   
	//	$query = "SELECT * FROM workers WHERE (age >= 23 and age < 27) or salary = 1000";   
	//	$query = "SELECT * FROM workers WHERE age = 27 or salary = 400";   
	//	$query = "INSERT INTO workers SET name = 'Никита', age = 26, salary = 300";   
	//	$query = "INSERT INTO workers (name,age,salary) values ('Светлана',20,1200)";
	//  $query = "INSERT INTO workers (name,age,salary) values ('Ярослав',30,1200),('Петр',31,1000)";    
	//	$query = "DELETE FROM workers WHERE id != 0";
	//	$query = "INSERT INTO workers (name,age,salary) values ('Дима',23,400),('Петя',25,500),('Вася',23,500),('Коля',30,1000),('Иван',27,500),('Кирилл',28,1000)"; 
	//  $query = "UPDATE workers SET salary = 200 WHERE name = 'Вася'";
	//  $query = "UPDATE workers SET age = 35 WHERE id = 4";
	//	$query = "UPDATE workers SET salary = 700 WHERE salary = 500";
	//	$query = "UPDATE workers SET age = 23 WHERE id > 2 and id <= 5";
	//	$query = "UPDATE workers SET name = 'Женя' , salary = 900 WHERE id = 3";
	//	$query = "SELECT * FROM workers WHERE id > 0 LIMIT 2,3"; 
	//	$query = "SELECT * FROM workers WHERE id > 0 ORDER BY age LIMIT 1,4 ";
	    $query = "SELECT COUNT(*) as count FROM workers WHERE salary = 500";  
	//Делаем запрос к БД, результат запроса пишем в $result:
		$result = mysqli_query($link, $query) or die(mysqli_error($link));

	//Проверяем что же нам отдала база данных, если null – то какие-то проблемы:
		//var_dump($result);
    	for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
	    echo "<br>";
	foreach ($data as $key => $value) {
		var_dump($value);
		echo '<br>';

	} 
   //   $query = "SELECT * FROM pages WHERE autor LIKE '%ов'";
	    $query = "SELECT * FROM workers WHERE id > 0";
	//Делаем запрос к БД, результат запроса пишем в $result:
		$result = mysqli_query($link, $query) or die(mysqli_error($link));

	//Проверяем что же нам отдала база данных, если null – то какие-то проблемы:
		//var_dump($result);
    	for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
	    echo "<br>";
	    foreach ($data as $key => $value) {
		var_dump($value);
		echo '<br>';
	} 
	
?>
<table>
	<tr>
		<th>id</th>
		<th>name</th>
		<th>age</th>
		<th>salary</th>
	</th>
	<?php
	$result1 = '';
	foreach ($data as $key => $value) {
		$result1 .= '<tr>';
		$result1 .= '<td>'.$value['id'];
		$result1 .= '<td>'.$value['name'];
		$result1 .= '<td>'.$value['age'];
		$result1 .= '<td>'.$value['salary'];
		$result1 .= '</tr>';
	}
	echo $result1;
	?>
</table>
*/


?>