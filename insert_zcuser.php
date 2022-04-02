<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
	<link rel="stylesheet" type="text/css" href="../css/yhgl.css">
</head>
<body>
	<?php
  		$user_name=$_POST['user_name'];
     	$user_psd=$_POST['user_psd'];
	    $user_quanxian=$_POST['user_quanxian'];
	    $user_tx=$_POST['user_tx'];
    //   echo $user_name;
    //   echo $user_psd;
    //   echo $user_quanxian;
	   // echo $user_tx;
  		include("../conn.php");
		$sql="insert into wb_users(user_name,user_psd,user_quanxian,user_tx) values('{$user_name}','{$user_psd}','{$user_quanxian}','{$user_tx}')";
		$jieguo=mysqli_query($conn,$sql);
		if(mysqli_affected_rows($conn)>0){
			echo "<script>alert('添加成功！');window.location.href='login.php';</script>";
		}
		else{ 
			echo "<script>alert('添加失败！');window.location.href='login.php';</script>";
		}
		mysqli_close($conn);
		?>
</body>
  	
</html>