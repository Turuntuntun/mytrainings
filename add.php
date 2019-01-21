<?php 
   $host = 'localhost';
    $user = 'root';
    $password = 'nfnmzyf40404';
    $db_name = 'test';
   //Соединяемся с базой данных используя наши доступы:
    //Устанавливаем кодировку (не обязательно, но поможет избежать проблем):
    $link = mysqli_connect($host, $user, $password, $db_name);
    mysqli_query($link, "SET NAMES 'utf8'");
    if(!empty($_POST)){
    	$name = $_POST['name'];
    	$age = $_POST['age'];
    	$salary = $_POST['salary'];
    	$query2 = "INSERT INTO workers SET name = '$name', age = '$age', salary = '$salary'";
    	mysqli_query($link,$query2) or die(mysqli_error($link));
    }
    function input($name){
         if(isset($_POST[$name])){
         	$value = $_POST[$name];
         }else{
         	$value = '';
         }
         return '<input name = "'.$name.'" value = "'.$value.'">';
    }
?>


<form action = '' method = 'POST'>
	<p>Имя:</p>
	<? echo input('name'); ?>
	<p>Возраст:</p>
	<? echo input('age'); ?>
	<p>Зарплата:</p>
	<? echo input('salary'); ?>
	<br>
	<input type = 'submit' value = 'Добавить работника'>
</form>
<a href = 'index22.php'>Вернутся обратно</a>