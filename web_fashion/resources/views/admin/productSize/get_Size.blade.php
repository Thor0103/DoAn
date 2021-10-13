
@extends('admin.layoutsadmin')
@section('admin')

<div class="card-body" id="table_load">

<table class='table table-striped' id="table1">
<div style="margin-left: 10px;">
    <a href="" class="btn btn-success btn-add" data-target="#modal-add" data-toggle="modal">Thêm mới</a>
</div>
<thead style="text-align">
        <tr>
            <th>STT</th>
            <th>Tên kích cỡ</th>
            <th> Action</th>            
        </tr>
    </thead>
    <tbody>
    @php
        $i = 0;
    @endphp 
    @foreach($size as $sizes )
    @csrf     
    @php
        $i++
    @endphp                                   
        <tr style="text-align">
            <td>{{$i}}</td>
            <td>{{$sizes->SizeName}}</td>
            <td>     
                <a href="{{route('product-size.show',[$sizes->Size])}}" class="btn btn-primary">Sửa</a>
                <button data-url="{{ route('product-size.destroy',[$sizes->Size]) }}"​ type="button" id="btn-delete" data-target="#delete" data-toggle="modal" class="btn btn-danger btn-delete">Delete</button>
			</td>                                    
        </tr>
    @endforeach
    </tbody>
    </tbody>
</table>
</div>
@include('admin.productSize.add_Size')


@endsection