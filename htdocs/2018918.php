<?php  
	setcookie("user","alex",time()+3600);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
	 echo $_COOKIE["user"];

	 var_dump($_COOKIE);

	 ?>
</body>
</html>