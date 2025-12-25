@extends('layouts.main')

@section('content')
<h2>Cập nhập/Xóa món</h2>
	<form class="form-horizontal" method="post" action="{{ route('update_product', ['id' => $product->id]) }}" enctype="multipart/form-data">
		@csrf
		@method('put')
			<fieldset>

			<!-- Form Name -->
			<legend></legend>
           
			<!-- Text input-->
			<div class="form-group">
			  <label class="col-md-4 control-label" for="name">Tên món</label>  
			  <div class="col-md-4">
			  <input id="name" name="name" type="text" placeholder="Nhập tên món" class="form-control input-md" value="{{$product->name}}" required="required">
			  </div>
			</div>

			<!-- Text input-->
			<div class="form-group">
			  <label class="col-md-4 control-label" for="name">Mô tả</label>  
			  <div class="col-md-4">
			  <input id="description" name="description" type="text" placeholder="Nhập mô tả" class="form-control input-md" value="{{$product->description}}" required="required">
			  </div>
			</div>

			<!-- Text input-->
			<div class="form-group">
			  <label class="col-md-4 control-label" for="name">Giá</label>  
			  <div class="col-md-4">
			  <input id="price" name="price" type="text" placeholder="Nhập Giá" class="form-control input-md" value="{{$product->price}}" required="required">
			  </div>
			</div>

            <!-- Text input-->
			<div class="form-group">
			  <label class="col-md-4 control-label" for="name">Loại</label>  
			  <div class="col-md-4">
			  <input id="category" name="category" type="text" placeholder="Nhập Loại" class="form-control input-md" value="{{$product->category}}" required="required">
			  </div>
			</div>

            <!-- Image input-->
            <div class="form-group">
            <label class="col-md-4 control-label" for="image">Hình ảnh</label>  
            <div class="col-md-4">
            <div>
                <input id="image" name="image" type="file" class="form-control input-md">
                <img id="image" src="{{asset('images/'.$product->image)}}" style="max-width: 100%; height: auto;">
            </div>
            

                
            </div>
            </div>

			<!-- Button -->
			<div class="form-group">
			  <label class="col-md-4 control-label" for="submit"></label>
			  <div class="col-md-4">
			    <button id="submit" name="submit" class="btn btn-primary">Cập nhập</button>
			  </div>
			</div>

			</fieldset>
		</form>

		<form class="form-horizontal" method="post" action="{{ route('delete_product', ['id' => $product->id]) }}" enctype="multipart/form-data">
			@csrf
			@method('delete')
			<!-- Button -->
			<div class="form-group">
			  <label class="col-md-4 control-label" for="submit"></label>
			  <div class="col-md-4">
			    <button id="submit" name="submit" class="btn btn-primary">Xóa</button>
			  </div>
			</div>
		</form>

		@if ($errors->any())
		    <div class="alert alert-danger">
		        <ul>
		            @foreach ($errors->all() as $error)
		                <li>{{ $error }}</li>
		            @endforeach
		        </ul>
		    </div>
		@endif

		<div>
			<a href="{{route('list_products_admin')}}">Danh sách món ăn</a>
		</div>




@endsection