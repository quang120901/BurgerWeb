@extends('layouts.main')

@section('content')

<section class="cart container py-5" style="margin-bottom: 80px">



    <div class="container mt-2">
      <h4>Giỏ hàng # {{$order_id}}</h4>
    </div>

    <table class="pt-5">
      <tr>
        <th>Hình ảnh</th>
        <th>Tên món</th>
        <th>Giá</th>
        <th>Số lượng</th>
        <th>Ngày đặt</th>
      </tr>

        
        @foreach($details_array as $detail)
          <tr>
            <td>
                <div>
                  <img style="width: 100px; height: 100px" 
                  src="{{asset('images/'.$detail->product_image)}}">
              </div>
            </td>

            <td>
                <div class="product-info">
                    <div>
                        <p>{{$detail->product_name}}</p>
                        <small><span></span></small>
                        <br>
                    </div>
                </div>
            </td>

            <td>
              <p>{{$detail->product_price}}
                </p>
            </td>

            <td>        
            <p>{{$detail->product_quantity}}
                </p>
            </td>

            <td>        
            <p>{{$detail->order_date}}
                </p>
            </td>

          </tr>
          @endforeach

    </table>




  </section>



@endsection