<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\User;

class AdminController extends Controller
{
    function list_products_admin() {
        $products = Product::all();
        return view('admin.list_products', compact('products'));
    }

    function add_products() { 
        return view('admin.add_product');
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
        return view('admin.edit_product', compact('product'));
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

    // User Management
    public function manage_users() {
        $users = User::all();
        return view('admin.manage_users', compact('users'));
    }

    public function update_user_role(Request $request, $id) {
        $user = User::find($id);
        
        if ($user) {
            $user->role = $request->input('role');
            $user->save();
            
            return redirect()->route('manage_users')->with('success', 'Cập nhật quyền thành công!');
        }
        
        return redirect()->route('manage_users')->with('error', 'Không tìm thấy user!');
    }

    public function delete_user($id) {
        $user = User::find($id);
        
        if ($user && $user->id != auth()->id()) {
            $user->delete();
            return redirect()->route('manage_users')->with('success', 'Xóa user thành công!');
        }
        
        return redirect()->route('manage_users')->with('error', 'Không thể xóa user này!');
    }
}
