<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="thanhtoasn.css">
  </head>
  <body>
  <?php require_once("./config.php"); ?>             
    <div class="body_thanhtoan">
      <div class="body_trai">
        <div class="body_trai-content">
            <div class="iconBG"></div>
        <div class="link_way">
          <span ><a style="color : red" href="#">Giỏ hàng</a></span>
          <span>></span>
          <span>Thông tin giao hàng</span>
        </div>
        <h4>Thông tin gian hàng</h2>
        <div class="_Account">
            <span>Bạn đã có tài khoản?</span>
            <span><a style="color:red ;" href="#">Đăng nhập</a></span>
        </div>
        <div class="form-1">
            <form action="">
                <div class="fullname">
                    <input class="form-1_defalut" type="text" placeholder="Nhập họ và tên">
                </div>
                <div class="emai-numberphone">
                    <input class="form-1_defalut " style="width: 45%;padding-left: 5px;" type="email" placeholder="Nhập email">
                    <input  class="form-1_defalut" style = "width: 23%;padding-left: 5px; margin-left: 8px;" type="text" style="scroll-behavior:hidden" placeholder="Nhập số điện thoại">
                </div>
                <div class="address">
                    <input class="form-1_defalut" type="text" placeholder="Địa chỉ">

                </div>
                <div class="address-detail">
                   <div class="tinh-thanh">
                    <span class="address-detail_trans" for="">Tỉnh/thành</span>
                    <select>
                        <option value="1">Ha noi</option>
                        <option value="2">Ha noi 2</option>
                        <option value="3">Ha noi 3</option>
                    </select>
                    <div class="line"></div>
                   </div>
                   <div class="tinh-thanh">
                    <span class="address-detail_trans" for="">Quận/huyện</span>
                    <select>
                        <option value="1">Ha noi</option>
                        <option value="2">Ha noi 2</option>
                        <option value="3">Ha noi 3</option>
                    </select>
                    <div class="line"></div>
                   </div>
                   <div class="tinh-thanh">
                    <span class="address-detail_trans" for="">Xã/phường</span>
                    <select>
                        <option value="1">Ha noi</option>
                        <option value="2">Ha noi 2</option>
                        <option value="3">Ha noi 3</option>
                    </select>
                    <div class="line"></div>
                   </div>
                </div>
                <div class="delevery">
                    <h4>Phương thức vận chuyển</h4>
                   <div class="border-includes">
                    <input type="radio" checked> 
                    <span>Đơn từ hà nội</span>
                   </div>
                </div>
                <div class="payload">
                    <h4>Phương thức thanh toán</h4>
                    <div class="border-includes">
                        <input type="radio" name="includes"> 
                        <img class="main-img" src="https://hstatic.net/0/0/global/design/seller/image/payment/cod.svg?v=1">
                        <span>Thanh toán khi giao hàng (COD)</span>
                    </div>
                    <div class="border-includes">
                        <input type="radio" name="includes" checked> 
                        <img class="main-img" src="https://hstatic.net/0/0/global/design/seller/image/payment/vnpay_new.svg?v=1">
                        <span>Thẻ ATM/Visa/Master/JCB/QR Pay qua cổng VNPAY</span>
                    </div>
                </div>
                <div class="submit-pay">
                    <div class="submit-pay_card"><a href="">Giỏ hàng</a></div>
                    <div class="submit-pay_total"><a href="">Hoàn tất đơn hàng</a></div>
                </div>
            </form>
        </div>
        </div>
      </div>
      <div class="body_phai">
        <div class="body_phai-content">
            <div class="list-products">
                <div class="product-img">
                    <img src="//product.hstatic.net/200000385489/product/1_fd62335289544436b83e96f801ffaa81_small.jpg" alt="">
                </div>
                <div class="product-info">
                    <div class="product-info_name">
                        <span>Black Rouge Airfit Velvet Tint Ver 1 THE RED</h5>
                    </div>
                    <div class="product-info_describe">
                        <span>A01 - Strawberry Red#EA1B2B</span>
                    </div>
                </div>
                <div class="product-price">387,400₫</div>
            </div>
            <div class="sale-code">
                <div class="sale-code_input">
                    <input type="text" placeholder="Mã giảm giá">
                </div>
                <div class="sale-code_submit">
                    <button>Sử dụng</button>
                </div>
            </div>
            <div class="client">
                <span>Khách hàng thân thiết</span>
                <button>Đăng nhập</button>
            </div>
            <div class="delivery-price">
                <div class="delivery-price_price">
                    <div><span>Tạm tính</span></div>
                    <div><span>387,400₫</span></div>
                </div>
                <div class="delivery-price_deli">
                    <div><span>Phí vận chuyển</span></div>
                    <div><span>Miễn phí</span></div>
                </div>
            </div>
            <div class="total-price">
                <div><span>Tổng cộng</span></div>
                <div class="total-price_inner">
                    <span>VND </span>
                    <span class="isPrice">387,400</span>
                    <span>₫</span>
                </div>
            </div>
        </div>
      </div>
    </div>
  </body>
</html>