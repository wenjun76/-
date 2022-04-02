<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<body>
	<div class="headr">
		<div class="db">
			<img src="images/logo.png"><span>新浪微博</span>
		</div>
	</div>
	<div class="nr">
		<div id="biao" style="text-align: center;">
          <form action="login_ok.php" method="post">
            <table>
              <tr>
                <td>用户名</td>
                <td><input type="text" size="30" name="user_name"></td>
              </tr>
             <tr>
                <td>密码</td>
                <td><input type="password" size="30" name="user_psd"></td>
              </tr>
           
              <tr>
                <td colspan="2" align="center">
                  <input type="submit" value="提交">
                  <input type="reset" value="重置">
                </td>
              </tr>
            </table>
          </form>
          <a href="zcuser.php">注册</a>
      </div>
	</div>
	<div class="dbdh">
	</div>
</body>
</html>