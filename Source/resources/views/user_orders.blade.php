@extends('layouts.main')

@section('content')

<section class="cart container py-5" style="margin-bottom: 80px">
    <div class="container mt-2">
      <h4>Giỏ hàng</h4>
    </div>

    <table class="pt-5">
      <tr>
        <th>Stt</th>
        <th>Thông tin</th>
        <th>Giá - tình trạng</th>
        <th>Ngày đặt</th>
        <th>Chi tiết</th>
      </tr>

        
        @foreach($user_orders as $user_order)
          <tr>
            <td>
                <div style="padding: 10px">{{$user_order->id}}</div>
            </td>

            <td>
                <div class="product-info">
                    <div>
                        <p>{{$user_order->name}}</p>
                        <small><span></span>Địa chỉ: {{ $user_order->address}}</small>
                        <br>
                    </div>
                </div>
            </td>

            <td>
              <p>{{$user_order->cost}}
                <span> - {{$user_order->status}}</span>
                </p>
            </td>

            <td>        
                <span class="product-price">{{$user_order->date}}</span>
            </td>

            <td>        
                <a href="{{route('user_order_details',['id'=>$user_order->id])}}" class="btn btn-primary">Chi tiết</a>
            </td>

          </tr>
          @endforeach

    </table>




  </section>



@endsection