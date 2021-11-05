
@extends('home.layoutshome')
@section('home')

    <!-- --------------------------Product-------------------------------- -->
    <form >
        @csrf
        <input type="hidden" value="{{$product_details->ProductID}}" class="cart_product_id">
        <input type="hidden" value="{{$product_details->ProductName}}" class="cart_product_name">
        <input type="hidden" value="{{$product_details->ProductImage}}" class="cart_product_image">
        <input type="hidden" value="{{$product_details->ProductPrice}}" class="cart_product_price">
        <input type="hidden" value="1" class="cart_product_count">
    <section class="product">
        <div class="container">
            <div class="product-top row">
                <p>Trang chủ</p> <span>⟶	</span> <p>Nữ</p> <span>⟶</span><p>{{strtolower($product_details->ProductName)}}</p>
            </div>
            <div class="product-content row">
              
                <div class="product-content-left row">
                    <div class="product-content-left-big-img">
                        <img src="{{asset('/uploads/'.$product_details->ProductImage)}}" alt="{{Str::slug($product_details->ProductName)}}">
                    </div>
                    <div class="product-content-left-small-img">
                        <img src="{{asset('/uploads/'.$product_details->ProductImage)}}" alt="{{Str::slug($product_details->ProductName)}}">
                        <img src="{{asset('/uploads/'.$product_details->ProductImage)}}" alt="{{Str::slug($product_details->ProductName)}}">
                        <img src="{{asset('/uploads/'.$product_details->ProductImage)}}" alt="{{Str::slug($product_details->ProductName)}}">
                        <img src="{{asset('/uploads/'.$product_details->ProductImage)}}" alt="{{Str::slug($product_details->ProductName)}}">
                    </div>
                </div>
                <div class="product-content-right">
                    <div class="product-content-right-product-name">
                        <h1>{{$product_details->ProductName}} MS {{$product_details->ProductID}}538</h1>
                        <p>MSP: {{$product_details->ProductID}}E098</p>
                    </div>
                    <div class="product-content-right-product-price">
                        <p>{{number_format($product_details['ProductPrice'],0,',','.')}}&#160;<sup>đ</sup></p>
                    </div>
                    <div class="product-content-right-product-color">
                        <p><span style="font-weight: bold;">Thương hiệu</span>:&ensp;{{$product_details->product_Brand->BrandName}}</p>
                        <p>&ensp;</span></p>                        
                        <p><span style="font-weight: bold;">Màu sắc</span>:&ensp;Xanh Cổ Vịt Nhạt <span style="color: red;">*</span></p>
                        <div class="product-content-right-product-color-img">
                            <img src="image/spcolor.png" alt="">
                        </div>
                    </div>
                    <div class="product-content-right-product-size">
                        <p style="font-weight: bold;">Size:</p>
                        <div class="size">
                            <span>{{$product_details->product_Size->SizeName}}</span>
                        </div>
                    </div>
                    <div class="quantity">
                        <p style="font-weight: bold;">Số lượng:</p>
                        <input type="number" min="1" value="1"> 
                    </div>
                    <p style="color: red;">Vui lòng chọn size</p>
                    <div class="product-content-right-product-button">
                      
                        <button class="add-cart-product" data-id="{{$product_details->ProductID}}"><i class="fas fa-shopping-cart"></i> <p>MUA HÀNG</p></button>
                        <button><p>TÌM TẠI CỬA HÀNG</p></button>
                    </div>
                    <div class="product-content-right-product-icon">
                        <div class="product-content-right-product-icon-item">
                            <i class="fas fa-phone-alt"></i> <p>Hotline</p>
                        </div>
                        <div class="product-content-right-product-icon-item">
                            <i class="far fa-comments"></i> <p>Chat</p>
                        </div>
                        <div class="product-content-right-product-icon-item">
                            <i class="far fa-envelope"></i><p>Mail</p>
                        </div>
                    </div>
                    <div class="product-content-right-product-QR">
                        <img src="image/qrcode2.png" alt="">
                    </div>
                    <div class="product-content-right-bottom">
                        <div class="product-content-right-bottom-top">
                            ∨
                        </div>
                        <div class="product-content-right-bottom-content-big">
                            <div class="product-content-right-bottom-content-title row">
                                <div class="product-content-right-bottom-content-title-item chitiet">
                                        <p>Chi tiết</p>
                                </div>
                                <div class="product-content-right-bottom-content-title-item baoquan">
                                        <p>Bảo quản</p>
                                </div>
                                <div class="product-content-right-bottom-content-title-item">
                                    <p>Tham khảo size</p>
                                </div>
                            </div>
                            <div class="product-content-right-bottom-content">
                                <div class="product-content-right-bottom-content-chitiet">
                                   {!!$product_details->Note!!}
                                </div>
                                <div class="product-content-right-bottom-content-baoquan">
                                    Chi tiết bảo quản sản phẩm : 

                                        * Vải dệt kim : sau khi giặt sản phẩm phải được phơi ngang tránh bai dãn. <br><br>

                                        * Vải voan , lụa , chiffon nên giặt bằng tay.<br><br>

                                        * Vải thô , tuytsy , kaki không có phối hay trang trí đá cườm thì có thể giặt máy.<br><br>

                                        * Vải thô , tuytsy, kaki có phối màu tường phản hay trang trí voan , lụa , đá cườm thì cần giặt tay.<br><br>

                                        * Đồ Jeans nên hạn chế giặt bằng máy giặt vì sẽ làm phai màu jeans.Nếu giặt thì nên lộn trái sản phẩm khi giặt , đóng khuy , kéo khóa, không nên giặt chung cùng đồ sáng màu , tránh dính màu vào các sản phẩm khác. <br><br>

                                        * Các sản phẩm cần được giặt ngay không ngâm tránh bị loang màu , phân biệt màu và loại vải để tránh trường hợp vải phai. Không nên giặt sản phẩm với xà phòng có chất tẩy mạnh , nên giặt cùng xà phòng pha loãng.<br><br>

                                        * Các sản phẩm có thể giặt bằng máy thì chỉ nên để chế độ giặt nhẹ , vắt mức trung bình và nên phân các loại sản phẩm cùng màu và cùng loại vải khi giặt.
                                </div>
                            </div>
                        
                        </div>
                    </div>
                    
                </div>
                
            </div>
        </div>
    </section>
    </form>
    
    <!-- "product-related"------------------- -->
    <section class="product-related container">
        <div class="product-related-title">
            <p>SẢN PHẨM LIÊN QUAN</p>
        </div>
       
        <div class=" row product-content">
            @foreach ($product_relates as $product_relate)
                <div class="product-related-item">
                    <a href="{{route('product-detalis.show',[$product_relate->ProductID])}}">
                        <img src="{{asset('/uploads/'.$product_relate->ProductImage)}}" alt="{{Str::slug($product_relate->ProductName)}}">    
                        <h1>{{$product_relate->ProductName}}</h1>
                        <div>
                        <p>Giá:&ensp;{{number_format($product_relate['ProductPrice'],0,',','.')}}<sup style="text-decoration-line:none">&ensp;-{{$product_details->product_Sale->SaleName}} %</sup></p>
                        </div>                 
                        <div >
                            <?php 
                                $price = $product_relate->ProductPrice;
                                $sale = $product_details->product_Sale->SaleName;
                                $price_sale =$price -( $price*($sale/100))
                            ?>
                            <p style="text-decoration-line:none;font-weight:bold;color:black"><span>Còn:</span>&ensp;{{number_format($price_sale,0,',','.')}}<sup>&ensp;vnđ</sup></p>
                        </div>
                        
                    </a>
                </div>
            @endforeach 
        </div>
    </section>

<script type="text/javascript">

    $(document).ready(function () {
       
        $('.add-cart-product').click(function(){
            var id = $(this).data('id');
            var cart_product_id = $('.cart_product_id').val();
            var cart_product_name = $('.cart_product_name').val();
            var cart_product_image = $('.cart_product_image').val();
            var cart_product_price = $('.cart_product_price').val();
            var cart_product_count = $('.cart_product_count').val();
            var _token = $('input[name="_token"]').val();
           $.ajax({
               url: '{{route('cart.addCart')}}' ,
               method:'POST',
               data:{
                        cart_product_id:cart_product_id,
                        cart_product_name:cart_product_name,
                        cart_product_image:cart_product_image,
                        cart_product_price:cart_product_price,
                        cart_product_count:cart_product_count,
                        _token:_token
                    },
                    success: function(data) {
                        alert(data);
                   
                    }
           })
        });

    });
</script>
    @endsection
 
    