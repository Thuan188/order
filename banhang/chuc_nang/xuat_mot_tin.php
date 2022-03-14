<head>
	<link rel="stylesheet" href="\DEMO_WEB_ORDER\banhang\chuc_nang\gioi_thieu.css">
</head>
<?php 
	$id=$_GET['id'];
	$tv="select * from menu_ngang where id='$id'";
	$tv_1=mysqli_query($connect,$tv);
	$tv_2=mysqli_fetch_array($tv_1);
//	echo "<h1>";
//		echo $tv_2['ten'];
//	echo "</h1>";
	if($id==5){
        ?>
        
      <div class="container">
		<div class="main blogs">
			<div class="col-main">
				<div role="main" id="content">
					<div class="rte">
						<div class="row j">
							<section class="col-main col-sm-6">
                                                            <?php
								echo $tv_2['noi_dung'];?>
							</section>
							<aside class="col-right sidebar col-sm-6">
								<div class="static-contain">
									<form accept-charset="utf-8" action="/contact" id="contact" method="post">
<input name="FormType" type="hidden" value="contact">
<script src="https://www.google.com/recaptcha/api.js?render=6Ldtu4IUAAAAAMQzG1gCw3wFlx_GytlZyLrXcsuK"></script>
<script>
grecaptcha.ready(function() {
grecaptcha.execute("6Ldtu4IUAAAAAMQzG1gCw3wFlx_GytlZyLrXcsuK", {action: "/contact"})
.then(function(token) {
document.getElementById("Token-90ac7605de0e4e41ac5bc09a4fc4ac80").value = token
});
});
</script>
									
									
									<fieldset>
										<input name="form_type" type="hidden" value="contact"><input name="utf8" type="hidden" value="?">               
										<div class="customer-name">
											<div class="input-box">
												<label>Họ và tên <span class="required">*</span></label>
												<br>
												<input type="text" size="35" class="input-text" value="quan nguyen" name="contact[Name]">
											</div>
											<div class="input-box">
												<label>Email <span class="required">*</span></label>
												<br>                          
												<input type="email" size="35" id="email" value="nguyenquan52000@gmail.com" class="input-text" name="contact[email]">
											</div>
											<div class="input-box">
												<label>Số điện thoại <span class="required">*</span></label>
												<br>                          
												<input type="text" size="35" id="phone" value="" class="input-text" name="contact[Số điện thoại]" required="">
											</div>
										</div>
										<label>Nội dung</label>
										<br>
										<div style="float:none" class="">
											<textarea name="contact[Nội dung]" id="commentx" title="Nội dung" class="input-text" cols="150" rows="3" style="width:100%;height:135px;"></textarea>                      
										</div>
										<div style="float:none;display:none;" class="">
											<input name="contact[Body]" id="comment" title="Nội dung" value="N/A" class="input-text" style="width:100%;height:135px;">                      
										</div>
									</fieldset>
									<span class="require"><em class="required">* </em>Thông tin bắt buộc</span>
									<div class="buttons-set">
										<button type="submit" title="Submit" class="button submit"> <span> Gửi </span> </button>
									</div>
									</form>
								</div>
							</aside>
						</div>
						<div class="google-map">
							
							
<!--                                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3833.783453632739!2d108.21188561480793!3d16.07672308887632!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3142184792140755%3A0xd4058cb259787dac!2zVHLGsOG7nW5nIMSQ4bqhaSBI4buNYyBTxrAgUGjhuqFtIEvhu7kgdGh14bqtdCAtIMSQ4bqhaSBo4buNYyDEkMOgIE7hurVuZw!5e0!3m2!1svi!2s!4v1610438755190!5m2!1svi!2s" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>-->
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d943.6310942595723!2d108.56886482919575!3d15.505482999326947!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMTXCsDMwJzE5LjciTiAxMDjCsDM0JzA5LjkiRQ!5e1!3m2!1svi!2s!4v1610440311801!5m2!1svi!2s" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>  
<?php
        }
else{
   echo $tv_2['noi_dung']; 
}

?>


