<?php 
	if(!isset($bien_bao_mat)){exit();}
?>


<div class="right">
                    <div class="right__content">
                        <div class="right__title">Bảng điều khiển</div>
                        <p class="right__desc">Chèn slide</p>
                        <div class="right__formWrapper">
                            <form action="" method="post" enctype="multipart/form-data" >
                                <div class="right__inputWrapper">
                                    <label for="name">Tên SlideShow</label>
                                    <input  type="text" placeholder="Tên slide">
                                </div>
                                <div class="right__inputWrapper">
                                    <label for="url">Url</label>
                                    <input name="lien_ket"  type="text" placeholder="Url">
                                </div>
                                <div class="right__inputWrapper">
                                    <label for="desc">Mô tả</label>
                                    <textarea name="" id="" cols="30" rows="10" placeholder="Mô tả"></textarea>
                                </div>
                                <div class="right__inputWrapper">
                                    <label for="image">Hình ảnh</label>
                                    <input type="file" name="hinh_anh">
                                </div>
                                
                                <input class="btn" type="submit" name="bieu_mau_them_slideshow" value="Chèn"  >
                            </form>
                        </div>
                    </div>
                </div>