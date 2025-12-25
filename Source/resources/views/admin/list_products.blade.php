@extends('layouts.main')

@section('content')
<h1> Danh sách món ăn</h1>
<table class="table table-striped">
		<thead>
			<tr>
				<th style="text-align: left;">Tên món</th>
                <th style="text-align: left;">Mô tả</th>
                <th style="text-align: left;">Giá tiền</th>
                <th style="text-align: left;">Hình ảnh</th>
			</tr>
		</thead>
		<tbody>
		@foreach($products as $product)
		<tr>
			<td style="text-align: left;">
            <a href="{{route('edit_product', ['id' => $product->id])}}">{{$product->name}}</a> </td>

            <td style="text-align: left;">
            {{$product->description}}</td>

            <td style="text-align: left;">
            {{$product->price}} VND</td>

            <td style="text-align: left;">
            <img style="width: 100px; height: 100px" 
                  src="{{asset('images/'.$product->image)}}"> </td>
		</tr>
		@endforeach
		</tbody>
	</table>
	<hr>
	<a href="add_products">Thêm món mới</a>





@endsection