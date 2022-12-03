<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="trangchu.css">
    <title>Blackrouge</title>

</head>

<body>
    <!-- Header -->
    <!-- ewqew -->
    <div class="header" id="lendau">
        <div class="header_top">
            <ul class="header_top_left_left">
                <li class="hotro"><a href="#">trang chủ</a></li>
                <li class="hotro"><a href="#">giới thiệu</a></li>
                <li><a href="#">hệ thống cửa hàng</a></li>
            </ul>
            <ul class="header_top_left_right">
                <li><a href="#">Hướng dẫn mua hàng</a></li>
                <li><a href="#">kiểm tra đơn hàng</a></li>
                <li class="hotro"><a href="lienhe.php">hỗ trợ</a></li>
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
                                <a href="#sanphambanchay"> <img src="imge/top_icon_1_thumb.webp"></a>
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
                                <a href="#sanphammoi"> <img src="imge/top_icon_3_thumb.webp"></a>
                            </div>
                            <div id="chu">
                                <a href="#sanphammoi">Mới</a>
                            </div>
                        <li><a href="#">
                                <div id="anh">
                                    <a href="#like"> <img src="imge/top_icon_4_thumb.webp"></a>
                                </div>
                                <div id="chu">
                                    <a href="#like">Yêu thích</a>
                                </div>
                        <li>
                            <div id="anh">
                                <a href="#"> <img src="imge/top_icon_5_thumb.webp"></a>
                            </div>
                            <div id="chu">
                                <a href="#">Môi</a>
                            </div>
                        <li>
                            <div id="anh">
                                <a href="#"> <img src="imge/top_icon_6_thumb.webp"></a>
                            </div>
                            <div id="chu">
                                <a href="#">Mặt</a>
                            </div>
                        <li>
                            <div id="anh">
                                <a href="#"> <img src="imge/top_icon_7_thumb.webp"></a>
                            </div>
                            <div id="chu">
                                <a href="#">Mắt</a>
                            </div>
                        <li>
                            <div id="anh">
                                <a href="#"> <img src="imge/top_icon_8_thumb.webp"></a>
                            </div>
                            <div id="chu">
                                <a href="#">Phụ kiện</a>
                            </div>
                    </ul>
                </div>
                <div class="body_menu_right">
                    <div class="nguyen">
                        <h1 class="text">Tất cả sản phẩm Black Rouge</h1>
                        <a href="tatcasanpham.php" target="_blank">Xem ngay!</a>
                    </div>
                </div>
            </div>

        </div>
        <!-- End Body_middle_1 -->
        <!-- Body_middle_2 -->
        <div class="body_middle_two">
            <div class="body_middle_two_left slide">
                <div class="chuyen_slide">
                    <a href="chitietsanpham.php"><img class="anh_slide" src="./imge/slide_1.webp"></a>
                    <a href="chitietsanpham.php" target="_blank"><img class="anh_slide" src="./imge/slide_2.webp"></a>
                    <a href="chitietsanpham.php" target="_blank"><img class="anh_slide" src="./imge/slide_3.webp"></a>
                </div>

                <button type="button" class="slide_btn_left" onclick="Back()">
                    <i class="fa fa-angle-left"></i>
                </button>
                <button type="button" class="slide_btn_right" onclick="Next()">
                    <i class="fa fa-angle-right"></i>
                </button>

            </div>
            <div class="body_middle_two_right">
                <div class="body_middle_two_right_top">
                    <a href="chitietsanpham.php" target="_blank">
                        <img src="./imge/anhphai_body_2_tren.webp" alt="">
                    </a>
                </div>
                <div class="body_middle_two_right_bottom">
                    <a href="chitietsanpham.php" target="_blank">
                        <img src="./imge/anhphai_body_2_duoi.webp" alt="">
                    </a>
                </div>
            </div>
        </div>
        <!-- End Body_middle_2 -->

        <!-- Body_middle_3 -->
        <div class="body_middle_three" id="like">
            <div class="body_middle_three_top">
                <div class="body_middle_three_top_left">
                    <span>Sản phẩm được nhiều KOL & Celeb yêu thích</span>
                </div>
                <div class="more">
                    <a href="">Xem Thêm</a>
                </div>
            </div>
            <div id="product-grid">
                <?php
                require_once("dbcontroller.php");
                $db_handle = new DBController();
                $product_array = $db_handle->runQuery("SELECT * FROM  sanpham WHERE SanYeuThich = 1 ");
                if (!empty($product_array)) {
                    foreach ($product_array as $key => $value) {
                ?>
                        <div class="one">
                            <form method="post" action="giohang.php?action=add&code=<?php echo $product_array[$key]["code"]; ?>">
                                <div class="product-image"><img src="<?php echo $product_array[$key]["image"]; ?>"></div>
                                <div class="product-tile-footer">
                                    <div class="product-title"><a href="chitietsanpham.php?id=<?php echo $product_array[$key]["id"];?>" style="text-decoration: none" ><?php echo $product_array[$key]["name"]; ?> </a></div>
                                    <div class="product-price"><?php echo "$" . $product_array[$key]["price"]; ?></div>
                                    <div class="report">
                                        <div class="star">
                                            <?php
                                            for ($u = 0; $u < 5; $u++) {
                                            ?>
                                                <i class="fa fa-star" ></i>
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
        <!-- End body_middle_3 -->
        <!-- Body_middle_4 -->
        <div class="body_middle_four">
            <a href="chitietsanpham.php" target="_blank"> <img src="./imge/anh_body_four.webp" alt=""></a>
        </div>
        <!-- End body_middle_4 -->
        <!-- Body_middle_5 -->
        <div class="body_middle_five" id="sanphammoi">

            <div class="body_middle_five_top">
                <div class="body_middle_five_top_left">
                    <a href="">Sản phẩm mới</a>
                </div>
                <div class="test">
                </div>
                <div class="body_middle_five_top_right">
                    <a href="">Xem Thêm</a>
                </div>
            </div>
            <div id="product-grid">
                <?php
                require_once("dbcontroller.php");
                $db_handle = new DBController();
                $product_array = $db_handle->runQuery("SELECT * FROM  sanpham  ORDER BY id DESC LIMIT 4");
                if (!empty($product_array)) {
                    foreach ($product_array as $key => $value) {
                ?>
                        <div class="one">
                            <form method="post" action="giohang.php?action=add&code=<?php echo $product_array[$key]["code"]; ?>">
                                <div class="product-image"><img src="<?php echo $product_array[$key]["image"]; ?>"></div>
                                <div class="product-tile-footer">
                                    <div class="product-title"><a href="chitietsanpham.php?id=<?php echo $product_array[$key]["id"];?>" style="text-decoration: none"><?php echo $product_array[$key]["name"]; ?> </a></div>
                                    <div class="product-price"><?php echo "$" . $product_array[$key]["price"]; ?></div>
                                    <div class="report">
                                        <div class="star">
                                            <?php
                                            for ($u = 0; $u < 5; $u++) {
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
                                    <div class="cart-action"><input type="text" class="product-quantity" name="quantity" value="1" size="2" />
                                        <input type="submit" value="THÊM" class="btnAddAction" />
                                    </div>
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
        <!-- Body_middle_6 -->
        <div class="body_middle_six">
            <img src="./imge/anh_body_6.webp" alt="">
            <img src="./imge/anh_body_6_right.webp" alt="">
        </div>
        <!-- End body_middle_6 -->
        <!-- Body_middle_7 -->
        <div class="body_middle_seven" id="sanphambanchay">
            <div class="body_middle_seven_top">
                <div class="body_middle_seven_top_left">
                    <a href="" style="text-decoration: none">Sản phẩm bán chạy</a>
                </div>
                <div class="test"></div>
                <div class="body_middle_seven_top_right">
                    <a href="">Xem Thêm</a>
                </div>
            </div>
            <div class="body_middle_seven_bottom">
                <!-- <?php
                $mylist_seven = ['./imge/anh_body_7_1.webp', './imge/anh_body_7_2.webp', './imge/anh_body_7_3.webp', './imge/anh_body_7_4.webp', './imge/anh_body_7_5.webp', './imge/anh_body_7_6.webp', './imge/anh_body_7_7.webp', './imge/anh_body_7_8.webp'];
                // $mylist_hover_two = ['./imge/1.PNG','./imge/4.webp','./imge/7.webp','./imge/9.webp','./imge/son_3_1_main.webp'];
                $len = count($mylist_seven);
                ?>
                <div class="to">
                    <?php
                    for ($i = 0; $i < $len; $i++) {
                    ?>
                        <div class="body_miidle_seven_bottom_in yi">
                            <div>
                                <a href="chitietsanpham.php" target="_blank"> <img src="<?php echo $mylist_seven[$i] ?>" alt="" style="text-decoration: none"></a>
                            </div>
                            <div>
                                <a href="chitietsanpham.php" target="_blank" style="text-decoration: none"><span>Black Rouge Airfit Velvet Tint Ver 1 THE
                                        RED</span></a>
                                <div class="gia">
                                    <p class="gia_1">318,000đ</p>
                                    <p class="gia_2">268,200đ</p>
                                </div>

                            </div>
                        </div>


                    <?php
                    }
                    ?> -->



<div id="product-grid" >
    <?php
    require_once("dbcontroller.php");
    $db_handle = new DBController();
    $product_array = $db_handle->runQuery("SELECT * FROM  sanpham  WHERE SanYeuThich = 2");
    if (!empty($product_array)) {
        foreach ($product_array as $key => $value) {
    ?>
            <div class="one">
                <form method="post" action="giohang.php?action=add&code=<?php echo $product_array[$key]["code"]; ?>">
                    <div class="product-image"><img src="<?php echo $product_array[$key]["image"]; ?>"></div>
                    <div class="product-tile-footer">
                        <div class="product-title"><a href="chitietsanpham.php?id=<?php echo $product_array[$key]["id"];?>" style="text-decoration: none"><?php echo $product_array[$key]["name"]; ?> </a></div>
                        <div class="product-price"><?php echo "$" . $product_array[$key]["price"]; ?></div>
                        <div class="report">
                            <div class="star">
                                <?php
                                for ($u = 0; $u < 5; $u++) {
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
                        <div class="cart-action"><input type="text" class="product-quantity" name="quantity" value="1" size="2" />
                            <input type="submit" value="THÊM" class="btnAddAction" />
                        </div>
                    </div>
                </form>
            </div>
    <?php
        }
    }
    ?>


                </div>
            </div>
        </div>
        <!-- End_body_middle_7 -->
        <!-- body_middle_eight -->
        <div class="body_middle_eight">
            <?php
            $myimg = ['./imge/anh_body_8_1.webp', './imge/anh_body_8_2.webp', './imge/anh_body_8_3.webp', './imge/anh_body_8_4.webp'];
            $lenm = count($myimg);
            ?>
            <?php
            for ($i = 0; $i < $lenm; $i++) {
            ?>
                <img src="<?php echo $myimg[$i] ?>" alt="">
            <?php
            }
            ?>
        </div>
        <!--End body_middle_eight -->
        <!-- Body_midlle_nine -->
        <div class="body_middle_nine">
            <div class="body_middle_nine_left">
                <div class="body_middle_nine_left">
                    <div class="body_middle_nine_left_top">
                        <div class="body_middle_nine_top_left">
                            <a href="">Góc Black Rouge</a>
                        </div>
                        <div class="test_nine">
                        </div>
                        <div class="body_middle_nine_top_right">
                            <a href="">Xem Thêm</a>
                        </div>
                    </div>
                    <div class="body_middle_nine_left_bottom">
                        <div class="slide_nine">
                            <div class="chuyen_anh_nine">
                                <div class="slide_slide">
                                    <div class="body_middle_nine_left_bottom_left">
                                        <img src="./imge/anh_body_9_1.webp" alt="">
                                        <p>
                                            “Một lần chạm cọ là say đắm, hai lần chạm cọ làm đắm say" có lẽ là câu nói
                                            chính xác
                                            nhất để
                                            miêu tả về bảng phấn mắt “Nàng thơ” Triple Layer Eye Palette mà nhà Black
                                            Rouge
                                            cho...
                                        </p>
                                        <div class="bay_nine">
                                            <a href="">[Pre Order] Cơ hội trở thành một trong những người đầu tiên sở
                                                hữu Triple
                                                Layer
                                                Eye Palette với mức giá siêu ưu đãi!</a>
                                        </div>
                                    </div>
                                    <div class="body_middle_nine_left_bottom_right">
                                        <img src="./imge/anh_body_9_2.webp" alt="">
                                        <p>
                                            Đánh trúng “tim đen” của thế hệ Gen Z, thương hiệu mỹ phẩm Black Rouge cho
                                            trình
                                            làng dòng son mới mà mọi cô gái đều phải rước ngay một “em” về. Hứa hẹn trở
                                            thành
                                            hot trend
                                            cho tháng...
                                        </p>
                                        <div class="bay_nine">
                                            <a href="">Black Rouge ra mắt dòng son “must-have” mà Gen Z ai cũng phải nên
                                                sở hữu
                                                một
                                                cây</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="slide_slide">
                                    <div class="body_middle_nine_left_bottom_left">
                                        <img src="./imge/anh_body_9_5.webp" alt="">
                                        <p>
                                            Sau một thời gian dài “nhá hàng” khiến các tín đồ yêu son đứng ngồi không
                                            yên thì siêu phẩm được chờ đợi nhất trong năm mang tên Air Fit Velvet Tint
                                            Ver THE CRYSTAL cũng đã đến...
                                        </p>
                                        <div class="bay_nine">
                                            <a href="">[Pre - Order] Ưu đãi “SIÊU TO KHỔNG LỒ” càng nhiều giá giảm càng
                                                sâu! (29/11-04/12)</a>
                                        </div>
                                    </div>
                                    <div class="body_middle_nine_left_bottom_right">
                                        <img src="./imge/anh_body_9_6.webp" alt="">
                                        <p>
                                            Bộ sưu tập son Black Rouge Air Fit Velvet Tint chưa bao giờ ngưng độ hot mỗi
                                            khi ra mắt sản phẩm mới, khiến các cô nàng đam mê mỹ phẩm phải đổ gục đứ đừ.
                                            Đặc biệt với sắc...
                                        </p>
                                        <div class="bay_nine">
                                            <a href="">Những cách giúp nàng phân biết Tem Hidden Tag của 2 màu son A12
                                                CŨ - A12 MỚI để không bị mua lầm hàng FAKE!</a>
                                        </div>
                                    </div>
                                </div>

                                <input type="radio" class="slide_btn_left_nine" onclick="B_ack()" name="rdo" checked="true">
                                <input type="radio" class="slide_btn_right_nine" onclick="N_ext()" name="rdo">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="body_middle_nine_right">
                <div class="body_middle_nine_right_top">
                    <div class="body_middle_nine_right_top_left">
                        <a href="">Chung tay đẩy lùi hàng fake</a>
                    </div>
                    <div class="test_nine_nine">
                    </div>
                    <div class="body_middle_nine_right_top_right">
                        <a href="">Xem Thêm</a>
                    </div>
                </div>
                <div class="body_middle_nine_right_bottom">
                    <div class="slide_right">
                        <div class="chuyen_anh_right">
                            <div class="slide_slide_right">
                                <div class="body_middle_nine_right_bottom_left">
                                    <img src="./imge/anh_body_9_3.webp" alt="">
                                    <p>
                                        KÊNH PHÂN PHỐI CHÍNH THỨC BLACK ROUGECó rất nhiều bạn chắc chắn sẽ hoang mang
                                        khi có quá
                                        nhiều địa chỉ bán sản phẩm Black Rouge. Vậy đâu mới là nơi uy tín, chất lượng để
                                        bạn
                                        “chọn
                                        mặt gửi...
                                    </p>
                                    <div class="bay_nine">
                                        <a href="">Kênh phân phối chính thức BLACK ROUGE</a>
                                    </div>
                                </div>
                                <div class="body_middle_nine_right_bottom_right">
                                    <img src="./imge/anh_body_9_4.webp" alt="">
                                    <p>
                                        Thời gian gần đây, các tín đồ làm đẹp tại xứ sở kim chi đang “sốt xình xịch” với
                                        loạt mỹ
                                        phẩm make up đến từ một thương hiệu mới nổi. Các sản phẩm chất lượng và mức giá
                                        vô...
                                    </p>
                                    <div class="bay_nine">
                                        <a href="">Phát hiện thương hiệu mỹ phẩm mới toanh đang rất được lòng tín đồ làm
                                            đẹp xứ
                                            HÀN</a>
                                    </div>
                                </div>
                            </div>
                            <div class="slide_slide_right">
                                <div class="body_middle_nine_right_bottom_left">
                                    <img src="./imge/anh_body_9_7.webp" alt="">
                                    <p>
                                        KÊNH PHÂN PHỐI CHÍNH THỨC BLACK ROUGECó rất nhiều bạn chắc chắn sẽ hoang mang
                                        khi có quá
                                        nhiều địa chỉ bán sản phẩm Black Rouge. Vậy đâu mới là nơi uy tín, chất lượng để
                                        bạn
                                        “chọn
                                        mặt gửi...
                                    </p>
                                    <div class="bay_nine">
                                        <a href="">Kênh phân phối chính thức BLACK ROUGE</a>
                                    </div>
                                </div>
                                <div class="body_middle_nine_right_bottom_right">
                                    <img src="./imge/anh_body_9_8.webp" alt="">
                                    <p>
                                        Thời gian gần đây, các tín đồ làm đẹp tại xứ sở kim chi đang “sốt xình xịch” với
                                        loạt mỹ
                                        phẩm make up đến từ một thương hiệu mới nổi. Các sản phẩm chất lượng và mức giá
                                        vô...
                                    </p>
                                    <div class="bay_nine">
                                        <a href="">Phát hiện thương hiệu mỹ phẩm mới toanh đang rất được lòng tín đồ làm
                                            đẹp xứ
                                            HÀN</a>
                                    </div>
                                </div>
                            </div>
                            <input type="radio" class="slide_btn_left_nine_right" onclick="B_ac_k()" name="rdon">
                            <input type="radio" class="slide_btn_right_nine_right" onclick="N_ex_t()" name="rdon" checked="true">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End body_middle_nine -->
        <!-- body_middle_ten -->
        <div class="body_middle_ten">
            <img src="./imge/anh_body_10_1.webp" alt="">
            <div class="ten_top">
                Rouge Power Club Cộng đồng Những người yêu thích thương hiệu Black Rouge tại Việt Nam.
                <br>
                Đây là nơi có vô vàn ưu đãi ưu đãi mua hàng, quyền lợi hấp dẫn cùng những đặc quyền chỉ dành riêng cho
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
                <p>Địa chỉ: Tầng 10, 194 Golden Building, 473 Điện Biên Phủ, Phường 25, Bình Thạnh, Hồ Chí Minh</p>
                <p>Thông tin hỗ trợ: <a href="#">0909 312 350</a></p>
                <p>Email support: cskh@dmnc.vn Or blackrougevn@gmail.com</p>
                <a href="http://online.gov.vn/(X(1)S(c4r0ihn4yy1gwxol5piuiyug))/Home/WebDetails/62960?AspxAutoDetectCookieSupport=1" target="_blank"><img src="imge/fFooter_bct_image.webp" alt=""></a>
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
                    <a href="https://www.facebook.com/BlackRougeVietnam/" target="_blank"><img src="imge/fFooter_top_social_image_1.webp" alt=""></a>
                    <a href="https://www.tiktok.com/@blackrougevietnam" target="_blank"><img src="imge/fFooter_top_social_image_2.webp" alt=""></a>
                    <a href="https://zalo.me/4083379486007296299" target="_blank"><img src="imge/fFooter_top_social_image_3.webp" alt=""></a>
                    <a href="https://zalo.me/4083379486007296299" target="_blank"><img src="imge/fFooter_top_social_image_4.webp" alt=""></a>
                    <a href="https://www.instagram.com/blackrouge_vn/" target="_blank"><img src="imge/fFooter_top_social_image_5.webp" alt=""></a>
                </div>
                <div class="footer4_bottom">
                    <p>ĐĂNG KÍ NHẬN BẢN TIN</p>
                    <div class="form_email">
                        <input required type="email" id="newsletter-email" value placeholder="Nhập email của bạn">
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
                    <a href="#lendau"><img src="imge/addThis_cus_image_3.webp" alt=""></a>
                    <a href="#lendau">
                        <h1>Lên đầu trang</h1>
                    </a>
                </div>
            </div>
        </div>

    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="trangchu.js"></script>
    <script>
        const handleSearch = () => {
            const searchBar = document.querySelector("#search_btn");
            const searchResult = document.querySelector("#search_text");
            searchBar.onclick = (e)=>{
                e.preventDefault();
                // console.log(searchResult.value.trim());
                window.location.href ="timkiemsanpham.php?name=" + searchResult.value;
            }
        }
        handleSearch();
    </script>
</body>

</html>