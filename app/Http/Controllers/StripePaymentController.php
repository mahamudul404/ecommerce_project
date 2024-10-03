<?php



namespace App\Http\Controllers;



use Stripe;

use Session;

use App\Models\Cart;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;



class StripePaymentController extends Controller

{

    /**

     * success response method.

     *

     * @return \Illuminate\Http\Response

     */

    public function stripe($total)

    {

        return view('home.stripe', compact('total'));
    }



    /**

     * success response method.

     *

     * @return \Illuminate\Http\Response

     */

    public function stripePost(Request $request, $total)

    {

        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));



        Stripe\Charge::create([

            "amount" => $total * 100,

            "currency" => "usd",

            "source" => $request->stripeToken,

            "description" => "Test payment from itsolutionstuff.com."

        ]);



        $user_id = Auth::user()->id;
        $name = Auth::user()->name;
        $address = Auth::user()->address;
        $phone = Auth::user()->phone;
        $carts = Cart::where('user_id', $user_id)->get();

        foreach ($carts as $cart) {
            $order = new Order();
            $order->name = $name;
            $order->phone = $phone;
            $order->rec_address = $address;
            $order->user_id = $user_id;
            $order->product_id = $cart->product_id;
            $order->payment_status = 'paid';
            $order->save();
        }

        $remove_cart = Cart::where('user_id', $user_id)->get();
        foreach ($remove_cart as $cart) {
            $data = Cart::find($cart->id);
            $data->delete();
        }


        toastr()->closeButton()->success('Order placed successfully!');

        return redirect('my_order');
    }
}
