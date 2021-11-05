<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js" type="text/javascript" charset="utf-8" async defer></script>

    <script src="https://kit.fontawesome.com/54f0cb7e4a.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{asset('home/css/mainstyle.css')}}">
    <title>Website - Store Fashion</title>
</head>
<body>
    <secsion class="top">
        <div class="container">
            <div class="row">
                <div class="top-logo">
                   <a href="{{route('home.index')}}"><img src="{{asset('home/image/lg_o1.png')}}" alt=""></a> 
                </div>
                <div class="top-menu-items">
                    <ul>
                        @foreach($types as $type)                      
                            <li> <a style="color: black;font-weight: bold;width:100%" href="{{route('home.show',[$type->Type])}}">{{$type ->TypeName}}</a></li>                                         
                        @endforeach
                    </ul>
                </div>
                <div class="top-menu-icons">
                    <ul>
                        <li>
                            <input type="text" class="input-search-ajax" placeholder="tìm kiếm">
                            <i class="fas fa-search"></i> 

                            <div class="list-unstyled search-ajax" style="position: absolute;width: 313px;background-color:rgba(0,0,0,opacity option);;top: 55px;overflow-x: hidden;overflow-y: auto;max-height: 500px;">

                            </div>
                             {{csrf_field()}}               
                        </li>
                        <li>
                            <i class="fas fa-user-secret"></i>
                        </li>
                        <li>
                            <a href="{{route('carts.showCart')}}"><i class="fas fa-shopping-cart"></i></a>
                        </li>
                    </ul>
                </div>
   
            </div>
        </div>

    </secsion>
   
    <!-- -----------------------SLlDER---------------------------------------->
    @yield('home')
    <!-- -------------------------Footer -->
    <section class="footer">
        <div class="footer-container">
                <?php 
                    print_r(Session::get('name'))   
                ?>
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

<script type="text/javascript">

    $('.input-search-ajax').keyup(function(){
        var query = $('.input-search-ajax').val();
        var _token =$('input[name="_token"]').val();
        
        if(query != ''){
            $.ajax({
                 url: '{{route('search-product.ajaxSearch')}}',
                 method: 'POST',
                 data: {query:query, _token:_token},
                 success: function(response) {
                    console.log(response.data);
                    $('.search-ajax').empty();
                    $.each(response.data, function (k, v) {
                          
                        $('.search-ajax').fadeIn();
                            var _html= '';
                                _html += ' <div style="width: 313px;;margin-top: 10px;display:flex;margin: 10px 0px 10px 10px" class="media">';
                                _html += ' <img width="40px" src="" class="align-self-center mr-3" alt="...">';
                                _html += ' <div style="margin-left:10px;border-bottom: 1px solid;" class="media-body">';
                                _html += ' <h5 class="mt-0"><a href="">'+v.ProductName+'</a></h5>';
                                _html += ' <p>Giá: <span>'+v.ProductPrice+'</span></p>';
                                _html += ' <p class="mb-0">thuong hieu : <span>THỏ</span></p>';
                                _html += ' </div>';
                                _html += '</div>';
                            $('.search-ajax').append(_html);
                       });
                 }
             })
        }else{
            $('.search-ajax').empty();
        }
    });
</script>
</body>
</html>                     