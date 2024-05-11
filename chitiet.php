<!DOCTYPE html>
<html>

<head>
    <title>Store</title>

    <meta charset="UTF-8">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style-1.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.10.2/css/all.css">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;500;600&display=swap" rel="stylesheet">
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous"
        src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v7.0"></script>
    <script>
        $('.carousel').carousel({
            interval: 200

        })
    </script>
</head>

<body>
    <!-- --header-- -->
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
                            <a class="nav-link" onclick="chuyen()">TRANG CHỦ <span class="sr-only delepro">(current)</span></a>
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
                        <a  onclick="checkLogin()">
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

    <!-- --product-- -->
    <div class="container-fluid mt-5 mb-5">
        <!-- <div class="container chitietsanpham">
           <h3>Sản phẩm/Áo dài truyền thống</h3>
           <div class="sanpham">
               <div class="hinhanh mt-3">
                   <img src="img/s13.jpg" alt="">
               </div>
               <div class="content mt-3">
                <div class="title">
                    <span class="title-name h5">Váy cổ tròn diễu chỉ nổi tay gấu tua rua DAV140</span> 
                   <span class="title-ma">Mã sản phẩm:<b>VND0321V07(Y)</b> </span> 
                   <span class="title-trangthai">Còn hàng</span> 
                </div> 
                <div class="price">400000₫</div>
                <button class="btn btn-primary themhang">Thêm vào giỏ</button>

                <div class="content-footer">
                    <div class="giaohang">
                        <div><i class="fas fa-truck"></i></div>
                        <div class="giaohang-content">
                            <h4>MIỄN PHÍ GIAO HÀNG TOÀN QUỐC</h4>
                        <p>(Sản phẩm trên 300,000đ)</p>
                        </div>
                        
                    </div>
                    <div class="giaohang">
                        <div><i class="fas fa-file-invoice"></i></div>
                        <div class="giaohang-content">
                            <h4>ĐỔI TRẢ DỄ DÀNG</h4>
                            <p>(Đổi trả 24h cho tất cả sản phẩm đầy đủ tem mác)</p>
                        </div>
                        
                    </div>
                    <div class="giaohang">
                        <div><i class="fas fa-phone-alt"></i></div>
                        <div class="giaohang-content">
                            <h4>TỔNG ĐÀI BÁN HÀNG 1800 1162</h4>
                            <p>(Miễn phí từ 8h30 - 21:30 mỗi ngày)</p>
                        </div>           
                    </div>
                </div>
               </div>
           </div>
        </div> -->
        <div class="container chitietsanpham" id="chitiet">
            
         </div>
    </div>

    <!-- ---- -->

    <!-- --footer-- -->
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
    <!-- ---- -->
   

</body>
<script src="js/product2.js"></script>
<script src="js/control.js"></script>
<script src="js/user.js"></script>
</html>