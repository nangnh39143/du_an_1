<div class=" pos_home_section">
    <div class="row pos_home">
        <div class="col-lg-3 col-md-8 col-12">
            <!--sidebar banner-->
            <div class="sidebar_widget banner mb-35">
                <div class="banner_img mb-35">
                    <a href="#"><img src="assets\img\banner\baner9.jpg" alt=""></a>
                </div>
                <div class="banner_img">
                    <a href="#"><img src="assets\img\banner\baner3.jpg" alt=""></a>
                </div>
            </div>
            <!--sidebar banner end-->

            <!--categorie menu start-->
            <div class="sidebar_widget catrgorie mb-35">
                <h3>Categories</h3>
                <ul>
                    <li class="has-sub"><a href="#"><i class="fa fa-caret-right"></i> women</a></li>
                    <li class="has-sub"><a href="#"><i class="fa fa-caret-right"></i> Jewelry</a></li>
                    <li class="has-sub"><a href="#"><i class="fa fa-caret-right"></i> Lady</a></li>
                </ul>
            </div>
            <!--categorie menu end-->

            <!--wishlist block start-->
            <div class="sidebar_widget wishlist mb-35">
                <div class="block_title">
                    <h3><a href="#">Wishlist</a></h3>
                </div>
                <div class="cart_item">
                    <div class="cart_img">
                    </div>
                </div>
                <div class="cart_item">
                    <div class="cart_img">
                    </div>
                </div>
                <div class="block_content">
                </div>
            </div>
            <!--wishlist block end-->

            <!--popular tags area-->
            <div class="sidebar_widget tags mb-35">
                <div class="block_title">
                    <h3>popular tags</h3>
                </div>
                <div class="block_tags">
                    <a href="#">ipod</a>
                    <a href="#">sam sung</a>
                    <a href="#">apple</a>
                    <a href="#">iphone 5s</a>
                    <a href="#">superdrive</a>
                    <a href="#">shuffle</a>
                    <a href="#">nano</a>
                    <a href="#">iphone 4s</a>
                    <a href="#">canon</a>
                </div>
            </div>
            <!--popular tags end-->

            <!--newsletter block start-->
            <div class="sidebar_widget newsletter mb-35">
                <div class="block_title">
                    <h3>newsletter</h3>
                </div>
                <form action="#">
                    <p>Sign up for your newsletter</p>
                    <input placeholder="Your email address" type="text">
                    <button type="submit">Subscribe</button>
                </form>
            </div>
            <!--newsletter block end-->

            <!--sidebar banner-->
            <div class="sidebar_widget bottom ">
                <div class="banner_img">
                    <a href="#"><img src="assets\img\banner\banner9.jpg" alt=""></a>
                </div>
            </div>
            <!--sidebar banner end-->

        </div>
        <div class="col-lg-9 col-md-12">
            <!--banner slider start-->
            <div class="banner_slider slider_1">
                <div class="slider_active owl-carousel">
                    <div class="single_slider" style="background-image: url(assets/img/slider/baner4.jpg)">
                        <div class="slider_content">
                            <div class="slider_content_inner">
                                <h1>Skin Care</h1>
                                <p>Helps you have beautiful skin</p>
                                <a href="#">shop now</a>
                            </div>
                        </div>
                    </div>
                    <div class="single_slider" style="background-image: url(assets/img/slider/baner5.jpg)">
                        <div class="slider_content">
                            <div class="slider_content_inner">
                                <h1>Losing weight</h1>
                                <p>Helps you have a beautiful figure</p>
                                <a href="#">shop now</a>
                            </div>
                        </div>
                    </div>
                    <div class="single_slider" style="background-image: url(assets/img/slider/baner6.jpg)">
                        <div class="slider_content">
                            <div class="slider_content_inner">
                                <h1>perfume</h1>
                                <p>Helps you have a spreading fragrance </p>
                                <a href="#">shop now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--banner slider start-->


            <!--new product area start-->
            <div class="row">
    <?php 
    $i = 0;
    foreach($spnew as $sp){
        extract($sp);
        $hinh = $img_path.$img;
        $linksp = "index.php?act=sanphamct&idsp=".$id;

        if(($i == 2) || ($i == 5) || ($i == 8)){
            $mr = "";
        } else {
            $mr = "mr";
        }

        echo '<div class="box_sp '.$mr.'">
                <div class="img">
                    <a href="'.$linksp.'">
                        <img src="'.$hinh.'" alt="">
                        <div class="buy-btn">Thêm vào giỏ hàng</div>
                    </a>
                </div>
                <div class="price">'.$price.' VND</div>
                <div class="product-name"><a href="'.$linksp.'">'.$name.'</a></div>
                <div class="addtocart">
                    <form action="index.php?act=addtocart" method="post">
                        <input type="hidden" name="id" value="'.$id.'">
                        <input type="hidden" name="name" value="'.$name.'">
                        <input type="hidden" name="img" value="'.$img.'">
                        <input type="hidden" name="price" value="'.$price.'">
                        <input type="submit" name="addtocart" value="Thêm vào giỏ hàng">
                    </form>
                </div>
            </div>';
        $i++;
    }
    ?>
</div>



        <!--new product area start-->
        <!--featured product end-->

        <!--banner area start-->
        <div class="banner_area mb-60">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="single_banner">
                        <a href="#"><img src="assets\img\banner\baner7.jpg" alt=""></a>
                        <div class="banner_title">
                            <p>Up to <span> 40%</span> off</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="single_banner">
                        <a href="#"><img src="assets\img\banner\baner8.jpg" alt=""></a>
                        <div class="banner_title title_2">
                            <p>sale off <span> 30%</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--banner area end-->

        <!--brand logo strat-->
        <div class="brand_logo mb-60">
            <div class="block_title">
                <h3>Brands</h3>
            </div>
            <div class="row">
                <div class="brand_active owl-carousel">
                    <div class="col-lg-2">
                        <div class="single_brand">
                            <a href="#"><img src="assets\img\brand\brand1.jpg" alt=""></a>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="single_brand">
                            <a href="#"><img src="assets\img\brand\brand2.jpg" alt=""></a>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="single_brand">
                            <a href="#"><img src="assets\img\brand\brand3.jpg" alt=""></a>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="single_brand">
                            <a href="#"><img src="assets\img\brand\brand4.jpg" alt=""></a>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="single_brand">
                            <a href="#"><img src="assets\img\brand\brand5.jpg" alt=""></a>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="single_brand">
                            <a href="#"><img src="assets\img\brand\brand6.jpg" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--brand logo end-->
    </div>
</div>
</div>
<!--pos home section end-->
</div>
<!--pos page inner end-->
</div>
</div>