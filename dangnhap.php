<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="trangchu.css">
    <link rel="stylesheet" href="dangnhap.css">
    <title>Đăng Nhập</title>
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
                    <a href="">
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
                        <a href="tatcasanpham.php">Xem ngay!</a>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <!-- End Body_middle_1 -->


        <div class="dangnhap">
            <div class="dangnhap_top">
                <img src="./imge/logo.webp" alt="">
                <h4>đăng nhập</h4>
            </div>
            <form action="" method="POST">
                <div class="form_group">
                    <label for="login-email">Email*</label>
                    <input type="email" id="login-email" name="email" class="form-control" value = "" required>
                </div>
                <div class="form_group">
                    <label for="login-password">Mật khẩu*</label>
                    <input type="password" id="login-password" name="password" class="form-control" value = "" required>

                </div>
                <div class="forget">
                    <a href="#">Quên mật khẩu?</a>
                </div>
                <div class="form_group">
                    <button type="submit" name="submit" class="btn_dangnhap">Đăng Nhập</button>
                </div>
                <div class="form_ngoai">
                    <div class="btn_gg">
                        <a href="https://www.google.com/">Đăng nhập Google</a>
                    </div>
                    <div class="btn_fb">
                        <a href="https://www.facebook.com/">Đăng nhập Facebook</a>
                    </div>
                </div>
                <div class="gach">
                    <div class="gach_1"></div>
                    <span>Hoặc</span>
                    <div class="gach_1"></div>
                </div>
                <div class="lk_dangky">
                    <a href="dangky.php" class="lk_dangkyky"> Đăng Ký</a>
                </div>

            </form>
        </div>
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
<?php
//Khai báo sử dụng session
session_start();
//Khai báo utf-8 để hiển thị được tiếng việt
header('Content-Type: text/html; charset=UTF-8');
//Xử lý đăng nhập
if (isset($_POST['submit']))
{
        //Kết nối tới database
        $connect = mysqli_connect("localhost","root","","blackrouge",3308) or die ('Không thể kết nối tới database');

        if($connect === false){ 
        die("ERROR: Could not connect. " . mysqli_connect_error()); 
        }
        else {
        // echo 'Kết nối DB thành công!';
        }
        
        //Lấy dữ liệu nhập vào
        $email = ($_POST['email']);
        $password = ($_POST['password']);
     
    //Kiểm tra tên đăng nhập có tồn tại không
    $query = mysqli_query($connect, "SELECT * FROM dangky WHERE EMAIL='$email'");
    $row = mysqli_fetch_array($query);
    if (mysqli_num_rows($query) == 0) {
        echo '<script>alert("Tên đăng nhập này không tồn tại. Vui lòng kiểm tra lại.")</script>';
    } else if ($password != $row["PASSWORD"]) {
        echo '<script>alert("Mật khẩu không đúng. Vui lòng nhập lại.")</script>';
    } else {
        $_SESSION['EMAIL'] = $email;
        echo '<script>alert("Bạn đã đăng nhập thành công.")</script>'; ;
    ?>
        <script> location.href = 'trangchu.php'; </script>
    <?php
    }
    die();
     
    //Lưu tên đăng nhập
    
    
}
?>
