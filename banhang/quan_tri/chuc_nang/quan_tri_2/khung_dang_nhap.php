<?php 
	if(!isset($bien_bao_mat)){exit();}
?>
<br><br>
<head>
                    <link rel="stylesheet" type="text/css" href="giao_dien/dangnhap1.css">
</head>
<center>
    <div class="login-box">
            
            <img src="https://tse2.mm.bing.net/th?id=OIP.DmgNbUwhmk9YaRp9qA27GAAAAA&pid=Api&P=0&w=300&h=300" alt="avatar" class="avatar">
            
            <form action='' method='POST'>
                <div class="user-box">
                    <input type='text' name='ky_danh' required=""/>
                  
                    <label>Username</label>
                </div>
                <div class="user-box">
                    <input type='password' name='mat_khau' required=""/>
                    <label>Password</label>
                </div>
                <input type="hidden" name="dang_nhap_quan_tri" value="dang_nhap_quan_tri" >
                
                
                
                    <a><input class="ipdn"  type='submit' name="dangnhap" value="Đăng nhập"></a>
                    
            </form>
        </div>
<!--	<form method="post" >
            
		<table>
			<tr>
				<td>Ký danh :</td>
				<td><input style="width:150px" name="ky_danh" ></td>
			</tr>
			<tr>
				<td>Mật khẩu :</td>
				<td><input type="password" style="width:150px" name="mat_khau" ></td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td>
					<input type="hidden" name="dang_nhap_quan_tri" value="dang_nhap_quan_tri" >
					<input type="submit" value="Đăng nhập" >
				</td>
			</tr>
		</table>
	</form>-->
</center>
