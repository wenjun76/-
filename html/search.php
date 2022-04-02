<?php
session_start();
if(!isset($_SESSION['login']) or $_SESSION['login']!=true ){
  echo "<script>alert('请先登录！');window.location.href='login.php';</script>";

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
	<link rel="stylesheet" type="text/css" href="../css/index.css">
</head>
<body>
	<div class="headr">
				<?php 
						$dlid=$_GET['userid'];
						include("../../conn.php");
						$sqlu="select * from wb_users where user_id={$dlid}";
						$jieguou=mysqli_query($conn,$sqlu);
						while ($wenu=mysqli_fetch_array($jieguou)) {
						
						?>
		<div class="db">
			<a href="../index.php?dlid=<?php echo $dlid ?>" class="logo">
				<img src="../images/logo.png"><span>新浪微博</span>
			</a>
			<div class="sousuo">
				<form>
					<input type="text" name="souwen" class="souwen">
					<input type="submit" name="soubtn" class="soubtn" value="搜索">
				</form>
			</div>
			<span id="username">
				用户名：
				
					<?php echo $wenu['user_name']; ?>
				
			</span>
			<?php } ?>
			<a href="">发布</a>
			<a href="login_out.php">注销</a>
			
		</div>
	</div>
	<div class="nr">
		<?php
					$sou=$_GET['souwen'];
					include("../../conn.php");
					$sql="select * from wb_wen where wen_content like '%$sou%'";
					$jieguo=mysqli_query($conn,$sql);
					while($wen=mysqli_fetch_array($jieguo)){ 
						$wen['wen_content']=str_replace($sou,"<font color='red'>$sou</font>", $wen['wen_content']);
					?>
		<div class="wbnr">
				
			

			<a href="wbzw.php?id=<?php echo $wen['wen_id']?>&dlid=<?php echo $dlid ?>">


				<?php
						$id=$wen['wen_userid'];
						$sqlt="select * from wb_users where user_id={$id}"; 
						$jieguoo=mysqli_query($conn,$sqlt);
						$wenn=mysqli_fetch_array($jieguoo);
							
							?>

			<img src="../images/tx<?php echo $wenn['user_tx'] ?>.jpg" class="tx">
			<div class="user">
				<h1>
					<?php echo $wenn['user_name']; ?>
				</h1>
				<?php
				?>
				<p class="rq"><?php echo date('Y-m-d',$wen['wen_date']); ?></p>
				<p class="usernr"><?php echo $wen['wen_content']; ?></p>
			</div>
			</a>

			 
		</div>

		<?php
					  }
					?>

	</div>
	<div class="dbdh">
	</div>
</body>
</html>