<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
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


        if (Auth::check()) {
            $count = Cart::where('user_id', Auth::user()->id)->count();
        } else {
            $count = 0;
        }

        return view('home.index', compact('products', 'count'));
    }

    public function login_home()
    {


        $products = Product::all();

        if (Auth::check()) {
            $count = Cart::where('user_id', Auth::user()->id)->count();
        } else {
            $count = '';
        }


        return view('home.index', compact('products', 'count'));
    }

    public function product_details($id)
    {

        $product = Product::find($id);

        if (Auth::check()) {
            $count = Cart::where('user_id', Auth::user()->id)->count();
        } else {
            $count = '';
        }




        return view('home.product_details', compact('product', 'count'));
    }

    public function add_to_cart($id)
    {
        $product_id = $id;
        $user_id = Auth::user()->id;

        $carts = new Cart();
        $carts->product_id = $product_id;
        $carts->user_id = $user_id;

        $carts->save();


        toastr()->closeButton()->success('Product added to cart successfully!');




        return redirect()->back();
    }

    public function my_cart()
    {

        if (Auth::check()) {
            $count = Cart::where('user_id', Auth::user()->id)->count();
        } else {
            $count = '';
        }

        $carts = Cart::where('user_id', Auth::user()->id)->get();


        return view('home.my_cart', compact('count', 'carts'));
    }

    public function remove_cart($id){
        $cart = Cart::find($id);
        $cart->delete();

        toastr()->closeButton()->success('Product removed from cart successfully!');

        return redirect()->back();
    }
}







































                