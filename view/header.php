<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Coron - Fashion eCommerce Bootstrap4 Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets\img\favicon.png">

    <!-- css sql -->
    <style>
    .new_product_area {
        margin-bottom: 30px;
        /* Thêm khoảng cách dưới cho phần sản phẩm cùng loại */
    }

    .single_p_active {
        display: flex;
        justify-content: space-between;
        align-items: center;
        flex-wrap: nowrap;
        /* Ngăn chặn các sản phẩm từ việc xuống dòng */
        overflow-x: auto;
        /* Cho phép cuộn khi không đủ không gian */
        padding: 10px 0;
        /* Thêm đệm trên và dưới cho phần sản phẩm cùng loại */
    }

    .single_p_active img {
        margin-right: 10px;
        /* Thêm khoảng cách giữa các sản phẩm */
    }

    .comment-container {
        width: 100%;
        max-width: 1200px;
        /* Điều chỉnh chiều rộng tối đa của phần bình luận */
        margin: 0 auto;
        /* Canh giữa phần bình luận trong div.row */
    }

    .comment-iframe {
        width: 100%;
        height: 400px;
        /* Điều chỉnh độ cao của iframe */
        border: 1px solid #ddd;
        /* Thêm đường viền cho iframe nếu cần */
    }

    .row {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
    }

    .price {
        font-size: 16px;
        font-weight: bold;
        color: #e74c3c;
        /* Màu đỏ */
        margin-bottom: 5px;
    }

    .product-name {
        font-size: 14px;
        margin-bottom: 10px;
        color: #333;
        /* Màu đen */
    }

    .box_sp {
        position: relative;
        width: calc(33.33% - 20px);
        margin-bottom: 20px;
        overflow: hidden;
        border: 1px solid #ddd;
        /* Thêm đường viền cho box sản phẩm */
        border-radius: 8px;
        /* Bo tròn các góc */
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        /* Thêm bóng đổ */
    }

    .img {
        position: relative;
    }

    .img img {
        width: 100%;
        height: auto;
        transition: transform 0.3s ease;
        /* Thêm transition để làm mềm dịu hiệu ứng */
    }

    .box_sp:hover .img img {
        transform: scale(1.1);
        /* Hiệu ứng phóng to khi hover */
    }

    .buy-btn {
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        background-color: #3498db;
        color: #fff;
        padding: 8px 0;
        text-align: center;
        text-decoration: none;
        opacity: 0;
        transition: opacity 0.3s ease;
        /* Thêm transition để làm mềm dịu hiệu ứng */
    }

    .box_sp:hover .buy-btn {
        opacity: 1;
    }

    p,
    a {
        margin: 5px 0;
    }

    .addtocart {
        margin-top: 10px;
    }

    .mb {
        margin-bottom: 20px;
    }

    .box_title {
        font-size: 20px;
        font-weight: bold;
        margin-bottom: 10px;
    }

    .box_content {
        background-color: #f5f5f5;
        padding: 20px;
        border: 1px solid #ddd;
    }

    .form_tk {
        display: flex;
        flex-direction: column;
    }

    .form_tk .row {
        margin-bottom: 10px;
    }

    .form_tk form {
        margin-bottom: 10px;
    }

    .form_tk a {
        text-decoration: none;
        color: #333;
        display: block;
        margin-bottom: 5px;
    }

    .form_tk a:hover {
        color: #007bff;
    }
    </style>

    <!-- all css here -->
    <link rel="stylesheet" href="assets\css\bootstrap.min.css">
    <link rel="stylesheet" href="assets\css\plugin.css">
    <link rel="stylesheet" href="assets\css\bundle.css">
    <link rel="stylesheet" href="assets\css\style.css">
    <link rel="stylesheet" href="assets\css\responsive.css">
    <script src="assets\js\vendor\modernizr-2.8.3.min.js"></script>
</head>

