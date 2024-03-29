
@extends('home.layoutshome')
@section('home')
<section class="cart">
     <div class="container">
         <div class="cart-top-wrap">
            <div class="cart-top">
                <div class="cart-top-cart cart-top-item">
                   <i class="fas fa-shopping-cart"></i>
                </div>
                <div class="cart-top-adress cart-top-item">
                   <i class="fas fa-map-marker-alt "></i>
                </div>
                <div class="cart-top-payment cart-top-item">
                   <i class="fas fa-money-check-alt"></i>
                </div>
            </div>
         </div>
     </div>
     <div class="container">
         <div class="cart-content row">
             <div class="cart-content-left">
                <table>
                    <tr>
                        <th>Sản phẩm</th>
                        <th>Tên sản phẩm</th>
                        <th>Màu</th>
                        <th>Size</th>
                        <th>SL</th>
                        <th>Thành tiền</th>
                        <th>Xóa</th>
                    </tr>
                    <tr>
                        <td><img src="{{asset('home/image/sp2.jpg')}}" alt=""></td>
                        <td><p>Quần sooc bò đen MS 23E2616</p></td>
                        <td><img src="" alt=""></td>
                        <td><p>L</p></td>
                        <td><input type="number" value="1" min="1"></td>
                        <td><p>489.000 <sup>đ</sup></p></td>
                        <td><span>X</span></td>
                    </tr>
                    <tr>
                        <td><img src="{{asset('home/image/sp3.jpg')}}" alt=""></td>
                        <td><p>Quần sooc bò đen MS 23E2616</p></td>
                        <td><img src="" alt=""></td>
                        <td><p>L</p></td>
                        <td><input type="number" value="1" min="1"></td>
                        <td><p>489.000 <sup>đ</sup></p></td>
                        <td><span>X</span></td>
                    </tr>
                </table>
             </div>
             <div class="cart-content-right">
                 <table>
                     <tr>
                         <th colspan="2">TỔNG TIỀN GIỎ HÀNG</th>
                     </tr>
                     <tr>
                         <td>TỔNG SẢN PHẨM</td>
                         <td>2</td>
                     </tr>
                     <tr>
                         <td>TỔNG TIỀN HÀNG</td>
                         <td><p>489.000 <sup>đ</sup></p></td>
                     </tr>
                     <tr>
                         <td>TẠM TÍNH</td>
                         <td><p style="color: black; font-weight: bold;">489.000 <sup>đ</sup></p></td>
                     </tr>
                 </table>
                 <div class="cart-content-right-text">
                     <p>Bạn sẽ được miễn phí ship khi đơn hàng của bạn có tổng giá trị trên 2.000.000 đ</p>
                     <p style="color: red; font-weight: bold;">Mua thêm <span style="font-size: 18px;">131.000đ</span> để được miễn phí SHIP</p>
                 </div>
                 <div class="cart-content-right-button">
                     <button>TIẾP TỤC MUA SẮM</button>
                     <button>THANH TOÁN</button>
                 </div>
                 <div class="cart-content-right-dangnhap">
                     <p>TÀI KHOẢN IVY</p> <br>
                     <p>Hãy <a href="">Đăng nhập</a>tài khoản của bạn để tích điểm thành viên</p>
                    
                 </div>
            </div>
         </div>
     </div>
 </section>
@endsection