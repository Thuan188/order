<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="/DEMO_WEB_ORDER/banhang/chuc_nang/dang_nhap/main2.css"/>
<link rel="stylesheet" href="/DEMO_WEB_ORDER/banhang/chuc_nang/dang_nhap/demo_signup1.css"/>
<title>Untitled Document</title>


</head>

<body>
    <!-- <div class="register">
        
   
    <h3 class="lg">REGISTER</h3>
<form action="?thamso=xldangky" method="post">
    
    <div class="form_dk">
	<table>
		<tr>
                    <td>Tên truy nhập :</td>
			<td><input type="text" name="username" value=""></td>
		</tr>
		<tr>
			<td>Mật khẩu :</td>
			<td><input type="password" name="password" value=""></td>
		</tr>
		<tr>
			<td>Xác nhận mật khẩu :</td>
			<td><input type="password" name="verify_password" value=""></td>
		</tr>
		<tr>
			<td>Địa chỉ E-mail :</td>
			<td><input type="text" name="email" value=""></td>
		</tr>
		<tr>
			<td>Địa chỉ:</td>
			<td><input type="text" name="url" value=""></td>
		</tr>
		<tr>
			<td>Tên:</td>
			<td><input type="text" name="name" value=""></td>
		</tr>
		<tr>
			<td>Ngày sinh(Ngày/Tháng/Năm):</td>
                        <td><input type="date" name="sn" value=""></td>
		</tr>
        <tr>
			<td>Số điện thoại:</td>
			<td><input type="text" name="dt" value=""></td>
		</tr>
		<tr>
                    <td><div class="form_dn"><input class="dk" type="submit" name="submit" value="Đăng ký tài khoản"></div></td>
                        <td ><div class="nf"><strong>New Food </strong></div></td>
		</tr>
	</table></div>
