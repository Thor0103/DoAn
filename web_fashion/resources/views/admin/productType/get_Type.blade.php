
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
    <a href="" class="btn btn-success btn-add" data-target="#modal-add" data-toggle="modal">Thêm mới</a>
</div>
<thead style="text-align">
        <tr>
            <th>STT</th>
            <th>Tên loại</th>
            <th> Action</th>            
        </tr>
    </thead>
    <tbody>
    @php
        $i = 0;
    @endphp 
    @foreach($type as $types )
    @csrf     
    @php
        $i++
    @endphp                                   
        <tr style="text-align">
            <td>{{$i}}</td>
            <td>{{$types->TypeName}}</td>
            <td>     
                <a href="{{route('product-type.show',[$types->Type])}}" class="btn btn-primary">Sửa</a>
                <button data-url="{{ route('product-type.destroy',[$types->Type]) }}"​ type="button" id="btn-delete" data-target="#delete" data-toggle="modal" class="btn btn-danger btn-delete">Delete</button>
			</td>                                    
        </tr>
    @endforeach
    </tbody>
    </tbody>
</table>
</div>
	
@include('admin.productType.add_Type')

@endsection