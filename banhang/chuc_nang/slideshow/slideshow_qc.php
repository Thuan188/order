<style type="text/css" >
    
	div.slideshow111 img {
           width: 800px;
           float: left;
        }
        div.ts11{
            width: 345px;
            background: #ff9900;
            height: 168px;
            float: right;
            margin: 2px;
        }
        div.both11{
            clear: both;
        }
        
</style>
<center>
<div class="slideshow111" id="slideshow111" >
	<?php 
		$tv="select hinh,lien_ket from slideshow1 order by id";
		$tv_1=mysqli_query($connect,$tv);
		while($tv_2=mysqli_fetch_array($tv_1))
		{
			$link_hinh="hinh_anh/slideshow/".$tv_2['hinh'];
			echo "<a href='".$tv_2['lien_ket']."'>";
				echo "<img src='".$link_hinh."'>";
			echo "</a>";
		}
	?>
</div>
    <div class="ts11">
        
    </div>
    <div class="ts11">
        
    </div>
    <div class="both11">
        
    </div>
</center>
<script type="text/javascript" >

	var i_img=0;
	var div_slideshow=document.getElementById("slideshow111");
	var img_slideshow=div_slideshow.getElementsByTagName("img");
	for(var i=0;i<img_slideshow.length;i++)
	{
		img_slideshow[i].style.display="none";
	}
	img_slideshow[0].style.display="block";
	
	setInterval(function(){
		img_slideshow[i_img].style.display="none";
		i_img=i_img+1;
		if(i_img>=img_slideshow.length){i_img=0;}
		img_slideshow[i_img].style.display="block";		
	},5000);
</script>