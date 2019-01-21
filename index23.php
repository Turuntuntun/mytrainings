<style>
  a{
    text-decoration: none;
  }
  a.active{
    text-decoration: underline;
  }
</style>
<?php
    $host = 'localhost';
    $user = 'root';
    $password = 'nfnmzyf40404';
    $db_name = 'test';
   //Соединяемся с базой данных используя наши доступы:
    //Устанавливаем кодировку (не обязательно, но поможет избежать проблем):
    $link = mysqli_connect($host, $user, $password, $db_name);
    mysqli_query($link, "SET NAMES 'utf8'");
	
/*    if(isset($_GET['del'])){
    	$del = $_GET['del'];
        $query1 = "DELETE FROM workers WHERE id = $del";
        mysqli_query($link,$query1) or die(mysqli_error($link));
}*/ 
    if(isset($_GET['page'])){
        $page = $_GET['page'];
    }else{
        $page = 1;
    }
    $notesOnPage = 3;
    $from = ($page - 1) * $notesOnPage;

	$query = "SELECT * FROM workers WHERE id>0 LIMIT $from, $notesOnPage";
	$result = mysqli_query($link, $query) or die(mysqli_error($link));
	for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
   
    foreach ($data as $key => $value) {
        var_dump($value);
        echo "<br>";
    }

    $query = 'SELECT COUNT(*) as count FROM workers';
    $result = mysqli_query($link, $query) or die(mysqli_error($link));
    $count = mysqli_fetch_assoc($result)['count'];
    $pagescount = ceil($count/$notesOnPage);
    for ($i = 1; $i <= $pagescount; $i++){
        if($page == $i){
             echo '<a href = "?page='.$i.'" class = "active">'.$i.'</a> ';
        }else{
             echo '<a href = "?page='.$i.'">'.$i.'</a> ';
    }
    }
?>