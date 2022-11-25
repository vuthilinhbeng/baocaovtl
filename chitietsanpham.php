
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="chitietsanpham.css">
    <link rel="stylesheet" href="trangchu.css">
    <title>Chi Tiết Sản Phẩm</title>
</head>

<body>
    <!-- Header -->

    <div class="header" id="lendau">
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
                    <input type="text" id="search_text" placeholder="Tìm kiếm sản phẩm">
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
                        <span>Giỏ Hàng</span>
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
                        <a href="#">Xem ngay!</a>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="body_content">
            <div class="body_content_head">
                <h1><a href="#">Trang chủ </a>/ <a href="#">06.2022 - Son môi chính hãng giảm 10%</a>/ Black Rouge Leez
                    Velvet Tint</h1>
            </div>
            <div class="body_content_body1">
                <div class="body_content_left">
                    <div class="body_content_left1">
                        <div class="body_content_left1_left">
                            <div>
                                <img id="imgMain" src="imge/mara1.webp" alt="">
                            </div>
                            <div id="imgThumbs">
                                <img class="active" src="imge/mara1.webp" onclick="doi_anh(0)" alt="">
                                <img src="imge/mara2.webp" onclick="doi_anh(1)" alt="">
                                <img src="imge/mara3.webp" onclick="doi_anh(2)" alt="">
                                <img src="imge/mara4.webp" onclick="doi_anh(3)" alt="">
                                <img src="imge/mara5.webp" onclick="doi_anh(4)" alt="">
                                <img src="imge/mara6.webp" onclick="doi_anh(5)" alt="">
                            </div>
                        </div>
                        <div class="body_content_left1_right">
                            <div class="sp_top">
                                <h1>Black Rouge Mara Hot Water Tint</h1>
                                <div class="star">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div>
                            <div class="color">
                                <h2>Màu sắc:</h2>
                                <div class="imgThumbs">
                                    <input id="LV00" name="color" type="radio" value="LV00" onclick="doi_anh(0)">
                                    <input id="LV01" name="color" type="radio" value="LV01" onclick="doi_anh(1)">
                                    <input id="LV02" name="color" type="radio" value="LV02" onclick="doi_anh(2)">
                                    <input id="LV03" name="color" type="radio" value="LV03" onclick="doi_anh(3)">
                                    <input id="LV04" name="color" type="radio" value="LV04" onclick="doi_anh(4)">
                                    <input id="LV05" name="color" type="radio" value="LV05" onclick="doi_anh(5)">
                                </div>

                            </div>
                            <div class="price">
                                <h2>Giá:</h2>
                                <p style="font-size: 20px; margin-top: 12px;" class="gia_2">268,200đ</p>
                                <p class="gia_1">298,000đ</p>
                                <p class="gia_2">(-10%)</p>
                            </div>
                            <div class="count">
                                <h2>Số lượng:</h2>
                                <span id="increase" class="increase">-</span>
                                <span class="value">1</span>
                                <span id="reduction" class="reduction">+</span>
                                    <button type="button" id="addtocart" onclick="location.href='giohang.php';">Thêm vào giỏ hàng</button>
                            </div>
                        </div>
                    </div>
                    <div class="body_content_left2">
                        <div>
                            <h1>Mô tả sản phẩm</h1>
                            <p>Ẩm thực - khái niệm tưởng chừng như không liên quan đến nhau
                                làm đẹp, nhưng đã trở thành một nguồn cảm hứng độc đáo, mới lạ để
                                Black Rouge cho ra mắt dòng son mới MARA HOT WATER TINT với 6 sắc
                                màu cá tính, thời trang mà bạn không thể bỏ qua trong mùa hè năm nay.</p>
                            <p><b>Màu son:</b></p>
                            <ul class="decor">
                                <li><b>LV00 Mild MARA:</b> Màu cam ánh vàng gợi lên hình ảnh dịu dàng và thanh thoát.
                                </li>
                                <li><b>LV01 Spicy MARA:</b> Màu đỏ rực rỡ pha chút sắc cam tạo nên sự năng động và trẻ
                                    trung.</li>
                                <li><b>LV02 Piquant MARA:</b> Nếu sắc hồng quá nổi bật thì sắc hồng vỏ đỗ lại là một sự
                                    lựa chọn rất ngọt ngào và quyến rũ
                                    khi pha trộn một chút ánh nâu và tím.</li>
                                <li><b>LV03 Burnning MARA:</b> Sắc đỏ chilli (còn gọi là đỏ tương ớt) luôn tạo nên sức
                                    hút đặc biệt bởi sự kết hợp hoàn hảo của 3 tone màu: đỏ, cam,
                                    và một chút nâu tạo nên sắc son trầm ấm, cổ điển.</li>
                                <li><b>LV04 Hell MARA:</b> Màu nâu gạch pha chút sắc cam, vừa thời thượng vừa sang trọng
                                    .</li>
                                <li><b>LV05 Panic MARA:</b> Màu tím mận vừa nữ tính nhưng lại không “bánh bèo” mang đến
                                    nét “sang chảnh” và bí ẩn.</li>
                            </ul>
                            <p><b>Gợi ý cách mix n match phù hợp với tone da:</b></p>
                            <p><b>Đối với tone da ấm</b></p>
                            <ul class="decor">
                                <li>Lớp base: LV00</li>
                                <li>Lòng môi: LV03</li>
                                <li>Full môi: Half N Half Tangle Glow.</li>
                            </ul>
                            <p><b>Đối với tone da lạnh</b></p>
                            <ul class="decor">
                                <li>Lớp base: LV02</li>
                                <li>Lòng môi: LV05</li>
                                <li>Full môi: Half N Half Tangle Glow.</li>
                            </ul>
                        </div>
                        <div>
                            <h1>Đánh giá sản phẩm</h1>
                            <div class="rate_top">
                                <div class="star">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <p>Dựa trên 0 đánh giá</p>
                                </div>
                                <div class="write">
                                    <button type="submit" onclick="location.href">Viết đánh giá</button>
                                </div>
                            </div>
                            <div class="rate_bottom">
                                <div class="rate_left">
                                    <p style="margin-top: 20px;">Đánh giá</p>
                                    <div class="number">
                                        <p>0</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="body_content_right">
                    <div class="body_content_right1">
                        <div class="body_content_right1_top">
                            <div class="body_content_right1_top_icon">
                                <img src="imge/pProduct_policty_item_image_1.webp">
                            </div>
                            <div class="body_content_right1_top_text">
                                <h2>miễn phí giao hàng tphcm</h2>
                                <h3>Với đơn hàng 500.000đ trở lên</h3>
                            </div>
                        </div>
                        <div class="body_content_right1_center">
                            <div class="body_content_right1_center_icon">
                                <img src="imge/pProduct_policty_item_image_2.webp">
                            </div>
                            <div class="body_content_right1_center_text">
                                <h2>sản phẩm chính hãng</h2>
                                <h3>Nhà phân phối chính thức của Black Rouge tại Việt Nam</h3>
                            </div>
                        </div>
                        <div class="body_content_right1_bottom">
                            <div class="body_content_right1_bottom_icon">
                                <img src="imge/pProduct_policty_item_image_3.webp">
                            </div>
                            <div class="body_content_right1_bottom_text">
                                <h2>vô vàn ưu đãi</h2>
                                <h3>Với thành viên <b>Rouge Power Club</b></h3>
                            </div>
                        </div>
                    </div>
                    <div class="body_content_right2">
                        <h1>Có thể bạn quan tâm</h1>
                        <div class="body_content_right2_sp">
                            <div>
                                <a href=""> <img src="./imge/anh_body_7_1.webp" alt=""></a>
                            </div>
                            <div>
                                <a href=""><span>Black Rouge Airfit Velvet Tint Ver 1 THE RED</span></a>
                                <div class="gia">
                                    <p class="gia_1">298,000đ</p>
                                    <p class="gia_2">268,200đ</p>
                                </div>
                            </div>
                        </div>
                        <div class="body_content_right2_sp">
                            <div>
                                <a href=""> <img src="./imge/anh_body_7_2.webp" alt=""></a>
                            </div>
                            <div>
                                <a href=""><span>Black Rouge Airfit Velvet Tint Ver 2 Mood Filter
                                    </span></a>
                                <div class="gia">
                                    <p class="gia_1">298,000đ</p>
                                    <p class="gia_2">268,200đ</p>
                                </div>
                            </div>
                        </div>
                        <div class="body_content_right2_sp">
                            <div>
                                <a href=""> <img src="./imge/anh_body_7_3.webp" alt=""></a>
                            </div>
                            <div>
                                <a href=""><span>Black Rouge Airfit Velvet Tint Ver 4 Bad Rose</span></a>
                                <div class="gia">
                                    <p class="gia_1">298,000đ</p>
                                    <p class="gia_2">268,200đ</p>
                                </div>
                            </div>
                        </div>
                        <div class="body_content_right2_sp">
                            <div>
                                <a href=""> <img src="./imge/anh_body_7_4.webp" alt=""></a>
                            </div>
                            <div>
                                <a href=""><span>Black Rouge Airfit Velvet Tint Ver 4 Bad Rose</span></a>
                                <div class="gia">
                                    <p class="gia_1">298,000đ</p>
                                    <p class="gia_2">268,200đ</p>
                                </div>
                            </div>
                        </div>
                        <div class="body_content_right2_sp">
                            <div>
                                <a href=""> <img src="./imge/anh_body_7_5.webp" alt=""></a>
                            </div>
                            <div>
                                <a href=""><span>Black Rouge Airfit Velvet Tint Ver 7 VELVET CROWN</span></a>
                                <div class="gia">
                                    <p class="gia_1">298,000đ</p>
                                    <p class="gia_2">268,200đ</p>
                                </div>
                            </div>
                        </div>
                        <div class="body_content_right2_sp">
                            <div>
                                <a href=""> <img src="./imge/anh_body_7_6.webp" alt=""></a>
                            </div>
                            <div>
                                <a href=""><span>Black Rouge Airfit Velvet Tint Ver 8</span></a>
                                <div class="gia">
                                    <p class="gia_1">298,000đ</p>
                                    <p class="gia_2">268,200đ</p>
                                </div>
                            </div>
                        </div>
                        <div class="body_content_right2_sp">
                            <div>
                                <a href=""> <img src="./imge/anh_body_7_7.webp" alt=""></a>
                            </div>
                            <div>
                                <a href=""><span>Black Rouge Airfit Velvet Tint Ver.5 BAM</span></a>
                                <div class="gia">
                                    <p class="gia_1">298,000đ</p>
                                    <p class="gia_2">268,200đ</p>
                                </div>
                            </div>
                        </div>
                        <div class="body_content_right2_sp">
                            <div>
                                <a href=""> <img src="./imge/anh_body_7_8.webp" alt=""></a>
                            </div>
                            <div>
                                <a href=""><span>Black Rouge Airfit Velvet Tint Ver.3 Dry Fruit</span></a>
                                <div class="gia">
                                    <p class="gia_1">298,000đ</p>
                                    <p class="gia_2">268,200đ</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="body_content_body2">
            <div>
                <h1>Sản phẩm đã xem</h1>
            </div>
            <div class="product">
                <div class="product1">
                    <a href="#"><img src="imge/mara1.webp" alt=""></a>
                    <a href="#">
                        <h2>Black Rouge Mara Hot Water Tint</h2>
                    </a>
                    <p class="gia_1">298.000đ</p>
                    <p class="gia_2">268.200đ</p>
                </div>
            </div>
        </div>
        <div class="body_content_body3">
            <img src="imge/body_content2.webp" alt="">
        </div>
        <div class="body_content_body4">
            <img src="./imge/anh_body_10_1.webp" alt="">
            <div class="body4_top">
                Rouge Power Club Cộng đồng Những người yêu thích thương hiệu Black Rouge tại Việt Nam.
                <br>
                Đây là nơi có vô vàn ưu đãi ưu đãi mua hàng, quyền lợi hấp dẫn cùng những đặc quyền chỉ dành riêng cho
                Roubae
            </div>
            <div class="body4_bottom">
                <a href="">Tham gia ngay</a>
            </div>
        </div>

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
    <script src="chitietsanpham.js"></script>
    <script src="https://cdnjs.cloudfare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script>
    $(function () {
        let $elm_value = $(".value");
        $('.increase').click(function (){
            let $value_increase = parseInt($elm_value.text());
            if ($value_increase <= 1) {
                return false;
        }
        $elm_value.text($value_increase - 1);
        })
        $('.reduction').click(function (){
            let $value_increase = parseInt($elm_value.text());
            $elm_value.text($value_increase + 1);
        })
    })
        
    </script>

    
</body>

</html>