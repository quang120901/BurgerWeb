@extends('layouts.main')

@section('content')

<h1> Thêm món ăn</h1>
	<form class="form-horizontal" method="post" action="adding_product">
		@csrf
			<fieldset>

			<!-- Form Name -->
			<legend></legend>

			<!-- Text input-->
			<div class="form-group">
			  <label class="col-md-4 control-label" for="name">Tên món</label>  
			  <div class="col-md-4">
			  <input id="name" name="name" type="text" placeholder="Nhập tên món" class="form-control input-md">
			  </div>
			</div>

			<!-- Text input-->
			<div class="form-group">
			  <label class="col-md-4 control-label" for="description">Mô tả</label>  
			  <div class="col-md-4">
			  <input id="description" name="description" type="text" placeholder="Nhập mô tả" class="form-control input-md">
			    
			  </div>
			</div>

			<!-- Text input-->
			<div class="form-group">
			  <label class="col-md-4 control-label" for="price">Giá</label>  
			  <div class="col-md-4">
			  <input id="price" name="price" type="text" placeholder="Nhập giá" class="form-control input-md">
			    
			  </div>
			</div>



            <!-- Text input-->
			<div class="form-group">
			  <label class="col-md-4 control-label" for="category">Loại</label>  
			  <div class="col-md-4">
			  <input id="category" name="category" type="text" placeholder="Nhập loại" class="form-control input-md">
			    
			  </div>
			</div>


           <!-- Image input-->
            <div class="form-group">
            <label class="col-md-4 control-label" for="image">Hình ảnh</label>  
            <div class="col-md-4">
                <input id="image" name="image" type="file" class="form-control input-md">
            </div>
            </div>

			<!-- Button -->
			<div class="form-group">
			  <label class="col-md-4 control-label" for="submit"></label>
			  <div class="col-md-4">
			    <button id="submit" name="submit" class="btn btn-primary">Thêm món</button>
			  </div>
			</div>

			</fieldset>
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