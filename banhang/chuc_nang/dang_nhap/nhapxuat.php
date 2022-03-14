<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Untitled Document</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
            <link rel="stylesheet" href="/DEMO_WEB_ORDER/banhang/chuc_nang/dang_nhap/main2.css"/>
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
                        <li><span><i class="fa fa-envelope"></i></span><a href="#">nguyenquan52000@gmail.com</a></li>
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
        </div>
    </body>
</html>