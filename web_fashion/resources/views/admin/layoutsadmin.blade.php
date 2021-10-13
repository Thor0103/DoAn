<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin fashion Store</title>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js" type="text/javascript" charset="utf-8" async defer></script>

    <link rel="stylesheet" href="{{asset('admin/assets/css/bootstrap.css')}}">

    <link rel="stylesheet" href="{{asset('admin/assets/vendors/simple-datatables/style.css')}}">

    <link rel="stylesheet" href="{{asset('/admin/assets/vendors/perfect-scrollbar/perfect-scrollbar.css')}}">
    <link rel="stylesheet" href="{{asset('/admin/assets/css/app.css')}}">
    <link rel="shortcut icon" href="{{asset('admin/assets/images/favicon.svg')}}" type="image/x-icon">
</head>

<body>
    <div id="app">
        <div id="sidebar" class='active'>
            <div class="sidebar-wrapper active">
                <div class="sidebar-header">
                    <img src="{{asset('admin/assets/images/logo.svg')}}" alt="" srcset="">
                </div>
                <div class="sidebar-menu">
                    <ul class="menu">

                        <li class='sidebar-title'>Main Menu</li>

                        <li class="sidebar-item  ">
                            <a href="index.html" class='sidebar-link'>
                                <i data-feather="home" width="20"></i>
                                <span>Home</span>
                            </a>

                        </li>

                        <li class="sidebar-item  has-sub">
                            <a href="#" class='sidebar-link'>
                                <i data-feather="triangle" width="20"></i>
                                <span>Khách hàng</span>
                            </a>

                            <ul class="submenu ">

                                <li>
                                    <a href="{{route('customer.index')}}">Khách hàng</a>
                                </li>

                                <li>
                                    <a href="component-badge.html">Badge</a>
                                </li>

                                <li>
                                    <a href="component-breadcrumb.html">Breadcrumb</a>
                                </li>
                            </ul>

                        </li>

                        <li class="sidebar-item ">
                            <a href="{{route('product.index')}}" class='sidebar-link'>
                                <i data-feather="briefcase" width="20"></i>
                                <span>Sản phẩm</span>
                            </a>                         
                        </li>  

                        <li class="sidebar-item  has-sub">
                            <a href="#" class='sidebar-link'>
                                <i data-feather="briefcase" width="20"></i>
                                <span> Danh mục sản phẩm</span>
                            </a>

                            <ul class="submenu ">

                                <li>
                                    <a href="{{route('product-type.index')}}">Loại sản phẩm</a>
                                </li>

                                <li>
                                    <a href="{{route('product-size.index')}}">Size sản phẩm</a>
                                </li>

                                <li>
                                    <a href="{{route('product-brand.index')}}">Thương hiệu sản phẩm</a>
                                </li>
                                <li>
                                    <a href="{{route('product-sale.index')}}">Khuyến mãi</a>
                                </li>

                            </ul>
                        </li>
                        

                        <li class="sidebar-item  has-sub">
                            <a href="#" class='sidebar-link'>
                                <i data-feather="file-text" width="20"></i>
                                <span>Form Elements</span>
                            </a>

                            <ul class="submenu ">

                                <li>
                                    <a href="form-element-input.html">Input</a>
                                </li>

                                <li>
                                    <a href="form-element-input-group.html">Input Group</a>
                                </li>

                                <li>
                                    <a href="form-element-select.html">Select</a>
                                </li>

                                <li>
                                    <a href="form-element-radio.html">Radio</a>
                                </li>

                                <li>
                                    <a href="form-element-checkbox.html">Checkbox</a>
                                </li>

                                <li>
                                    <a href="form-element-textarea.html">Textarea</a>
                                </li>

                            </ul>

                        </li>

                    </ul>
                </div>
                <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
            </div>
        </div>
        <div id="main">
            <nav class="navbar navbar-header navbar-expand navbar-light">
                <a class="sidebar-toggler" href="#"><span class="navbar-toggler-icon"></span></a>
                <button class="btn navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav d-flex align-items-center navbar-light ms-auto">
                        <li class="dropdown nav-icon">
                            <a href="#" data-bs-toggle="dropdown"
                                class="nav-link  dropdown-toggle nav-link-lg nav-link-user">
                                <div class="d-lg-inline-block">
                                    <i data-feather="bell"></i>
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end dropdown-menu-large">
                                <h6 class='py-2 px-4'>Notifications</h6>
                                <ul class="list-group rounded-none">
                                    <li class="list-group-item border-0 align-items-start">
                                        <div class="avatar bg-success me-3">
                                            <span class="avatar-content"><i data-feather="shopping-cart"></i></span>
                                        </div>
                                        <div>
                                            <h6 class='text-bold'>New Order</h6>
                                            <p class='text-xs'>
                                                Dmmm cmm
                                            </p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="dropdown nav-icon me-2">
                            <a href="#" data-bs-toggle="dropdown"
                                class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                                <div class="d-lg-inline-block">
                                    <i data-feather="mail"></i>
                                </div>
                            </a>
                            
                        </li>
                        <li class="dropdown">
                            <a href="#" data-bs-toggle="dropdown"
                                class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                                <div class="avatar me-1">
                                    <img src="{{asset('admin/assets/images/avatar/avatar-s-1.png')}}" alt="" srcset="">
                                </div>
                                <div class="d-none d-md-block d-lg-inline-block">Hi, Saugi</div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="#"><i data-feather="user"></i> Tài khoản</a>
                                <a class="dropdown-item active" href="#"><i data-feather="mail"></i> Nhắn tin</a>
                                <a class="dropdown-item" href="#"><i data-feather="settings"></i> Cài đặt</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#"><i data-feather="log-out"></i> Đăng xuất</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>

            <div class="main-content container-fluid">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-6 order-md-1 order-last">
                            <h3>Quản lý</h3>
               
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class='breadcrumb-header'>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="">Khang</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Dự</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
                <section class="section">
                    <div class="card">
                        <!-- <div class="card-header">
                            Simple Datatable
                        </div> -->
                    @if (Session::has('users'))   
                        <div class="alert alert-primary" role="alert">
                            <p>{{Session::get('success')}}</p>
                        </div>
                    @endif
                  @yield('admin')

                    </div>

                </section>
            </div>

            <footer>
                <div class="footer clearfix mb-0 text-muted">
                    <div class="float-start">
                        <p>2021 &copy; Thometal</p>
                    </div>
                    <div class="float-end">
                        <p>Created with <span class='text-danger'><i data-feather="heart"></i></span> by <a
                                href="">Thormetal</a></p>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="{{asset('admin/assets/js/feather-icons/feather.min.js')}}"></script>
    <script src="{{asset('admin/assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
    <script src="{{asset('admin/assets/js/app.js')}}"></script>

    <script src="{{asset('admin/assets/vendors/simple-datatables/simple-datatables.js')}}"></script>
    <script src="{{asset('admin/assets/js/vendors.js')}}"></script>
    <script src="{{asset('admin/assets/js/main.js')}}"></script>
    <script type="text/javascript">
    $(document).ready(function () {

        $('.btn-show').click(function(){
            var url = $(this).attr('data-url');            
            $.ajax({
                type: 'get',
                url: url,
                success: function(response) {   
                    alert('Mày xóa thành công rồi đó')      
                    $('#name').val(response.data.TypeName)
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    //xử lý lỗi tại đây
                }
            })
        })

        $('.btn-delete').click(function(){
            var url = $(this).attr('data-url');
            var _this = $(this);
            if (confirm('May co chac muon xoa khong?')) {
                $.ajax({
                    type: 'delete',
                    url: url,
                    success: function(response) {
                        alert('Mày xóa thành công rồi đó')
                        location.reload();
                    
                    },
                    error: function (jqXHR, textStatus, errorThrown) {
                        //xử lý lỗi tại đây
                    }
                })
            }
        })
        
        $('#btn-addproduct').click(function(){
            var url = $(this).attr('data-url');            
            $.ajax({
                type: 'get',
                url: url,
                success: function(response) {
                    $('#selectbrand').empty();              
                    $.each(response.data, function (k, v) {
                   
                     let opt = '<option value = "' + v.Type + '">' + v.TypeName + '</option>';
                    $('#selectbrand').append(opt);
                });
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    //xử lý lỗi tại đây
                }
            })
        })
      

//     $('#form-edit').submit(function(e){
//     e.preventDefault();
//     var url=$(this).attr('data-url');

//     $.ajax({
//         type: 'put',
//         url: url,
//         data: {
//             hoten: $('#hoten-edit').val(),
           
//         },
//         success: function(response) {
//             // console.log(response.studentid)
//             toastr.success(response.message)
//             $('#modal-edit').modal('hide');
//             $('#hoten-'+response.studentid).text(response.student.hoten)

//         },
//         error: function (jqXHR, textStatus, errorThrown) {
//             //xử lý lỗi tại đây
//         }
//     })
// })

})
    </script>
</body>
</html>