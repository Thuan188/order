<?php

//$tv = "select * from menu_doc order by id";
//$tv_1 = mysqli_query($connect, $tv);
//echo "<div class='menu_doc' >";
//while ($tv_2 = mysqli_fetch_array($tv_1)) {
//    $link = "?thamso=xuat_san_pham&id=" . $tv_2['id'];
//    echo "<a href='$link'>";
//    echo $tv_2['ten'];
//    echo "</a>";
//}
//echo "</div>";

echo "<div class='page_a'>";


echo "<section class='section-product section-product-tab ajax-product home_colection2_area lazy_bg' data-background='url(//bizweb.dktcdn.net/100/341/555/themes/786825/assets/bg_m_1.png?1603447030866)'>";
echo "<div class='background__image' ></div>";
echo "<div class='col-product-wrap js__background-change'>";
echo "<div class='e-tabs2 not-dqtab ajax-tab-1' data-section='ajax-tab-1'>";
echo "<div class='content'>";
echo "<div class='module-title'>";
echo "<div class='container1'>";
echo "<h3 class='bg_main'> Thực đơn</h3>";

echo "<div class='tabs-title-ajax'>";

//echo "<ul class='tabs tabs-title tab-mobile clearfix hidden-sm hidden-md hidden-lg'>";
//echo "<li class='prev current'><img src='//bizweb.dktcdn.net/100/341/555/themes/786825/assets/left-arrow.png?1603447030866' alt='left'></li>";
//echo "<li class='tab-link tab-title  hidden-md hidden-lg current tab-titlexs' data-tab='tab-1'style='background: #ff5757;'>";
//echo"<a href='$link'>";
//echo "<span>Khai vị</span>";
//echo"</a>";
//echo "</li>";
//echo "<li class='next'><img src='//bizweb.dktcdn.net/100/341/555/themes/786825/assets/right-arrow.png?1603447030866' alt='right'></li>";
//echo "</ul>";

echo "<div class='title-desktop hidden-xs'>";
echo "<h2><a href='/collections/all' title=''></a></h2>";
echo "<ul class='tabs tabs-title ajax clearfix hidden-xs'>";

$tv = "select * from menu_doc order by id";
$tv_1 = mysqli_query($connect, $tv);
$i=1;
while ($tv_2 = mysqli_fetch_array($tv_1)) {
    $link = "?thamso=xuat_san_pham&id=" . $tv_2['id'];

     echo "<li class='tab-link has-content current bd-l-$i' data-tab='tab-1' data-url='/khai-vi' style='width: 1000px;'> ";
                       echo"<a href='$link'>";
                           echo"<span>";
                               echo $tv_2['name'];
                           echo"</span>";
                       echo"</a>";
                    echo"</li>";
                    $i++;
}




echo " </ul>";
echo "</div>";
echo "</div>";
echo "</div>";
echo "</div>";
echo "</div>";
echo "</div>";
echo "</div>";
echo "</section>";





echo "</div>";
 
?>