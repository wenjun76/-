<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
	<link rel="stylesheet" type="text/css" href="../css/fb.css">
</head>
<body>
	<?php 
		$wen_content=$_POST['fbnr'];
		$wen_date=time();
		$wen_userid=$_POST['wen_userid'];
		// echo $wen_content;
		// echo $wen_userid;
		include("../../conn.php");
		$sql="insert into wb_wen (wen_date,wen_content,wen_count,wen_userid) values('{$wen_date}','{$wen_content}',0,'{$wen_userid}') ";
		$jieguo=mysqli_query($conn,$sql);
		if(mysqli_affected_rows($conn)>0){
			echo "<script>alert('发布成功！');window.location.href='../index.php?dlid=$wen_userid';</script>";
		}
		else{ 
			echo "<script>alert('发布失败！');window.location.href='../index.php?dlid=$wen_userid';</script>";
		}
		mysqli_close($conn);
	 ?>
</body>
</html>