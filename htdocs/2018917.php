<!DOCTYPE html>
	<?php
		session_start();
		if (!isset($_SESSION["membername"]) || ($_SESSION["membername"]=="")){
			if (isset($_POST["username"]) && isset($_POST["passwd"])) {
				$username = "abc";
				$passwd = "123";
				if (($_POST["username"]==$username ) && ($_POST["passwd"]==$passwd)) {
					$_SESSION["membername"]=$username;
				}
				header("Location:2018917.php");
			}
		}
		if (isset($_GET["logout"]) && ($_GET["logout"]=="ture")) {
			unset($_SESSION["membername"]);
			header("Location:2018917.php");
		}
	?>

<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

 	<?php  
	if (!isset($_SESSION["membername"]) || ($_SESSION["membername"]=="")) {
		?>
		<form action="2018917.php" method="post">
		
	
			<table width="300" border="1" align="center" bgcolor="blue" cellpadding="5" cellspacing="1">
				<tr>
					<td colspan="2" align="center" bgcolor="#ccc"><font>會員系統</font></td>
				</tr>
				<tr>
					<td width="80" align="center" valign="baseline">帳號	</td>
					<td valign="baseline"><input type="text" name="username" id="username"></td>
				</tr>
				<tr>
					<td width="80" align="center" valign="baseline">密碼</td>
					<td valign="baseline"><input type="password" name="password" id="password"></td>
				</tr>
				<tr>
					<td colspan="2" align="center" bgcolor="#ccc"><input type="submit" name="button" id="button" value="登入"/>
					<input type="reset" name="button2" id="button2" value="重設">
					</td>
				</tr>
			</table>
		</form>
		}

		









</body>
</html>