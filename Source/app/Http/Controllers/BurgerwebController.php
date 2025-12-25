<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class BurgerwebController extends Controller
{
    public function index() {
        return view('frontend.index');
    }

    public function single_product(Request $request, $id) {

        $product_array = DB::table('products')->where('id', $id)->get();
        return view('frontend.single_product', ['product_array'=>$product_array]);
        
    }


    public function products() {
        $products = DB::table('products')->get();
        return view('frontend.products', ['products'=>$products]);
    }


    function category(Request $request, $category) {
        $products = DB::table('products')->where('category', $category)->get();
        return view('frontend.products', ['products'=>$products]);
    }


    function user_orders() {
        if(Auth::check()) {
            $user_orders = DB::table('users')
                        ->rightJoin('orders', 'users.id', '=', 'orders.user_id')
                        ->where('users.id',Auth::id())
                        ->get();

                        return view('user.orders', ['user_orders'=>$user_orders]);

        } else {
            return redirect('/');
        }
    }


    function user_order_details(Request $request, $id) {
        if((Auth::check()) && $id != null) {
            $detail_array = DB::table('order_items')->where('order_id', $id)->get();
            return view('user.order_details', ['details_array'=>$detail_array, 'order_id'=>$id]);
        }

        return redirect('/');
    }

}
