
@extends('admin.layoutsadmin')
@section('admin')

<div class="card-body" id="table_load">

<table class='table table-striped' id="table1">
<div style="margin-left: 10px;">
    <a href="" class="btn btn-success btn-add" data-target="#modal-add" data-toggle="modal">Thêm mới</a>
</div>
<thead style="text-align">
        <tr>
            <th style="text-align:center;">STT</th>
            <th style="text-align:center;">Phần trăm khuyến mãi</th>
            <th style="text-align:center;"> Quản lý</th>            
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
        <tr style="text-align:center;">
            <td>{{$i}}</td>
            <td>{{$sales->SaleName}} %</td>
            <td>     
                <a href="{{route('product-sale.show',[$sales->Sale])}}" ><img style="width:23px" src="{{asset('/icon/pencil.png')}}" alt=""></a>
                <button name="delete" style="border:none; background: transparent; margin-left:10px;" data-url="{{ route('product-sale.destroy',[$sales->Sale]) }}"​ type="button" id="btn-delete" data-target="#delete" data-toggle="modal" ><img style="width:23px" src="{{asset('/icon/cancel.png')}}" alt=""></button>
			</td>                                    
        </tr>
    @endforeach
    </tbody>
    </tbody>
</table>
</div>
@include('admin.productSale.add_Sale')


@endsection