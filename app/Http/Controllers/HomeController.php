<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
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

    public function remove_cart($id)
    {
        $cart = Cart::find($id);
        $cart->delete();

        toastr()->closeButton()->success('Product removed from cart successfully!');

        return redirect()->back();
    }

    public function confirm_order(Request $request)
    {

        $user_id = Auth::user()->id;
        $name = $request->name;
        $phone = $request->phone;
        $address = $request->address;
        $carts = Cart::where('user_id', $user_id)->get();

        foreach ($carts as $cart) {
            $order = new Order();
            $order->name = $name;
            $order->phone = $phone;
            $order->rec_address = $address;
            $order->user_id = $user_id;
            $order->product_id = $cart->product_id;
            $order->save();
        }

        $remove_cart = Cart::where('user_id', $user_id)->get();
        foreach ($remove_cart as $cart) {
            $data = Cart::find($cart->id);
            $data->delete();
        }


        toastr()->closeButton()->success('Order placed successfully!');

        return redirect()->back();
    }

    public function my_order(){

        if(Auth::check()){

            $count = Order::where('user_id', Auth::user()->id)->count();
        }else{
            $count = '';
        }

        return view('home.my_order', compact('count'));
    }
}
