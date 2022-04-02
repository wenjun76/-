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
 		  $user_name=$_POST['user_name'];
  		$user_psd=$_POST['user_psd'];
  		include("../conn.php");
          $sql="select * from wb_users where user_name='{$user_name}' and user_psd='{$user_psd}'";
          $jieguo=mysqli_query($conn,$sql);
          $wen=mysqli_fetch_array($jieguo);
          $dlid=$wen['user_id'];
          if($wen){ 
            $_SESSION['name']=$user_name;
             $_SESSION['login']=true;
          echo "<script>alert('登录成功');window.location.href='index.php?dlid=$dlid';</script>";
    
     }
     else{
     echo "<script>alert('登录失败！无此人或密码不对！');window.location.href='login.php';</script>";
     }
     mysqli_close($conn);
	 ?>
</body>
</html>