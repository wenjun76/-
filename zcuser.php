<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<div class="nr" style="text-align: center; width: 800px; margin: 0 auto;">
		 <form action="insert_zcuser.php" method="post">
             <table width="700" border="0" cellspacing="0" cellpadding="0" >      
         
          
                  <tr height=50>
                    <td width="100">用户名：</td>
                     <td colspan="2" >            
                        <input type="text"  class="wtitle" id="wtitle" size="50" value="" name="user_name"/>
                     </td>
                  </tr>

                <tr height=50>
                    <td width="80">密码：</td>
                     <td colspan="2"><input type="password"  size="50" value="" name="user_psd"/></td>
                </tr>

                <tr height=50>
                	<td width="80">头像：</td>
                    <td colspan="2" align="center">
                     <input type="text"  class="wtitle" id="wtitle" size="50" value="" name="user_tx"/>
                     </td>
                </tr>

                <tr height=50>
                    <td colspan="3" align="center">
                     <input type="submit"  value="提交" />
                     <input type="reset"  value="取消" />
                     <input type="hidden" name="user_quanxian" value="putong">
                     </td>
                </tr>

        </table>  
        </form>	
      </div>
	</div>
	<div class="dbdh">
	</div>
</body>
</html>