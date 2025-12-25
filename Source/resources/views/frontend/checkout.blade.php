@extends('layouts.main')

@section('content')


    <!-- Checkout -->
    <section class="my-2 py-3 checkout">
        <div class="container text-center mt-1 pt-5">
            <h2>Thanh toán</h2>
            <hr class="mx-auto">
        </div>

        <div class="mx-auto container">
            <form id="checkout-form" method="POST" action="{{route('place_order')}}">
            @csrf
                <div class="form-group checkout-small-element">
                    <label for="">Tên bạn</label>
                    <input type="text" class="form-control" id="checkout-name" name="name" placeholder="Hãy điền tên của bạn" required>
                </div>

                <div class="form-group checkout-small-element">
                    <label for="">Địa chỉ email</label>
                    <input type="email" class="form-control" id="checkout-email" name="email" placeholder="Hãy điền địa chỉ email của bạn" required>
                </div>

                <div class="form-group checkout-small-element">
                    <label for="">SDT</label>
                    <input type="tel" class="form-control" id="checkout-phone" name="phone" placeholder="Hãy nhập SDT của bạn" required>
                </div>

                <div class="form-group checkout-small-element">
                    <label for="">Thành phố</label>
                    <input type="text" class="form-control" id="checkout-city" name="city" placeholder="Bạn đang sống ở?" required>
                </div>

                <div class="form-group checkout-large-element">
                    <label for="">Địa chỉ</label>
                    <input type="text" class="form-control" id="checkout-address" name="address" placeholder="Hãy nhập địa chỉ của bạn" required>
                </div>


                @if(Session::has('total'))
                    @if(Session::get('total') != null)
                <div class="form-group checkout-btn-container">
                    <p>Tổng tiền: {{Session::get('total')}}.000 VND</p>
                    <input type="submit" class="btn" id="checkout-btn" name="checkout_btn" value="Thanh toán">
                </div>
                    @endif
                @endif
            </form>
        </div>
    </section>


@endsection