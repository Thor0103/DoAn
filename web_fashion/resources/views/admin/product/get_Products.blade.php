
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
            <th>STT</th>
            <th>Tên loại</th>
            <th> Action</th>            
        </tr>
    </thead>
    <tbody>                             
        <tr style="text-align">
            <td>Khang</td>                                    
        </tr>
    </tbody>
    </tbody>
</table>
</div>

@include('admin.product.add_Product')
@endsection