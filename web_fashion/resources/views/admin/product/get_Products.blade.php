
@extends('admin.layoutsadmin')
@section('admin')
@if (Session::has('users'))   
       <div class="alert alert-primary" role="alert">
           <p>{{Session::get('success')}}</p>
      </div>
@endif
<div class="card-body" id="table_load">

<table class='table table-striped' id="table1">
<div style="margin-left: 10px;">
    <button data-url="{{ route('product.create')}}" id="btn-addproduct" class="btn btn-success btn-add" data-target="#modal-add" data-toggle="modal">+Thêm mới</button>
</div>
<thead style="text-align">
        <tr>
            <th style="text-align:center;" ></th>
            <th style="text-align:center;" >Tên sản phẩm</th>
            <th style="text-align:center;">Giá</th>
            <th style="text-align:center;">Ảnh</th>
            <th style="text-align:center;">SL</th>
            <th style="text-align:center;">Size</th>
            <th style="text-align:center;">Loại</th>
            <th style="text-align:center;">Sale</th>
            <th style="text-align:center;">Thương hiệu</th>
            <th style="text-align:center;"></th>       
        </tr>
    </thead>
    <tbody>       
    @php
        $i = 0;
    @endphp 
    @foreach($products as $product )
    @csrf     
    @php
        $i++
    @endphp                          
        <tr style="text-align">
            <td style="text-align:center;">{{$i}}</td>
            <td style="text-align:center;">{{$product->ProductName}}</td>
            <td style="text-align:center;">{{$product->ProductPrice}}</td> 
            <td style="text-align:center;"><img style="border: 1px solid #ddd; border-radius: 4px; padding: 5px; width: 60px;" src="{{asset('/uploads/'.$product->ProductImage)}}" alt="dmm"></td>            
            <td style="text-align:center;">{{$product->ProductCount}}</td>  
            <td style="text-align:center;">{{$product->product_Size->SizeName}}</td>
            <td style="text-align:center;">{{$product->product_Type->TypeName}}</td>  
            <td style="text-align:center;">{{$product->product_Sale->SaleName}}</td>  
            <td style="text-align: center;">{{$product->product_Brand->BrandName}}</td>
            <td>
                <a href="{{route('product.show',[$product->ProductID])}}" ><img style="width:23px" src="{{asset('/icon/pencil.png')}}" alt=""></a>
                <button name="delete" style="border:none; background: transparent; margin-left:10px;" data-url="{{ route('product.destroy',[$product->ProductID]) }}"​ type="button" id="btn-delete" data-target="#delete" data-toggle="modal" ><img style="width:23px" src="{{asset('/icon/cancel.png')}}" alt=""></button>
            </td>                                       
        </tr>
    @endforeach
    </tbody>
    </tbody>
</table>
</div>

@include('admin.product.add_Product')
@endsection