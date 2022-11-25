<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="trangchu.css">
    <link rel="stylesheet" href="tatcasanpham.css">
    <link rel="stylesheet" href="giohang.css">
    <title>Tất cả sản phẩm</title>
</head>

<body>
    <!-- Header -->

    <div class="header">
        <div class="header_top">
            <ul class="header_top_left_left">
                <li class="hotro"><a href="trangchu.php">trang chủ</a></li>
                <li class="hotro"><a href="#">giới thiệu</a></li>
                <li><a href="#">hệ thống cửa hàng</a></li>
            </ul>
            <ul class="header_top_left_right">
                <li><a href="#">Hướng dẫn mua hàng</a></li>
                <li><a href="#">kiểm tra đơn hàng</a></li>
                <li class="hotro"><a href="#">hỗ trợ</a></li>
            </ul>
        </div>
        <div class="header_bottom" id="myHeader">
            <div class="logo">
                <a href="trangchu.php"> <img src="./imge/logo.webp" alt=""></a>

            </div>
            <div class="search">
                <form action="" id="search_box">
                    <input type="text" id="search_text" placeholder="Tìm kiếm sản phẩm" required>
                    <button id="search_btn"> <i class="fa fa-search"></i></button>
                </form>

            </div>
            <div class="icon">
                <div class="icon_header icon_phone">
                    <a href="">
                        <i class="fa fa-phone"></i>
                        <span>0987655433</span>
                    </a>
                </div>
                <div class="icon_header icon_account">
                    <a href="dangnhap.php">
                        <i class="fa fa-user"></i>
                        <span>Tài khoản</span>
                    </a>
                </div>
                <div class="icon_header icon_cart">
                    <a href="giohang.php">
                        <i class="fa fa-shopping-cart"></i>
                        <span>Giỏ hàng</span>
                    </a>

                </div>

            </div>
        </div>
    </div>

    <!-- End Header -->
    <!-- Body_middle -->
    <div class="body_middle">
        <!-- Body_middle_1 -->
        <div class="body_inside">
            <div class="body_menu">
                <div class="body_menu_left">
                    <ul>
                        <li>
                            <div id="anh">
                                <a href="#"> <img src="imge/top_icon_1_thumb.webp"></a>
                            </div>
                            <div id="chu">
                                <a href="#sanphambanchay">Bán chạy</a>
                            </div>
                        </li>
                        <li>
                            <div id="anh">
                                <a href="#"> <img src="imge/top_icon_2_thumb.webp"></a>
                            </div>
                            <div id="chu">
                                <a href="#">Khuyến mãi</a>
                            </div>
                        <li>
                            <div id="anh">
                                <a href="#"> <img src="imge/top_icon_3_thumb.webp"></a>
                            </div>
                            <div id="chu">
                                <a href="#sanphammoi">Mới</a>
                            </div>
                        <li><a href="#">
                                <div id="anh">
                                    <a href="#"> <img src="imge/top_icon_4_thumb.webp"></a>
                                </div>
                                <div id="chu">
                                    <a href="#like">Yêu thích</a>
                                </div>
                        <li>
                            <div id="anh">
                                <a href="#"> <img src="imge/top_icon_5_thumb.webp"></a>
                            </div>
                            <div id="chu">
                                <a href="#one">Môi</a>
                            </div>
                        <li>
                            <div id="anh">
                                <a href="#"> <img src="imge/top_icon_6_thumb.webp"></a>
                            </div>
                            <div id="chu">
                                <a href="#two">Mặt</a>
                            </div>
                        <li>
                            <div id="anh">
                                <a href="#"> <img src="imge/top_icon_7_thumb.webp"></a>
                            </div>
                            <div id="chu">
                                <a href="#three">Mắt</a>
                            </div>
                        <li>
                            <div id="anh">
                                <a href="#"> <img src="imge/top_icon_8_thumb.webp"></a>
                            </div>
                            <div id="chu">
                                <a href="#four">Phụ kiện</a>
                            </div>
                    </ul>
                </div>
                <div class="body_menu_right">
                    <div class="nguyen">
                        <h1 class="text">Tất cả sản phẩm Black Rouge</h1>
                        <a href="tatcasanpham.php">Xem ngay!</a>
                    </div>
                </div>
            </div>

        </div>
        <!-- End Body_middle_1 -->
        <div class="anh">
            <img src="./imge/slide_1.webp" alt="">
        </div>
        <div class="sonmoi" id="one">
            <!-- <div class="body_middle_five" id="sanphammoi"> -->

            <div class="body_middle_five_top">
                <div class="body_middle_five_top_left">
                    <a href="">Son Môi</a>
                </div>
                <div class="test">
                </div>
                <div class="body_middle_five_top_right">
                    <a href="">Xem Thêm</a>
                </div>
            </div>
            <div id="product-grid" >
            <?php
                	require_once("dbcontroller.php");
                    $db_handle = new DBController();
	                $product_array = $db_handle->runQuery("SELECT * FROM  sanpham WHERE id_brand = 1 ");
	                if (!empty($product_array)) { 
                        foreach($product_array as $key=>$value){
                            ?>
                            <div class="one" >
                                <form method="post" action="giohang.php?action=add&code=<?php echo $product_array[$key]["code"]; ?>">
                                <div class="product-image" ><img src="<?php echo $product_array[$key]["image"]; ?>"></div>
			                    <div class="product-tile-footer">
                                    <div class="product-title"><a href="chitietsanpham.php"><?php echo $product_array[$key]["name"]; ?> </a></div>
                                    <div class="product-price"><?php echo "$".$product_array[$key]["price"]; ?></div>
                                    <div class="report">
                                         <div class="star">
                                         <?php
                                         for($u=0;$u<5;$u++){
                                            ?>
                                            <i class="fa fa-star"></i>
                                            <?php
                                             }
                                              ?>
                                         </div>
                                    <div class="heart">
                                        <button id="heart_btn"> <i class="fa fa-heart"></i> </button>
                                    </div>
                                    </div>
                                     <div class="cart-action"><input type="text" class="product-quantity" name="quantity" value="1" size="2" /><input type="submit" value="THÊM" class="btnAddAction" /></div>
			                    </div>
			                    </form>
		                    </div>
	                    <?php
	                    	}
                        }
	                    ?>
            </div>

                    </div>

            <div class="sonmoi" id="two">
                <!-- <div class="body_middle_five" id="sanphammoi"> -->

                <div class="body_middle_five_top">
                    <div class="body_middle_five_top_left">
                        <a href="">Kem Mặt</a>
                    </div>
                    <div class="test">
                    </div>
                    <div class="body_middle_five_top_right">
                        <a href="">Xem Thêm</a>
                    </div>
                </div>
                <div id="product-grid" >
            <?php
                	require_once("dbcontroller.php");
                    $db_handle = new DBController();
	                $product_array = $db_handle->runQuery("SELECT * FROM  sanpham WHERE id_brand = 4 ");
	                if (!empty($product_array)) { 
                        foreach($product_array as $key=>$value){
                            ?>
                            <div class="one" >
                                <form method="post" action="giohang.php?action=add&code=<?php echo $product_array[$key]["code"]; ?>">
                                <div class="product-image" ><img src="<?php echo $product_array[$key]["image"]; ?>"></div>
			                    <div class="product-tile-footer">
                                    <div class="product-title"><a href="chitietsanpham.php"><?php echo $product_array[$key]["name"]; ?> </a></div>
                                    <div class="product-price"><?php echo "$".$product_array[$key]["price"]; ?></div>
                                    <div class="report">
                                         <div class="star">
                                         <?php
                                         for($u=0;$u<5;$u++){
                                            ?>
                                            <i class="fa fa-star"></i>
                                            <?php
                                             }
                                              ?>
                                         </div>
                                    <div class="heart">
                                        <button id="heart_btn"> <i class="fa fa-heart"></i> </button>
                                    </div>
                                    </div>
                                     <div class="cart-action"><input type="text" class="product-quantity" name="quantity" value="1" size="2" /><input type="submit" value="THÊM" class="btnAddAction" /></div>
			                    </div>
			                    </form>
		                    </div>
	                    <?php
	                    	}
                        }
	                    ?>
            </div>
                    </div>

                <!-- ENd body_middle_5 -->

                <!-- body_middle_ten -->
            </div>
            <div class="sonmoi" id="three">
                <!-- <div class="body_middle_five" id="sanphammoi"> -->

                <div class="body_middle_five_top">
                    <div class="body_middle_five_top_left">
                        <a href="">Đánh Mắt</a>
                    </div>
                    <div class="test">
                    </div>
                    <div class="body_middle_five_top_right">
                        <a href="">Xem Thêm</a>
                    </div>
                </div>
                <div id="product-grid" >
            <?php
                	require_once("dbcontroller.php");
                    $db_handle = new DBController();
	                $product_array = $db_handle->runQuery("SELECT * FROM  sanpham WHERE id_brand = 5 ");
	                if (!empty($product_array)) { 
                        foreach($product_array as $key=>$value){
                            ?>
                            <div class="one" >
                                <form method="post" action="giohang.php?action=add&code=<?php echo $product_array[$key]["code"]; ?>">
                                <div class="product-image" ><img src="<?php echo $product_array[$key]["image"]; ?>"></div>
			                    <div class="product-tile-footer">
                                    <div class="product-title"><a href="chitietsanpham.php"><?php echo $product_array[$key]["name"]; ?> </a></div>
                                    <div class="product-price"><?php echo "$".$product_array[$key]["price"]; ?></div>
                                    <div class="report">
                                         <div class="star">
                                         <?php
                                         for($u=0;$u<5;$u++){
                                            ?>
                                            <i class="fa fa-star"></i>
                                            <?php
                                             }
                                              ?>
                                         </div>
                                    <div class="heart">
                                        <button id="heart_btn"> <i class="fa fa-heart"></i> </button>
                                    </div>
                                    </div>
                                     <div class="cart-action"><input type="text" class="product-quantity" name="quantity" value="1" size="2" /><input type="submit" value="THÊM" class="btnAddAction" /></div>
			                    </div>
			                    </form>
		                    </div>
	                    <?php
	                    	}
                        }
	                    ?>
            </div>
                    </div>

                <div class="sonmoi" id="four">
                    <!-- <div class="body_middle_five" id="sanphammoi"> -->

                    <div class="body_middle_five_top">
                        <div class="body_middle_five_top_left">
                            <a href="">Phụ Kiện</a>
                        </div>
                        <div class="test">
                        </div>
                        <div class="body_middle_five_top_right">
                            <a href="">Xem Thêm</a>
                        </div>
                    </div>
                    <div id="product-grid" >
            <?php
                	require_once("dbcontroller.php");
                    $db_handle = new DBController();
	                $product_array = $db_handle->runQuery("SELECT * FROM  sanpham WHERE id_brand = 6 ");
	                if (!empty($product_array)) { 
                        foreach($product_array as $key=>$value){
                            ?>
                            <div class="one" >
                                <form method="post" action="giohang.php?action=add&code=<?php echo $product_array[$key]["code"]; ?>">
                                <div class="product-image" ><img src="<?php echo $product_array[$key]["image"]; ?>"></div>
			                    <div class="product-tile-footer">
                                    <div class="product-title"> <a href="chitietsanpham.php"><?php echo $product_array[$key]["name"]; ?> </a></div>
                                    <div class="product-price"><?php echo "$".$product_array[$key]["price"]; ?></div>
                                    <div class="report">
                                         <div class="star">
                                         <?php
                                         for($u=0;$u<5;$u++){
                                            ?>
                                            <i class="fa fa-star"></i>
                                            <?php
                                             }
                                              ?>
                                         </div>
                                    <div class="heart">
                                        <button id="heart_btn"> <i class="fa fa-heart"></i> </button>
                                    </div>
                                    </div>
                                     <div class="cart-action"><input type="text" class="product-quantity" name="quantity" value="1" size="2" /><input type="submit" value="THÊM" class="btnAddAction" /></div>
			                    </div>
			                    </form>
		                    </div>
	                    <?php
	                    	}
                        }
	                    ?>
            </div>

                </div>
                <div class="body_middle_ten">
                    <img src="./imge/anh_body_10_1.webp" alt="">
                    <div class="ten_top">
                        Rouge Power Club Cộng đồng Những người yêu thích thương hiệu Black Rouge tại Việt Nam.
                        <br>
                        Đây là nơi có vô vàn ưu đãi ưu đãi mua hàng, quyền lợi hấp dẫn cùng những đặc quyền chỉ dành
                        riêng
                        cho
                        Roubae
                    </div>
                    <div class="ten_bottom">
                        <a href="">Tham gia ngay</a>
                    </div>

                </div>
                <!-- End body_middle_ten -->
            </div>
            <!-- End body_middle -->
            <!--Footer-->
            <div class="footer">
                <div class="footer_inside">
                    <div class="footer1">
                        <p>Legal Entity | <span>DM&C CO., LTD</span></p>
                        <p>Địa chỉ: Tầng 10, 194 Golden Building, 473 Điện Biên Phủ, Phường 25, Bình Thạnh, Hồ Chí Minh
                        </p>
                        <p>Thông tin hỗ trợ: <a href="#">0909 312 350</a></p>
                        <p>Email support: cskh@dmnc.vn Or blackrougevn@gmail.com</p>
                        <a href="http://online.gov.vn/(X(1)S(c4r0ihn4yy1gwxol5piuiyug))/Home/WebDetails/62960?AspxAutoDetectCookieSupport=1"
                            target="_blank"><img src="imge/fFooter_bct_image.webp" alt=""></a>
                    </div>
                    <div class="footer2">
                        <div class="footer2_top">
                            <p>VỀ CHÚNG TÔI</p>
                            <a href="#">
                                <h1>Trang chủ</h1>
                            </a>
                            <br>
                            <a href="#">
                                <h1>Hệ thống cửa hàng</h1>
                            </a>
                        </div>
                        <div class="footer2_bottom">
                            <a href="#" target="_blank"><img src="imge/fFooter_top_payment_image_1.webp" alt=""></a>
                            <a href="#" target="_blank"><img src="imge/fFooter_top_payment_image_2.webp" alt=""></a>
                            <a href="#" target="_blank"><img src="imge/fFooter_top_payment_image_3.webp" alt=""></a>
                        </div>
                    </div>
                    <div class="footer3">
                        <p>CHÍNH SÁCH</p>
                        <a href="#" target="_blank">
                            <h1>Điều khoản dịch vụ</h1>
                        </a>
                        <a href="#" target="_blank">
                            <h1>Chính sách bảo mật</h1>
                        </a>
                        <a href="#" target="_blank">
                            <h1>Chính sách vận chuyển và giao nhận</h1>
                        </a>
                        <a href="#" target="_blank">
                            <h1>Chính sách đổi trả và hoàn tiền</h1>
                        </a>
                        <a href="#" target="_blank">
                            <h1>Quy định và hình thức thanh toán</h1>
                        </a>
                    </div>
                    <div class="footer4">
                        <div class="footer4_top">
                            <p>KẾT NỐI VỚI CHÚNG TÔI</p>
                            <a href="https://www.facebook.com/BlackRougeVietnam/" target="_blank"><img
                                    src="imge/fFooter_top_social_image_1.webp" alt=""></a>
                            <a href="https://www.tiktok.com/@blackrougevietnam" target="_blank"><img
                                    src="imge/fFooter_top_social_image_2.webp" alt=""></a>
                            <a href="https://zalo.me/4083379486007296299" target="_blank"><img
                                    src="imge/fFooter_top_social_image_3.webp" alt=""></a>
                            <a href="https://zalo.me/4083379486007296299" target="_blank"><img
                                    src="imge/fFooter_top_social_image_4.webp" alt=""></a>
                            <a href="https://www.instagram.com/blackrouge_vn/" target="_blank"><img
                                    src="imge/fFooter_top_social_image_5.webp" alt=""></a>
                        </div>
                        <div class="footer4_bottom">
                            <p>ĐĂNG KÍ NHẬN BẢN TIN</p>
                            <div class="form_email">
                                <input required type="email" id="newsletter-email" value
                                    placeholder="Nhập email của bạn">
                                <button type="submit" onclick="location.href='#';">ĐĂNG KÍ</button>
                            </div>
                            <h1>Để nhận thông tin và khuyến mãi mới nhất</h1>
                        </div>
                    </div>
                    <div class="footer5">
                        <div>
                            <a href="#" target="_blank"><img src="imge/addThis_cus_image_1.webp" alt=""></a>
                            <a href="#" target="_blank">
                                <h1>Hướng dẫn check hàng thật</h1>
                            </a>
                        </div>
                        <div>
                            <a href="#" target="_blank"><img src="imge/addThis_cus_image_2.webp" alt=""></a>
                            <a href="#" target="_blank">
                                <h1>Báo cáo hàng giả</h1>
                            </a>
                        </div>
                        <div>
                            <a href="#" target="_blank"><img src="imge/addThis_cus_image_3.webp" alt=""></a>
                            <a href="#" target="_blank">
                                <h1>Lên đầu trang</h1>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
            <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
            <script src="trangchu.js"></script>

</body>

</html>