</form>
 </div> -->
 <div class="account-login">
        <fieldset class="col2-set">
            <div class="col-full registered-users">
                <div class="content">
                 
                    <form accept-charset="utf-8" action="?thamso=xldangky" id="customer_register" method="post">
                        <input name="FormType" type="hidden" value="customer_register"/>
                        <input name="utf8" type="hidden" value="true"/>
                        <script>
                            grecaptcha.ready(function () {
                                grecaptcha.execute("6Ldtu4IUAAAAAMQzG1gCw3wFlx_GytlZyLrXcsuK", { action: "/account/register" })
                                    .then(function (token) {
                                        document.getElementById("Token-a805274a7a3d4b57b5dcd27fa94e3bbe").value = token
                                    });
                            });
                        </script>  
                                
                        <strong>Đăng ký</strong>
                        <p class="line_cus">Nếu bạn chưa có tài khoản hãy điền theo mẫu dưới đây để đăng ký.</p>

                        <ul class="form-list">
                            <li>
                                <div class="customer-name row">
                                    <div class="input-box name-firstname col-md-6 col-xs-12">
                                        <label for="firstname"> Tên <span class="required">*</span></label>
                                        <br>
                                        <input type="text" name="name" title="Tên" class="input-text "
											placeholder="Tên" id="firstname"/>
											
											
                                    </div>
                                    <div class="input-box name-lastname col-md-6 col-xs-12">
                                        <label for="lastname"> Tên đăng nhập </label>
                                        <br>
                                        <input type="text" name="username" class="input-text" value="" id="username" title="Username"
                                             placeholder="Username"/>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="row">
                                    <div class="col-md-6 col-xs-12">
                                        <label for="email">Mật khẩu<span class="required">*</span></label>
                                        <br>
                                        <input type="password" name="password" value="" class="input-text" title="mật khẩu" 
                                            id="pass" placeholder="Mật khẩu"/>
                                    </div>
                                    <div class="col-md-6 col-xs-12">
                                        <label for="pass">Xác nhận mật khẩu<span class="required">*</span></label>
                                        <br>
                                        <input type="password" name="verify_password" value="" class="input-text" title="xác nhận Mật khẩu"
                                             id="verify_pass" placeholder="Xác nhận mật khẩu"/>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="row">
                                    <div class="col-md-6 col-xs-12">
                                        <label for="email">Email<span class="required">*</span></label>
                                        <br>
                                        <input type="text" name="email"  value="" class="input-text" title="Email" 
                                            id="email" placeholder="Email"/>
                                    </div>
                                    <div class="col-md-6 col-xs-12">
                                        <label for="pass">Số điện thoại<span class="required">*</span></label>
                                        <br>
                                        <input type="text" name="dt" value="" class="input-text" title="Điện thoại"
                                             id="dienthoai" placeholder="Điện thoại"/>
                                    </div>
                                </div>
							</li>
							<li>
                                <div class="row">
                                    <div class="col-md-6 col-xs-12">
									<label for="email">Ngày sinh<span class="required">*</span></label>
                                        <br>
                                        <input type="text" name="sn" value="" class="input-text" title="Ngày sinh" 
                                            id="ngaysinh" placeholder="Ngày sinh"/>
                                    </div>
                                    <div class="col-md-6 col-xs-12">
									<label for="pass">Địa chỉ<span class="required">*</span></label>
                                        <br>
                                        <input type="text" name="url" value="" class="input-text" title="Địa chỉ"
                                            id="url" placeholder="Địa chỉ"/>
                                    </div>
                                </div>
							</li>
							
						</ul>
					
                        <p class="required">* Bắt buộc</p>
                        <div class="buttons-set">
						
                            <button id="send2" type="submit" name="submit" class="button login"><span>Đăng ký</span></button>
                            hoặc <a href="?thamso=dang_nhap">Đăng nhập</a>
                        </div>
                    </form>
                    <div class="login_isocial">
                        <script>
                            function loginFacebook() { 
                                var a = { client_id: "947410958642584", 
                                redirect_uri: "https://store.mysapo.net/account/facebook_account_callback", 
                                state: JSON.stringify({ redirect_url: window.location.href }), 
                                scope: "email", response_type: "code" }, 
                                b = "https://www.facebook.com/v3.2/dialog/oauth" + encodeURIParams(a, !0); window.location.href = b } 
                            function loginGoogle() { 
                                var a = { client_id: "885968593373-197u9i4pte44vmvcc0j50pvhlfvl27ds.apps.googleusercontent.com", 
                                redirect_uri: "https://store.mysapo.net/account/google_account_callback", 
                                scope: "email profile https://www.googleapis.com/auth/userinfo.email https://www.googleapis.com/auth/userinfo.profile", 
                                access_type: "online", state: JSON.stringify({ redirect_url: window.location.href }), 
                                response_type: "code" }, 
                                b = "https://accounts.google.com/o/oauth2/v2/auth" + encodeURIParams(a, !0); window.location.href = b } 
                            function encodeURIParams(a, b) {
                                var c = []; for (var d in a) 
                                if (a.hasOwnProperty(d)) {
                                     var e = a[d]; null != e && c.push(encodeURIComponent(d) + "=" + encodeURIComponent(e)) } 
                                     return 0 == c.length ? "" : (b ? "?" : "") + c.join("&") }
                        </script>
                        <a href="javascript:void(0)" class="social-login--facebook" onclick="loginFacebook()"><img
                                width="129px" height="37px" alt="facebook-login-button"
                                src="http://bizweb.dktcdn.net/assets/admin/images/login/fb-btn.svg"></a>
                        <a href="javascript:void(0)" class="social-login--google" onclick="loginGoogle()"><img
                                width="129px" height="37px" alt="google-login-button"
                                src="http://bizweb.dktcdn.net/assets/admin/images/login/gp-btn.svg"></a>
                    </div>
                </div>
                <div class="banner_mega">
                                                <img alt="Mew Food" class="lazyload loaded" src="hinh_anh/menu/bn_mg.jpg" data-src="bn_mg.jpg" data-was-processed="true">
                                            </div>	
            </div>
            
        </fieldset>
        <div class="container-fluid " id="container">
						<canvas class=" sketch" height="199" width="1366" style="height: 100%; width: 1366px;"></canvas>
					</div>
    </div>
    
			<script src="https://cdnjs.cloudflare.com/ajax/libs/sketch.js/1.1/sketch.min.js"
        integrity="sha512-LTMDwOS1uIqLfM6pYVYSmc8keUHHOrTDN0BAlP14HYe/hRpLu2q8bl3lWV9mQ5cpeMexobHiwhhHl+7qJOaxFg=="
        crossorigin="anonymous"></script>
			<script src="/DEMO_WEB_ORDER/banhang/chuc_nang/app.js"></script>
</body>
</html>