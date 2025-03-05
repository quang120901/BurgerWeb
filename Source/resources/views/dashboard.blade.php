@extends('layouts.main')

@section('content')


<section class="cart container mt-2 my-3 py-5 text-center">

    <div class="container mt-2 text-center">
        <h4>Profile</h4>

        <p>{{Auth::user()->name}}</p>
        <p>{{Auth::user()->email}}</p>

        <form method="POST" action="{{route('logout')}}">
            @csrf
            <input type="submit" class="btn btn-danger" value="Đăng xuất">
        </form>

        @if(Auth::id() != 3)
        <div class="mt-3" style="margin-top: 20px">
                <a href="{{route('user_orders')}}" class="btn btn-warning">Đơn của bạn</a>
        </div>
        @endif
    </div>

</section>


@endsection