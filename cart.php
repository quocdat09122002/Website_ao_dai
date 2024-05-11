<!DOCTYPE html>
<html>

<head>
    <title>Thanh Toán</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style-1.css">
    <!-- <link rel="stylesheet" href="css/style.css"> -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
    <script async defer crossorigin="anonymous"
        src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v7.0"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.10.2/css/all.css">
</head>

<body style="font-family:'Quicksand', sans-serif ;">
    <!-- ---header -->
    <div class="container-fluid header">
        <div class="container-fluid fixed-top bg-light">

            <nav class=" navbar  navbar-expand-lg">
                <a href="index.php" class="navbar-brand">
                    <div class="logo">
                        <img src="./img/logo-z.png" alt="">
                    </div>
                </a>
                <button class="navbar-toggler menu" data-target="#my-nav" data-toggle="collapse" aria-controls="my-nav"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon">
                        <i class="fas fa-bars"></i>
                    </span>
                </button>
                <div id="my-nav" class="collapse navbar-collapse">
                    <ul class="navbar-nav mr-auto header-menu">
                        <li class="nav-item active">
                            <a class="nav-link" href="index.php">TRANG CHỦ <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" tabindex="-1" aria-disabled="false">DESIGN</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" tabindex="-1" aria-disabled="true">VÁY</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" tabindex="-1" aria-disabled="true">ÁO</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" tabindex="-1" aria-disabled="true">QUẦN</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" tabindex="-1" aria-disabled="true">ABOUT</a>
                        </li>


                    </ul>
                    <div class="mr-3 cart">
                        <a href="#" onclick="checkLogin()">
                            <i class="fas fa-user"></i>
                        </a>


                        <a class="ml-3 mr-3" href="./cart.php">
                            <i class="fas fa-shopping-cart"></i>
                        </a>

                    </div>
                    <div class="form-inline search">
                        <input type="text" class="form-control" placeholder="Search..">
                        <button type="submit" class="form-control btn">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>

                </div>
            </nav>
        </div>

    </div>

    <!-- ----body -->
    <div id="cart" class="container " style="height:auto; margin-top:8% ;">
        <h5>Giỏ hàng</h5>
        <div class="row">
            <div class="col-8">
                <table class="table">
                    <thead>
                        <tr class='text-center'>
                            <th>IMG
                            </th>
                            <th>Tên
                            </th>
                            <th>Đơn giá
                            </th>
                            <th>Số lượng
                            </th>
                            <th>Tổng
                            </th>
                            <th> Xóa
                            </th>
                        </tr>
                    </thead>
                    <tbody class="table show-cart-1">

                    </tbody>
                </table>
            </div>
            <div class="col-4">
                <div class="thanhtoan">
                    <div class="price">
                        <div class="row">
                            <div class="col-6">
                                <div class="price-text">Tạm tính :</div>

                            </div>

                            <div class="col-6 text-right">
                                <div class="mr-0">
                                    <span class="total-cart total-1"></span>
                                    <div class="d-inline">₫</div>
                                </div>
                            </div>
                            <div class="col-6 mt-4">
                                <div>Tổng tiền : </div>

                            </div>
                            <div class="col-6 mt-4 text-right">
                                <div class="mr-0">
                                    <span class="total-cart total"></span>

                                    <div class="d-inline total">₫</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-3 button text-center">
                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#diachinhanhang">
                            Tiến hành đặt hàng
                        </button>
                    </div>
                   
                </div>




            </div>
          

        </div>



    </div>

    <div class="container-fluid">

        <!-- --thongtin-- -->
        <div class="container info">

            <div class="row mt-5 mb-5">
                <div class="col-3 info-col">
                    <div class="h6">
                        GỌI MUA HÀNG(8:30 - 17:00)
                    </div>
                    <a href="tel:0395342134">

                        <i class="fas fa-phone-alt"></i>
                        033 892 7972
                    </a>

                    <div class="info-foot">Tất cả các ngày trong tuần</div>
                </div>
                <div class="col-3 info-col">
                    <div class="h6">GỌI MUA HÀNG(8:30 - 17:00) </div>

                    <a href="tel:0395342134">
                        <i class="fas fa-phone-alt"></i>
                        033 892 7972
                    </a>

                    <div class="info-foot">Tất cả các ngày trong tuần</div>
                </div>

                <div class="col-3">
                    <div class="h6">ĐĂNG KÍ NHẬN THÔNG TIN MỚI</div>
                    <form action="" class="form-inline">
                        <input type="text" class="form-control" style="width: 60%;">
                        <a href="" class=" btn btn-outline-dark">Đăng kí</a>
                    </form>
                </div>
                <div class="col-3 info-social">
                    <div class="h6">THEO DÕI CHÚNG TÔI</div>
                    <div class="row">
                        <div class="col-3">
                            <a href="">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        </div>
                        <div class="col-3">
                            <a href="">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </div>
                        <div class="col-3">
                            <a href="">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </div>
                        <div class="col-3">
                            <a href="">
                                <i class="fab fa-twitter"></i>

                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- ---- -->
        <!-- --footer-- -->
        <div class="container-fluid footer-3">
            <div class="container">
                <div class="row">
                    <div class="col-3 link-support">
                        <div class="h6">HỖ TRỢ KHÁCH HÀNG</div>

                        <ul>
                            <li>
                                <a href="">Hướng dẫn mua hàng</a>
                            </li>
                            <li>
                                <a href="">Chính sách đổi/trả</a>
                            </li>
                            <li>
                                <a href="">Hình thức thanh toán</a>
                            </li>
                            <li>
                                <a href="">Chính sách giao hàng</a>
                            </li>
                            <li>
                                <a href="">Thông tin bảo mật</a>
                            </li>
                            <li>
                                <a href="">Liên hệ</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-3 link-support">
                        <div class="h6">HỆ THỐNG CỬA HÀNG</div>
                        <ul>
                            <li>
                                Zero Shop
                            </li>
                            <li class="text">
                                Địa chỉ: Chung Cư Đông Hải, Tô Ký, Tân Chánh Hiệp, Quận 12 
                            </li>
                            <li>
                                Phone : 033 892 7972
                            </li>
                        </ul>
                    </div>
                    <div class="col-3 link-support">
                        <div class="h6">VỀ CHÚNG TÔI</div>
                        <div class="text">Với hơn 20 cửa hàng trải dài cả nước, Germe hy vọng sẽ mang đến sự phục vụ chu
                            đáo cho tất
                            cả các khách hàng. Hệ thống cửa hàng thời trang Germe luôn luôn lắng nghe những ý kiến đóng
                            góp từ các khách hàng với mục tiêu đẩy mạnh dịch vụ, mở rộng hệ thống và làm hài lòng những
                            vị khách đến trên toàn quốc.</div>
                    </div>
                    <div class="col-3">
                        <div class="h6">FANPAGE CHÚNG TÔI</div>
                        <div class="fb-page" data-href="https://www.facebook.com/motplus/" data-tabs="timeline"
                            data-width="360" data-height="200" data-small-header="false"
                            data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
                            <blockquote cite="https://www.facebook.com/motplus/" class="fb-xfbml-parse-ignore"><a
                                    href="https://www.facebook.com/motplus/">Mọt +</a></blockquote>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- ---- -->
    </div>
    <!-- --footer -->




    <!-- -Thông tin đặt hàng-- -->
    <div class="modal fade" id="diachinhanhang" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Địa chỉ nhận hàng</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                  
                        <div class="form-row">
                            <div class="form-group col-6">
                                <label for="">Họ Tên Người Nhận</label>
                                <input type="text" class="form-control" id="inputnguoinhan">
                                <div class="require-cart nguoinhan text-danger">
                                    Vui lòng nhập thông tin người nhận
                                  </div>
                            </div>
                            <div class="form-group col-6">
                                <label for="">Số điện thoại</label>
                                <input type="number" class="form-control" id="inputsdt">
                                <div class="require-cart sdt text-danger">
                                    Vui lòng nhập số điện thoại
                                  </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-8">
                                <label for="">Địa chỉ</label>
                                <input type="text" class="form-control" id="inputdiachi">
                                <div class="require-cart diachi text-danger">
                                    Vui lòng nhập địa chỉ
                                  </div>
                            </div>
                            <div class="form-group col-4">
                                <label for="">Hình thức thanh toán</label>
                                <select class="form-control" name="" id="inputthanhtoan" class="btn"
                                    style="border: 1px black solid;">
                                    <option value="0" selected> Chọn hình thức thanh toán</option>

                                    <option value="1">Thanh toán bằng tiền mặt</option>
                                    <option value="2">InternetBanking</option>
                                    <option value="3">VisaCard</option>
                                    <option value="4">Paypal</option>
                                </select>
                                <div class="require-cart thanhtoan text-danger">
                                    Vui lòng chọn hình thức thanh toán
                                  </div>
                            </div>
                            <div class="form-group col-6">
                                <label for="">Tỉnh - Thành phố</label>
                                <select id="inputtinh" class="form-control">
                                    <option value="0" selected>Chọn</option>
                                    <option value="1">Hà Nội</option>
                                    <option value="2">Đà Nẵng</option>
                                    <option value="3">Hồ Chí Minh</option>
                                    <option value="4">Bình Định</option>
                                    <option value="5">Quảng Ngãi</option>
                                </select>
                                <div class="require-cart tinh text-danger">
                                    Vui lòng chọn tỉnh
                                  </div>
                            </div>
                            <div class="form-group col-6">
                                <label for="">Email</label>
                                <input type="email" class="form-control" id="inputemail">
                                <div class="require-cart email text-danger">
                                    Vui lòng nhập Email
                                  </div>
                            </div>
                           
                            <div class=" form-group col-12">
                                <label for="">Ghi chú</label>
                                <textarea class="form-control" name="" id="inputghichu" cols="30" rows="3"></textarea>
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button onclick="checkCart()" class="btn cartt btn-primary">Xác Nhận đặt hàng</button>
                        </div>
                        <!-- data-target="#xacnhan" data-dismiss="modal"-->
                   
                </div>
            </div>
        </div>
    </div>
    <!-- ----- -->
    <div id="xacnhandathang">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                   
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body modal-success">
                    <div class="p-5 text-center text-danger animate__animated animate__bounce">
                        <h4> Đặt hàng thành công </h4>
                    </div>
                    <div class="text-right">
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="index.php" class="clear-cart btn btn-outline-danger">Xong</a>

                </div>
            </div>
        </div>
    </div>

    <!-- --modal-- -->

   
        <div class="thongtins">
            <div class="modal-content">
                
                <div class="modal-body modal-success">
                    <div class="text-center text-danger animate__animated animate__bounce"
                        style="border-bottom: 2px rgba(255, 0, 0, 0.144) solid;">
                        <h4> Thông tin đặt hàng </h4>

                        <!-- <div id="test"></div> -->
                    </div>

                    <div class="animate__animated animate__backInRight">
                        <div class="row col-7">
                            
                           <div class="col-4 text-primary">Họ tên:</div>
                           <div class="col-8" id="inputnguoinhan1"></div>
                            <div class="col-4 mt-2 text-primary">Số điện thoại:</div>
                            <div class="col-8 mt-2" id="inputsdt1"></div>
                                <div class="col-4 mt-2 text-primary">Địa chỉ:</div>
                            <div class="col-8 mt-2" id="inputdiachi1"></div>
                                <div class="col-4 mt-2 text-primary">Hình thức thanh toán:</div>
                            <div class="col-8 mt-2" id="inputthanhtoan1"></div>
                           <div class="col-4 mt-2 text-primary">Email:</div>
                            <div class="col-8 mt-2" id="inputemail1"></div>
                                <div class="col-4 mt-2 text-primary">Ghi chú:</div>
                            <div class="col-8 mt-2" id="inputghichu1"></div>
                                <div class="col-4 mt-2 text-primary">Số tiền cần trả:</div>
                            <div class="col-8 mt-2">
                                <span class="total-cart total-1"></span>
                                Đ
                            </div>

                        </div>

                    </div>
                    <div class="text-right">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Hủy</button>
                        <button class="btn btn-outline-danger text-right" onclick="xacnhan()"
                            >Xác nhận đặt hàng</button>
                    </div>
                </div>
               
            </div>
        </div>
   
    <!-- -------- -->
</body>
<script language="Javascript" src="js/control.js"></script>
<!-- <script language="Javascript" src="js/user.js"></script> -->


</html>