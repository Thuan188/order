<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
            <link rel="stylesheet" href="/DEMO_WEB_ORDER/banhang/chuc_nang/dang_nhap/demo_signup.css"/>
            <link rel="stylesheet" href="/DEMO_WEB_ORDER/banhang/chuc_nang/dang_nhap/main1.css"/>
            <title>Untitled Document</title>
    </head>

    <body>
         <div class="top1">
            <div class="">
                <div class="s-m11">
                    <ul>
                        <li><span><i class="fa fa-facebook"></i></span><a href="#">Facebook</a></li>
                        <li><span><i class="fa fa-twitter"></i></span><a href="#">Twitter</a></li>
                        <li><span><i class="fa fa-linkedin"></i></span><a href="#">Linkedin</a></li>
                        <li><span><i class="fa fa-instagram"></i></span><a href="#">Instagram</a></li>
                        <li><span><i class="fa fa-github"></i></span><a href="#">Github</a></li>
                    </ul>
                </div>
                <!-- <div class="info">
				<a id="email" href="">nguyenquan52000@gmail.com</a>
                <a id="phone" href="">0373951042</a> -->
                <div class="info">
                    <ul>
                        <li><span><i class="fa fa-mail-reply-all"></i></span><a href="#">nguyenquan52000@gmail.com</a></li>
                        <li><span><i class="fa fa-phone"></i></span><a href="#">0373951042</a></li>
                        
                    </ul>
                </div>
			</div>
                <div class="atop1">



                    <?php
//session_start();
                    echo '<title> Huong Dan tao trang dang ki/Dang Nhap)</title>';
//echo "<form action='index.php' method='post' >"; 
                    require_once("ket_noi1.php");


                    if (!isset($_SESSION['user_id'])) {
                        echo "<a href='?thamso=dang_nhap'>Đăng nhập</a>";

                        echo "<a href='?thamso=dang_ky'>Đăng ký</a>";
                    } else {
                        if (isset($_SESSION['user_id'])) {
                            $user_id = intval($_SESSION['user_id']);
                            $sql_query = @mysqli_query($connect, "SELECT * FROM members WHERE id='{$user_id}'");
                            $member = @mysqli_fetch_array($sql_query);
                            $usert = $member['username'];
                            echo "<p>Xin chào,<strong> {$member['username']}</strong>.</p>";
                            
                            echo "<img style='vertical-align: middle;
    background: #fff;
    width: 30px;
    border-radius: 30px;' src='/DEMO_WEB_ORDER/banhang/hinh_anh/menu/user-default.png'/>";
                            echo "<a href='?thamso=suathongtin_dn'>Sửa thông tin</a>";
                            if ($member['admin'] == "1") {
                                $_SESSION['admin'] = "1";
                                echo "<a href='quan_tri/index.php'>Trang quản trị</a>";
                            }
                            echo "<a href='?thamso=thoat'>Thoát ra</a>";
                        }
                        //If not isset -> set with dumy value
                        else {
                            $_SESSION['user_id'] = "undefine";
                        }
                    }
//echo "</form>"; 
                    ?>
                </div>
            </div>
        
        
<!--        <div class="top1">
            <div class="">
                <div class="s-m11">
                    <ul>
                        <li><span><i class="fa fa-facebook"></i></span><a href="#">Facebook</a></li>
                        <li><span><i class="fa fa-twitter"></i></span><a href="#">Twitter</a></li>
                        <li><span><i class="fa fa-linkedin"></i></span><a href="#">Linkedin</a></li>
                        <li><span><i class="fa fa-instagram"></i></span><a href="#">Instagram</a></li>
                        <li><span><i class="fa fa-github"></i></span><a href="#">Github</a></li>
                    </ul>
                </div>
                <div class="s-m11">
                <span>Chào mừng quý khách đã đến với MewFood!</span>
                </div>
                <div class="atop1">
                    <form  action="?thamso=do" method="post">
                        <div class="form_dn">
                            Tên truy nhập: <input class="nhap" type="text" name="username" value="">
                                Mật khẩu: <input class="nhap" type="password" name="password" value="">
                                    <input class="dn" type="submit" name="submit" value="Đăng nhập">
                                        </div>
                                        </form>
                                        </div>
                                        </div>
                                        </div>
