<div class="breadcrumbs_area">
    <div class="row">
        <div class="col-12">
            <div class="breadcrumb_content">
                <ul>
                    <li><a href="index.html">home</a></li>
                    <li><i class="fa fa-angle-right"></i></li>
                    <li>login</li>
                </ul>

            </div>
        </div>
    </div>
</div>
        <div class="col-lg-6 col-md-6">
            <div class="account_form">
                <?php
                        if(isset($_SESSION['user'])){
                            extract($_SESSION['user'])
                    ?>
                <div class="row mb10">
                    Xin CHÀO <br>
                    <?= $user?>
                </div>
                <div class="row mb10">
                    <li>
                        <a href="index.php?act=mybill">Đơn hàng của tôi</a>
                    </li>
                    <li>
                        <a href="index.php?act=quenmk">Quên mật khẩu</a>
                    </li>
                    <li>
                        <a href="index.php?act=edit_taikhoan">CẬP NHẬT TÀI KHOẢN</a>
                    </li>
                    <?php if($role == 1){ ?>
                    <li>
                        <a href="admin/index.php">ĐĂNG NHẬP ADMIN</a>
                    </li>
                    <?php } ?>
                    <li>
                        <a href="index.php?act=thoat">THOÁT</a>
                    </li>
                </div>
                <?php }else{
                    ?>


                <form action="index.php?act=dangnhap" method="POST">
                    <div class="row mb10">
                        <label>Username or email <span>*</span></label>
                        <input type="text" name="user" placeholder="Tên đăng nhập">
                    </div>
                    <div class="row mb10">
                        <label>Passwords <span>*</span></label>
                        <input type="password" name="pass" placeholder="Mật khẩu">
                    </div>
                    <label for="remember">
                        <input id="remember" type="checkbox">
                        Remember me
                    </label>
                    <div class="row mb10">
                        <input type="submit" value="Đăng nhập" name="dangnhap">
                    </div>
                </form>
                <li>
                    <a href="index.php?act=quenmk">Quên mật khẩu</a>
                </li>
                <li>
                    <a href="index.php?act=dangky">Đăng ký thành viên</a>
                </li>
                <?php }?>
            </div>
        </div>
    </div>
</div>
<!-- customer login end -->

</div>
<!--pos page inner end-->
</div>
</div>
<!--pos page end-->

<!--footer area start-->