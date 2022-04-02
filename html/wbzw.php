<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
	<link rel="stylesheet" type="text/css" href="../css/wbzw.css">
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
		 			<?php
					include("../../conn.php");
					$id=$_GET['id'];
					$sql="select * from wb_wen where wen_id={$id}";
					$jieguo=mysqli_query($conn,$sql);
					while($wen=mysqli_fetch_array($jieguo)){ 
					?>
			<div class="wbnr">

				<a href="">
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
						<p class="rq"><?php echo date('Y-m-d',$wen['wen_date']); ?></p>
						<p class="usernr"><?php echo $wen['wen_content']; ?></p>
					</div>
				</a>
				

				<div class="pldz">
					<ul>
						<li>
						评论：
							<?php
								echo $wen['wen_count'];
							  ?>
						</li>
						<li></li>
					</ul>
				</div>
				<?php
			 		}
					?>
				
				 
			</div>
			<div class="pl">
			
				<?php
					$id=$_GET['id'];
					include("../../conn.php");
					$sqlp="select * from wb_pl where pl_wenid={$id}";
					$jieguop=mysqli_query($conn,$sqlp);
					while($wenp=mysqli_fetch_array($jieguop)){
						
				 ?>		


				<div class="plyhm">
					
					<?php 
						include("../../conn.php");
						$iduu=$wenp['pl_userid'];
						$sqluu="select * from wb_users where user_id={$iduu}";
						$jieguouu=mysqli_query($conn,$sqluu);
						$wenuu=mysqli_fetch_array($jieguouu);
						echo $wenuu['user_name'];
					 ?>
				</div>
				<div class="plrq"><?php echo date('Y-m-d',$wenp['pl_date']) ; ?></div>
				<div class="plnr"><?php echo $wenp['pl_content'] ; ?></div>


				
				<br>
				<br>	


			<?php 
				} 
				?>


			</div>
			<div class="fa_pl">
				<form action="pl_ok.php" method="post">
					<table width="700px" border="0" cellspacing="0" cellpadding="0">
						<tr><td>评论：</td></tr>
						<tr><td><textarea cols=50 rows=15 name="pl_content"></textarea></td></tr>
						<tr><td>
							<input type="submit" value="提交评论">
							<input type="hidden" value="<?php echo $id ?>" name="pl_wenid">
							<input type="hidden" value="<?php echo $dlid ?>" name="pl_userid">
						</td></tr>
					</table>
				</form>
			</div>
		
	</div>
	<div class="dbdh">
	</div>
</body>
</html>