-->        
<div class=" container">
		<div class="account-login">
			<fieldset class="col2-set">
				<div class="col-1 new-users"><strong>Đăng ký</strong>
					<div class="content">
						<p class="line_cus">Tạo tài khoản để quản lý đơn hàng, và các thông tin thanh toán, gửi hàng một cách đơn giản hơn.</p>
						<div class="buttons-set">
							<button class="button create-account" onclick="window.location.href='?thamso=dang_ky'"><span>Tạo tài khoản</span></button>
						</div>
					</div>
				</div>
				<div class="col-2 registered-users">
					<div class="content">

						<form accept-charset="utf-8" action="?thamso=do" id="customer_login" method="post">
<input name="FormType" type="hidden" value="customer_login">
<input name="utf8" type="hidden" value="true">
						<strong>Đăng nhập</strong>
						<p class="line_cus">Nếu bạn có tài khoản, hãy đăng nhập dưới đây.</p>
						
						<ul class="form-list">
							<li>
								<label for="email">Email<span class="required">*</span></label>
								<br>                
                                                                    <input type="text" class="input-text" value="" title="email" name="username" id="email" placeholder="Email">
							</li>
							<li>
								<label for="pass">Mật khẩu <span class="required">*</span></label>
								<br>

								<input type="password" value="" class="input-text" title="Mật khẩu" name="password" id="pass" placeholder="Mật khẩu">
							</li>
						</ul>
						<p class="required">* Bắt buộc</p>
						<div class="buttons-set">
							<button id="send2" type="submit" name="submit" class="button login"><span>Đăng nhập</span></button>              
							<a href="#recover" onclick="showRecoverPasswordForm();return false;" id="RecoverPassword">Mất mật khẩu?</a> 
						</div>
						<div class="login_isocial">
						<script>function loginFacebook(){var a={client_id:"947410958642584",redirect_uri:"https://store.mysapo.net/account/facebook_account_callback",state:JSON.stringify({redirect_url:window.location.href}),scope:"email",response_type:"code"},b="https://www.facebook.com/v3.2/dialog/oauth"+encodeURIParams(a,!0);window.location.href=b}function loginGoogle(){var a={client_id:"885968593373-197u9i4pte44vmvcc0j50pvhlfvl27ds.apps.googleusercontent.com",redirect_uri:"https://store.mysapo.net/account/google_account_callback",scope:"email profile https://www.googleapis.com/auth/userinfo.email https://www.googleapis.com/auth/userinfo.profile",access_type:"online",state:JSON.stringify({redirect_url:window.location.href}),response_type:"code"},b="https://accounts.google.com/o/oauth2/v2/auth"+encodeURIParams(a,!0);window.location.href=b}function encodeURIParams(a,b){var c=[];for(var d in a)if(a.hasOwnProperty(d)){var e=a[d];null!=e&&c.push(encodeURIComponent(d)+"="+encodeURIComponent(e))}return 0==c.length?"":(b?"?":"")+c.join("&")}</script> 
						<a href="javascript:void(0)" class="social-login--facebook" onclick="loginFacebook()"><img width="129px" height="37px" alt="facebook-login-button" src="//bizweb.dktcdn.net/assets/admin/images/login/fb-btn.svg"></a> 
						<a href="javascript:void(0)" class="social-login--google" onclick="loginGoogle()"><img width="129px" height="37px" alt="google-login-button" src="//bizweb.dktcdn.net/assets/admin/images/login/gp-btn.svg"></a>
						</div>
						</form>
						
						
						<div id="recover_password" style="display: none;">
							<strong>Đặt lại mật khẩu</strong>                     
							<p>Chúng tôi sẽ gửi cho bạn một email để kích hoạt việc đặt lại mật khẩu.</p>                     
							<form accept-charset="utf-8" action="/account/recover" id="recover_customer_password" method="post">
<input name="FormType" type="hidden" value="recover_customer_password">
<input name="utf8" type="hidden" value="true">
							                       

							<ul class="form-list">
								<li>
									<label for="email">Email<span class="required">*</span></label>
									<br>                
									<input type="email" class="input-text" value="" title="email" name="email" id="recover-email" placeholder="Email">
								</li>
							</ul>                
							<div class="buttons-set">
								<span>
									<input type="submit" class="button set_pss" value="Gửi">
								</span>
								hoặc <a href="#" onclick="hideRecoverPasswordForm();return false;">Hủy</a>
							</div>
							</form>
						</div>
					</div>
				</div>
			</fieldset>
		</div>
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