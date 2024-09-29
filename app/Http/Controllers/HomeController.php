<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {

        return view('admin.index');
    }

    public function home()
    {

        $products = Product::all();
        return view('home.index', compact('products'));
    }

    public function login_home()
    {

        $products = Product::all();
        return view('home.index', compact('products'));
    }

    public function product_details($id)
    {

        $product = Product::find($id);

        return view('home.product_details', compact('product'));
    }

    public function add_to_cart($id)
    {
        $product_id = $id;
        $user_id = Auth::user()->id;

        $carts = new Cart();
        $carts->product_id = $product_id;
        $carts->user_id = $user_id;

        $carts->save();




        return redirect()->back();
    }
}
