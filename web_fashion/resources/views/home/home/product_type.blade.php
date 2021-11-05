@extends('home.layoutshome')
@section('home')
    <!-- --------------------------Cartegory -->
    <section class="cartegory">
        <div class="container">
            <div class="cartegory-top row">
                <p>Trang chủ</p> <span>⟶	</span> <p>Nữ</p> <span>⟶</span> <p>Hàng nữ mới về</p>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="cartegory-left">
                    <ul>
                        <li class="cartegory-left-li "><a href="#">NỮ</a>
                            <ul>
                                <li><a href="">HÀNG NỮ MỚI VỀ</a></li>
                                <li><a href="">BEYOND TRENDY</a></li>
                                <li><a href="">JEANS FOR JOY</a></li>
                                <li><a href="">JEANS FOR JOY</a></li>
                            </ul>
                        </li>
                        <li class="cartegory-left-li"><a href="#">NAM</a>
                            <ul>
                                <li><a href="">HÀNG NAM MỚI VỀ</a></li>
                                <li><a href="">BEYOND TRENDY</a></li>
                                <li><a href="">JEANS FOR JOY</a></li>
                                <li><a href="">JEANS FOR JOY</a></li>
                            </ul>
                        </li>
                        <li class="cartegory-left-li"><a href="">TRE EM</a></li>
                        <li class="cartegory-left-li"><a href="">BỘ SƯU TẬP</a></li>
                        <li class="cartegory-left-li"><a href="">ĐỒ BẢO HỘ</a></li>
                    </ul>

                </div>
                <div class="cartegory-right row">
                    <div class="cartegory-right-top-item">
                        <p>HÀNG NỮ MỚI VỀ</p>
                    </div>
                    <div class="cartegory-right-top-item">
                       <button><span>Bộ lọc</span> <i class="fas fa-sort-down"></i></button>
                    </div>
                    <div class="cartegory-right-top-item">
                        <select name="" id="">
                            <option value="">Sắp xếp</option>
                            <option value="">Giá cao đến thấp</option>
                            <option value="">Giá thấp đến cao</option>
                        </select>
                     </div>
                     <div class="cartegory-right-content row">
                         @foreach($products  as $product)
                            <div class="cartegory-right-content-item">
                                <a href="{{route('product-detalis.show',[$product->ProductID])}}">
                                    <img src="{{asset('/uploads/'.$product->ProductImage)}}" alt="{{Str::slug($product->ProductName)}}">
                                    <h1>{{$product->ProductName}}</h1>
                                </a>                            
                                <p>{{number_format($product['ProductPrice'],0,',','.')}}&#160;<sup>vnđ</sup></p>  
                            </div>
                        @endforeach
                    </div>
                   <div class="cartegory-right-bottom row">
                       <div class="cartegory-right-bottom-items">
                           <p>Hiện thị 2 <span>|</span> 4 sản phẩm</p>
                       </div>
                       <div class="cartegory-right-bottom-items">
                        <p><span>«</span>1 2 3 4 5<span>»</span>Trang cuối</p>
                        </div>
                   </div> 
                </div>
                
            </div>
        </div>
    </section>
    @endsection
    