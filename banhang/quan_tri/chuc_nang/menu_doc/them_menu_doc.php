<?php 
	if(!isset($bien_bao_mat)){exit();}
?>


  <div class="right">
                    <div class="right__content">
                        <div class="right__title">Bảng điều khiển</div>
                        <p class="right__desc">Chèn danh mục</p>
                        <div class="right__formWrapper">
                            <form action="" method="post">
                                <div class="right__inputWrapper">
                                    <label for="title">Tiêu đề</label>
                                    <input type="text" placeholder="Tiêu đề" name="ten" >
                                </div>
                                <div class="right__inputWrapper">
                                    <label for="desc">Mô tả</label>
                                    <textarea name="" id="" cols="30" rows="10" placeholder="Mô tả"></textarea>
                                </div>
                                &nbsp;
<!--                                <button  type="submit">Chèn</button>-->
                                <input class="btn" type="submit" name="bieu_mau_sua_menu_doc" value="Thêm menu" >
                            </form>
                        </div>
                    </div>
                </div>