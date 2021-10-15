
@extends('admin.layoutsadmin')

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
        <tr style="text-align:center;">
            <th style="text-align:center;">STT</th>
            <th style="text-align:center;">Tên loại</th>
            <th style="text-align:center;"> Quản lý</th>            
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
        <tr style="text-align:center;">
            <td>{{$i}}</td>
            <td>{{$types->TypeName}}</td>
            <td>     
                <a href="{{route('product-type.show',[$types->Type])}}" ><img style="width:23px" src="{{asset('/icon/pencil.png')}}" alt=""></a>
                <button name="delete" style="border:none; background: transparent; margin-left:10px;" data-url="{{ route('product-type.destroy',[$types->Type]) }}"​ type="button" id="btn-delete" data-target="#delete" data-toggle="modal" ><img style="width:23px" src="{{asset('/icon/cancel.png')}}" alt=""></button>
			</td>                                    
        </tr>
    @endforeach
    </tbody>
    </tbody>
</table>
</div>
	
@include('admin.productType.add_Type')

@endsection