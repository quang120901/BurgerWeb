<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <title>Burger Website</title>
        <!-- Mobile Specific Meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <!-- Stylesheets -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" />
        <link rel="stylesheet" href="{{ asset('css/flaticon.css') }}" />

        <!-- Animate -->
        <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
        <!-- Bootsnav -->
        <link rel="stylesheet" href="{{ asset('css/bootsnav.css') }}">
        <!-- Color style -->
        <link rel="stylesheet" href="{{ asset('css/color.css') }}">

        <!-- Custom stylesheet -->
        <link rel="stylesheet" href="{{ asset('css/custom.css') }}" />

        <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
        <!--[if lt IE 9]>
                <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
    </head>
    <body data-spy="scroll" data-target="#navbar-menu" data-offset="100">

        <!-- Preloader --> 
        <div id="loading">
            <div id="loading-center">
                <div id="loading-center-absolute">
                    <div class="object" id="object_one"></div>
                    <div class="object" id="object_two"></div>
                    <div class="object" id="object_three"></div>
                    <div class="object" id="object_four"></div>
                    <div class="object" id="object_five"></div>
                    <div class="object" id="object_six"></div>
                    <div class="object" id="object_seven"></div>
                    <div class="object" id="object_eight"></div>
                    <div class="object" id="object_big"></div>
                </div>
            </div>
        </div>
        <!--End Preloader -->
        <!-- Navbar -->
        <nav class="navbar navbar-default bootsnav no-background navbar-fixed black">
            <div class="container">  

                <!-- Start Atribute Navigation -->
                <div class="attr-nav">
                    <ul>
                        <li class="side-menu"><a href="#"><i class="fa fa-bars"></i></a></li>
                    </ul>
                </div>        
                <!-- End Atribute Navigation -->

                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <a class="navbar-brand" href="{{route('Home')}}"><img src="images/logo.png" class="logo" alt=""></a>
                </div>
                <!-- End Header Navigation -->
            </div>   

            <!-- Start Side Menu -->
            <div class="side">
                <a href="#" class="close-side"><i class="fa fa-times"></i></a>
                <div class="widget">
                    <h6 class="title">Menu</h6>
                    <ul class="link">
                        @if(Auth::check() && Auth::user()->isAdmin())
                        <li><a href="{{route('list_products_admin')}}">Danh sách món</a></li>
                        <li><a href="{{route('add_products')}}">Thêm món</a></li>
                        <li><a href="{{route('manage_users')}}">Quản lý Users</a></li>

                        <li><a href="{{route('login')}}">Profile</a></li>
                        @elseif(Auth::check())
                        <li><a href="{{route('products')}}">Thực đơn</a></li>
                        <li><a href="{{route('category', ['category'=>'burgers'])}}">Burgers</a></li>
                        <li><a href="{{route('category', ['category'=>'chicken'])}}">Sandwich gà</a></li>
                        <li><a href="{{route('category', ['category'=>'breakfast'])}}">Bữa ăn nhẹ</a></li>
                        <li><a href="{{route('category', ['category'=>'beverages'])}}">Đồ uống</a></li>
                        <li><a href="{{route('cart')}}">Giỏ hàng</a></li>
                        <li><a href="{{route('login')}}">Profile</a></li>
                        <li><a href="{{route('user_orders')}}">Đơn của bạn</a></li>
                        @else
                        <li><a href="{{route('products')}}">Thực đơn</a></li>
                        <li><a href="{{route('category', ['category'=>'burgers'])}}">Burgers</a></li>
                        <li><a href="{{route('category', ['category'=>'chicken'])}}">Sandwich gà</a></li>
                        <li><a href="{{route('category', ['category'=>'breakfast'])}}">Bữa ăn nhẹ</a></li>
                        <li><a href="{{route('category', ['category'=>'beverages'])}}">Đồ uống</a></li>
                        <li><a href="{{route('cart')}}">Giỏ hàng</a></li>
                        <li><a href="{{route('login')}}">Đăng nhập</a></li>
                        @endif

                    </ul>
                </div>
            </div>
            <!-- End Side Menu -->
        </nav>

        <!-- Header -->
        <header id="hello">
            <!-- Container -->
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="banner">
                            <h3>-xin trân trọng giới thiệu-</h3>
                            <h1>Website Burger</h1>

                            <div class="inner_banner">
                                <div class="banner_content">
                                    <h5>Cửa hàng chúng tôi rất hoan nghênh chào đón quý vị và các bạn.</h5><br>
                                    <p>Khuyến mãi đặc biệt.</p>								
                                </div>
                                <div class="stamp">
                                    <img src="images/stamp.png" alt="" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- Container end -->
            <p class="caption">*Chỉ duy nhất hôm nay</p>
        </header><!-- Header end -->