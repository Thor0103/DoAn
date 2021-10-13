
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
            <th>Phần trăm khuyến mãi</th>
            <th> Action</th>            
        </tr>
    </thead>
    <tbody>
    @php
        $i = 0;
    @endphp 
    @foreach($sale as $sales )
    @csrf     
    @php
        $i++
    @endphp                                   
        <tr style="text-align">
            <td>{{$i}}</td>
            <td>{{$sales->SaleName}}</td>
            <td>     
                <a href="{{route('product-sale.show',[$sales->Sale])}}" class="btn btn-primary">Sửa</a>
                <button data-url="{{ route('product-sale.destroy',[$sales->Sale]) }}"​ type="button" id="btn-delete" data-target="#delete" data-toggle="modal" class="btn btn-danger btn-delete">Delete</button>
			</td>                                    
        </tr>
    @endforeach
    </tbody>
    </tbody>
</table>
</div>
@include('admin.productSale.add_Sale')


@endsection