<body>
    <!-- Add your site or application content here -->

    <!--pos page start-->
    <div class="pos_page">
        <div class="container">
            <!--pos page inner-->
            <div class="pos_page_inner">
                <!--header area -->
                <div class="header_area">
                    <!--header top-->
                    <div class="header_top">
                        <div class="row align-items-center">
                            <div class="col-lg-6 col-md-6">
                                <div class="switcher">
                                    <ul>
                                        <li class="languages"><a href="#"><img src="assets\img\logo\fontlogo.jpg"
                                                    alt=""> English <i class="fa fa-angle-down"></i></a>
                                            <ul class="dropdown_languages">
                                                <li><a href="#"><img src="assets\img\logo\fontlogo.jpg" alt="">
                                                        English</a></li>
                                                <li><a href="#"><img src="assets\img\logo\fontlogo2.jpg" alt=""> French
                                                    </a></li>
                                            </ul>
                                        </li>

                                        <li class="currency"><a href="#"> Currency : $ <i
                                                    class="fa fa-angle-down"></i></a>
                                            <ul class="dropdown_currency">
                                                <li><a href="#"> Dollar (USD)</a></li>
                                                <li><a href="#"> Euro (EUR) </a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="header_links">
                                    <ul>
                                        <li><a href="wishlist.html" title="wishlist">My wishlist</a></li>
                                        <li><a href="my-account.html" title="My account">My account</a></li>
                                        <li><a href="cart.html" title="My cart">My cart</a></li>
                                        <li><a href="index.php?act=dangky" title="register">register</a></li>
                                        <li><a href="index.php?act=dangnhap" title="Login">Login</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--header top end-->

                    <!--header middel-->
                    <div class="header_middel">
                        <div class="row align-items-center">
                            <!--logo start-->
                            <div class="col-lg-3 col-md-3">
                                <div class="logo">
                                    <a href="index.html"><img src="assets\img\logo\logo.jpg.png" alt=""></a>
                                </div>
                            </div>
                            <!--logo end-->
                            <div class="col-lg-9 col-md-9">
                                <div class="header_right_info">
                                    <div class="search_bar">
                                        <form action="#">
                                            <input placeholder="Search..." type="text">
                                            <button type="submit"><i class="fa fa-search"></i></button>
                                        </form>
                                    </div>
                                    <div class="shopping_cart">
                                        <a href="#"><i class="fa fa-shopping-cart"></i><i
                                                class="fa fa-angle-down"></i></a>

                                        <!--mini cart-->
                                        <div class="mini_cart">
                                            <div class="cart_item">
                                                <div class="cart_img">
                                                    <a href="#">
                                                        <imdg src="assets\img\cart\cart.jpg" alt="">
                                                    </a>
                                                </div>
                                                <div class="cart_info">
                                                    <a href="#">lorem ipsum dolor</a>
                                                    <span class="cart_price">$115.00</span>
                                                    <span class="quantity">Qty: 1</span>
                                                </div>
                                                <div class="cart_remove">
                                                    <a title="Remove this item" href="#"><i
                                                            class="fa fa-times-circle"></i></a>
                                                </div>
                                            </div>
                                            <div class="cart_item">
                                                <div class="cart_img">
                                                    <a href="#"><img src="assets\img\cart\cart2.jpg" alt=""></a>
                                                </div>
                                                <div class="cart_info">
                                                    <a href="#">Quisque ornare dui</a>
                                                    <span class="cart_price">$105.00</span>
                                                    <span class="quantity">Qty: 1</span>
                                                </div>
                                                <div class="cart_remove">
                                                    <a title="Remove this item" href="#"><i
                                                            class="fa fa-times-circle"></i></a>
                                                </div>
                                            </div>
                                            <div class="shipping_price">
                                                <span> Shipping </span>
                                                <span> $7.00 </span>
                                            </div>
                                            <div class="total_price">
                                                <span> total </span>
                                                <span class="prices"> $227.00 </span>
                                            </div>
                                            <div class="cart_button">
                                                <a href="checkout.html"> Check out</a>
                                            </div>
                                        </div>
                                        <!--mini cart end-->
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!--header middel end-->
                    <div class="header_bottom">
                        <div class="row">
                            <div class="col-12">
                                <div class="main_menu_inner">
                                    <div class="main_menu d-none d-lg-block">
                                        <nav>
                                            <ul>
                                                <li class="active"><a href="index.php">Home</a></li>
                                                <li><a href="">Sản phẩm</a></li>
                                                <li><a href="index.php?act=gioithieu">Giới thiệu</a></li>
                                                <li><a href="blog.html">blog</a></li>
                                                <li><a href="#">Liên hệ</a></li>
                                                <li><a href="#">pages</a></li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>