<?php
    $host = 'localhost';
    $user = 'root';
    $password = '';
    $db_name = 'test';
    //Соединяемся с базой данных используя наши доступы:
    //Устанавливаем кодировку (не обязательно, но поможет избежать проблем):
    $link = mysqli_connect($host, $user, $password, $db_name);
    mysqli_query($link, "SET NAMES 'utf8'");
	
    if(isset($_GET['del'])){
    	$del = $_GET['del'];
        $query1 = "DELETE FROM workers WHERE id = $del";
        mysqli_query($link,$query1) or die(mysqli_error($link));
}
	$query = 'SELECT * FROM workers ';
	$result = mysqli_query($link, $query) or die(mysqli_error($link));
	for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
//    var_dump($data);

?>

<table>
	<tr>
		<th>id</th>
		<th>name</th>
		<th>age</th>
		<th>salary</th>
		<th>delete</th>
		<th>redakt</th>
	</tr>
	<?php
	$res = '';
	foreach ($data as $key => $value) {
		$res .= '<tr>';
		$res .= '<td>'.$value['id'].'</td>';
		$res .= '<td>'.$value['name'].'</td>';
		$res .= '<td>'.$value['age'].'</td>';
		$res .= '<td>'.$value['salary'].'</td>';
		$res .= '<td><a href ="?del='.$value['id'].'">Удалить</a></td>';
		$res .= '<td><a href ="red.php?red='.$value['id'].'">Редактировать</a></td>';
		$res .= '</tr>';
	}
	echo $res;
	?>
</table>
<a href = 'add.php'>Добавить нового работника</a>


