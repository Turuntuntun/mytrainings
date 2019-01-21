<!DOCTYPE html>
<html>
<head>
	<meta charset = "utf-8">
</head>
<body>
	
		<form action="" method="GET">
			<input type="text" name="name" value = "<?php if (isset($_GET["name"])) echo $_GET["name"]; ?>">
			<textarea name = "message"> <?php if (isset($_GET["message"])) echo trim($_GET["message"]); ?> </textarea>
			<input type="submit" name = "submit">
		</form>

 


</body>
</html>