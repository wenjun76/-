<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<body>
	<?php 
		  session_start();
  session_destroy();
   echo "<script>alert('注销成功！');window.location.href='login.php';</script>";
	 ?>
</body>
</html>