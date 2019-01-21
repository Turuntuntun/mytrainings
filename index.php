<?php
	error_reporting(E_ALL);
    ini_set('display_errors', 'on');

	$host = 'localhost';
	$user = 'root';
	$password = 'nfnmzyf40404';
	$dbName = 'my';

	$link = mysqli_connect($host,$user,$password,$dbName);
	mysqli_query($link,"SET NAMES 'utf-8'");

	$query = "SELECT * FROM product LEFT JOIN category ON category.id = product.category_id";
	$result = mysqli_query($link,$query) or die (mysql_error($link));
        for( $date = []; $row = mysqli_fetch_assoc($result); $date[] = $row);
        foreach ($date as $key => $value) {
            var_dump($value);
            echo '<br>';
        }
    echo "<br>";
    $query = "SELECT *, category.name as category FROM  category  INNER JOIN product ON category.id = product.category_id WHERE category.name = 'Овощи'";
	$result = mysqli_query($link,$query) or die (mysql_error($link));
        for( $date = []; $row = mysqli_fetch_assoc($result); $date[] = $row);
        foreach ($date as $key => $value) {
            var_dump($value);
            echo '<br>';
        }
    echo "<br>";
    $query = "SELECT *, category.name as category FROM  category INNER JOIN  product ON category.id = product.category_id WHERE category.name IN ('Овощи','Мясо','Морепродукты')";
	$result = mysqli_query($link,$query) or die (mysql_error($link));
        for( $date = []; $row = mysqli_fetch_assoc($result); $date[] = $row);
        foreach ($date as $key => $value) {
            var_dump($value);
            echo '<br>';
        }
    echo "<br>";
    $query = "SELECT DISTINCT  category.name FROM  product INNER JOIN category  ON category.id = product.category_id";
	$result = mysqli_query($link,$query) or die (mysql_error($link));
        for( $date = []; $row = mysqli_fetch_assoc($result); $date[] = $row);
        foreach ($date as $key => $value) {
            var_dump($value);
            echo '<br>';
        }
    echo "<br>";
    $query = "SELECT product1.name_product as name, product1.price as price, product1.quantity as quantity, sub_category1.name as subname, category1.name as categoryname  FROM  product1 
			    LEFT JOIN  sub_category1  ON sub_category1.id = product1.sub_category_id 
			    LEFT JOIN  category1 ON sub_category1.category_id = category1.id";
	$result = mysqli_query($link,$query) or die (mysql_error($link));
        for( $date = []; $row = mysqli_fetch_assoc($result); $date[] = $row);
        foreach ($date as $key => $value) {
            var_dump($value);
            echo '<br>';
        }
    echo "<br>";
    $query = "SELECT * FROM product1 
			    INNER JOIN sub_category1 ON sub_category1.id = product1.sub_category_id
			    INNER JOIN category1 ON  sub_category1.category_id = category1.id WHERE category1.name = 'Овощи'";
	$result = mysqli_query($link,$query) or die (mysql_error($link));
        for( $date = []; $row = mysqli_fetch_assoc($result); $date[] = $row);
        foreach ($date as $key => $value) {
            var_dump($value);
            echo '<br>';
        }
    echo "<br>";
    $query = "SELECT * FROM product1 
			    INNER JOIN sub_category1 ON sub_category1.id = product1.sub_category_id  WHERE sub_category1.name = 'Помидоры'";
	$result = mysqli_query($link,$query) or die (mysql_error($link));
        for( $date = []; $row = mysqli_fetch_assoc($result); $date[] = $row);
        foreach ($date as $key => $value) {
            var_dump($value);
            echo '<br>';
        }
    echo "<br>";
    $query = "SELECT sub_category1.name FROM sub_category1 
			    INNER JOIN category1 ON sub_category1.category_id = category1.id  WHERE category1.name = 'Овощи'";
	$result = mysqli_query($link,$query) or die (mysql_error($link));
        for( $date = []; $row = mysqli_fetch_assoc($result); $date[] = $row);
        foreach ($date as $key => $value) {
            var_dump($value);
            echo '<br>';
        }
    echo "<br>";
    $query = "SELECT product2.name as product, category2.name as cat, stock2.name as stock, brand2.name as brand  FROM product2
			    LEFT JOIN category2 ON product2.category_id = category2.id
			    LEFT JOIN stock2 ON category2.stock_id = stock2.id
			    LEFT JOIN brand2 ON stock2.brand_id = brand2.id";
	$result = mysqli_query($link,$query) or die (mysql_error($link));
        for( $date = []; $row = mysqli_fetch_assoc($result); $date[] = $row);
        foreach ($date as $key => $value) {
            var_dump($value);
            echo '<br>';
        }
    echo "<br>";
    $query = "SELECT  stock2.name as stock  FROM stock2";
	$result = mysqli_query($link,$query) or die (mysql_error($link));
        for( $date = []; $row = mysqli_fetch_assoc($result); $date[] = $row);
        foreach ($date as $key => $value) {
            var_dump($value);
            echo '<br>';
        }
    echo "<br>";
    /*$query = "SELECT product2.name as product, category2.name as cat FROM product2
			    LEFT JOIN category1 ON product2.category_id = category2.id
			    UNION SELECT * FROM stock2 
			    UNION SELECT * FROM brand2";
	$result = mysqli_query($link,$query) or die (mysql_error($link));
        for( $date = []; $row = mysqli_fetch_assoc($result); $date[] = $row);
        foreach ($date as $key => $value) {
            var_dump($value);
            echo '<br>';
        }
    echo "<br>";
    */
    $query = "SELECT * FROM user LEFT JOIN city ON city.id = user.id_city";
	$result = mysqli_query($link,$query) or die (mysql_error($link));
        for( $date = []; $row = mysqli_fetch_assoc($result); $date[] = $row);
        foreach ($date as $key => $value) {
            var_dump($value);
            echo '<br>';
        }
    echo "<br>";
    $query = "SELECT * FROM  city";
	$result = mysqli_query($link,$query) or die (mysql_error($link));
        for( $date = []; $row = mysqli_fetch_assoc($result); $date[] = $row);
        foreach ($date as $key => $value) {
            var_dump($value);
            echo '<br>';
        }
    echo "<br>";
    $query = "SELECT * FROM user LEFT JOIN city ON city.id = user.id_city WHERE city.city = 'Минск'";
	$result = mysqli_query($link,$query) or die (mysql_error($link));
        for( $date = []; $row = mysqli_fetch_assoc($result); $date[] = $row);
        foreach ($date as $key => $value) {
            var_dump($value);
            echo '<br>';
        }
    echo "<br>";
    $query = "SELECT DISTINCT city.city	 FROM user LEFT JOIN city ON city.id = user.id_city  WHERE user.id_city IS NOT NULL";
	$result = mysqli_query($link,$query) or die (mysql_error($link));
        for( $date = []; $row = mysqli_fetch_assoc($result); $date[] = $row);
        foreach ($date as $key => $value) {
            var_dump($value);
            echo '<br>';
        }
    echo "<br>";
    $query = "SELECT DISTINCT city.city	 FROM user RIGHT JOIN city ON city.id = user.id_city  WHERE user.id_city IS NULL";
	$result = mysqli_query($link,$query) or die (mysql_error($link));
        for( $date = []; $row = mysqli_fetch_assoc($result); $date[] = $row);
        foreach ($date as $key => $value) {
            var_dump($value);
            echo '<br>';
        }
    echo "<br>";
    $query = "SELECT  city.city, COUNT(user.id_city) as count FROM city RIGHT JOIN  user ON city.id = user.id_city  GROUP BY city.city";
	$result = mysqli_query($link,$query) or die (mysql_error($link));
        for( $date = []; $row = mysqli_fetch_assoc($result); $date[] = $row);
        foreach ($date as $key => $value) {
            var_dump($value);
            echo '<br>';
        }
    echo "<br>";
    $query = "SELECT  city.city, COUNT(user.id_city) as count FROM city RIGHT JOIN  user ON city.id = user.id_city  GROUP BY city.city HAVING COUNT(user.id_city)>3";
	$result = mysqli_query($link,$query) or die (mysql_error($link));
        for( $date = []; $row = mysqli_fetch_assoc($result); $date[] = $row);
        foreach ($date as $key => $value) {
            var_dump($value);
            echo '<br>';
        }
    echo "<br>";