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

                                <h2>Burger Shack</h2>
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
                <!-- Carousel -->
                <div id="carousel" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#carousel" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel" data-slide-to="1"></li>
                        <li data-target="#carousel" data-slide-to="2"></li>
                    </ol>

               
                <!-- Forth section -->
                <div class="row forth_sec">
                    <div class="col-sm-4">
                        <div class="menu">
                            <div class="inner_content">
                                <span class="flaticon flaticon-burger"></span>
                                <h3><a style="color:#fff" href="{{route('products')}}">Thực đơn</a></h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="drinks">
                            <div class="inner_content">
                                <span class="flaticon flaticon-drink"></span>
                                <h3><a style="color:#fff" href="{{route('category', ['category'=>'beverages'])}}">Đồ uống</a></h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="sides">
                            <div class="inner_content">
                                <span class="flaticon flaticon-food"></span>
                                <h3><a style="color:#fff" href="{{route('category', ['category'=>'breakfast'])}}">Bữa ăn nhẹ</a></h3>
                            </div>
                        </div>
                    </div>
                </div><!-- forth section end -->
            </div>
        </section><!-- Block Content end-->

        <!-- Lock -->
        <section id="lock">
            <h2>Hân hạnh phục vụ quý khách</h2>
            <p>Xem thông tin liên lạc và thời gian làm của chúng tôi bên dưới</p>
        </section>

@endsection