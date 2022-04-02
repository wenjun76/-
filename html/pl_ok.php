<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
	<link rel="stylesheet" type="text/css" href="../css/wbzw.css">
</head>
<body>
	<?php 
      	$pl_content=$_POST['pl_content'];
      	$pl_wenid=$_POST['pl_wenid'];
      	$pl_userid=$_POST['pl_userid'];
     	$pl_date=time();

     	include("../../conn.php");
		$sql="insert into wb_pl(pl_wenid,pl_content,pl_date,pl_userid) values('{$pl_wenid}','{$pl_content}','{$pl_date}','{$pl_userid}')";
		$sqlp="update wb_wen set wen_count=wen_count+1 where wen_id={$pl_wenid}";
		$jieguop=mysqli_query($conn,$sqlp);
		$jieguo=mysqli_query($conn,$sql);
		if(mysqli_affected_rows($conn)>0){
			echo "<script>alert('评论成功！');window.location.href='wbzw.php?id=$pl_wenid&dlid=$pl_userid';</script>";
		}
		else{ 
			echo "<script>alert('评论失败！');window.location.href='wbzw.php?id=$pl_wenid&dlid=$pl_userid';</script>";
		}
		mysqli_close($conn);
  	?>
</body>
</html>