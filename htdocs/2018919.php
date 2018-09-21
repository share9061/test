<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title></title>
</head>
<body>
<?php 
try {
	$dsn = "mysql:host=localhost;port=3306;dbname=yetest;charset=utf8";
	$user = "root";
	// $options = array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION);
	$pdo = new PDO( $dsn, $user);
	$sql = "select * from man";
	$statement = $pdo->query($sql);  //products是PDOStatement類別的物件
	$array = $statement->fetch(PDO::FETCH_ASSOC);

	echo "名字: ", $array["name"], "<br>";
	echo "姓名: ", $array["sex"], "<br>";
	echo "生日: ", $array["birday"], "<br>";
	echo "電話: ", $array["phone"], "<br>";
} catch (PDOException $e) {
	echo "錯誤原因 : " , $e->getMessage(), "<br>";
	echo "錯誤行號 : " , $e->getLine(), "<br>";	
}
?>  
</body>
</html>