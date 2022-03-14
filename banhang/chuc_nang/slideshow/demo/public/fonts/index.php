<!DOCTYPE html>
<html class="no-js" lang="">
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title> 1995 || SHOE </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

      
        <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
       
       <link rel="stylesheet" href="public/css/font-awesome.min.css">
        <link rel="stylesheet" href="public/lib/css/nivo-slider.css">
        <link rel="stylesheet" href="public/lib/css/preview.css">
      
        <link rel="stylesheet" href="public/css/magic.css">
       
        <link rel="stylesheet" href="public/css/normalize.css">
       
        <link rel="stylesheet" href="public/css/main.css">
     
        <link rel="stylesheet" href="public/style.css">
      
        <link rel="stylesheet" href="public/css/responsive.css">
     
        <script src="public/js/vendor/modernizr-2.8.3.min.js"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

    </head>
    <body>
        <!-- Add your site or application content here -->
        <!-- header area start -->
      
        <!-- header area end -->
                            <!-- slider area start -->
        <div class="slider-area home2">
            <div class="bend niceties preview-2">
                <div id="nivoslider" class="slides">
                    <?php 
                        include("config/dbconfig.php");
                        $sql = "SELECT * from tbl_banner  where active = 1 limit 1";
                        $run = mysqli_query($conn, $sql);
                        $i = 0;
                        $array ='#slider-direction-';
                        while ($row = mysqli_fetch_array($run)) {
                        $i++; 
                        ;?>
                    <img style="width:100%;"  src="/DEMO_WEB_ORDER/demo/images/banner/<?php echo $row['image']?>" alt=""title="<?php echo($array.$i);?>">
                        
                         <?php } ?>
                </div>
                <!-- direction 1 -->
                <div id="slider-direction-1" class="t-cn slider-direction">
                    <div class="slider-progress"></div>
                    <div class="slider-content t-lfl s-tb slider-1">
                        <div class="title-container s-tb-c title-compress">
                            <img src="public/img/slider/slider-logo.png" alt="">
                            <h1 class="title1">Academy of sport</h1>
                            <h2 class="title2" >sports center 1995</h2>
                            <h3 class="title3" >Lorem Ipsum is simply dummy text of the printing</h3>
                            <a href="#"><span>read more</span></a>
                        </div>
                    </div>
                </div>
                <!-- direction 2 -->
                <div id="slider-direction-2" class="slider-direction">
                    <div class="slider-progress"></div>
                    <div class="slider-content t-lfl s-tb slider-2">
                        <div class="title-container s-tb-c">
                            <img src="public/img/slider/slider-logo.png" alt="">
                            <h1 class="title1">Academy of sport2</h1>
                            <h2 class="title2" >sports center james</h2>
                            <h3 class="title3" >Lorem Ipsum is simply dummy text of the printing</h3>
                            <a href="#"><span>read more</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- slider area end -->
          
        <script src="public/lib/js/jquery.nivo.slider.js"></script>
        <script src="public/lib/home.js"></script>
       
    </body>
</html>
