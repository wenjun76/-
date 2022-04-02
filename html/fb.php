<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
	<link rel="stylesheet" type="text/css" href="../css/fb.css">
</head>
<body>
	<div class="headr">

		<?php 
					$dlid=$_GET['dlid'];
					include("../../conn.php");
					$sqlu="select * from wb_users where user_id={$dlid}";
					$jieguou=mysqli_query($conn,$sqlu);
					while ($wenu=mysqli_fetch_array($jieguou)) {
					
					?>

		<div class="db">
			<a href="../index.php?dlid=<?php echo $dlid ?>" class="logo"><img src="../images/logo.png"><span>新浪微博</span></a>
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
			<a href="../login_out.php">注销</a>
		</div>
	</div>
	<div class="nr">
		<h1>发布微博：</h1>
		 <form action="fb_ok.php" method="post">
			<textarea name="fbnr" class="fbnr"></textarea></br>
			<input type="submit" value="发布微博">
			<input type="hidden" value="<?php echo $dlid ?>" name="wen_userid">
		 </form>
	</div>
	<div class="dbdh">
	</div>
</body>
</html>