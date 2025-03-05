<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class AdminController extends Controller
{
    function list_products_admin() {
        $products = Product::all();
        return view('list_products_admin', compact('products'));
    }

    function add_products() { 
        return view('add_products');
    }


    function adding_product(Request $request) {
        $product = new Product;
        $product->name = request('name');
        $product->description = request('description');
        $product->price = request('price');
        $product->quantity = 0;
        $product->category = request('category');
        $product->type = 'meal';
        $product->image = request('image');


        $product->save();

        return redirect('add_products');
    }


    public function edit_product($id) {
        $product = Product::find($id);
        return view('edit_product', compact('product'));
    }
    

    public function update_product(Request $request, $id) {
        $product = Product::find($id);
        $product->name = request('name');
        $product->description = request('description');
        $product->price = request('price');
        $product->quantity = 0;
        $product->category = request('category');
        $product->type = 'meal';
        


        $product->save();
        
        return redirect()->route('edit_product', ['id' => $id]);
    }

    public function delete_product($id) {

    $product = Product::find($id);

    if ($product) {

        $product->delete();

        return redirect()->route('list_products_admin');
    }
    }
}
