<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/54f0cb7e4a.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{asset('home/css/mainstyle.css')}}">
    <title>Website - Store Fashion</title>
</head>
<body>
    <secsion class="top">
        <div class="container">
            <div class="row">
                <div class="top-logo">
                    <img src="{{asset('home/image/logo.png')}}" alt="">
                </div>
                <div class="top-menu-items">
                    <ul>
                        <li>Nữ</li>
                        <li>Nam</li>
                        <li>Trẻ em</li>
                        <li>Flast sale</li>
                        <li>Hot items</li>
                        <li>Bộ sưu tập</li>
                        <li>Tin tức</li>
                        <li>Thông tin</li>
                    </ul>
                </div>
                <div class="top-menu-icons">
                    <ul>
                        <li>
                            <input type="text" placeholder="tìm kiếm">
                            <i class="fas fa-search"></i>
                        </li>
                        <li>
                            <i class="fas fa-user-secret"></i>
                        </li>
                        <li>
                            <i class="fas fa-shopping-cart"></i>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </secsion>
    <!-- -----------------------SLlDER---------------------------------------->
    @yield('home');
    <!-- -------------------------Footer -->
    <section class="footer">
        <div class="footer-container">
            <!-- <p>Nhận bản tin từ Admin</p>
            <div class="input-email">
                <input type="text" placeholder="Nhập email của bạn">
                <i class="fas fa-arrow-left"></i>
            </div> -->
            <div class="footer-items">
                <li><a href="">Liên hệ</a></li>
                <li><a href="">Tuyển dụng</a></li>
                <li><a href="">Giới thiệu</a></li>
                <li><a href=""><i class="fab fa-facebook-f"></i></a><a href=""><i class="fab fa-youtube"></i></a></li>
            </div>
            <div class="footer-text">
                <br>Địa chỉ đăng ký: Tổ dân phố Tháp, P.Đại Mỗ, Q.Nam Từ Liêm, TP.Hà Nội, Việt Nam - 0243 205 2222 <br>
                Đặt hàng online : 0246 662 3434 .
            </div>
            <div class="footer-bottom">
                ThormaTal All rights reserved
            </div>
        </div>
    </section>  
<script src="{{asset('home/js/scripthome.js')}}"></script>
</body>
</html>                     