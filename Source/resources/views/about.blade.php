@extends('layouts.main')

@section('content')

 <!-- Block Content -->
 <section id="block">
            <div class="container">

                <!-- First section -->
                <div class="row">
                    <div class="col-sm-8">
                        <div class="feature">
                            <div class="shack_burger">
                                <div class="chicken">
                                    <img src="{{ asset('images/chicken.png') }}" alt="Chicken" />
                                </div>

                                <h2>Burger Shack </h2>
                                <p>Bánh thịt bò Black Angus phủ phô mai, cà chua, rau diếp và “Shack Sauce”</p>
                            </div>
                            <p class="caption">*Chỉ duy nhất hôm nay</p>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="signature">
                            <div class="shape">
                                <span class="flaticon flaticon-burger"></span>
                            </div>
                            <div class="signature_content">
                                <p>Wow là một chiếc bánh thịt bò Cheddar.</p>
                            </div>
                        </div>
                    </div>
                </div><!-- first section end -->

        
                <!-- Third section -->
              
        </section><!-- Block Content end-->

        <!-- Lock -->
        <section id="lock">
            <h2>Hân hạnh phục vụ quý khách</h2>
            <p>Xem thông tin liên lạc và thời gian làm của chúng tôi bên dưới</p>
        </section>



@endsection