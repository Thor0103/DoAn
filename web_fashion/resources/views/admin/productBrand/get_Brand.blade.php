
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
            <th>Tên thương hiệu</th>
            <th> Action</th>            
        </tr>
    </thead>
    <tbody>
    @php
        $i = 0;
    @endphp 
    @foreach($brand as $brands )
    @csrf     
    @php
        $i++
    @endphp                                   
        <tr style="text-align">
            <td>{{$i}}</td>
            <td>{{$brands->BrandName}}</td>
            <td>     
                <a href="{{route('product-brand.show',[$brands->Brand])}}" class="btn btn-primary">Sửa</a>
                <button data-url="{{ route('product-brand.destroy',[$brands->Brand]) }}"​ type="button" id="btn-delete" data-target="#delete" data-toggle="modal" class="btn btn-danger btn-delete">Delete</button>
			</td>                                    
        </tr>
    @endforeach
    </tbody>
    </tbody>
</table>
</div>
@include('admin.productBrand.add_Brand')


@endsection